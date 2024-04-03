<?php

namespace App\Traits;

use stdClass;
use Exception;
use App\Models\Plan;
use App\Models\User;
use App\Models\Account;
use App\Models\Investment;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

trait TransactionTraits {

    public static function currentTimeHelper($time, $timeEnd): stdClass{
        $start = Carbon::parse($time);
        $end = Carbon::parse(now());

        $time_end = Carbon::parse($timeEnd);
        if($time_end->lessThan($end)){
            $end = $time_end;
        }
        $result = new stdClass;
        $result->start = $start;
        $result->end = $end;

        return $result;
    }
    public static function coinPrice($symbol){ 
        // return [1, 1, 1, 1];
        try {
            $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest';
            $parameters = [
                "symbol" => $symbol
            ];

            $headers = [
                'Accepts: application/json',
                'X-CMC_PRO_API_KEY: ' . config('app.coin_api_key')
            ];
            $qs = http_build_query($parameters); // query string encode the parameters
            $request = "{$url}?{$qs}"; // create the request URL

            $curl = curl_init(); // Get cURL resource
            // Set cURL options
            curl_setopt_array($curl, array(
                CURLOPT_URL => $request,            // set the request URL
                CURLOPT_HTTPHEADER => $headers,     // set the headers
                CURLOPT_RETURNTRANSFER => 1,        // ask for raw response instead of bool
                CURLOPT_TIMEOUT => 10,              // set maximum execution time
            ));

            $response = curl_exec($curl); // Send the request, save the response

            if (curl_errno($curl)) {
                throw new Exception("CURL Error: " . curl_error($curl));
            }

            $json = json_decode($response); // decode JSON response

            curl_close($curl); // Close request

            if ($json === null || !property_exists($json, "data")) {
                toastr()->info('Contact Our Support');
                return [1, 1, 1, 1];
            } else {
                $price = $percent = $volume = $market = 0;
                foreach ($json->data as $data) {
                    $quote = $data->quote->USD;
                    $price = $quote->price;
                    $percent = $quote->percent_change_24h;
                    $volume = $quote->volume_24h;
                    $market = $quote->market_cap;
                }
                return [$price, $percent, $volume, $market];
            }
        } catch (Exception $e) {
            // Handle exception (e.g., log error, show error message)
            toastr()->error('An error occurred: ' . $e->getMessage());
            return [1, 1, 1, 1];
        }
    }

    public static function assignTransactionId()
    {
        $TransactionId = rand(100000, 999999);
        if(Transaction::select()->where('transaction_id' , '=', $TransactionId)->first()){
            $TransactionId = TransactionTraits::assignTransactionId();
        }
        return $TransactionId; 
    }

    public static function currentTime($time, $timeEnd){
        $result = self::currentTimeHelper($time, $timeEnd);

        // Calculate the difference in minutes
        $minutesDiff = $result->end->diffInMinutes($result->start);
        
        // Calculate the current time in hours, rounding up if necessary
        $current_time = (int) ceil($minutesDiff / 60);
        
        return $current_time;
        
    }

    public static function earnings($amount, $percentage, $time, $timeEnd){
        //get Total Time 
        $start = Carbon::parse($time);
        $end = Carbon::parse($timeEnd);
        $total_time = $end->diffInHours($start);
        
        $current_time = TransactionTraits::currentTime($time, $timeEnd);

        $earing = ($percentage * $amount * $current_time) / (100 * $total_time);

        return TransactionTraits::sigFig($earing, 4);
    }

    public static function payUser($transaction_id, $earnings){
        $transaction = Transaction::where('transaction_id', $transaction_id)->first();
        if(!$transaction->investment->status){
            User::where('id', $transaction->users_id)->update([
                'balance' => $transaction->user->balance + $transaction->amount + $earnings
            ]);
            Investment::where('transactions_id', $transaction_id)->update([
                'status' => 1
            ]);
        }
    }

    public static function sigFig($value, $digits){
        if ($value == 0) {
            $decimalPlaces = $digits - 1;
        } elseif ($value < 0) {
            $decimalPlaces = $digits - floor(log10($value * -1)) - 1;
        } else {
            $decimalPlaces = $digits - floor(log10($value)) - 1;
        }
    
        $answer = round($value, $decimalPlaces);
        return $answer;
    }

    public static function depositAmount($symbol, $amount){
        $coinPrice = self::coinPrice($symbol);
        $total = $amount * 1;
        $total = $total / $coinPrice[0];
        $total = round($total, 6);
        return $total;
    }

    public static function getCurrency($currency_id){
        return Account::where('id', $currency_id)->first();
    }

    public static function getAmount(Request $request){
        if(isset($request->bonus)){
            $amount = auth()->user()->bonus;
        }elseif(isset($request->balance)){
            $amount = auth()->user()->balance;
        }else{
            $amount = $request->amount;
        }

        return abs($amount);
    }

    // public static function duration($start, $end){
    //     $start = Carbon::parse($start);
    //     $end = Carbon::parse($end);

    //     $results = '';
    //     if($end->diffInDays($start) > 0){
    //         $results .= $end->diffInDays($start) . ' Day(s) ';
    //     return  $results;
    //     }
    //     if($end->diffInHours($start) > 0){
    //         $results .= fmod($end->diffInHours($start), (60)) . ' Hour(s) ';
    //     return  $results;
    //     }
    //     if($end->diffInMinutes($start) > 0){
    //         $tile = $end->diffInMinutes($start);
    //         $results .= fmod($tile, (60)) . ' Min(s) ';
    //     return  $results;
    //     }
    //     if($end->diffInSeconds($start) > 0){
    //         $results .= ($end->diffInSeconds($start) % (60)) . ' Sec ';
    //     return  $results;
    //     }

    //     return  'Completed';
    // }

    public static function getRemainingTimeForHumans(int $investment_id): string{
        $investment = Investment::find($investment_id);
        $result = self::currentTimeHelper($investment->start, $investment->end);
        return self::duration($result->start,  $result->end);
    }

    public static function notifyAdmins($mail):bool{
        $admins = User::where('admin', 1)->get();
        foreach($admins as $admin){
            $admin->notify($mail);
        }
        return true;
    }

    public function bd_nice_number($n) {
        // first strip any formatting;
        // $n = (0+str_replace(",","",$n));
       
        // is this a number?
        if(!is_numeric($n)) return false;
       
        // now filter it;
        if($n>1000000000000) return round(($n/1000000000000),3).' T';
        else if($n>1000000000) return round(($n/1000000000),3).' B';
        else if($n>1000000) return round(($n/1000000),3).' M';
        else if($n>1000) return round(($n/1000),3).' K';
       
        return number_format($n);
    }

}
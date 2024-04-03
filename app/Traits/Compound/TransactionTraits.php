<?php

namespace App\Traits\Compound;

use stdClass;
use App\Models\User;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Models\Compound\Plan;
use Illuminate\Support\Carbon;
use App\Models\Compound\Investment;
use App\Models\Compound\Transaction;

trait TransactionTraits {

    public static function currentTimeHelper($time, $timeEnd): stdClass{
        $start = Carbon::parse($time);
        $end = Carbon::now();

        $time_end = Carbon::parse($timeEnd);
        if($time_end->lessThan($end)){
            $end = $time_end;
        }
        $result = new stdClass;
        $result->start = $start;
        $result->end = $end;

        return $result;
    }

    public static function coinPrice($symbol){ //return [0];
        $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest';
        $parameters = [
        "symbol" => $symbol
        ];
    
        $headers = [
        'Accepts: application/json',
        'X-CMC_PRO_API_KEY: ' . config('main.config.coin_api_key')
        ];
        $qs = http_build_query($parameters); // query string encode the parameters
        $request = "{$url}?{$qs}"; // create the request URL
    
    
        $curl = curl_init(); // Get cURL resource
          // Set cURL options
          curl_setopt_array($curl, array(
          CURLOPT_URL => $request,            // set the request URL
          CURLOPT_HTTPHEADER => $headers,     // set the headers
          CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
        ));
    
        $response = curl_exec($curl); // Send the request, save the response
        $json = (json_decode($response)); // print json decoded response
          curl_close($curl); // Close request

        //   dd($json);
        if($json != null){
          foreach ($json->data as $data) {
              $price = $data->quote->USD->price;
              $percent_2 = $data->quote->USD->percent_change_90d;
              $percent = $data->quote->USD->percent_change_24h;
              $volume = $data->quote->USD->volume_24h;
              $market = $data->quote->USD->market_cap;
           }
        }else{
            $price=$percent=$volume=$market=$percent_2 = 000001;
        }
        $all = array($price, $percent, $volume, $market, $percent_2);
        return $all;
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

        $current_time = $result->end->diffInHours($result->start);
        
        return $current_time;
    }

    public function getNumberOfDeposits($interval, $plan_time)
    {
        $plan_time = Carbon::parse($plan_time);
    }

    public static function earnings($transaction_id): int{
        $transaction = Transaction::where('transaction_id', $transaction_id)->first();
        $plan = Plan::find($transaction->compound_plans_id);
        $investment = Investment::where('transactions_id', $transaction_id)->first();

        //earings
        //divide the total time by interval to get how many times to deposit
        $number_of_intervals = (int) ($plan->time * $plan->planTime->hours) / ($plan->intervals->hours);

        //find how many intervals has passed between now and time of first deposit
        $start = Carbon::parse($investment->start);
        if(!$investment->continue){
            $from = Carbon::parse($investment->next_interval);
        }else{
            $from = Carbon::now();
        }
        $diff_in_hours = $from->diffInHours($start);
        $intervals_passed = intdiv($diff_in_hours, $plan->intervals->hours);
        // dd($intervals_passed);

        //match number of intervals
        $intervals_passed = $intervals_passed > $number_of_intervals ? $number_of_intervals : $intervals_passed;

        //calculate the profit based on the number of intervals passed
        $day = 0; $balance = 0;
        $profit = $transaction->amount;
        while ($day < ($intervals_passed)) {
            if($day == 0){
                $profit = ($transaction->amount * ($plan->rate/100)) + $transaction->amount;
            }else{
                $balance += $profit;
                $unit_profit = $balance * ($plan->rate/100);
                $profit = $balance + $unit_profit;
            }
            $day++;
        }

        //get profit for today
        if(($intervals_passed < $number_of_intervals) && $investment->continue){
            $next_interval = Carbon::parse($investment->next_interval);
            $last_interval = $next_interval->subHours($plan->intervals->hours);
            // $diff_in_interval_hours = $now->diffInHours($next_interval);
            $hours_passed = $last_interval->diffInHours(Carbon::now());
            $current_profit = (($plan->rate/100) * $profit * $hours_passed) / $plan->intervals->hours;
        }else{
            $current_profit = 0;
        }

        $total_profit = $current_profit + $profit;

        return TransactionTraits::sigFig($total_profit, 4);
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
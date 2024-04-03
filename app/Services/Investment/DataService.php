<?php
namespace App\Services\Investment;

use stdClass;
use App\Models\Plan;
use App\Models\User;
use App\Models\Account;
use App\Models\Investment;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Traits\GeneralTraits;
use App\Traits\TransactionTraits;
use App\Traits\Investment\FanTraits;

class DataService {
    use TransactionTraits, FanTraits, GeneralTraits;
    public $id;

    public  $numAmount, $date, $transaction_id, $plan, $reinvest, $status, $currency, $amount;
    private $investmentData;

    /* date, transaction id, plan name, plan %,  */

    public function __construct(int $id)
    {
        $this->id = $id;
        $this->investmentData = self::getInvestmentData($this->id);
        self::setData($this->investmentData);
    }

    private function getInvestmentData(int $id){
        return Investment::find($id);
    }

    private function getTransaction($transaction_id){
        return Transaction::where('transaction_id', $transaction_id)->first();
    }

    private function setTransaction(int $transaction_id){
        $transaction = self::getTransaction($transaction_id);

        $this->amount = $transaction->amount . ' ' . $transaction->plan->hash_rate;
        $this->numAmount = $transaction->amount;
        //set new transaction clas
    }

    private function getPlan(int $transaction_id){
        $transaction = self::getTransaction($transaction_id);
        return Plan::find($transaction->plan_id);
    }

    private function setCurrency($currencyData): stdClass{
        $currency = new stdClass;
        $currency->symbol = $currencyData->symbol;
        $currency->name = $currencyData->name;

        return $currency;
    }

    private function setPlan($plan_id): void{
        $getPlan = self::getPlan($plan_id);

        //set new plan class
        $this->plan = new stdClass;
        $this->plan->id = $getPlan->id;
        $this->plan->name = $getPlan->name;
        $this->plan->rate = $getPlan->rate;
        // $this->plan->type = $getPlan->planCategory->type;
        $this->plan->title = $getPlan->title;
    }

    private function getEaring(): int{
        return self::earnings($this->numAmount, $this->plan->rate, $this->investmentData->start, $this->investmentData->end);
    }

    private function getStatus(): bool{
        return $this->investmentData->status ? true : false;
    }

    private function getTimeRemaining(): string{
        $plan = self::getPlan(($this->transaction_id));
        $total_time = $plan->time * $plan->planTime->hours;

        $current_time = self::currentTime($this->investmentData->start, $this->investmentData->end);
        $this->numTimeRemaining = self::sigFig(($total_time - $current_time), 2);
        $time_remaining =  self::sigFig($this->numTimeRemaining/$plan->planTime->hours, 2) . ' ' . $plan->planTime->suffix;


        return $time_remaining;
    }

    //custom data

    private function getSerials(): string{
        // 0.6 . 203 @ 210403

        $first = rand(0, 9);
        
        $sec = rand(100,999);
        $third = rand(100000,999999);

        return '0.' . $first . '.' . $sec . '@' . $third;
    }

    private function setCustomData(){
        $this->ip = request()->ip();
        $this->fans = self::getFan();
        $this->core = rand(180,300);
        $this->mem = rand(96, 150);
        $this->pl = rand(7, 15);

        $this->time_passed = self::duration($this->investmentData->start, now());

        $this->firstSerial = self::getSerials();
        $this->secoundSerial = self::getSerials();
    }

    private function setData($investment){
        $this->date = $investment->created_at;
        $this->transaction_id = $investment->transactions_id;
        self::setPlan($investment->transactions_id);
        $this->currency = self::setCurrency(Account::find($this->investmentData->deposit->account_id));
        self::setTransaction($this->transaction_id);
        // dd($this->investmentData);
        $this->user = User::find($this->investmentData->main_user);

        $this->earning = self::getEaring();
        $this->status = self::getStatus();
        $this->reinvest = self::getTransaction($investment->transactions_id)->reinvest;

        $this->time_remaining = self::getTimeRemaining();
        $this->paused = $investment->paused;

        //cutomized data
        self::setCustomData();
    }

    public function __destruct()
    {
        if($this->numTimeRemaining <= 0 && !$this->investmentData->status){
            self::payUser($this->transaction_id, self::getEaring());
        }
    }

}
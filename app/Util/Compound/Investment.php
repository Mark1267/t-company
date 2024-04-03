<?php
namespace App\Util\Compound;

class Investment {
    
    public function profit($carry, $principal, $rate)
    {
        $amount = $carry + $principal;
        $rate_amount = ($rate/100)*$amount;

        return $amount+$rate_amount;
    }

    public function totalEaring()
    {
        
    }

}
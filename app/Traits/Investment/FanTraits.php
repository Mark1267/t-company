<?php
namespace App\Traits\Investment;

use stdClass;

trait FanTraits{
    public function pickStart(){
        return rand(57, 99);
    }

    public function selectRange(int $value): stdClass{
        //get lower boundary
        $low = $this->pickStart() - $value;
        $low = $low < 50 ? 40 : $low;

        //get higher boudary
        $high = $this->pickStart() + $value;
        $high = $high > 100 ? 100 : $high;

        $range = new stdClass;
        $range->high = $high;
        $range->low = $low;
        
        return $range;
    }

    public function setFan(){
        $range = $this->selectRange(20);

        $fan = new stdClass;
        $fan->first = rand($range->low, $range->high);
        $fan->secound = rand($range->low, $range->high);
        $fan->third = rand($range->low, $range->high);
        $fan->ave = round(($fan->first + $fan->secound + $fan->third)/3);

        return $fan;
    }

    public function getFan(){
        return $this->setFan();
    }
}
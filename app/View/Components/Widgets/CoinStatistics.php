<?php

namespace App\View\Components\Widgets;

use Illuminate\View\Component;
use App\Traits\TransactionTraits;

class CoinStatistics extends Component
{
    use TransactionTraits;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function coin(){
        $price =  self::coinPrice('BTC');

        $new_price = array();
        foreach($price as $p){
            array_push($new_price, $this->bd_nice_number($p));
        }

        return $new_price;
    }

    public function coinEth(){
        $price =  self::coinPrice('ETH');

        $new_price = array();
        foreach($price as $p){
            array_push($new_price, $this->bd_nice_number($p));
        }

        return $new_price;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.widgets.coin-statistics');
    }
}

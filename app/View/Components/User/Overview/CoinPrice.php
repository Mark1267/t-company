<?php

namespace App\View\Components\User\Overview;

use App\Traits\TransactionTraits;
use Illuminate\View\Component;
use stdClass;

class CoinPrice extends Component
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

    public function price(){
        $price = new stdClass;

        $price->btc = TransactionTraits::sigFig(TransactionTraits::coinPrice('BTC')[0], 7);
        $price->eth = TransactionTraits::sigFig(TransactionTraits::coinPrice('ETH')[0], 6);
        $price->doge = TransactionTraits::sigFig(TransactionTraits::coinPrice('DOGE')[0], 2);

        return $price;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user.overview.coin-price');
    }
}

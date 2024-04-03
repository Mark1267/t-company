<?php

namespace App\View\Components\Dashboard\Widgets\Compound;

use stdClass;
use Illuminate\View\Component;
use App\Services\Investment\Compound\DataService;

class InvestmentTable extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $data)
    {
        //
    }

    public function investments(){
        $investments = new stdClass;

        foreach($this->data as $key => $data){
            // dd($data);
            $investments->$key = new DataService($data->id);
        }

        return $investments;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.widgets.compound.investment-table');
    }
}

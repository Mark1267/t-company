<?php

namespace App\View\Components\User\Overview;

use stdClass;
use Illuminate\View\Component;
use App\Traits\TransactionTraits;
use App\Services\Investment\DataService;

class InvestmentTable extends Component
{
    use TransactionTraits;

    public $tableData;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tableData)
    {
        $this->tableData = $tableData;
    }

    public function investments(){
        $investments = new stdClass;

        foreach($this->tableData as $key => $data){
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
        return view('components.user.overview.investment-table');
    }
}

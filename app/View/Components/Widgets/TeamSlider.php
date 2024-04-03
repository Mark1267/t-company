<?php

namespace App\View\Components\Widgets;

use App\Models\Team;
use Illuminate\View\Component;

class TeamSlider extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function team()
    {
        // return Team::orderBy('created_at', 'desc')->get();
        return Team::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.widgets.team-slider');
    }
}

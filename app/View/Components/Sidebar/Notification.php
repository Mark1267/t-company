<?php

namespace App\View\Components\Sidebar;

use App\Models\Feed;
use Illuminate\Support\Carbon;
use Illuminate\View\Component;

class Notification extends Component
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

    public function notification(){
        $number = Feed::where('users_id', auth()->user()->id)->where('created_at', '>', Carbon::yesterday())->count();

        return $number;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar.notification');
    }
}

<?php

namespace App\View\Components\Widgets;

use App\Models\Post;
use Illuminate\View\Component;

class Service extends Component
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

    public function services(){
        return Post::where('post_categories_id', 1)->orderBy('created_at', 'desc')->take(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.widgets.service');
    }
}

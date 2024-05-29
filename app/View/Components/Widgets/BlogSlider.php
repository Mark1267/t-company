<?php

namespace App\View\Components\Widgets;

use App\Models\Post;
use Illuminate\View\Component;

class BlogSlider extends Component
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

    public function posts()
    {
        return Post::whereNotIn('id', [2,3,4,5])->orderBy('created_at', 'desc')->limit(6)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.widgets.blog-slider');
    }
}

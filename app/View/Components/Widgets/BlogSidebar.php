<?php

namespace App\View\Components\Widgets;

use App\Models\Post;
use App\Models\PostCategories;
use Illuminate\View\Component;

class BlogSidebar extends Component
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

    public function latests()
    {
        return Post::orderBy('created_at', 'desc')->limit(10)->get();
    }

    public function categories()
    {
        return PostCategories::orderBy('created_at', 'desc')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.widgets.blog-sidebar');
    }
}

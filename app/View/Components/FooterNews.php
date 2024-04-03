<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;

class FooterNews extends Component
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

    public function news(){
        $news = Post::orderBy('created_at', 'desc')->limit(4)->get();

        return $news;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer-news');
    }
}

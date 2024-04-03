<?php

namespace App\View\Components\Widgets;

use App\Models\Review;
use Illuminate\View\Component;

class ReviewSlider extends Component
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

    public function reviews()
    {
        return Review::orderBy('created_at', 'desc')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.widgets.review-slider');
    }
}

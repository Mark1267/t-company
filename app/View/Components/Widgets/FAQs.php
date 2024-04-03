<?php

namespace App\View\Components\Widgets;

use App\Models\FAQ;
use Illuminate\View\Component;

class FAQs extends Component
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

    public function faqs()
    {
        return FAQ::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.widgets.f-a-qs');
    }
}

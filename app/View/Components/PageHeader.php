<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageHeader extends Component
{
    public $title;
    public $page;
    public $pagebg;
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($title, $page, $pagebg)
    {
        $this->title = $title;
        $this->page = $page;
        $this->pagebg = $pagebg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page-header');
    }
}

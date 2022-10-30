<?php

namespace App\View\Components;

use Illuminate\View\Component;

class breadcrumb extends Component
{
    /**
     * The alert breadcrumb.
     *
     * @var string
     */
    public $breadcrumb;
 
    /**
     * Create the component instance.
     *
     * @param  string  $breadcrumb
     * @return void
     */
    public function __construct($breadcrumb)
    {
        $this->breadcrumb = $breadcrumb;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.breadcrumb');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Films extends Component
{
    public $films;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($films, $categories)
    {
        $this->films = $films;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.films');
    }
}

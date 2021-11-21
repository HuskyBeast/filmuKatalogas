<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Films extends Component
{
    public $films;
    public $films2;
    public $films3;
    public $films4;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($films, $films2, $films3, $films4)
    {
        $this->films = $films;
        $this->films2 = $films2;
        $this->films3 = $films3;
        $this->films4 = $films4;
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

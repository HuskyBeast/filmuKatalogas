<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navigation extends Component
{
    public $loggedIn;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($loggedIn)
    {
        $this->loggedIn = $loggedIn;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navigation');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $title;
    public $message;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = 'Header', $message ='Message')
    {
        $this->title = $title;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}

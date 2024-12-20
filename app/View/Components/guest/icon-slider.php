<?php

namespace App\View\Components\guest;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class icon-slider extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components..guest.icon-slider');
    }
}
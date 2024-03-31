<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $name, public string $placeholder, public string $title, public string $type = 'text', public string $value = '')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-component');
    }
}

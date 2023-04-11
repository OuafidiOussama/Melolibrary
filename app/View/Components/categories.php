<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class categories extends Component
{
    /**
     * Create a new component instance.
     */
    public $categoriesNbr;
    public $categories;
    public function __construct($categoriesNbr, $categories)
    {
        //
        $this->categories = $categories;
        $this->categoriesNbr = $categoriesNbr;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.categories');
    }
}

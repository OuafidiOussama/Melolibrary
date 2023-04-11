<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class artists extends Component
{
    /**
     * Create a new component instance.
     */

     public $artistsNbr;
     public $artists;

    public function __construct($artistsNbr, $artists)
    {
        //
        $this->artists = $artists;
        $this->artistsNbr = $artistsNbr;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.artists');
    }
}

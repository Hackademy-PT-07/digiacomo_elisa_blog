<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    
    public function __construct()
    {
       
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $navbar = [
            ['name' => 'Home', 'link'=> route('homepage')],
            ['name' => 'Chi sono', 'link'=> route('about')],
            ['name' => 'Articoli', 'link'=> route('articles')],
            ['name' => 'Contatti', 'link'=> route('contacts')],
           ];
        return view('components.navbar', compact('navbar'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Homepage(){

        
        return view('home');

    }


    public function About(){

        $title = 'Chi sono';
        $presentation = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo fugit cumque delectus,
        impedit dicta aperiam deserunt unde quisquam ratione neque asperiores odio porro, dolore, quos sit 
        aut omnis ipsa accusantium?';
        return view('chi-sono', compact('title', 'presentation'));

    }


    public function Contacts(){

        

    }

}


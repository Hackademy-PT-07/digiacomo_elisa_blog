<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class AccountController extends Controller
{
    public function Index(){
        $articles = Article::where('user_id', auth()->user()->id)->get();

        

        return view('account.index', compact('articles'));
    }


    public function users(){

        return view('admin.users');
    }
}

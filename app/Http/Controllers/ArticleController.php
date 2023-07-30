<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    
   
    
    public function Articles(Article $article){

        $title = 'Articoli';

        $articles = Article::all();
        $categories = Category::all();


       

        return view('articles', compact('title','articles', 'article', 'categories'));      
    }

    public function Article(Article $article){

         
       
    
        return view('article', compact('article')); 
    }


    public function Create(){


        $categories = Category::all();
        return view('create-article', compact('categories'));
    }

    public function Store(StoreArticleRequest $request){


       

        $article = Article::create(array_merge(
            $request->all(),
            ['user_id' => auth()->user()->id]
        ));
           
        $article->categories()->attach($request->categories);


        if($request->hasFile('image') && $request->file('image')->isValid()){

            $fileName = $request->file('image')->getClientOriginalName();
            $article->image = $request->file('image')->storeAs('public/images', $fileName);
            $article->save();

        };

        return redirect('account')->with(['success'=> 'Articolo creato correttamente']);
        
    }

    public function edit(Article $article){

        return view('edit', compact('article'));
    }

    public function update(StoreArticleRequest $request, Article $article){

        $article->fill($request->all())->save();

        $article->categories()->detach();
        $article->categories()->attach($request->categories);
       


        return redirect('account')->with(['success' => 'Articolo modificato correttamente']);
    }

    public function editAccount(Article $article){
        $articles = Article::where('user_id', auth()->user()->id)->get();

        return view('account.index', compact('articles'));
    }

    public function deleteArticle(Article $article){
        $article->categories()->detach();
        $article->delete();

        

        return redirect()->back()->with(['success' => 'Articolo cancellato correttamente']);
    }
}

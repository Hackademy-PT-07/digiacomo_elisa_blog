<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Livewire\Counter;

Route::get('', [PageController::class, 'Homepage']
)->name('homepage');


Route::get('/contatti', [ContactController::class, 'Form']
)->name('contacts');

Route::post('/contatti/invia', [ContactController::class, 'Send'])->name('contacts-send');

Route::get('/chi-sono', [PageController::class, 'About']
)->name('about');

Route::get('/articles', [ArticleController::class, 'Articles']
)->name('articles');

Route::get('/article/{article}', [ArticleController::class, 'Article']
)->name('article');

Route::middleware('auth')->group(function(){
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('create-article');
    Route::post('/articles/store', [ArticleController::class, 'store'])->name('store-article');
    Route::get('/articles/{article}/edit/', [ArticleController::class, 'edit'])->name('edit-article');
    Route::post('/articles/{article}/update/', [ArticleController::class, 'update'])->name('update-article');
    Route::post('/articles/{article}/delete/', [ArticleController::class, 'deleteArticle'])->name('delete-article');
    Route::get('/account', [AccountController::class, 'index'])->name('account');   
    Route::resource('/categories', CategoryController::class);
    

});


Route::get('admin/users', [AccountController::class, 'users']);





Route::get('seeder', function () {
    App\Models\Article::create([
        'title' => 'Articolo #1',
        'category' => 'Esteri',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        'body' => '...',]);

    App\Models\Article::create([
        'title' => 'Articolo #2',
        'category' => 'Economia',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        'body' => '...',
    ]);
    App\Models\Article::create([
        'title' => 'Articolo #3',
        'category' => 'Sport',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        'body' => '...',
    ]);
    App\Models\Article::create([
        'title' => 'Articolo #4',
        'category' => 'Politica',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        'body' => '...',
    ]);
});
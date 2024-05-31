<?php

use App\Http\Requests\NewsForm;
use App\Models\News;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $news=News::all();

    return view('index',compact('news'));
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/article/{id}', function ($id) {
    $article=News::find($id);
    return view('article',compact('article'));
})->name('article');

Route::post('/add', function (NewsForm $newsForm) {

    $form=$newsForm->validated();
    $newNews=new News();
    $newNews->summary=$form['title'];
    $newNews->short_description=$form['description'];
    $newNews->full_text=$form['article'];
    $newNews->save();


    return redirect('/');
});

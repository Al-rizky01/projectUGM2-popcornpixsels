<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Routing\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles/index',[
            'articles' => Article::latest()->get()
        ]);


    }
    public function show(){
        return view('articles/show',[
        'article' => Article::latest()->get(),
        'title'=> 'Blog-Discusion',
    ]);


}

}
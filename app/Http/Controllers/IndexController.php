<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Article $article){
        $articles = $article->subContent();
        return view('index',['articles'=>$articles]);
    }

    public function myself(){
        return view('introduce');
    }
}

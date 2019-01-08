<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index(){

    }

    public function show(Article $article){
        $recommends = $article->recommend($article->type_id);
        return view('article.details',['article'=>$article,'recommends'=>$recommends]);
    }
}

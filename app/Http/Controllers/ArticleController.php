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
        $previousArticle = $article->newQuery()->where('id','<',$article->id)->orderBy('id','desc')->select('id','title')->first();
        $nextArticle = $article->newQuery()->where('id','>',$article->id)->select('id','title')->first();
        return view('article.details',['article'=>$article,'recommends'=>$recommends,'previous_article'=>$previousArticle,'next_article'=>$nextArticle]);
    }
}

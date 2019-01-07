<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\ArticleStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function create(){
        return view('admin.article.create');
    }

    public function store(ArticleStoreRequest $request){
        return $request->all();
    }
}

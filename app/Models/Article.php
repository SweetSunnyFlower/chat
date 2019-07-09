<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $guarded = [];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function typeInfo(){
        return $this->belongsTo(Type::class,'type_id','id');
    }

    public function labelsInfo(){
        return $this->hasMany(BeLabel::class,'aid','id');
    }

    public function index(){
        return $this->query()->with('typeInfo','user')->limit(15)->orderBy('id','desc')->get();
    }

    public function subContent(){
        return $this->index()->map(function($query){
            $query->contents = substr($query->contents,0,1000);
            return $query;
        });
    }

    public function recommend($type_id){
        return $this->where('type_id',$type_id)->select('id','cover_big')->limit(7)->get();
    }
}

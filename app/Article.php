<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = ['title', 'excerpt', 'body'];
    //
    /*
    This is to overwrite by which key you get the resource
    Will return based on the slug

    public function getRouteKeyName()
    {
        return 'slug'; // Article::where('slug', $article)->first();
    }
    */
}

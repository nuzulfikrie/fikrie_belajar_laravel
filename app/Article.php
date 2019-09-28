<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

    //define table name
    protected $table ='articles_set';

    protected $fillable = ['title','body','published']; // can use static declaration in controller
}



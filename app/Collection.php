<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $table = 'collection_posts';
    protected $fillable = ['collection_posts_id','title','body'];
}

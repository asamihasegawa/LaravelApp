<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stockist extends Model
{
    protected $table = 'stockist_posts';
    protected $guarded = array('id');
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_post extends Model
{
    protected $fillable = [
    	'name',
    	'post_title',
    	'email',
    	'information',
    ];
}

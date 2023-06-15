<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'title',
        'slug',
        'canonical',
        'meta_description',
        'html',
        'user_id',
        'is_published',
    ];
}

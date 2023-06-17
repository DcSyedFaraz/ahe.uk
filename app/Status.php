<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $timestamps=false;

    public $table = 'statuses';

    protected $fillable=[
        'id',
        'name',
        'css_class',
    ];
}

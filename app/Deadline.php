<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deadline extends Model
{
    public $timestamps = false;

        protected $fillable = [
            'id',
            'name',
            
        ];
}

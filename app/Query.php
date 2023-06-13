<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    protected $fillable=[
        'fname',
        'email',
        'subject',
        'deadline',
        'wcount',
        'country',
        'phone',
        'university',
    ];
}

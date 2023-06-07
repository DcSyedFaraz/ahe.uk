<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        "order_id",
        "file_path"
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'canonical',
        'meta_description',
        'description',
        'image_path',
        // 'category_id',
        'user_id',
        'is_published',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

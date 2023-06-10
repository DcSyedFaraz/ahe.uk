<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable=['id',
    'name'
    ,'email'
    ,'phone'
    ,'subject'
    ,'style'
    ,'country'
    ,'academic_level'
    ,'paper_type'
    ,'deadline'
    ,'paper_topic'
    ,'subject'
    ,'number_of_pages'
    ,'reference_style'
    ,'detail'
    // ,'spacing'
    // ,'is_complete'
    ,'cost_per_page'
    ,'total_price'
    ];

    public function files()
    {
        return $this->hasMany(File::class);
    }


}

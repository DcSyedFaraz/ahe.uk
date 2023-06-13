<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebSetting extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'email',
        'contact',
        'address',
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'linkedin_link',
        'whatsapp_no',
        'is_blogs_offers',
        'is_services_offers',
        'is_index',
    ];
}

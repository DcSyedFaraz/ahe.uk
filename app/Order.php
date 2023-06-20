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
    ,'user_id'
    ,"status_id"
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

    public function deadlineName()
    {
        return $this->belongsTo(Deadline::class,'deadline', 'id');
    }

    public function styleName()
    {
        return $this->belongsTo(RefrenceStyle::class,'reference_style', 'id');
    }
    public function subjectName()
    {
        return $this->belongsTo(Subject::class,'subject', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id' );
    }
    public function invoice()
    {
        return $this->hasOne('App\Invoice');
    }
    public function status()
    {
        return $this->belongsTo(Status::class,'status_id', 'id');
    }
    public function papertype()
    {
        return $this->belongsTo(PaperType::class, 'paper_type', 'id');
    }


}

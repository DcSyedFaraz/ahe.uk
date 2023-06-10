<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fare extends Model
{
    public $timestamps=false;

    public $fillable=['academic_level_id','deadline_id','per_page_price'];

    public function academic_level(){
        return $this->belongsTo(AcademicLevel::class);
    }

    public function deadline(){
        return $this->belongsTo(Deadline::class);
    }}

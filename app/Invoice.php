<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public $table = 'invoices';

    // public $timestamps = false;

    protected $fillable = [
        "id",
        "ref_no",
        "gateway",
        "amount",
        "auto_mail"=>0,
        "currency"=>'usd',
        "stripe_id",
        "status_id",
        "order_id",
        "user_id",
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }


    public function getRouteKeyName()
    {
        return 'ref_no';
    }
}

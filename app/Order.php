<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'Order';
    protected $primaryKey = 'OrderId';
    public $timestamps = false;

    protected $fillable = [
        'CustomerId',
        'OrderStatus',
        'OrderTotal',
        'CreatedDateTime'
    ];

    public function customerss()
    {
        return $this->belongsTo('App\Customer');    
    }
}

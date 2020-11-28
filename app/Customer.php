<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Column: CustomerId, CustomerStatusId, Name
    protected $table = 'customer';
    protected $primaryKey = 'CustomerId';
    public $timestamps = false;
    protected $fillable = ['Name', 'CustomerStatusId'];    

    /**
     * One to Many relationship with Order
     */
    public function order() 
    {
        return $this->hasMany('App\Order', 'CustomerId', 'CustomerId');    
    }

    public function customerstatus()
    {
        return $this->belongsTo('App\CustomerStatus', 'CustomerStatusId');    
    }

}

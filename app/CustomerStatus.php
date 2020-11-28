<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerStatus extends Model
{
    //
    protected $table = 'CustomerStatus';
    protected $primaryKey = 'CustomerStatusId';
    public $timestamps = false;
    protected $fillable = ['Name', 'CustomerStatusId', 'Code'];    

    public function customer()
    {
        return $this->hasMany('App\Customer', 'CustomerStatusId', 'CustomerStatusId');    
    }
}

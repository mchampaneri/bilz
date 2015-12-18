<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Bill extends Model
{
    public function bill_item()
    {
    	return $this->hasMany('App\BillItem');
    }

    public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }
}

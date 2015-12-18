<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillItem extends Model
{
    //
    public function bill()
    {
    	return $this->belongsTo('App\Bill');
    }

    public function product()
    {
    	return $this->hasOne('App\Product');
    }
}

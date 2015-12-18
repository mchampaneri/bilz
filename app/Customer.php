<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
	public function bill()
	{
		$this->hasMany('Bill');
	}

}

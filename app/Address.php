<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
//Allows the column address name to be entered into the db
	protected $fillable = [
		'address_name'
	];
}

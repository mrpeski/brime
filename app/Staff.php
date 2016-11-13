<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
	protected $primaryKey = 'sid';

	protected $fillable = ['nice_name', 'first_name', 'last_name', 'email', 'password', 'role', 'updated_at', 'created_at'];

			
	public function role() 
	{
		$this->hasMany('Role');
	}

}

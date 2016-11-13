<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $primaryKey = 'rid';

	protected $fillable = ['name'];

			
	public function users() 
	{
		$this->belongsToMany('Staff');
	}

}

<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	protected $primaryKey = 'uid';
	
    protected $fillable = [ 'name', 'email', 'password', 'updated_at', 'created_at'];
}

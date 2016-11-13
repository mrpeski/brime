<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PackagesPhoto;

class Package extends Model
{
    protected $fillable = [
        'name', 'type', 'description', 'city', 'country', 'price', 'attachment_path'
    ];


    public function photos() 
    {
    	return $this->hasMany('App\PackagesPhoto');
    }
    

    public function addPhoto(PackagesPhoto $photo) 
    {
    	return $this->photos()->save($photo);
    }
    
}

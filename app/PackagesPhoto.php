<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PackagesPhoto extends Model
{
    protected $fillable = ['path', 'thumbnail_path'];

    protected $baseDir = 'packages/photos';


    public function package() {			
    	return $this->belongsTo('App\Package');
    }


    public static function fromForm(UploadedFile $file) {
    	$photo = new static;

    	$name = time() . $file->getClientOriginalName();
    	$photo->path = $photo->baseDir . '/'. $name;
    	$photo->thumbnail_path = $photo->baseDir . '/' . 'tn-' . $name;

		$file->move('packages/photos', $name);

    	return $photo;

    }
    
    
}

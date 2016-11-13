<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	protected $primaryKey = 'pid';

	protected $fillable = ['title', 'content', 'attachment_path', 'updated_at', 'created_at'];

}

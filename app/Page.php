<?php

namespace App;
use App\BaseModel;

class Page extends BaseModel
{
	protected $primaryKey = 'pid';

	protected $fillable = ['title', 'content', 'attachment_path', 'updated_at', 'created_at'];

}

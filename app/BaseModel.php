<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public function publishedDay($day) 
	{
		switch ($day) 
		{
				case ('1'):
				return "Monday";
				break;

				case ('2'):
				return "Teusday";
				break;

				case ('3'):
				return "Wednesday";
				break;

				case ('4'):
				return "Thursday";
				break;

				case ('5'):
				return "Friday";
				break;	

				case ('6'):
				return "Saturday";
				break;

				default:
				return "Sunday";
				break;
		}	
	}
}

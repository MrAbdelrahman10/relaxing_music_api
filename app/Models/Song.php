<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{

	public function category()
	{
		return $this->hasOne(Category::class, 'id', 'category_id');
	}
	
}

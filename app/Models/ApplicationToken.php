<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationToken extends Model
{

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
		'token',
	];

}

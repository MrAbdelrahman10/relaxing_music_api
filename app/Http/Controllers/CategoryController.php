<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Support\Facades\Cache;

class CategoryController extends Controller
{
	
	/**
	 * Return all music categories
	 *
	 * @return void
	 */
	public function index()
	{
		$data = Cache::get('categories', function () {
			return Category::get();
		});
		return response_json(CategoryResource::collection($data));
	}
}

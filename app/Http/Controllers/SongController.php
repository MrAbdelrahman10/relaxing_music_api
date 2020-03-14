<?php

namespace App\Http\Controllers;

use App\Http\Resources\PaginationResource;
use App\Http\Resources\SongResource;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SongController extends Controller
{
	
	/**
	 * Return songs with pagination
	 *
	 * @param  mixed $request
	 * @return void
	 */
	public function index(Request $request)
	{
		$data = Cache::get('songs.' . $request->page, function () {
			return Song::with(['category'])->paginate();
		});
		$results = [];
		$results['data'] = SongResource::collection($data);
		$results['pagination'] = new PaginationResource($data);
		return response_json($results);
	}
	
	/**
	 * Return songs with pagination by category id
	 *
	 * @param  mixed $request
	 * @param  mixed $category_id
	 * @return void
	 */
	public function category(Request $request, $category_id)
	{
		$data = Cache::get('songs.category.' . $request->page, function () use ($category_id) {
			return Song::with(['category'])->where("category_id", "=", $category_id)->paginate();;
		});
		$results = [];
		$results['data'] = SongResource::collection($data);
		$results['pagination'] = new PaginationResource($data);
		return response_json($results);
	}
	
	/**
	 * Return one song by id
	 *
	 * @param  mixed $id
	 * @return void
	 */
	public function show($id)
	{
		$data = Cache::get('categories', function () use($id){
			return Song::with(['category'])->where("id", "=", $id)->first();
		});
		return response_json(new SongResource($data));
	}
}

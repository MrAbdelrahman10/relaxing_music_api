<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SongResource extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function toArray($request)
	{
		return [
			'id' => $this->id,
			'category_id' => $this->category_id,
			'file_path' => get_sound_url($this->file_path),
			'name' => $this->name,
			'category_name' => @$this->category->name,
		];
	}
}

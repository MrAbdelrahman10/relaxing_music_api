<?php

namespace App\Http\Controllers;

use App\Enums\StatusMessage;
use App\Models\Application;
use App\Models\ApplicationToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{

		
	/**
	 * Check application credentials if it's currect return new token
	 *
	 * @param  Illuminate\Http\Request $request
	 * @return void
	 */
	public function check(Request $request)
	{

		$app = Application::where('app_key', $request->json('app_key'))->first();

		if (!$app || !Hash::check($request->app_secret, $app->app_secret)) {
			return response_json(__('app.app_key_secret_wrong'), StatusMessage::INVALID_APP_AUTHENTICATION);
		}

		$data = [
			'token' => uniqid() . Str::random(19),
		];
		ApplicationToken::create($data);
		return response_json($data);
	}
}

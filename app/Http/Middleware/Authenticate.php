<?php

namespace App\Http\Middleware;

use App\Models\ApplicationToken;
use Closure;

class Authenticate
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $token = $request->header('Authorization');
		if (!$token) {
			return \response_json(__('app.no_token'), \App\Enums\StatusMessage::UNAUTHORIZED);
		}

		$token_obj = ApplicationToken::where('token', str_replace('Bearer ', '', $token))->first();

		if (!$token_obj) {
			return \response_json(__('app.unauthorized_token'), \App\Enums\StatusMessage::UNAUTHORIZED);
		}


		$request->merge(['token_obj' => $token_obj]);

		return $next($request);
    }
}

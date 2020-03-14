<?php

use App\Enums\StatusMessage;

function response_json($results, $status_message = StatusMessage::DATA_LOADED)
{
	$success = true;
	$status_code = 200;

	switch ($status_message) {
		case StatusMessage::AUTHORIZED:
		case StatusMessage::CREATED:
		case StatusMessage::DATA_LOADED:
		case StatusMessage::DELETED:
		case StatusMessage::NO_DATA:
		case StatusMessage::UPDATED:
			$status_code = 200;
			break;

		case StatusMessage::UNAUTHENTICATED:
			$status_code = 401;
			break;

		case StatusMessage::UNAUTHORIZED:
		case StatusMessage::FORBIDDEN:
			$status_code = 403;
			break;

		case StatusMessage::NOT_FOUND:
			$status_code = 404;
			break;

		case StatusMessage::VALIDATION_ERROR:
		case StatusMessage::INVALID_APP_AUTHENTICATION:
		case StatusMessage::RESOURCE_EXISTS:
		case StatusMessage::INVALID_USER_AUTHENTICATION:
		case StatusMessage::INVALID_URL_PARAMETER:
		case StatusMessage::UNEXPECTED_ERROR:
			$status_code = 500;
			break;

		default:
			$status_code = 200;
			break;
	}

	return response()->json([
		"success" => $success,
		"statusMessage" => $status_message,
		"errorCode" => $status_code != 200 ? $status_code : 0,
		"errorMessage" => $status_code != 200 ? $results : [],
		"results" => $status_code == 200 ? (is_string($results) ? ['message' => $results] : $results) : []
	]);
}

function get_picture_url($path = 'media/noimg.png')
{
	if (!$path) {
		return env('BASE_MEDIA_URL') . 'media/noimg.png';
	}
	return env('BASE_MEDIA_URL') . $path;
}

function get_sound_url($path = 'media/nosound.mp3')
{
	if (!$path) {
		return env('BASE_MEDIA_URL') . 'media/nosound.mp3';
	}
	return env('BASE_MEDIA_URL') . $path;
}

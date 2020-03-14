<?php

namespace App\Enums;

class StatusMessage
{
	/**
	 * @description Authorized
	 * @code 200
	 */
	const AUTHORIZED = "AUTHORIZED";

	/**
	 * @description New record has been created
	 * @code 200
	 */
	const CREATED = "CREATED";

	/**
	 * @description Recored has been deleted
	 * @code 200
	 */
	const DELETED = "DELETED";

	/**
	 * @description User has no permission to access
	 * @code 403
	 */
	const FORBIDDEN = "FORBIDDEN";

	/**
	 * @description Data has been loaded
	 * @code 200
	 */
	const DATA_LOADED = "DATA_LOADED";

	/**
	 * @description Application credentials are invalid
	 * @code 500
	 */
	const INVALID_APP_AUTHENTICATION = "INVALID_APP_AUTHENTICATION";

	/**
	 * @description Parameter is invalid
	 * @code 500
	 */
	const INVALID_URL_PARAMETER = "INVALID_URL_PARAMETER";

	/**
	 * @description User credentials are invalid
	 * @code 500
	 */
	const INVALID_USER_AUTHENTICATION = "INVALID_USER_AUTHENTICATION";

	/**
	 * @description No data found
	 * @code 200
	 */
	const NO_DATA = "NO_DATA";

	/**
	 * @description Request url is not found
	 * @code 404
	 */
	const NOT_FOUND = "NOT_FOUND";

	/**
	 * @description Resource exists & doesn't accept duplication
	 * @code 500
	 */
	const RESOURCE_EXISTS = "RESOURCE_EXISTS";

	/**
	 * @description User token invalid 
	 * @code 403
	 */
	const UNAUTHENTICATED = "UNAUTHENTICATED";

	/**
	 * @description Application token invalid
	 * @code 401
	 */
	const UNAUTHORIZED = "UNAUTHORIZED";

	/**
	 * @description Unexpected error 
	 * @code 500
	 */
	const UNEXPECTED_ERROR = "UNEXPECTED_ERROR";

	/**
	 * @description Record has been updated 
	 * @code 200
	 */
	const UPDATED = "UPDATED";

	/**
	 * @description Validation errors
	 * @code 500
	 */
	const VALIDATION_ERROR = "VALIDATION_ERROR";
}

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', 'HomeController@index');

$router->post('/auth', 'AuthController@check');

$router->group(['middleware' => 'auth'], function () use ($router) {

	$router->get('/songs', 'SongController@index');
	$router->get('/songs/{id}', 'SongController@show');
	$router->get('/songs/{id}/category', 'SongController@category');
	$router->get('/songs/{ids}/show_list', 'SongController@show_list');

	$router->get('/categories', 'CategoryController@index');
	$router->get('/categories/{id}', 'CategoryController@show');

});

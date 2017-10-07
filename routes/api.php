<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Authorization, Content-Length, X-Requested-With");

Route::get('/users', ['middleware'=>['jwt.auth'], 'uses' => 'UsersController@index']);

Route::post('/authenticate',[
	'uses' => 'Frontend\Api\ApiAuthController@authenticate'
	]);

Route::post('/register',[
	'uses' => 'Frontend\Api\ApiAuthController@register'
	]);

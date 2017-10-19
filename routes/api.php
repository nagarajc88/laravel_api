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

Route::post('/authenticate',['uses' => 'Backend\Api\ApiAuthController@authenticate']);
Route::get('/getuser',['uses' => 'Backend\Api\ApiAuthController@getAuthUser']);
Route::post('/logout',['uses' => 'Backend\Api\ApiAuthController@logout']);
Route::get('/banners',['uses' => 'Frontend\Home\BannersController@index']);
Route::get('/first-product-list',['uses' => 'Frontend\Home\HomeController@getNewPorductsOne']);
Route::get('/second-product-list',['uses' => 'Frontend\Home\HomeController@getNewPorductsTwo']);
Route::get('/third-product-list',['uses' => 'Frontend\Home\HomeController@getNewPorductsThree']);

Route::get('/popular1-product-list',['uses' => 'Frontend\Home\HomeController@getPopularPorductsOne']);
Route::get('/popular2-product-list',['uses' => 'Frontend\Home\HomeController@getPopularPorductsTwo']);
Route::get('/popular3-product-list',['uses' => 'Frontend\Home\HomeController@getPopularPorductsThree']);
Route::get('/popular4-product-list',['uses' => 'Frontend\Home\HomeController@getPopularPorductsFour']);
Route::get('/popular5-product-list',['uses' => 'Frontend\Home\HomeController@getPopularPorductsFive']);
Route::get('/popular6-product-list',['uses' => 'Frontend\Home\HomeController@getPopularPorductsSix']);


Route::post('/register',['uses' => 'Backend\Api\ApiAuthController@register']);

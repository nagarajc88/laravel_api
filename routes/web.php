<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.welcome');
// });

//Frontend New products list routes****
Route::get('/', 'Frontend\Home\HomeController@manageHome');
Route::get('product-frontend-getNewPorductsOne', 'Frontend\Home\HomeController@getNewPorductsOne')->name('product-frontend-getNewPorductsOne');
Route::get('product-frontend-getNewPorductsTwo', 'Frontend\Home\HomeController@getNewPorductsTwo')->name('product-frontend-getNewPorductsTwo');
Route::get('product-frontend-getNewPorductsThree', 'Frontend\Home\HomeController@getNewPorductsThree')->name('product-frontend-getNewPorductsThree');
// *****end******

//Frontend Popular product List*******
Route::get('product-frontend-getPopularPorductsOne', 'Frontend\Home\HomeController@getPopularPorductsOne')->name('product-frontend-getPopularPorductsOne');
Route::get('product-frontend-getPopularPorductsTwo', 'Frontend\Home\HomeController@getPopularPorductsTwo')->name('product-frontend-getPopularPorductsTwo');
Route::get('product-frontend-getPopularPorductsThree', 'Frontend\Home\HomeController@getPopularPorductsThree')->name('product-frontend-getPopularPorductsThree');
Route::get('product-frontend-getPopularPorductsFour', 'Frontend\Home\HomeController@getPopularPorductsFour')->name('product-frontend-getPopularPorductsFour');
Route::get('product-frontend-getPopularPorductsFive', 'Frontend\Home\HomeController@getPopularPorductsFive')->name('product-frontend-getPopularPorductsFive');
Route::get('product-frontend-getPopularPorductsSix', 'Frontend\Home\HomeController@getPopularPorductsSix')->name('product-frontend-getPopularPorductsSix');
//*********end**********

//Frontend Details routes****
Route::get('/product-details', 'Frontend\Details\DetailsController@manageDetails');
//Frontend Checkout routes****
Route::get('/product-checkout', 'Frontend\Checkout\CheckoutController@manageCheckout');

//All backend routes******

// Authentication Routes...
Route::get('login', [
  'as' => 'login',
  'uses' => 'Backend\Auth\LoginController@showLoginForm'
]);
Route::post('login', [
  'as' => '',
  'uses' => 'Backend\Auth\LoginController@login'
]);
Route::post('logout', [
  'as' => 'logout',
  'uses' => 'Backend\Auth\LoginController@logout'
]);

// Password Reset Routes...
Route::post('password/email', [
  'as' => 'password.email',
  'uses' => 'Backend\Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
  'as' => 'password.request',
  'uses' => 'Backend\Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
  'as' => '',
  'uses' => 'Backend\Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
  'as' => 'password.reset',
  'uses' => 'Backend\Auth\ResetPasswordController@showResetForm'
]);

// Registration Routes...
Route::get('register', [
  'as' => 'register',
  'uses' => 'Backend\Auth\RegisterController@showRegistrationForm'
]);

Route::post('register', [
  'as' => '',
  'uses' => 'Backend\Auth\RegisterController@register'
]);


Route::get('/home', 'Backend\Dashboard\HomeController@index')->name('home');
Route::resource('category-control', 'Backend\Categories\CategoryController');
Route::resource('product-control', 'Backend\Products\ProductController');
Route::resource('item-ajax', 'Backend\Iterms\ItemAjaxController');
Route::get('manage-item-ajax', 'Backend\Iterms\ItemAjaxController@manageItemAjax');
Route::get('category', 'Backend\Categories\CategoryController@manageCategoryAjax');
Route::get('add-new-category', 'Backend\Categories\CategoryController@add');
Route::get('category-edit', 'Backend\Categories\CategoryController@edit');
Route::get('category-dropdown','Backend\Categories\CategoryController@dropdownCategories');
Route::get('product', 'Backend\Products\ProductController@manageCategoryAjax');
Route::get('product-add', 'Backend\Products\ProductController@add');
Route::get('product-edit', 'Backend\Products\ProductController@edit');
Route::get('product-dropdown','Backend\Products\ProductController@dropdownCategories');
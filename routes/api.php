<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categories', 'API\CategoryController@index');
Route::get('products', 'API\ProductController@index');
Route::get('products/{id}', 'API\ProductController@show');
Route::post('shipping', 'API\ShippingController@store');
Route::get('ads', 'API\AdController@index');

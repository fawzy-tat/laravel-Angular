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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//////// qoutes APIs
Route::post('/qoutes', [
  'uses' => 'QoutesController@addQoute'
]);
Route::put('/qoutes/{id}', [
  'uses' => 'QoutesController@updateQoute'
]);
Route::get('/qoutes', [
  'uses' => 'QoutesController@getqoutes'
]);
Route::delete('/qoutes/{id}', [
  'uses' => 'QoutesController@deleteQoute'
]);

<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

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

Route::get('/home', ['as' => 'home', 'uses' => 'ContentController@home']);

Route::get('/content/', ['as' => 'content', 'uses' => 'ContentController@view']);
Route::get('/content/{identifier}/{contentType?}', ['as' => 'content_single', 'uses' => 'ContentController@single']);

Route::get('/tag/{slug}', ['as' => 'tag_view', 'uses' => 'ContentController@tag_view']);
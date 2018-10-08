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

Route::resource('users', 'UsersController');
Route::resource('campaigns', 'CampaignController',['except'=>['create','edit']]);
Route::resource('scripts', 'ScriptController',['except'=>['create','edit']]);
Route::resource('usergroups', 'UserGroupController',['except'=>['create','edit']]);
Route::resource('inbounds', 'InboundController',['except'=>['create','edit']]);
Route::resource('lists', 'VlistsController',['except'=>['create','edit']]);
Route::resource('times', 'AdminController');
Route::resource('phones', 'PhoneController');


Route::get('/servers',[

    'uses'=>'ServerController@index'
] )
;



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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Grupo de rutas que tienen un middleware jwt.auth
Route::group(['middleware' => ['jwt.auth']], function () {
    Route::apiResource('rooms','RoomController');
    Route::apiResource('clients','ClientController');
    Route::apiResource('rents','RentController');
});
//Route::apiResource('users','userController');
Route::post('/login', 'AuthenticateController@authenticate');
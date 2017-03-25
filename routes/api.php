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

Route::get('/test',function(){
    return response()->json([
        'test' => 'success'
    ]);
});

Route::get('/offers/{client_id}/', 'OfferController@indexByClient');

Route::get('/push/{client_id}/', 'OfferController@pushToClient');

Route::get('/bigdata/{point_id}/', 'AIController@indexByPoint');

Route::get('/offers/send/{offer_id}/', 'OfferController@sendOffer');

Route::resource('offer', 'OfferController');
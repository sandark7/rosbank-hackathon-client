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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/offer', function () {

    $offers = App\Offer::where('user_id', 1)
        ->orderBy('name', 'desc')
        ->take(10)
        ->get();

    //return view('user.profile', ['offers' => $offers]);

});
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home/stat', 'CabinetController@stat')->name('stat');

Route::get('/home/offer/add/', 'OfferController@addAction')->name('offer_add');
Route::post('/home/offer/add/', 'OfferController@makeAction')->name('offer_add_post');
Route::get('/home/offer/list/', 'OfferController@listAction')->name('offer_list');

Route::get('/home/point/add/', 'PointController@addAction')->name('point_add');
Route::post('/home/point/add/', 'PointController@makeAction')->name('point_add_post');
Route::get('/home/point/list/', 'PointController@listAction')->name('point_list');

Route::get('/home/report', 'CabinetController@report')->name('report');;

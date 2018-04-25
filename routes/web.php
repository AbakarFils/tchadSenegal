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

Route::get('/','HomeController@index')->name('welcome');

Auth::routes();
Route::post('/reservation','ReservationController@reserve')->name('reservation.reserve');

Route::post('/contact','ContactController@sendMessage')->name('contact.send');



Route::group(['prefix '=>'admin','middleware'=>'auth','namespace'=>'admin'],function() {

    Route::get('admin/dashboard','DashboardController@index')->name('admin.dashboard');

    Route::resource('admin/piece','PieceController');

    Route::resource('admin/slider','SliderController');

    Route::resource('admin/formalite','FormaliteController');
    Route::post('admin/formalite/addpiece','FormaliteController@addpiece')->name('formalite.addpiece');
    Route::post('admin/formalite/attachdocuments','FormaliteController@attachdocuments')->name('formalite.attachdocuments');


    Route::resource('admin/lieu_Tourisme','Lieu_TourismeController');

    Route::resource('admin/renouvellement','RenouvellementController');

    Route::resource('admin/item','ItemController');

    Route::resource('admin/citoyen','CitoyenController');

    Route::get('admin/reservation','ReservationController@index')->name('reservation.index');
    Route::post('admin/reservation/{id}','ReservationController@status')->name('reservation.status');
    Route::delete('admin/reservation/{id}','ReservationController@destory')->name('reservation.destory');

    Route::get('admin/contact','ContactController@index')->name('contact.index');
    Route::get('admin/contact/{id}','ContactController@show')->name('contact.show');
    Route::delete('admin/contact/{id}','ContactController@destroy')->name('contact.destroy');
});

<?php
use App\Http\Controllers\Admin\TablesController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;


// Route::get('/','App\Http\Controllers\BookingController@index')->name('booking');
// Route::post('/','App\Http\Controllers\BookingController@store')->name('booking.store');




Route::get('/admin/booking/fillter','App\Http\Controllers\Admin\BookingsController@filltertable')->name('fillter');

Route::get('/admin/booking/fillter/choice/{id}','App\Http\Controllers\Admin\BookingsController@choice')->name('booking.choice');

Route::post('/admin/booking/store/','App\Http\Controllers\Admin\BookingsController@booking')->name('booking.store');


route::group
([
    'prefix' => '/admin',
    'as'    => 'admin.',

],
function(){

    //ROUTE TABLES
    Route::get('/',[DashboardController::class, 'index'])->name('index');
    Route::get('/table',[TablesController::class , 'index'])->name('tables');
    Route::get('/table/create',[TablesController::class ,'create'])->name('tables.create');
    Route::post('/table/store',[TablesController::class ,'store'])->name('tables.store');


});

route::group(['prefix' => '/',
// 'as'    => '',
],function(){

//ROUTE Reservation
Route::get('/',[BookingsController::class, 'index'])->name('index');
Route::get('/table',[TablesController::class , 'index'])->name('tables');
Route::get('/table/create',[TablesController::class ,'create'])->name('tables.create');


});

<?php
use App\Http\Controllers\Admin\TablesController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\User\BookingsController;
use App\Http\Controllers\user\ContactController;

// Route::get('/','App\Http\Controllers\BookingController@index')->name('booking');
// Route::post('/','App\Http\Controllers\BookingController@store')->name('booking.store');


// Route::get('/admin/booking/fillter','App\Http\Controllers\Admin\BookingsController@filltertable')->name('fillter');

// Route::get('/admin/booking/fillter/choice/{id}','App\Http\Controllers\Admin\BookingsController@choice')->name('booking.choice');

// Route::post('/admin/booking/store/','App\Http\Controllers\Admin\BookingsController@booking')->name('booking.store');


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
    Route::delete('/table/{id}', [TablesController::class, 'destroy'])->name('tables.destroy');

    Route::get('/booking/all', [BookingsController::class, 'get_all'])->name('booking.all');
    Route::delete('/booking/all/{id}', [BookingsController::class, 'destroy_booking'])->name('booking.destroy');


});

route::group(['prefix' => '/',
// 'as'    => '',
],function(){

// index route

Route::get('/', [BookingsController::class,'king_table'])->name('home');

//ROUTE Reservation
// Route::get('/booking',[BookingsController::class, 'index'])->name('index');
Route::get('/booking',[BookingsController::class, 'filltertable'])->name('fillter');
Route::get('/booking/choice/{id}',[BookingsController::class, 'choice'])->name('booking.choice');
Route::post('/booking/choice/',[BookingsController::class, 'store'])->name('booking.store');

Route::get('/contact-form', [ContactController::class,'create']);
Route::post('/contact-form', [ContactController::class,'store'])->name('contact');


});

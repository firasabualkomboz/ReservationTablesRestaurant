<?php
use App\Http\Controllers\Admin\TablesController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;


// Route::get('/','App\Http\Controllers\BookingController@index')->name('booking');
// Route::post('/','App\Http\Controllers\BookingController@store')->name('booking.store');

Route::get('admin/table','App\Http\Controllers\Admin\TablesController@index')->name('admin.tables');
Route::get('admin/table/create','App\Http\Controllers\Admin\TablesController@create')->name('table.create');
Route::post('admin/table/store','App\Http\Controllers\Admin\TablesController@store')->name('table.store');



Route::get('/admin/booking/fillter','App\Http\Controllers\Admin\BookingsController@filltertable')->name('fillter');

Route::get('/admin/booking/fillter/choice/{id}','App\Http\Controllers\Admin\BookingsController@choice')->name('booking.choice');

Route::post('/admin/booking/store/','App\Http\Controllers\Admin\BookingsController@booking')->name('booking.store');

Route::get('/',[DashboardController::class, 'index'])->name('index');

route::group
([
    'prefix' => '/admin',
    'as'    => 'admin.',

],
function(){


    // Route::get('/',[DashboardController::class, 'index'])->name('index');


});

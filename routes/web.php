<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/flights', [App\Http\Controllers\HomeController::class, 'allflights'])->name('home.flights');
Route::get('/home/hotels', [App\Http\Controllers\HomeController::class, 'allhotels'])->name('home.hotels');
Route::get('/home/activities', [App\Http\Controllers\HomeController::class, 'allactivities'])->name('home.activities');
Route::get('/home/trip/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('home.trip');
Route::get('/home/activities/{id}', [App\Http\Controllers\HomeController::class, 'show1'])->name('home.activity');
Route::get('/home/hotels/{id}', [App\Http\Controllers\HomeController::class, 'show2'])->name('home.hotel');
Route::get('/home/flights/{id}', [App\Http\Controllers\HomeController::class, 'show3'])->name('home.flight');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('web.find');
Route::get('/search2', [App\Http\Controllers\HomeController::class, 'search2'])->name('web2.find');
Route::get('/myadmin', [App\Http\Controllers\TripsController::class, 'adminindex'])->name('admin.home')->Middleware('isadmin');
Route::get('/admin/flights', [App\Http\Controllers\FlightsController::class, 'admin'])->name('admin.flights')->Middleware('isadmin');
Route::get('/admin/hotels', [App\Http\Controllers\HotelsController::class, 'admin'])->name('admin.hotels')->Middleware('isadmin');
Route::get('/admin/activities', [App\Http\Controllers\ActivitiesController::class, 'admin'])->name('admin.activities')->Middleware('isadmin');
Route::get('/admin/trip/{id}', [App\Http\Controllers\TripsController::class, 'show'])->name('admin.trip')->Middleware('isadmin');
Route::get('/admin/activities/{id}', [App\Http\Controllers\ActivitiesController::class, 'show'])->name('admin.activity')->Middleware('isadmin');
Route::get('/admin/hotels/{id}', [App\Http\Controllers\HotelsController::class, 'show'])->name('admin.hotel')->Middleware('isadmin');
Route::get('/admin/flights/{id}', [App\Http\Controllers\FlightsController::class, 'show'])->name('admin.flight')->Middleware('isadmin');
Route::get('/trips/create', [App\Http\Controllers\TripsController::class, 'create'])->name('admin.create')->Middleware('isadmin');
Route::get('/hotels/create', [App\Http\Controllers\HotelsController::class, 'create'])->name('hotel.create')->Middleware('isadmin');
Route::get('/flights/create', [App\Http\Controllers\FlightsController::class, 'create'])->name('flight.create')->Middleware('isadmin');
Route::get('/activities/create', [App\Http\Controllers\ActivitiesController::class, 'create'])->name('activitie.create')->Middleware('isadmin');
Route::post('redirect',[App\Http\Controllers\TripsController::class,'store'])->name('Trips.store');
Route::post('',[App\Http\Controllers\HotelsController::class,'hotels'])->name('Hotels.store');
Route::post('redirects',[App\Http\Controllers\FlightsController::class,'flights'])->name('Flights.store');
Route::post('redirec',[App\Http\Controllers\ActivitiesController::class,'activities'])->name('Activities.store');
Route::post('/Myflights',[App\Http\Controllers\CartController::class,'store'])->name('carts.store');
//Delete Routes
Route::get('deleteflight/{id}', [App\Http\Controllers\FlightsController::class, "deleteflight"]);
Route::get('deletehotel/{id}', [App\Http\Controllers\HotelsController::class, "deletehotel"]);
Route::get('deleteactivity/{id}', [App\Http\Controllers\ActivitiesController::class, "deleteactivity"]);

//Edit Routes
Route::get('editflight/{id}', [App\Http\Controllers\FlightsController::class, "editflight"]);
Route::post('editfflight/{id}',[App\Http\Controllers\FlightsController::class,'editfflight'])->name('editfflight');

Route::get('edithotel/{id}', [App\Http\Controllers\HotelsController::class, "edithotel"]);
Route::post('edithhotel/{id}',[App\Http\Controllers\HotelsController::class,'edithhotel'])->name('edithhotel');

Route::get('editactivity/{id}', [App\Http\Controllers\ActivitiesController::class, "editactivity"]);
Route::post('editaactivity/{id}',[App\Http\Controllers\ActivitiesController::class,'editaactivity'])->name('editaactivity');

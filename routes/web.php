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

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TouristController;
use App\Http\Controllers\TourOperatorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get( '/', [ TourController::class, 'index' ] );
Route::prefix( 'tour' )->group( function () {
	Route::get( '/detail/{id}', [ TourController::class, 'show' ] );
});

Auth::routes();

Route::prefix('/register')->group(function () {
	Route::post('/tour-operator', [RegisterController::class, 'createTourOperator'])->name('register.operator');
	Route::post('/tourist', [RegisterController::class, 'createTourist'])->name('register.tourist');
	Route::get('/tourist', function () {
		return view('auth.register-tourist');
	});
	Route::get('/tour-operator', function () {
		return view('auth.register
		');
	});
});
Route::middleware(['auth'])->group(function () {
	Route::prefix('tourist')->group(function () {
		Route::post('/edit-profile/{id}', [TouristController::class, 'update']);
		Route::get('/profile/', [TouristController::class, 'showCurrentUser']);
		Route::get('/detail/{id}', [TouristController::class, 'show']);
		Route::get('/edit-profile', [TouristController::class, 'editOwnProfile']);
		Route::delete('/delete/{id}', [TouristController::class, 'destroy']);
		Route::get('/my-tours', [TouristController::class, 'myTours']);
		Route::post('/list', [TouristController::class, 'list']);
	});
	Route::prefix('tour-operator')->group(function () {
		// Route for tour operator dashboard
		Route::get('/{id}/tours', [TourOperatorController::class, 'getAllTours']);
		Route::get('/{id}/tours/{tourId}', [TourOperatorController::class, 'getTour']);
		// Others
		Route::post('/edit-profile/{id}', [TourOperatorController::class, 'update']);
		Route::get('/profile/', [TourOperatorController::class, 'showProfile']);
		Route::get('/detail/{id}', [TourOperatorController::class, 'show']);
		Route::delete('/delete/{id}', [TourOperatorController::class, 'destroy']);
		Route::get('/edit-profile', [TourOperatorController::class, 'editOwnProfile']);
		Route::post('/list/', [TourOperatorController::class, 'list']);
	});
	Route::prefix('tour')->group(function () {
		Route::post('/list/', [TourController::class, 'list']);
		Route::post('/edit/{id}', [TourController::class, 'update']);
		Route::delete('/delete/{id}', [TourController::class, 'destroy']);
		Route::post('/verify/{id}', [TourController::class, 'verify']);
		Route::post('/book/{id}', [TourController::class, 'book']);
		Route::post('/comment/{id}', [TourController::class, 'comment']);
		Route::post('/payment/{id}', [TourController::class, 'payment']);
		Route::get('/analysis', [TourController::class, 'analysis']);
	});
	Route::resource('tour-operator', 'TourOperatorController');
	Route::resource('tourist', 'TouristController');
	Route::resource('tour', 'TourController');
	Route::match(['get', 'post'], '/botman', 'BotManController@handle');
});


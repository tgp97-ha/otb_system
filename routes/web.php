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

use App\Events\BookingDeletedEvent;
use App\Http\Controllers\PlanningController;
use App\Models\Booking;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::prefix('register')->group(function () {
    Route::get('/tourist', function () {
        return view('auth.registerTourist');
    });
});
Route::prefix('admin')->group(function () {
    Route::get('/create', function () {
        return view('admin.create');
    });
});
Route::middleware(['auth'])->group(function () {
    //Route::middleware('can:access.admin')->prefix('admin')->group(function () {
    //    Route::get('/', function () {
    //        $rooms = Room::orderBy('sorting')->get();
    //
    //        $users = User::all();
    //
    //        return view('admin.index', ['user' => Auth::user(), 'users' => $users]);
    //    })->name('admin')->middleware('can:access.admin');
    //
    //    Route::post('passwd', 'Auth\ChangePasswordController@ChangePassword')->name('passwd');
    //
    //    Route::prefix('user')->group(function () {
    //        Route::get('create', function () {
    //            return view('admin.user_create', ['roles' => Role::all()]);
    //        })->name('user.create')->middleware('can:edit.users');
    //
    //        Route::post('create', 'UserController@createUser')->middleware('can:edit.users');
    //
    //        Route::get('update/{user}', function (User $user) {
    //            return view('admin.user_create', ['roles' => Role::all(), 'user' => $user, 'update_me' => false]);
    //        })->name('user.update')->middleware('can:edit.users');
    //
    //        Route::post('update/{user}', 'UserController@updateUser')->middleware('can:edit.users');
    //
    //        Route::get('update-me', function () {
    //            return view('admin.user_create', ['roles' => Role::all(), 'user' => Auth::user(), 'update_me' => true]);
    //        })->name('profile.update');
    //
    //        Route::post('update-me', 'UserController@updateMe');
    //
    //        Route::get('del/{user}', function (User $user) {
    //            $user->delete();
    //            return redirect()
    //                ->route('admin', ['#users'])
    //                ->with('success', 'User deleted sucessfully');
    //        })->name('user.del');
    //    });
    //});
    //
    ///**
    // * WEEKLY NOTES
    // */
    //Route::middleware(['can:edit.all'])->prefix('notes')->group(function () {
    //    Route::post('save', 'AjaxController@saveNote');
    //});
});

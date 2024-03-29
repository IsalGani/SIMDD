<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\TotalController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\RincianController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChangePasswordController;

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


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);
	Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
	Route::get('berkas', function () {
		return view('berkas');
	})->name('berkas');

	Route::get('/totals/index', function () {
		return view('/totals/index');
	})->name('/totals/index');

	Route::get('danadesa', function () {
		return view('danadesa');
	})->name('danadesa');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');




	Route::get('/master/index', function () {
		return view('/master/index');
	})->name('/master/index');

	Route::get('/master/create', function () {
		return view('/master/create');
	})->name('/master/create');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');

Route::resource('totals', TotalController::class);

Route::get('totals/{id}/edit', 'TotalController@edit')->name('totals.edit');

Route::resource('rincians', RincianController::class);

Route::get('master', 'MasterController@index')->name('master');
route::resource('master', MasterController::class);

Route::get('master/{id}/edit', [MasterController::class, 'edit'])->name('master.edit');




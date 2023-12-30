<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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
	Route::get('berkas', function () {
		return view('berkas');
	})->name('berkas');

	Route::get('/totals/index', function () {
		return view('/totals/index');
	})->name('/totals/index');

	Route::get('danadesa', function () {
		return view('danadesa');
	})->name('danadesa');

	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

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


	Route::get('/data/index', function () {
		return view('/data/index');
	})->name('/data/index');
	Route::get('/data/index', [DataController::class, 'index'])->name('data.index');
	

	Route::get('/data.tambah', function () {
		return view('/data.tambah');
	})->name('/data.tambah');
	Route::get('/data/tambah', [DataController::class, 'tambah'])->name('data.tambah');
	Route::post('/data/store-tahun-anggaran', [DataController::class, 'storeTahunAnggaran'])->name('data.storeTahunAnggaran');
	Route::get('/data/create', [DataController::class, 'create'])->name('data.create');
	Route::post('/data/create', [DataController::class, 'create'])->name('data.create');
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



Route::get('totals/{id}/edit', 'TotalController@edit')->name('totals.edit');








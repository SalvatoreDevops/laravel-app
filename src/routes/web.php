<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('user', UserController::class);

Route::post('/users', [UserController::class, 'store'])->name('user.store');

//Route::post('user',[UserController::class, 'store']);

//Route::post('/user', 'UserController@store')->name('user.store');


Route::get('/',[UserController::class, 'index']);

// Route::get('/user/index',[ UserController::class, 'index']);
 Route::get('/user/create',[ UserController::class, 'create']);
// Route::get('/user/store',[ UserController::class, 'store']);

<?php

use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
// Private Routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');
    Route::get('/reports', [App\Http\Controllers\HomeController::class, 'reports'])->name('reports');
    Route::get('/without/breadcrumbs', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
    Route::get('/form', [App\Http\Controllers\HomeController::class, 'form'])->name('response_form');
});

Route::fallback(function () {
    abort(404);
});


// Route::get('/chart', function () {
//     return 'here';
// });

<?php

use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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
    // Route::get('/without/breadcrumbs', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
    Route::get('/approvals', [App\Http\Controllers\HomeController::class, 'approvals'])->name('response_approvals');
    Route::get('/users', [App\Http\Controllers\HomeController::class, 'users'])->name('users');
    Route::get('/form', [App\Http\Controllers\HomeController::class, 'form'])->name('response_form');
    Route::get('/reports', [App\Http\Controllers\HomeController::class, 'reports'])->name('reports');
    Route::get('/color-detection', [App\Http\Controllers\HomeController::class, 'color_detection'])->name('color_detection');
    Route::get('/file-upload', [App\Http\Controllers\HomeController::class, 'file_upload'])->name('file_upload');

    Route::post('/upload', [ImageController::class, 'upload']);
    Route::post('/upload-color', [ImageController::class, 'handleImageUpload']);
    Route::post('/file-upload', [ImageController::class, 'fileUpload']);
    
});

Route::fallback(function () {
    abort(404);
});
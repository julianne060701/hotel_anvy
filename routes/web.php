<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
})->name('default');

Route::controller(UserManagementController::class)->group(function(){
    Route::get('/UserManagement', 'getUserManagementView')->name('UserManagementView');
    Route::post('/updateUser', 'updateUser')->name('updateUser');
    Route::post('/addUser', 'addUser')->name('addUser');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('/SLogin', 'getSampleLoginView')->name('SLogin');
    Route::post('loginPost', 'loginPost')->name('loginPost');
});





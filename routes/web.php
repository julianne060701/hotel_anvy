<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminRoomController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoyaltyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\IndexController;
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

Route::controller(IndexController::class)->group(function(){
    Route::get('/Home', 'index')->name('index');
});

Route::controller(RoomController::class)->group(function(){
    Route::get('/Room','displayRoom')->name('Room');
});

Route::controller(AboutUsController::class)->group(function(){
    Route::get('/AboutUs', 'displayAbout')->name('AboutUs');
});

Route::controller(ContactUsController::class)->group(function(){
    Route::get('/ContactUs', 'displayContact')->name('ContactUs');
});

Route::controller(ProfileController::class)->group(function(){
    Route::get('/Profile','displayProfile')->name('Profile');
});

Route::controller(LoyaltyController::class)->group(function(){
    Route::get('/LoyaltyCard','displayLoyaltyCard')->name('LoyaltyCard');
});

Route::controller(AdminRoomController::class)->group(function(){
    Route::get('/Rooms','displayAdminRoom')->name('Rooms');
});


Route::controller(UserManagementController::class)->group(function(){
    Route::get('/UserManagement', 'getUserManagementView')->name('UserManagementView');
    Route::post('/updateUser', 'updateUser')->name('updateUser');
    Route::post('/addUser', 'addUser')->name('addUser');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('/SLogin', 'getSampleLoginView')->name('SLogin');
    Route::post('loginPost', 'loginPost')->name('loginPost');
});

Route::controller(SignupController::class)->group(function(){
    Route::get('/SampleSignup','Signup')->name('SampleSignup');

});

Route::controller(AvailabilityController::class)->group(function(){
    Route::get('/Availability','displayAvailability')->name('Availability');
});

Route::controller(BookController::class)->group(function(){
    Route::get('/Book','Book')->name('Book');
});


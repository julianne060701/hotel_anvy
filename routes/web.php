<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminBookingController;
use App\Http\Controllers\AdminLoyaltyCardController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminRoomController;
use App\Http\Controllers\AdminBedController;
use App\Http\Controllers\AdminAmenitiesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoyaltyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
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



Route::controller(IndexController::class)->group(function(){
    Route::get('/', 'index')->name('index');
});

Route::controller(AdminProfileController::class)->group(function(){
    Route::get('/AdminProfile', 'displayAdminProfile')->name('AdminProfile');
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

Route::controller(LoyaltyController::class)->middleware('userRole: 1')->middleware('auth')->group(function(){
    Route::get('/LoyaltyCard','displayLoyaltyCard')->name('LoyaltyCard');
});

Route::controller(AdminRoomController::class)->middleware('userRole: 1')->middleware('auth')->group(function(){
    Route::get('/Rooms','displayAdminRoom')->name('Rooms');
    Route::post('/newRoom', 'addNewRoom')->name('newRoom');
    Route::post('/updateRoom', 'updateRoom')->name('updateRoom');
    Route::post('/archiveRoom', 'archiveRoom')->name('archiveRoom');
});

Route::controller(AdminBedController::class)->middleware('userRole: 1')->middleware('auth')->group(function(){
    Route::get('/Beds','displayAdminBed')->name('Beds');
    Route::post('/archiveBed', 'archiveBed')->name('archiveBed');
    Route::post('/updateBed', 'updateBed')->name('updateBed');
    Route::post('/newBed', 'addNewBed')->name('newBed');
});

Route::controller(AdminAmenitiesController::class)->middleware('userRole: 1')->middleware('auth')->group(function(){
    Route::get('/Amenities','displayAdminAmenities')->name('Amenities');
    Route::post('/newAmenity', 'addNewAmenity')->name('newAmenity');
    Route::post('/updateAmenity', 'updateAmenity')->name('updateAmenity');
    Route::post('/archiveAmenity', 'archiveAmenity')->name('archiveAmenity');
});

Route::controller(AdminMenuController::class)->middleware('userRole: 1')->middleware('auth')->group(function(){
    Route::get('/AdminMenu','AdminMenu')->name('AdminMenu');
});

Route::controller(AdminLoyaltyCardController::class)->middleware('userRole: 1')->middleware('auth')->group(function(){
    Route::get('/AdminLoyaltyCard','AdminLoyalty')->name('AdminLoyaltyCard');
});

Route::controller(AdminBookingController::class)->middleware('userRole: 1')->middleware('auth')->group(function(){
    Route::get('/AdminBooking','AdminBooking')->name('AdminBooking');
});

Route::controller(UserManagementController::class)->middleware('userRole: 1')->middleware('auth')->group(function(){
    Route::get('/UserManagement', 'getUserManagementView')->name('UserManagementView');
    Route::post('/updateUser', 'updateUser')->name('updateUser');
    Route::post('/addUser', 'addUser')->name('addUser');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'getSampleLoginView')->name('SLogin');
    Route::post('loginPost', 'loginPost')->name('loginPost');
    Route::get('/logout', 'logout')->name('logout');
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

Route::controller(CartController::class)->group(function(){
    Route::get('/Cart', 'displayCart')->name('Cart');
});

Route::controller(DashboardController::class)->middleware('userRole: 1')->middleware('auth')->group(function(){
    Route::get('/Dashboard', 'getDashboard')->name('dashboard');
});

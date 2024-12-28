<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\MassageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlacesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->middleware(['auth' ])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/event', EventController::class);
    Route::resource('/hotel', HotelController::class);
    Route::resource('/place', PlacesController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('/massage', MassageController::class);
    Route::resource('/review', ReviewController::class);
    Route::resource('/booking', BookingController::class);
    Route::resource('/payment', PaymentController::class);
    Route::resource('/Dashboard_Page', DashboardPageController::class);
    Route::get('/home', [homeController::class, 'index'])->name('home');

});

Route::prefix('travel')->name('travel.')->middleware(['auth'])->group(function () {

    Route::get('/home', [FrontController::class, 'index'])->name('home');
    Route::get('/about', [FrontController::class, 'about'])->name('about');
    Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
    Route::get('/places', [FrontController::class, 'places'])->name('places');
    Route::get('/packages', [FrontController::class, 'packages'])->name('packages');
    Route::get('/booking', [FrontController::class, 'booking'])->name('booking');
    Route::get('/payment', [FrontController::class, 'payment'])->name('payment');

});

require __DIR__.'/auth.php';

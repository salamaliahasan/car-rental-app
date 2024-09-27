<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\CarController          ;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\RentalController;
use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::get('/',[PageController::class,'HomePage']);
Route::get('/about', [PageController::class, 'about'])->name('frontend.about');

// Rentals Page Route (car browsing page)
Route::get('/rentals', [CarController::class, 'index'])->name('frontend.rentals');

// Contact Page Route
Route::get('/contact', [PageController::class, 'contact'])->name('frontend.contact');

// Login Page Route
Route::get('/login', [PageController::class, 'login'])->name('frontend.login');

// Signup Page Route
Route::get('/signup', [PageController::class, 'signup'])->name('frontend.signup');

// Book a car (example for booking flow)
Route::post('/rentals/book/{id}', [RentalController::class, 'book'])->name('frontend.rentals.book');

Route::get('/admin',[CustomerController::class,'AdminPage']);
Route::post('/user-login',[CustomerController::class,'UserLogin']);
Route::get('/logout',[CustomerController::class,'UserLogout']);

Route::get('/dashboard',[CustomerController::class,'DashboardPage'])->middleware([TokenVerificationMiddleware::class]);

// Customer API
Route::get('/customerPage',[CustomerController::class,'CustomerPage'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/create-customer",[CustomerController::class,'CustomerCreate'])->middleware([TokenVerificationMiddleware::class]);
Route::get("/list-customer",[CustomerController::class,'CustomerList'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/delete-customer",[CustomerController::class,'CustomerDelete'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/update-customer",[CustomerController::class,'CustomerUpdate'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/customer-by-id",[CustomerController::class,'CustomerByID'])->middleware([TokenVerificationMiddleware::class]);

Route::get('/carPage',[CarController::class,'carPage'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/create-car",[CarController::class,'CreateCar'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/delete-car",[CarController::class,'DeleteCar'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/update-car",[CarController::class,'UpdateCar'])->middleware([TokenVerificationMiddleware::class]);
Route::get("/list-car",[CarController::class,'CarList'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/car-by-id",[CarController::class,'CarByID'])->middleware([TokenVerificationMiddleware::class]);

Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');

Route::post('/login', [LoginController::class, 'login'])->name('login');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

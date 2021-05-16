<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\RegistrationController;

Route::post('/v1/users/registration', [RegistrationController::class, 'register']);
Route::post('/v1/users/login', [LoginController::class, 'login']);
Route::post('/v1/users/logout', [LogoutController::class, 'logout']);
Route::get('/v1/users/{user_id}', [UsersController::class, 'getUser']);
Route::get('/v1/users/{user_id}/likes', [LikesController::class, 'getUserLikes']);
Route::get('/v1/users/{user_id}/bookings', [BookingsController::class, 'getUserBookings']);
Route::get('/v1/shops', [ShopsController::class, 'getShops']);
Route::get('/v1/shops/{shop_id}', [ShopsController::class, 'getShop']);
Route::put('/v1/users/{user_id}/likes', [LikesController::class, 'putLikes']);
Route::delete('/v1/users/{user_id}/likes', [LikesController::class, 'deleteLikes']);
Route::post('/v1/shops/{shop_id}/bookings', [BookingsController::class, 'postBooking']);
Route::delete('/v1/shops/bookings/{booking_id}', [BookingsController::class, 'deleteBooking']);
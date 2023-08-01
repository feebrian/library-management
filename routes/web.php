<?php

use App\Http\Controllers\AuthController;
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
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'Index']);
Route::post('/register', [AuthController::class, 'Register']);

Route::get('/login', [AuthController::class, 'Login'])->name('login');
Route::post('login', [AuthController::class, 'Authenticate']);

Route::post('/logout', [AuthController::class, 'Logout']);

// protected routes
Route::get("/dashboard", function() {
    return view('dashboard');
})->middleware('auth');

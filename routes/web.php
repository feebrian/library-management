<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::get("/login", [AuthController::class, 'Login'])->name('login');
Route::post('/login', [AuthController::class, 'Authenticate']);

// protected routes

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard.dashboard', ['title' => "Dashboard"]);
    });

    Route::prefix('/members')->group(function () {
        Route::get('/', [UserController::class, 'Index']);
    });

    Route::get('/books', function () {
        return view('dashboard.books', ['title' => "Books"]);
    });

    Route::get('/returned', function () {
        return view('dashboard.returned', ['title' => "Returned Books"]);
    });

    Route::get('/unreturned', function () {
        return view('dashboard.unreturned', ['title' => "Unreturned Books"]);
    });

    Route::get('/issued', function () {
        return view('dashboard.issued', ['title' => "Issued"]);
    });

    Route::get('/settings', function () {
        return view('dashboard.settings', ['title' => "Settings"]);
    });

});

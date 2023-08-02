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

Route::get("/login", [AuthController::class, 'Login'])->name('login');
Route::post('/login', [AuthController::class, 'Authenticate']);

// protected routes
Route::group(['middleware' => 'auth'], function () {

    Route::get("/dashboard", function() {
        return view('dashboard.dashboard', ['title' => "Dashboard"]);
    });

    Route::get("/dashboard/members", function() {
        return view('dashboard.members', ['title' => "Members"]);
    });

    Route::get("/dashboard/books", function() {
        return view('dashboard.books', ['title' => "Books"]);
    });

    Route::get("/dashboard/returned", function() {
        return view('dashboard.returned', ['title' => "Returned Books"]);
    });

    Route::get("/dashboard/unreturned", function() {
        return view('dashboard.unreturned', ['title' => "Unreturned Books"]);
    });

    Route::get("/dashboard/issued", function() {
        return view('dashboard.issued', ['title' => "Issued"]);
    });

    Route::get("/dashboard/settings", function() {
        return view('dashboard.settings', ['title' => "Settings"]);
    });

});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ApartmentController;

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

// Route::get('/', function () {
//     return view("frontend.pages.home");
// });
// Route::get('/search-property', function () {
//     return view('frontend.pages.search-property');
// });

Auth::routes();

// Route::prefix('user')->name('user.')->group(function () {

//     Route::middleware(['guest:web','PreventBackHistory'])->group(function () {
//         Route::view('/login','frontend.page.login')->name('login');
//         Route::view('/register','frontend.page.register')->name('register');
//     });
//     Route::middleware(['auth:web','PreventBackHistory'])->group(function () {
//         Route::view('/home','frontend.page.home')->name('login');
//         Route::post('/logout',[UserController::class, 'logout'])->name('logout');
//     });

// });

Route::prefix('admin')->name('admin.')->group(function () {


    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'backend.pages.login')->name('login');
        Route::post('/login', [AdminController::class, 'store'])->name('login');
        Route::view('/register', 'backend.pages.register')->name('register');
    });
    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
        Route::get('/', function () {
            return view('backend.pages.dashboard');
        })->name('admin');
        Route::get('/dashboard', function () {
            return view('backend.pages.dashboard');
        })->name('dashboard');

        Route::get('/employee-list', [EmployeeController::class, 'index'])->name('employee-list');
        Route::get('/show-employee/{id}', [EmployeeController::class, 'show'])->name('show-employee');
        Route::get('/create-employee', [EmployeeController::class, 'create'])->name('create-employee');
        Route::post('/add-employee', [EmployeeController::class, 'store'])->name('add-employee');

        // Logout Route
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    });
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

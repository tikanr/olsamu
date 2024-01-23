<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProsesController;
use App\Http\Controllers\PemilihanController;
use App\Http\Controllers\PenukaranController;
use App\Http\Controllers\PoinController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['prefix' => '/', 'controller' => 'HomeController'], function () {
//     Route::get('/', 'index')->name('home');
//     Route::get('/about', 'about')->name('about');
//     Route::get('/contact', 'contact')->name('contact');
// });

// Login route
// ==================================================================
Route::get('register', [UsersController::class, 'register'])->name('register');
Route::post('register', [UsersController::class, 'register_action'])->name('register.action');
Route::get('login', [UsersController::class, 'login'])->name('login');
Route::post('login', [UsersController::class, 'login_action'])->name('login.action');
Route::get('password', [UsersController::class, 'password'])->name('password');
Route::post('password', [UsersController::class, 'password_action'])->name('password.action');
Route::get('logout', [UsersController::class, 'logout'])->name('logout');
// ==================================================================


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/service', [ServiceController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);
Route::get('/informasi', [InformationController::class, 'index']);
Route::get('/proses', [ProsesController::class, 'index']);
// Route::get('/login', [LoginController::class, 'index']);
Route::get('/pemilihan_sampah', [PemilihanController::class, 'index']);
Route::get('/proses_penukaran', [PenukaranController::class, 'index']);
Route::get('/poin', [PoinController::class, 'index']);
// Route::get('/register', [RegisterController::class, 'index']);
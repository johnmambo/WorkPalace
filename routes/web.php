<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Freelancer\FreelancerController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/employer_account', function () {
    return view('auth.register-employer');
    
});
// Route::post('/createEmployer', function () {
//     return view('auth.register-employer');
// });
Route::post('/createEmployer', [PagesController::class, 'createEmployer'])->name('createEmployer');
Route::post('/createFreelancer', [PagesController::class, 'createFreelancer'])->name('createFreelancer');

Route::get('/home', function () {
    Auth::logout();
    return redirect()->route('login');
    // return view('welcome');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'role:superadmin'])->name('superadmin.')->prefix('superadmin')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'superadmindash'])->name('dashboard');
    Route::get('/createcategory', [AdminController::class, 'createcategory'])->name('create.category');
    Route::post('/createJobCategory', [AdminController::class, 'createJobcategory'])->name('createJobCategory');
 
 
});
Route::middleware(['auth', 'role:freelancer'])->name('freelancer.')->prefix('freelancer')->group(function(){
    Route::get('/dashboard', [FreelancerController::class, 'freelancerdash'])->name('dashboard');
 
});

Route::middleware(['auth', 'role:user'])->name('user.')->prefix('user')->group(function(){
    Route::get('/dashboard', [UserController::class, 'userdash'])->name('dashboard');
    Route::get('/new-job', [UserController::class, 'newJob'])->name('new-job');
    Route::get('/alljobs', [UserController::class, 'alljobs'])->name('alljobs');
 
});

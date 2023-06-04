<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
    if (Auth::check()) {
        return view('web.home');
    }
    return view('auth.login');
});

Auth::routes();
Route::middleware(['web', 'auth'])->group(function () {
    // Home
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //Profile
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::post('/profile/update', [UserController::class, 'profileupdate'])->name('user.update');
    Route::post('/profile/upload', [UserController::class, 'profileupload'])->name('profile.upload');

    //Password
    Route::get('/settings/password', [UserController::class, 'changepassword'])->name('change.password');
    Route::get('/password/update', [UserController::class, 'passwordupdate'])->name('password.update');

    //Education
    Route::get('/education', [UserController::class, 'education'])->name('user.education');

    Route::post('/work/update', [UserController::class, 'workupdate'])->name('user.work');
    Route::post('/college/update', [UserController::class, 'collegeupdate'])->name('user.college');
    Route::post('/school/update', [UserController::class, 'schoolupdate'])->name('user.school');

    Route::get('/{slug}', [UserController::class, 'overview'])->name('user.overview');
    Route::post('/relationshipStatus/update', [UserController::class, 'relationshipStatus'])->name('user.relationship_status');
});

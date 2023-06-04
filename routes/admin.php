<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;

Route::prefix(env('ADMIN_PREFIX'))->group(function () {
    Route::match(['get', 'post'], '/login', [AdminController::class, 'home'])->name('admin_login');
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        //general-setting
        Route::get('/setting/general', [SettingController::class, 'settings'])->name('general.settings');
        Route::post('/setting/general/store', [SettingController::class, 'store'])->name('settings.store');

        //Change Theme
        Route::get('changetheme', [AdminController::class, 'changetheme'])->name('changetheme');

        //Profile
        Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
        Route::get('/profile/update', [AdminController::class, 'profileupdate'])->name('admin.profile.update');
        Route::get('/password/update', [AdminController::class, 'passwordsettings'])->name('admin.profile.setting');

        //logout
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    });
});

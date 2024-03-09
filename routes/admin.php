<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Login;
use App\Livewire\Admin\Profile;
use App\Livewire\Admin\Setting;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {
    Route::get("/login",Login::class)->name("admin.login");
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/dashboard',Dashboard::class)->name('admin.dashboard');

        //Profile
        Route::get('/profile',Profile::class)->name('admin.profile');

        //Settings
        Route::get('/setting',Setting::class)->name('admin.setting');

        //logout
        Route::get('/logout', [Profile::class, 'logout'])->name('admin.logout');
    });
});
<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Login;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {
    Route::get("/login",Login::class)->name("admin.login");
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/dashboard',Dashboard::class)->name('admin.dashboard');
    });
});
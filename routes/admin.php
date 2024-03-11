<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Login;
use App\Livewire\Admin\Profile;
use App\Livewire\Admin\Setting;
use App\Livewire\Admin\Aboutus;
use App\Livewire\Admin\Contactus;
use App\Livewire\Admin\Event;
use App\Livewire\Admin\Pagemanagement;
use App\Livewire\Admin\Subscription;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {
    Route::get("/login",Login::class)->name("admin.login");
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/dashboard',Dashboard::class)->name('admin.dashboard');

        //about
        Route::get('/about-us',Aboutus::class)->name('admin.aboutus');

        //pagemanagement
        Route::get('/page-management',Pagemanagement::class)->name('admin.pagemanagement');

        //Event & Campain
        Route::get("/event",Event::class)->name("admin.event");

        //Contactus
        Route::get("/contactus",Contactus::class)->name("admin.contactus");

        //Subscriptions
        Route::get("/subscription",Subscription::class)->name("admin.subscription");

        //Profile
        Route::get('/profile',Profile::class)->name('admin.profile');

        //Settings
        Route::get('/setting',Setting::class)->name('admin.setting');

        //logout
        Route::get('/logout', [Profile::class, 'logout'])->name('admin.logout');
    });
});
<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Login;
use App\Livewire\Admin\Profile;
use App\Livewire\Admin\Setting;
use App\Livewire\Admin\Aboutus;
use App\Livewire\Admin\Blog;
use App\Livewire\Admin\BlogCategory;
use App\Livewire\Admin\Contactus;
use App\Livewire\Admin\Event;
use App\Livewire\Admin\Gallery;
use App\Livewire\Admin\Membership;
use App\Livewire\Admin\Pagemanagement;
use App\Livewire\Admin\Product;
use App\Livewire\Admin\ProductCategory;
use App\Livewire\Admin\ProductGallery;
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

        //Blog Category
        Route::get("/blog-category",BlogCategory::class)->name("admin.blogcategory");

        //Blog
        Route::get("/blog",Blog::class)->name("admin.blog");

        //Membership
        Route::get("/membership",Membership::class)->name("admin.membership");

        //Product Gallery
        Route::get("/product-gallery",ProductGallery::class)->name("admin.productgallery");

        //Gallery
        Route::get("/gallery",Gallery::class)->name("admin.gallery");

        //Product Category
        Route::get("/product-category",ProductCategory::class)->name('admin.productcategory');

        //Product
        Route::get("/product",Product::class)->name("admin.product");

        //Profile
        Route::get('/profile',Profile::class)->name('admin.profile');

        //Settings
        Route::get('/setting',Setting::class)->name('admin.setting');

        //logout
        Route::get('/logout', [Profile::class, 'logout'])->name('admin.logout');
    });
});
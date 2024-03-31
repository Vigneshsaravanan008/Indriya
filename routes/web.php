<?php

use App\Livewire\Web\Aboutus;
use App\Livewire\Web\Blog;
use App\Livewire\Web\BlogCategory;
use App\Livewire\Web\Campaign;
use App\Livewire\Web\Contactus;
use App\Livewire\Web\Home;
use App\Livewire\Web\Events;
use App\Livewire\Web\Membership;
use App\Livewire\Web\ViewBlog;
use App\Livewire\Web\ViewEvent;
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

Route::get('/',Home::class);

//About-us
Route::get('/about-us',Aboutus::class)->name("site.aboutus");

//Events
Route::get("/events",Events::class)->name("site.events");

//Campains
Route::get("/campaign",Campaign::class)->name("site.campaign");

//Membership
Route::get("/membership",Membership::class)->name("site.membership");

//Contactus
Route::get("/contact-us",Contactus::class)->name("site.contactus");

//Blogs
Route::get('/blog',Blog::class)->name('site.blog');

//Blog Category
Route::get('/category/{slug}',BlogCategory::class)->name('site.blogcategory');

//Blog details
Route::get('/blog/{slug}',ViewBlog::class)->name('site.viewblog');

//Events or Campaings
Route::get("/{slug}",ViewEvent::class)->name("site.viewevent");

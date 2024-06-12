<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Seo;
use App\Models\Setting;
use App\Models\Social;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['web.layouts.footer',"web.layouts.sidebar",'web.seo.metadetails','web.seo.custom','web.layouts.header','web.layouts.master','admin.auth.master','livewire.admin.profile','livewire.web.view-event','admin.layouts.footer','admin.layouts.sidebar','admin.layouts.master','admin.layouts.header','admin.layouts.footer','livewire.web.home',"livewire.web.blog"], function ($view) {
            $setting = Setting::first();  
            $seo = Seo::first();  
            $social = Social::first();  
            $latest_blogs=Blog::orderBy("id","desc")->take(2)->get();
            $image=Auth::guard("admin")->check()?Auth::guard("admin")->user()->image:""; 
            $ipaddress = '';
            if (isset($_SERVER['HTTP_CLIENT_IP']))
                $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
            else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
            else if (isset($_SERVER['HTTP_X_FORWARDED']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
            else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
            else if (isset($_SERVER['HTTP_FORWARDED']))
                $ipaddress = $_SERVER['HTTP_FORWARDED'];
            else if (isset($_SERVER['REMOTE_ADDR']))
                $ipaddress = $_SERVER['REMOTE_ADDR'];
            else
                $ipaddress = 'UNKNOWN';
            $view->with(compact('setting','ipaddress','image','seo','social','latest_blogs'));
        });
    }
}

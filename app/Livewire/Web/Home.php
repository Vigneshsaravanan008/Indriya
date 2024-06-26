<?php

namespace App\Livewire\Web;

use App\Models\Blog;
use App\Models\Event;
use App\Models\PageManagement;
use App\Models\Social;
use App\Models\VolunteerRegistration;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $social = Social::first();  
        $blogs=Blog::orderBy("id","desc")->take(4)->get();
        $events=Event::where("post_type",1)->take(2)->get();
        $volunteer_registrations=VolunteerRegistration::orderBy("id","desc")->take(3)->get();
        $campaigns=Event::where("post_type",2)->get();
        $page=PageManagement::where('url','/')->first();
        return view('livewire.web.home',compact("page","social","blogs","events","campaigns","volunteer_registrations"))->extends('web.layouts.master')->section('content');
    }
}

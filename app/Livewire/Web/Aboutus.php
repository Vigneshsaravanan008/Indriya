<?php

namespace App\Livewire\Web;

use App\Models\PageManagement;
use App\Models\VolunteerRegistration;
use Livewire\Component;

class Aboutus extends Component
{
    public function render()
    {
        $page=PageManagement::where('url','/about-us')->first();
        $volunteer_registrations=VolunteerRegistration::take(3)->get();
        return view('livewire.web.aboutus',compact("page","volunteer_registrations"))->extends('web.layouts.master')->section('content');
    }
}

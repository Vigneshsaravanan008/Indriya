<?php

namespace App\Livewire\Web;

use App\Models\PageManagement;
use Livewire\Component;

class VolunteerRegistration extends Component
{
    public function render()
    {
        $page=PageManagement::where("url","volunteership")->first();
        return view('livewire.web.volunteer-registration',compact("page"))->extends("web.layouts.master")->section("content");
    }
}

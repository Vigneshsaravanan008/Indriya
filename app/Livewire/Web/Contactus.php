<?php

namespace App\Livewire\Web;

use App\Models\PageManagement;
use Livewire\Component;

class Contactus extends Component
{
    public function render()
    {
        $page=PageManagement::where('url','/contact-us')->first();
        return view('livewire.web.contactus',compact("page"))->extends('web.layouts.master')->section('content');
    }
}

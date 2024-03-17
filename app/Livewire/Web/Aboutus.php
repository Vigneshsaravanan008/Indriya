<?php

namespace App\Livewire\Web;

use App\Models\PageManagement;
use Livewire\Component;

class Aboutus extends Component
{
    public function render()
    {
        $page=PageManagement::where('url','/about-us')->first();
        return view('livewire.web.aboutus',compact("page"))->extends('web.layouts.master')->section('content');
    }
}

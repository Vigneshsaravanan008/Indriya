<?php

namespace App\Livewire\Web;

use App\Models\PageManagement;
use App\Models\Social;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $social = Social::first();  
        $page=PageManagement::where('url','/')->first();
        return view('livewire.web.home',compact("page","social"))->extends('web.layouts.master')->section('content');
    }
}

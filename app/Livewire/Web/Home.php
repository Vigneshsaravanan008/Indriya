<?php

namespace App\Livewire\Web;

use App\Models\PageManagement;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $page=PageManagement::where('url','/')->first();
        return view('livewire.web.home',compact("page"))->extends('web.layouts.master')->section('content');
    }
}

<?php

namespace App\Livewire\Web;

use App\Models\PageManagement;
use Livewire\Component;

class Events extends Component
{
    public function render()
    {
        $page=PageManagement::where('url','/events')->first();
        return view('livewire.web.events',compact("page"))->extends('web.layouts.master')->section('content');
    }
}

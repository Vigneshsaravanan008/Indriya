<?php

namespace App\Livewire\Web;

use App\Models\PageManagement;
use Livewire\Component;

class Campaign extends Component
{
    public function render()
    {
        $page=PageManagement::where('url','/campaign')->first();
        return view('livewire.web.campaign',compact("page"))->extends('web.layouts.master')->section('content');
    }
}

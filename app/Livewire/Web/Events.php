<?php

namespace App\Livewire\Web;

use App\Models\Event;
use App\Models\PageManagement;
use Livewire\Component;

class Events extends Component
{
    public function render()
    {
        $events=Event::where("post_type",1)->paginate(9);
        $page=PageManagement::where('url','/events')->first();
        return view('livewire.web.events',compact("page",'events'))->extends('web.layouts.master')->section('content');
    }
}

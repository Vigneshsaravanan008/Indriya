<?php

namespace App\Livewire\Web;

use App\Models\Event;
use Livewire\Component;

class ViewEvent extends Component
{
    public $event;
    public function mount($slug)
    {
        $this->event=Event::where("slug",$slug)->first();
    }

    public function render()
    {
        return view('livewire.web.view-event')->extends('web.layouts.master')->section('content');
    }
}

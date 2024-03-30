<?php

namespace App\Livewire\Web;

use App\Models\Event;
use Livewire\Component;

class ViewEvent extends Component
{
    public $event,$other_events;
    public function mount($slug)
    {
        $this->event=Event::where("slug",$slug)->first();
        $this->other_events=Event::where("slug","!=",$slug)->where('post_type',$this->event->type)->take(3)->get()->shuffle();
    }

    public function render()
    {
        return view('livewire.web.view-event')->extends('web.layouts.master')->section('content');
    }
}

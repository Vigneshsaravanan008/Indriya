<?php

namespace App\Livewire\Web;

use App\Models\Event;
use App\Models\PageManagement;
use Livewire\Component;
use Livewire\WithPagination;

class Campaign extends Component
{
    use WithPagination;
    public function render()
    {
        $campaigns=Event::where('post_type',2)->paginate(9);
        $page=PageManagement::where('url','/campaign')->first();
        return view('livewire.web.campaign',compact("page",'campaigns'))->extends('web.layouts.master')->section('content');
    }
}

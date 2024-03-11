<?php

namespace App\Livewire\Admin;

use App\Models\Contactus as ModelsContactus;
use Livewire\Component;
use Livewire\WithPagination;

class Contactus extends Component
{
    use WithPagination;
    public function render()
    {
        $contactus=ModelsContactus::paginate(15);
        return view('livewire.admin.contactus',compact("contactus"))->extends('admin.layouts.master')->section('content');
    }
}

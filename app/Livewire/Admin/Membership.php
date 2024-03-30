<?php

namespace App\Livewire\Admin;

use App\Models\Membership as ModelsMembership;
use Livewire\Component;
use Livewire\WithPagination;

class Membership extends Component
{
    use WithPagination;

    public function render()
    {
        $memberships=ModelsMembership::paginate(15);
        return view('livewire.admin.membership',compact('memberships'))->extends('admin.layouts.master')->section('content');
    }
}

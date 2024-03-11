<?php

namespace App\Livewire\Admin;

use App\Models\Subscription as ModelsSubscription;
use Livewire\Component;
use Livewire\WithPagination;

class Subscription extends Component
{
    use WithPagination;

    public function render()
    {
        $subscriptions=ModelsSubscription::paginate(15);
        return view('livewire.admin.subscription',compact("subscriptions"))->extends('admin.layouts.master')->section('content');
    }
}

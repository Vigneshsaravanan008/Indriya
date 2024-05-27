<?php

namespace App\Livewire\Admin;

use App\Models\VolunteerRegistration as ModelsVolunteerRegistration;
use Livewire\Component;
use Livewire\WithPagination;

class VolunteerRegistration extends Component
{
    use WithPagination;

    public function render()
    {
        $volunteer_registrations=ModelsVolunteerRegistration::paginate(15);
        return view('livewire.admin.volunteer-registration',compact("volunteer_registrations"))->extends("admin.layouts.master")->section("content");
    }
}

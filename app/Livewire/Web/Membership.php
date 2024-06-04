<?php

namespace App\Livewire\Web;

use App\Models\Membership as ModelsMembership;
use App\Models\PageManagement;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Membership extends Component
{
    public $first_name, $last_name, $email, $phone_number, $gender, $location, $categories, $organization_name;

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'email|required',
        'phone_number' => 'required|integer',
        'gender' => 'required',
        'location' => 'required',
        'categories' => 'nullable',
        'organization_name' => 'required',
    ];

    public function render()
    {
        $page = PageManagement::where('url', '/membership')->first();
        return view('livewire.web.membership', compact("page"))->extends('web.layouts.master')->section('content');
    }

    public function addMembership()
    {
        $this->validate();
        try {
            ModelsMembership::create([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'phone_number' => $this->phone_number,
                'gender' => $this->gender,
                'location' => $this->location,
                'categories' => $this->categories,
                'organization_name' => $this->organization_name,
            ]);
            $this->dispatch('dismissmodal', message: "MemberShip Added Successfully", parameter: '200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal', message: $e->getMessage(), parameter: '400');
        }
    }

    public function setCategory($value)
    {
        $this->categories=$value;
    }
    
    public function setGender($value)
    {
        $this->gender=$value;
    }
}

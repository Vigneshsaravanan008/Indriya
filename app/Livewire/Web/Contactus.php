<?php

namespace App\Livewire\Web;

use App\Models\Contactus as ModelsContactus;
use App\Models\PageManagement;
use App\Models\Setting;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Contactus extends Component
{
    public $name,$email,$phone_number,$message;

    protected $rules = [
        'name'=>'required',
        'email'=>'required',
        'phone_number'=>'required',
        'message'=>'required',
    ];

    public function render()
    {
        $setting=Setting::first();
        $page=PageManagement::where('url','/contact-us')->first();
        return view('livewire.web.contactus',compact("page","setting"))->extends('web.layouts.master')->section('content');
    }

    public function addContactus()
    {
        $this->validate();
        try {
            ModelsContactus::create([
                'name'=>$this->name,
                'email'=>$this->email,
                'phone_number'=>$this->phone_number,
                'message'=>$this->message,
            ]);
            $this->dispatch('dismissmodal',message:"Contact us Added Successfully" ,parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }
}

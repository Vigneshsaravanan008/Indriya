<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Profile extends Component
{
    public $name,$email,$phone_number,$image_path,$image,$password=null,$confirm_password=null;
    use WithFileUploads,ImageTrait;

    protected $rules=[
        'password'=>'required|required_with:confirm_password|same:confirm_password|min:8',
        'confirm_password'=>'required'
    ];

    public function render()
    {
        $this->name=Auth::guard('admin')->user()->name;
        $this->email=Auth::guard('admin')->user()->email;
        $this->phone_number=Auth::guard('admin')->user()->phone_number;
        $this->image_path=Auth::guard('admin')->user()->image;
        return view('livewire.admin.profile')->extends('admin.layouts.master')->section('content');
    }

    public function updateProfile()
    {
        $this->validate([
            'name'=>'required',
            'email'=>'required|unique:admins,email,'.Auth::guard('admin')->user()->id
        ]);

        $image=($this->image!=null)?$this->imagePath($this->image,"admin"):Admin::where('id',Auth::guard('admin')->user()->id)->pluck('image')->first();
        Admin::where('id',Auth::guard('admin')->user()->id)->update([
            'name'=>$this->name,
            'email'=>$this->email,
            'phone_number'=>$this->phone_number,
            'image'=>$image,
        ]);

        $this->dispatch('dismiss',message: 'Admin Updated Successfully',parameter:'200');
    }

    public function updatePassword()
    {
        $this->validate();

        Admin::where('id',Auth::guard('admin')->user()->id)->update([
            'password'=>Hash::make($this->confirm_password)
        ]);

        $this->dispatch('dismiss',message: 'Password Updated Successfully',parameter:'200');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        Session::flush();
        return redirect('admin/login');
    }

    public function setToggle()
    {
        Admin::where('id',Auth::guard("admin")->user()->id)->update([
            'is_dark_mode'=>!Auth::guard("admin")->user()->is_dark_mode
        ]);
        $this->dispatch('dismiss',message: 'Theme Updated Successfully',parameter:'200');
    }
}

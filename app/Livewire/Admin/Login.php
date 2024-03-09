<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email,$password;

    protected $rules = [
        'email'=>'required|email',
        'password'=>'required|min:8'
    ];

    protected $message =[
        'email.email'=>'Enter the Valid Email Address',
        'password'=>'Enter the password'
    ];

    public function updated($value)
    {
        $this->validateOnly($value);
    }

    public function loginForm()
    {
        $this->validate();
        if(Auth::guard('admin')->attempt(['email'=>$this->email, 'password'=>$this->password]))
        {
            return redirect()->route('admin.dashboard');
        }else{
            if(Admin::where('email',$this->email)->exists())
            {
                $this->dispatch('checkPassword',message: 'Password is Incorrect',parameter:'Password');
                return true;
            }else{
                $this->dispatch('checkPassword',message: 'Email is Incorrect',parameter:'Email');
                return true;
            }
        }
    }

    public function mount()
    {
        if(Auth::guard("admin")->check())
        {
            return redirect()->route('admin.dashboard');
        }
    }

    public function render()
    {
        return view('livewire.admin.login')->extends('admin.auth.master')->section('content');
    }
}

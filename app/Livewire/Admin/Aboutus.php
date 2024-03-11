<?php

namespace App\Livewire\Admin;

use App\Models\Aboutus as ModelsAboutus;
use App\Traits\ImageTrait;
use Livewire\Component;
use Livewire\WithFileUploads;

class Aboutus extends Component
{
    public $title,$short_description,$objective,$objective_content,$image,$vission,$mission,$id,$image_path;
    use WithFileUploads,ImageTrait;

    protected $rules=[
        'title'=>'required|max:225',
        'short_description'=>'required',
        'objective'=>'nullable',
        'vission'=>'required',
        'mission'=>'required',
        'image'=>'image|nullable',
    ];

    public function render()
    {
        $about_us=ModelsAboutus::first();
        if($about_us)
        {
            $this->id=$about_us->id;
            $this->title=$about_us->title;
            $this->short_description=$about_us->short_description;
            $this->objective=$about_us->objective;
            $this->objective_content=($this->objective_content==null)?$about_us->objective:$this->objective_content;
            $this->vission=$about_us->our_vission;
            $this->mission=$about_us->our_mission;
            $this->image_path=$about_us->image;
        }
        return view('livewire.admin.aboutus')->extends('admin.layouts.master')->section('content');
    }

    public function updateAboutus()
    {
        $this->validate();

        $image=($this->image!=null)?$this->imagePath($this->image,"about"):ModelsAboutus::pluck('image')->first();
        ModelsAboutus::updateOrCreate([],[
            'title'=>$this->title,
            'short_description'=>$this->short_description,
            'objective'=>$this->objective_content,
            'our_vission'=>$this->vission,
            'our_mission'=>$this->mission,
            'image'=>$image,
        ]);

        $this->dispatch('dismiss',message: 'Aboutus Updated Successfully',parameter:'200');
    }

    public function setObjective($value)
    {
        $this->objective_content=$value;
        return true;
    }
}

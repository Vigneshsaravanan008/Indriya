<?php

namespace App\Livewire\Admin;

use App\Models\Event as ModelsEvent;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class Event extends Component
{
    public $title,$image,$image_url,$description,$type,$id,$model_title="Add Event";
    
    use WithFileUploads,ImageTrait;
    use WithPagination;
    
    protected $rules = [
        'title'=>'required',
        'type'=>'required',
        'description'=>'required',
        'image'=>'nullable|image|max:2048',
    ];

    public function render()
    {
        $events=ModelsEvent::paginate(15);
        return view('livewire.admin.event',compact("events"))->extends('admin.layouts.master')->section('content');
    }

    public function calljs()
    {
        $this->dispatch('calljs');
        return true;
    }

    public function setType($value)
    {
        $this->type=$value;
    }

    public function addEvent()
    {
        $this->validate();
        try {
            $image_path=$this->imagePath($this->image,"event");

            ModelsEvent::create([
                'title'=>$this->title,
                'description'=>$this->description,
                'post_type'=>$this->type,
                'image'=>$image_path,
            ]);
            $text=($this->type==1)?'Events Added Successfully':'Campain Added Successfully';
            $this->dispatch('dismissmodal',message:$text ,parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e,parameter:'400');
        }
    }

    public function editEvent($id)
    {
        $event=ModelsEvent::where('id',$id)->first();
        
        if($event!=null)
        {
            $this->id=$event->id;
            $this->title=$event->title;
            $this->description=$event->description;
            $this->image_url=url($event->image);
            $this->model_title="Edit Event";
            $this->type=$event->post_type;
            $this->dispatch("message",parameter:"200");
        }else{
            $this->dispatch("message",message:"Event/Campain Not Found",parameter:"400");
        }

        return true;    
    }

    public function updateEvent()
    {
        $this->validate();
        try {
            $image=($this->image!=null)?$this->imagePath($this->image,"event"):ModelsEvent::where('id',$this->id)->pluck('image')->first();
            ModelsEvent::where('id',$this->id)->update([
                'title'=>$this->title,
                'post_type'=>$this->type,
                'description'=>$this->description,
                'image'=>$image,
            ]);
            $text=($this->type==1)?'Events Added Successfully':'Campain Added Successfully';
            $this->dispatch('dismissmodal',message: $text,parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e,parameter:'400');
        }
    }

    public function deleteEvent($value)
    {
        if(ModelsEvent::where('id',$value)->exists())
        {
            ModelsEvent::where('id',$value)->delete();
            $this->dispatch('delete',parameter:"200");
        }else{
            $this->dispatch('delete',parameter:"400",message:"Event/Campain Not Found");
        }
    }
}

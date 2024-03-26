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
    public $title,$image,$image_url,$author_image_url,$description,$type,$author,$author_image,$location,$date,$start_time,$end_time,$id,$model_title="Add Event",$slug,$meta_title,$meta_keyword,$meta_description,$short_description,$description_content;
    
    use WithFileUploads,ImageTrait;
    use WithPagination;
    
    protected $rules = [
        'title'=>'required',
        'type'=>'required',
        'short_description'=>'required|max:500',
        'description'=>'nullable',
        'slug'=>'required',
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
        // dd(request());
        $this->validate();
        try {
            $image_path=$this->imagePath($this->image,"event");
            $author_image_path=$this->imagePath($this->author_image,"event");

            ModelsEvent::create([
                'title'=>$this->title,
                'short_description'=>$this->short_description,
                'description'=>$this->description_content,
                'post_type'=>$this->type,
                'location'=>$this->location,
                'slug'=>$this->slug,
                'date'=>$this->date,
                'author'=>$this->author,
                'author_image'=>$author_image_path,
                'start_time'=>$this->start_time,
                'meta_title'=>$this->meta_title,
                'meta_keyword'=>$this->meta_keyword,
                'meta_description'=>$this->meta_description,
                'end_time'=>$this->end_time,
                'image'=>$image_path,
            ]);
            $text=($this->type==1)?'Events Added Successfully':'Campain Added Successfully';
            $this->dispatch('dismissmodal',message:$text ,parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function editEvent($id)
    {
        $event=ModelsEvent::where('id',$id)->first();
        
        if($event!=null)
        {
            $this->id=$event->id;
            $this->title=$event->title;
            $this->short_description=$event->short_description;
            $this->description_content=$event->description;
            $this->description=$event->description;
            $this->location=$event->location;
            $this->slug=$event->slug;
            $this->author=$event->author;
            $this->date=$event->date;
            $this->start_time=$event->start_time;
            $this->end_time=$event->end_time;
            $this->meta_title=$event->meta_title;
            $this->meta_keyword=$event->meta_keyword;
            $this->meta_description=$event->meta_description;
            $this->image_url=url($event->image);
            $this->author_image_url=url($event->author_image);
            $this->model_title="Edit Event";
            $this->type=$event->post_type;
            $this->dispatch("message",parameter:"200",description:$this->description_content);
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
            $author_image_path=($this->author_image!=null)?$this->imagePath($this->author_image,"event"):ModelsEvent::where('id',$this->id)->pluck('author_image')->first();

            ModelsEvent::where('id',$this->id)->update([
                'title'=>$this->title,
                'short_description'=>$this->short_description,
                'description'=>$this->description_content,
                'post_type'=>$this->type,
                'image'=>$image,
                'author'=>$this->author,
                'author_image'=>$author_image_path,
                'location'=>$this->location,
                'slug'=>$this->slug,
                'date'=>$this->date,
                'start_time'=>$this->start_time,
                'end_time'=>$this->end_time,
                'meta_title'=>$this->meta_title,
                'meta_keyword'=>$this->meta_keyword,
                'meta_description'=>$this->meta_description,
            ]);
            $text=($this->type==1)?'Events Added Successfully':'Campain Added Successfully';
            $this->dispatch('dismissmodal',message: $text,parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
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

    public function setContent($value)
    {
        $this->description_content=$value;
        return true;
    }
}

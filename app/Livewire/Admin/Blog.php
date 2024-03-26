<?php

namespace App\Livewire\Admin;

use App\Models\Blog as ModelsBlog;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class Blog extends Component
{
    public $name,$banner_image,$image_url,$description,$id,$model_title="Add Blogs",$slug,$meta_title,$meta_keyword,$meta_description,$short_description,$description_content;

    use WithFileUploads,ImageTrait;
    use WithPagination;

    protected $rules = [
        'name'=>'required',
        'short_description'=>'required|max:500',
        'description'=>'nullable',
        'slug'=>'required',
        'banner_image'=>'nullable|image|max:2048',
    ];

    public function render()
    {
        $blogs=ModelsBlog::paginate(15);
        $blog_categories=BlogCategory::select('id',"name")->get();
        return view('livewire.admin.blog',compact("blogs","blog_categories"))->extends('admin.layouts.master')->section('content');
    }

    public function calljs()
    {
        $this->dispatch('calljs');
        return true;
    }

    public function addBlog()
    {
        $this->validate();
        try {
            $banner_image=$this->imagePath($this->banner_image,"blog");

            ModelsBlog::create([
                'name'=>$this->name,
                'short_description'=>$this->short_description,
                'description'=>$this->description_content,
                'slug'=>$this->slug,
                'meta_title'=>$this->meta_title,
                'meta_keyword'=>$this->meta_keyword,
                'meta_description'=>$this->meta_description,
                'banner_image'=>$banner_image,
            ]);
            $text='Blogs Added Successfully';
            $this->dispatch('dismissmodal',message:$text ,parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function editBlog($id)
    {
        $blog=ModelsBlog::where('id',$id)->first();
        
        if($blog!=null)
        {
            $this->id=$blog->id;
            $this->name=$blog->name;
            $this->short_description=$blog->short_description;
            $this->description_content=$blog->description;
            $this->description=$blog->description;
            $this->slug=$blog->slug;
            $this->meta_title=$blog->meta_title;
            $this->meta_keyword=$blog->meta_keyword;
            $this->meta_description=$blog->meta_description;
            $this->image_url=url($blog->image);
            $this->model_title="Edit Blog";
            $this->dispatch("message",parameter:"200",description:$this->description_content);
        }else{
            $this->dispatch("message",message:"Blogs Not Found",parameter:"400");
        }

        return true;    
    }

    public function updateBlog()
    {
        $this->validate();
        try {
            $banner_image=($this->banner_image!=null)?$this->imagePath($this->banner_image,"blog"):ModelsBlog::where('id',$this->id)->pluck('banner_image')->first();

            ModelsBlog::where('id',$this->id)->update([
                'name'=>$this->name,
                'short_description'=>$this->short_description,
                'description'=>$this->description_content,
                'banner_image'=>$banner_image,
                'slug'=>$this->slug,
                'meta_title'=>$this->meta_title,
                'meta_keyword'=>$this->meta_keyword,
                'meta_description'=>$this->meta_description,
            ]);
            $text='Blogs Updated Successfully';
            $this->dispatch('dismissmodal',message: $text,parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function deleteEvent($value)
    {
        if(ModelsBlog::where('id',$value)->exists())
        {
            ModelsBlog::where('id',$value)->delete();
            $this->dispatch('delete',parameter:"200");
        }else{
            $this->dispatch('delete',parameter:"400",message:"Blog Not Found");
        }
    }

    public function setContent($value)
    {
        $this->description_content=$value;
        return true;
    }

}

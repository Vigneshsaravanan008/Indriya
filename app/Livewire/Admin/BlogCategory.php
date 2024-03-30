<?php

namespace App\Livewire\Admin;

use App\Models\BlogCategory as ModelsBlogCategory;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class BlogCategory extends Component
{
    public $name,$title="Add Product Category",$status,$id,$meta_title,$meta_keyword,$meta_description,$slug;

    use WithPagination;
    protected $rules=[
        'name'=>'required|max:225',
    ];
    public function render()
    {
        $blog_categories=ModelsBlogCategory::paginate(15);
        return view('livewire.admin.blog-category',compact("blog_categories"))->extends('admin.layouts.master')->section('content');
    }

    public function addBlogCategory()
    {
        $this->validate();
        try {
            ModelsBlogCategory::create([
                'name'=>$this->name,
                'status'=>1,
                'slug'=>$this->slug,
                'meta_title'=>$this->meta_title,
                'meta_keyword'=>$this->meta_keyword,
                'meta_description'=>$this->meta_description,
            ]);

            $this->dispatch('dismissmodal',message: 'BlogCategory Added Successfully',parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function editBlogCategory($id)
    {
        $blog_category=ModelsBlogCategory::where('id',$id)->first();

        if($blog_category!=null)
        {
            $this->id=$blog_category->id;
            $this->title="Edit BlogCategory";
            $this->name=$blog_category->name;
            $this->slug=$blog_category->slug;
            $this->meta_title=$blog_category->meta_title;
            $this->meta_keyword=$blog_category->meta_keyword;
            $this->meta_description=$blog_category->meta_description;
            $this->dispatch("message",parameter:"200");
        }else{
            $this->dispatch("message",message:"BlogCategory Not Found",parameter:"400");
        }

        return true;
    }

    public function updateBlogCategory()
    {
        $this->validate();
        try {
            ModelsBlogCategory::where('id',$this->id)->update([
                'name'=>$this->name,
                'slug'=>$this->slug,
                'meta_title'=>$this->meta_title,
                'meta_keyword'=>$this->meta_keyword,
                'meta_description'=>$this->meta_description,
            ]);

            $this->dispatch('dismissmodal',message: 'BlogCategory Updated Successfully',parameter:'200');
        } catch (\Exception $e) {
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function deleteBlogCategory($value)
    {
        if(ModelsBlogCategory::where('id',$value)->exists())
        {
            ModelsBlogCategory::where('id',$value)->delete();
            $this->dispatch('delete',parameter:"200");
        }else{
            $this->dispatch('delete',parameter:"400",message:"BlogCategory Not Found");
        }
    }

    public function statusBlogCategory($id)
    {
        try {
            ModelsBlogCategory::where("id",$id)->update([
                'status'=>!ModelsBlogCategory::where("id",$id)->pluck('status')->first()
            ]);
            $this->dispatch('dismissmodal',message: 'BlogCategory Status Updated Successfully',parameter:'200');
        } catch (\Throwable $th) {
            $this->dispatch('dismissmodal',message: $th->getMessage(),parameter:'400');
        }
    }
}

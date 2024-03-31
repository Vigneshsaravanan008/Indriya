<?php

namespace App\Livewire\Web;

use App\Models\Blog;
use App\Models\BlogCategory as ModelsBlogCategory;
use Livewire\Component;
use Livewire\WithPagination;

class BlogCategory extends Component
{
    use WithPagination;

    public $blog_categories,$recent_blogs,$blogcategory;

    public function mount($slug)
    {
        $this->blogcategory=ModelsBlogCategory::where('slug',$slug)->first();
        $this->blog_categories=ModelsBlogCategory::select('id',"name","slug")->get();
        $this->recent_blogs=Blog::where('blog_category_id',$this->blogcategory->id)->get();
    }

    public function render()
    {

        $blogs=Blog::where('blog_category_id',$this->blogcategory->id)->paginate(3);
        if($blogs!=null)
        {
            return view('livewire.web.blog-category',compact('blogs'))->extends('web.layouts.master')->section('content');
        }else{
            abort("404");
        }
    }
}

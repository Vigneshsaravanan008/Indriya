<?php

namespace App\Livewire\Web;

use App\Models\Blog as ModelsBlog;
use App\Models\BlogCategory as ModelsBlogCategory;
use App\Models\PageManagement;
use Livewire\Component;
use Livewire\WithPagination;

class Blog extends Component
{
    use WithPagination;
    public $blogName="";

    public function render()
    {
        if($this->blogName!=null)
        {
            $blogs=ModelsBlog::where("name","LIKE","%".$this->blogName."%")->paginate(9);
        }else{
            $blogs=ModelsBlog::paginate(9);
        }
        $page=PageManagement::where("url","blog")->first();
        $blog_categories=ModelsBlogCategory::select('id',"name","slug")->get();
        $recent_blogs=ModelsBlog::where("status",1)->take(4)->get()->shuffle();
        return view('livewire.web.blog',compact('blog_categories','blogs','recent_blogs','page'))->extends('web.layouts.master')->section('content');
    }
}

<?php

namespace App\Livewire\Web;

use App\Models\Blog;
use Livewire\Component;

class ViewBlog extends Component
{
    public $blog;

    public function mount($slug)
    {
        $this->blog=Blog::where('slug',$slug)->first();
    }

    public function render()
    {
        if($this->blog!=null)
        {
            return view('livewire.web.view-blog')->extends('web.layouts.master')->section("content");
        }else{
            abort("404");
        }
    }
}

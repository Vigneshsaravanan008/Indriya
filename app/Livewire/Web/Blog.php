<?php

namespace App\Livewire\Web;

use App\Models\Blog as ModelsBlog;
use App\Models\BlogCategory as ModelsBlogCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Blog extends Component
{
    use WithPagination;
    public function render()
    {
        $blog_categories=ModelsBlogCategory::select('id',"name","slug")->get();
        $blogs=ModelsBlog::paginate(9);
        $recent_blogs=ModelsBlog::take(4)->get()->shuffle();
        return view('livewire.web.blog',compact('blog_categories','blogs','recent_blogs'))->extends('web.layouts.master')->section('content');
    }
}

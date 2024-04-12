<?php

namespace App\Livewire\Admin;

use App\Models\ProductGallery as ModelsProductGallery;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ProductGallery extends Component
{
    use WithFileUploads;
    public $photo;

    public function render()
    {
        $galleries=ModelsProductGallery::all();
        return view('livewire.admin.product-gallery',compact("galleries"))->extends("admin.layouts.master")->section("content");
    }

    public function uploadGallery()
    {
        return $this->photo;
    }
}

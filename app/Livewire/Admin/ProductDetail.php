<?php

namespace App\Livewire\Admin;

use App\Models\AdditionalDescription;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Traits\ImageTrait;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class ProductDetail extends Component
{
    public $product,$gallery,$product_information,$page,$photo;
    use WithFileUploads,ImageTrait;
    use WithPagination;
  
    protected $rules=[
        'photo'=>'required|image',
    ];

    public function mount($id)
    {
        $this->page=(request()->routeIs("admin.productdetail")?1:(request()->routeIs("admin.productgallery")?2:3));
        $this->product=Product::where('id',$id)->first();
        $this->gallery=ProductGallery::where('id',$id)->get();
        $this->product_information=AdditionalDescription::where('id',$id)->first();
    }

    public function render()
    {
        return view('livewire.admin.product-detail')->extends("admin.layouts.master")->section("content");
    }

    public function setPage($value)
    {
        $this->page=$value;
    }

    public function uploadGallery()
    {
        $this->validate();
        $photo=$this->imagePath($this->photo,"gallery");
        ProductGallery::create([
            'product_id'=>$this->product->id,
            'document_path'=>$photo,
            'document_image'=>$this->photo->getClientOriginalName()
        ]);
        $this->dispatch('dismissmodal',message: 'Gallery Added Successfully',parameter:'200');
    }

    public function deleteGallery($value)
    {
        if(ProductGallery::where('id',$value)->exists())
        {
            ProductGallery::where('id',$value)->delete();
            $this->dispatch('delete',parameter:"200");
        }else{
            $this->dispatch('delete',parameter:"400",message:"Gallery Not Found");
        }
    }
}

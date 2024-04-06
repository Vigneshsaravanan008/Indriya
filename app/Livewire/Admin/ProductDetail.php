<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product,$gallery,$product_information;
  
    public function mount($id)
    {
        $this->product=Product::where('id',$id)->first();
        // $this->gallery=ProductGallery
    }

    public function render()
    {
        return view('livewire.admin.product-detail');
    }
}

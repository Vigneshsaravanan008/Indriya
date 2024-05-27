<?php

namespace App\Livewire\Admin;

use App\Models\Product as ModelsProduct;
use App\Models\ProductCategory;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class Product extends Component
{
    public $product_category_id,$name,$title="Add Product",$short_description,$description,$description_content,$status,$id,$meta_title,$meta_keyword,$meta_description,$slug,$image_url,$image,$price,$total_stocks;
    use WithPagination,ImageTrait;
    use WithFileUploads;

    protected $rules=[
        'name'=>'required|max:225',
    ];

    public function render()
    {
        $product_categories=ProductCategory::select("id","name")->get();
        $products=ModelsProduct::paginate(15);
        return view('livewire.admin.product',compact("product_categories","products"))->extends("admin.layouts.master")->section("content");
    }

    public function calljs()
    {
        $this->dispatch('calljs');
        return true;
    }

    public function setType($value)
    {
        $this->product_category_id=$value;
    }

    public function addProduct()
    {
        $this->validate();
        try {
            $image_path=$this->imagePath($this->image,"product");

            ModelsProduct::create([
                'name'=>$this->name,
                'slug'=>$this->slug,
                'image'=>$image_path,
                'short_description'=>$this->short_description,
                'total_stocks'=>$this->total_stocks,
                'description'=>$this->description_content,
                'price'=>$this->price,
                'product_category_id'=>$this->product_category_id,
                'meta_title'=>$this->meta_title,
                'meta_keyword'=>$this->meta_keyword,
                'meta_description'=>$this->meta_description,
            ]);
            $this->dispatch('dismissmodal',message:"Product Added Successfully",parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function editProduct($id)
    {
        $product=ModelsProduct::where('id',$id)->first();
        
        if($product!=null)
        {
            $this->id=$product->id;
            $this->name=$product->name;
            $this->product_category_id=$product->product_category_id;
            $this->short_description=$product->short_description;
            $this->description_content=$product->description;
            $this->total_stocks=$product->total_stocks;
            $this->description=$product->description;
            $this->slug=$product->slug;
            $this->price=$product->price;
            $this->meta_title=$product->meta_title;
            $this->meta_keyword=$product->meta_keyword;
            $this->meta_description=$product->meta_description;
            $this->image_url=url($product->image);
            $this->title="Edit Product";
            $this->dispatch("message",parameter:"200",description:$this->description_content);
        }else{
            $this->dispatch("message",message:"Product Not Found",parameter:"400");
        }

        return true;    
    }

    public function updateProduct()
    {
        $this->validate();
        try {
            $image=($this->image!=null)?$this->imagePath($this->image,"event"):ModelsProduct::where('id',$this->id)->pluck('image')->first();

            ModelsProduct::where('id',$this->id)->update([
                'name'=>$this->name,
                'short_description'=>$this->short_description,
                'description'=>$this->description_content,
                'product_category_id'=>$this->product_category_id,
                'total_stocks'=>$this->total_stocks,
                'image'=>$image,
                'price'=>$this->price,
                'slug'=>$this->slug,
                'meta_title'=>$this->meta_title,
                'meta_keyword'=>$this->meta_keyword,
                'meta_description'=>$this->meta_description,
            ]);
            $this->dispatch('dismissmodal',message: "Product Updated Successfully",parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function deleteProduct($value)
    {
        if(ModelsProduct::where('id',$value)->exists())
        {
            ModelsProduct::where('id',$value)->delete();
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

    public function statusProduct($id)
    {
        try {
            ModelsProduct::where("id",$id)->update([
                'status'=>!ModelsProduct::where("id",$id)->pluck('status')->first()
            ]);
            $this->dispatch('dismissmodal',message: 'Product Status Updated Successfully',parameter:'200');
        } catch (\Throwable $th) {
            $this->dispatch('dismissmodal',message: $th->getMessage(),parameter:'400');
        }
    }
}

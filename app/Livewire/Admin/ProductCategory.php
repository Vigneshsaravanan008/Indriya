<?php

namespace App\Livewire\Admin;

use App\Models\ProductCategory as ModelsProductCategory;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ProductCategory extends Component
{
    public $name,$title="Add Product Category",$status,$id,$meta_title,$meta_keyword,$meta_description,$slug;

    protected $rules=[
        'name'=>'required|max:225',
    ];

    public function render()
    {
        $product_categories=ModelsProductCategory::paginate(15);
        return view('livewire.admin.product-category',compact('product_categories'))->extends('admin.layouts.master')->section('content');
    }

    public function addProductCategory()
    {
        $this->validate();
        try {
            ModelsProductCategory::create([
                'name'=>$this->name,
                'status'=>1,
                'slug'=>$this->slug,
                'meta_title'=>$this->meta_title,
                'meta_keyword'=>$this->meta_keyword,
                'meta_description'=>$this->meta_description,
            ]);

            $this->dispatch('dismissmodal',message: 'ProductCategory Added Successfully',parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function editProductCategory($id)
    {
        $product_category=ModelsProductCategory::where('id',$id)->first();

        if($product_category!=null)
        {
            $this->id=$product_category->id;
            $this->title="Edit ProductCategory";
            $this->name=$product_category->name;
            $this->slug=$product_category->slug;
            $this->meta_title=$product_category->meta_title;
            $this->meta_keyword=$product_category->meta_keyword;
            $this->meta_description=$product_category->meta_description;
            $this->dispatch("message",parameter:"200");
        }else{
            $this->dispatch("message",message:"ProductCategory Not Found",parameter:"400");
        }

        return true;
    }

    public function updateProductCategory()
    {
        $this->validate();
        try {
            ModelsProductCategory::where('id',$this->id)->update([
                'name'=>$this->name,
                'slug'=>$this->slug,
                'meta_title'=>$this->meta_title,
                'meta_keyword'=>$this->meta_keyword,
                'meta_description'=>$this->meta_description,
            ]);

            $this->dispatch('dismissmodal',message: 'ProductCategory Updated Successfully',parameter:'200');
        } catch (\Exception $e) {
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function deleteProductCategory($value)
    {
        if(ModelsProductCategory::where('id',$value)->exists())
        {
            ModelsProductCategory::where('id',$value)->delete();
            $this->dispatch('delete',parameter:"200");
        }else{
            $this->dispatch('delete',parameter:"400",message:"ProductCategory Not Found");
        }
    }

    public function statusProductCategory($id)
    {
        try {
            ModelsProductCategory::where("id",$id)->update([
                'status'=>!ModelsProductCategory::where("id",$id)->pluck('status')->first()
            ]);
            $this->dispatch('dismissmodal',message: 'ProductCategory Status Updated Successfully',parameter:'200');
        } catch (\Throwable $th) {
            $this->dispatch('dismissmodal',message: $th->getMessage(),parameter:'400');
        }
    }
}

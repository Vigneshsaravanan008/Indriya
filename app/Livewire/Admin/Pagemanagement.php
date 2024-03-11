<?php

namespace App\Livewire\Admin;

use App\Models\PageManagement as ModelsPageManagement;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class Pagemanagement extends Component
{
    public $meta_title,$meta_keyword,$meta_description,$og_image,$id,$model_title="Add PageManagement",$image_url,$url,$title;
    
    use WithFileUploads,ImageTrait;
    use WithPagination;
    
    protected $rules = [
        'title'=>'required',
        'url'=>'required',
        'meta_title'=>'required',
        'meta_keyword'=>'required',
        'meta_description'=>'required',
        'og_image'=>'nullable|image|max:2048',
    ];

    public function render()
    {
        $pagemanagements=ModelsPageManagement::paginate(15);
        return view('livewire.admin.pagemanagement',compact('pagemanagements'))->extends('admin.layouts.master')->section('content');
    }

    public function addPageManagement()
    {
        $this->validate();
        try {
            $image_path=$this->imagePath($this->og_image,"pagemanagement");

            ModelsPageManagement::create([
                'title'=>$this->title,
                'url'=>$this->url,
                'meta_title'=>$this->meta_title,
                'meta_keyword'=>$this->meta_keyword,
                'meta_description'=>$this->meta_description,
                'og_image'=>$image_path,
            ]);

            $this->dispatch('dismissmodal',message: 'PageManagement Added Successfully',parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e,parameter:'400');
        }
    }

    public function editPageManagement($id)
    {
        $page_management=ModelsPageManagement::where('id',$id)->first();
        
        if($page_management!=null)
        {
            $this->id=$page_management->id;
            $this->title=$page_management->title;
            $this->url=$page_management->url;
            $this->meta_title=$page_management->meta_title;
            $this->meta_keyword=$page_management->meta_keyword;
            $this->meta_description=$page_management->meta_description;
            $this->image_url=url($page_management->og_image);
            $this->model_title="Edit PageManagement";
            $this->dispatch("message",parameter:"200");
        }else{
            $this->dispatch("message",message:"PageManagement Not Found",parameter:"400");
        }

        return true;
    }

    public function updatePageManagement()
    {
        $this->validate();
        try {
            $og_image=($this->og_image!=null)?$this->imagePath($this->og_image,"pagemanagement"):ModelsPageManagement::where('id',$this->id)->pluck('og_image')->first();
            
            ModelsPageManagement::where('id',$this->id)->update([
                'title'=>$this->title,
                'url'=>$this->url,
                'meta_title'=>$this->meta_title,
                'meta_keyword'=>$this->meta_keyword,
                'meta_description'=>$this->meta_description,
                'og_image'=>$og_image,
            ]);

            $this->dispatch('dismissmodal',message: 'Pagemanagement Updated Successfully',parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e,parameter:'400');
        }
    }

    public function deletePageManagement($value)
    {
        if(ModelsPageManagement::where('id',$value)->exists())
        {
            ModelsPageManagement::where('id',$value)->delete();
            $this->dispatch('delete',parameter:"200");
        }else{
            $this->dispatch('delete',parameter:"400",message:"PageManagement Not Found");
        }
    }
}

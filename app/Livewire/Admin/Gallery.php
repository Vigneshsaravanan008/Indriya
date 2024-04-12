<?php

namespace App\Livewire\Admin;

use App\Models\Gallery as ModelsGallery;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class Gallery extends Component
{

    public $type, $image;
    use WithPagination, ImageTrait;
    use WithFileUploads;

    protected $rules = [
        'image' => 'required|image',
    ];

    public function render()
    {
        $gallery = ModelsGallery::paginate(15);
        return view('livewire.admin.gallery', compact("gallery"))->extends("admin.layouts.master")->section("content");
    }

    public function setType($value)
    {
        $this->type = $value;
    }

    public function uploadGallery()
    {
        $this->validate();
        try {
            $image_path = $this->imagePath($this->image, "banner");

            ModelsGallery::create([
                'page' => $this->type,
                'document_path' => $image_path,
                'document_name' => $this->image->getClientOriginalName(),
                'status' => 1
            ]);

            $this->dispatch('dismissmodal', message: "Gallery Added Successfully", parameter: '200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal', message: $e->getMessage(), parameter: '400');
        }
    }

    public function deleteGallery($value)
    {
        if(ModelsGallery::where('id',$value)->exists())
        {
            ModelsGallery::where('id',$value)->delete();
            $this->dispatch('delete',parameter:"200");
        }else{
            $this->dispatch('delete',parameter:"400",message:"Gallery Not Found");
        }
    }

    public function statusGallery($id)
    {
        try {
            ModelsGallery::where("id", $id)->update([
                'status' => !ModelsGallery::where("id", $id)->pluck('status')->first()
            ]);
            $this->dispatch('dismissmodal', message: 'Gallery Status Updated Successfully', parameter: '200');
        } catch (\Throwable $th) {
            $this->dispatch('dismissmodal', message: $th->getMessage(), parameter: '400');
        }
    }
}

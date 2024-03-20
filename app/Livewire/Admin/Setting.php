<?php

namespace App\Livewire\Admin;

use App\Models\Seo;
use App\Models\Setting as ModelsSetting;
use App\Models\Social;
use App\Traits\ImageTrait;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Setting extends Component
{
    public $name,$email,$phone_number,$address,$address_content,$logo,$favicon,$common_image,$id,$logo_path,$favicon_path,$common_image_path,$meta_title,$meta_keyword,$meta_description,$og_image,$seo_id,$og_image_path,$facebook_url,$instagram_url,$twitter_url;
    use WithFileUploads,ImageTrait;

    protected $rules = [
        'name'=>'required|max:25',
        'email'=>'required|max:25',
        'phone_number'=>'nullable',
        'address'=>'nullable',
        'logo'=>'nullable',
        'favicon'=>'nullable',
        'common_image'=>'nullable',
    ];

    public function render()
    {
        $setting=ModelsSetting::first();
        $seo=Seo::first();
        $social=Social::first();
        if($setting!=null)
        {
            $this->id=$setting->id;
            $this->seo_id=@$seo->id;
            $this->name=$setting->name;
            $this->email=$setting->email;
            $this->phone_number=$setting->phone_number;
            $this->address=$setting->address;
            $this->common_image_path=$setting->common_image;
            $this->favicon_path=$setting->favicon;
            $this->logo_path=$setting->logo;
            $this->meta_title=@$seo->meta_title;
            $this->meta_keyword=@$seo->meta_keyword;
            $this->meta_description=@$seo->meta_description;
            $this->og_image_path=@$seo->og_image;
            $this->facebook_url=@$social->facebook_url;
            $this->instagram_url=@$social->instagram_url;
            $this->twitter_url=@$social->twitter_url;
            $this->dispatch("message",parameter:"200");
        }
        return view('livewire.admin.setting')->extends('admin.layouts.master')->section('content');
    }

    public function updateSetting()
    {
        $this->validate();
        $common_image=($this->common_image!=null)?$this->imagePath($this->common_image,"companyimage"):ModelsSetting::pluck('common_image')->first();
        $favicon=($this->favicon!=null)?$this->imagePath($this->favicon,"companyimage"):ModelsSetting::pluck('favicon')->first();
        $logo=($this->logo!=null)?$this->imagePath($this->logo,"companyimage"):ModelsSetting::pluck('logo')->first();
        $datas=[
            'name'=>$this->name,
            'email'=>$this->email,
            'address'=>$this->address,
            'phone_number'=>$this->phone_number,
            'common_image'=>$common_image,
            'favicon'=>$favicon,
            'logo'=>$logo,
        ];
        ModelsSetting::updateOrCreate(['id'=>$this->id],$datas);

        $this->dispatch('dismiss',message: 'Setting Updated Successfully',parameter:'200');
    }

    public function updateSeo()
    {
        $this->validate([
            'meta_title'=>'required',
            'meta_keyword'=>'required',
            'meta_description'=>'required',
            'og_image'=>'image|max:2048|nullable',
        ]);
        $og_image=($this->og_image!=null)?$this->imagePath($this->og_image,"companyimage"):Seo::pluck('og_image')->first();
        $datas=[
            'meta_title'=>$this->meta_title,
            'meta_keyword'=>$this->meta_keyword,
            'meta_description'=>$this->meta_description,
            'og_image'=>$og_image,
        ];
        Seo::updateOrCreate(['id'=>$this->seo_id],$datas);
        $this->dispatch('dismiss',message: 'SEO Updated Successfully',parameter:'200');
    }

    public function updateSocial()
    {
        $this->validate([
            'twitter_url'=>'required',
            'facebook_url'=>'required',
            'instagram_url'=>'required',
        ]);
        $datas=[
            'twitter_url'=>$this->twitter_url,
            'facebook_url'=>$this->facebook_url,
            'instagram_url'=>$this->instagram_url,
        ];
        Social::updateOrCreate(['id'=>$this->seo_id],$datas);
        $this->dispatch('dismiss',message: 'Social Links Updated Successfully',parameter:'200');
    }
    
}

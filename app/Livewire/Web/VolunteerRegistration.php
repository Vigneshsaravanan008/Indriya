<?php

namespace App\Livewire\Web;

use App\Models\PageManagement;
use App\Models\VolunteerRegistration as ModelsVolunteerRegistration;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use App\Traits\ImageTrait;

class VolunteerRegistration extends Component
{
    public $name,$country_code="91",$whatsapp_country_code="91",$emergency_country_code="91", $calling_number,$whatsapp_number,$emergency_contact_person_name,$emergency_phone_no, $email="", $volunteer_before="",$volunteer_other_name, $dob, $blood_group, $city="", $other_city,$skills,$available_week,$new_team_description,$why_volunteering_description,$suggestion_description,$image;

    use WithFileUploads,ImageTrait;

    protected $rules = [
        'name' => 'required',
        'calling_number' => 'required|max:11',
        'whatsapp_number' => 'required',
        'email' => 'required|email',
        'emergency_contact_person_name' => 'required',
        'emergency_phone_no' => 'required|integer',
        'dob' => 'required',
        'blood_group' => 'nullable',
        'city' => 'required',
        'other_city' => 'nullable',
        'image' => 'nullable',
        'skills' => 'required',
        'suggestion_description' => 'nullable',
    ];
    
    public function render()
    {
        $page=PageManagement::where("url","volunteership")->first();
        return view('livewire.web.volunteer-registration',compact("page"))->extends("web.layouts.master")->section("content");
    }

    public function addMembership()
    {
        $this->validate();
        try{
            if($this->image!=null)
            {
                $image_path=$this->imagePath($this->image,"volunteerImage");
            }else{
                $image_path=null;
            }
            ModelsVolunteerRegistration::create([
                'name'=>$this->name,
                'phone_no'=>"+".$this->country_code." ".$this->calling_number,
                'whatsapp_no'=>"+".$this->whatsapp_country_code." ".$this->whatsapp_number,
                'email'=>$this->email,
                'emergency_contact_person_name'=>$this->emergency_contact_person_name,
                'emergency_phone_no'=>"+".$this->emergency_country_code." ".$this->emergency_phone_no,
                'dob'=>$this->dob,
                'blood_group'=>$this->blood_group,
                'city'=>$this->city,
                'other_city'=>$this->other_city,
                'skills'=>$this->skills,
                'image'=>$image_path,
                'suggestion_description'=>$this->suggestion_description,
            ]);
            $this->dispatch('dismissmodal', message: "VolunteerShip Added Successfully", parameter: '200');
        }catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal', message: $e->getMessage(), parameter: '400');
        }
    }

    public function setCity($value)
    {
        $this->city=$value;
    }

    public function setVolunteer($value)
    {
        $this->volunteer_before=$value;
    }
    
    public function setVolunteerWeek($value)
    {
        $this->available_week=$value;
    }

    public function setCallingNumber($value)
    {
        $this->country_code=$value;
    }

    public function setWhatsappNumber($value)
    {
        $this->whatsapp_country_code=$value;
    }

    public function setEmergencyNumber($value)
    {
        $this->emergency_country_code=$value;
    }

    public function setBloodGroup($value)
    {
        $this->blood_group=$value;
    }
   
}

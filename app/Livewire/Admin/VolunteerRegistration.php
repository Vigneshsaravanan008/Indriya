<?php

namespace App\Livewire\Admin;

use App\Exports\VolunteerExport;
use App\Models\VolunteerRegistration as ModelsVolunteerRegistration;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class VolunteerRegistration extends Component
{
    public $name, $calling_number,$whatsapp_number,$emergency_contact_person_name,$emergency_phone_no, $email, $volunteer_before,$volunteer_other_name, $dob, $blood_group, $city, $other_city,$skills,$available_week,$new_team_description,$why_volunteering_description,$suggestion_description,$image_url;
    public $volunteer_name="";
    public $volunteer_email="";
    public $volunteer_number="";
    use WithPagination;

    public function render()
    {
        if($this->volunteer_name!=null || $this->volunteer_email !=null || $this->volunteer_number !=null)
        {
            $volunteer_registrations=ModelsVolunteerRegistration::where('name',"LIKE","%".$this->volunteer_name."%")->where('email',"LIKE","%".$this->volunteer_email."%")->where('phone_no',"LIKE","%".$this->volunteer_number."%")->paginate(15);
            return view('livewire.admin.volunteer-registration',compact("volunteer_registrations"))->extends("admin.layouts.master")->section("content");
        }else{
            $volunteer_registrations=ModelsVolunteerRegistration::orderBy("id","desc")->paginate(15);
            return view('livewire.admin.volunteer-registration',compact("volunteer_registrations"))->extends("admin.layouts.master")->section("content");
        }
    }

    public function view($id)
    {
        $volunteer=ModelsVolunteerRegistration::where('id',$id)->first();
        if($volunteer!=null)
        {
            $this->name=$volunteer->name;
            $this->calling_number=$volunteer->phone_no;
            $this->whatsapp_number=$volunteer->whatsapp_no;
            $this->emergency_contact_person_name=$volunteer->emergency_contact_person_name;
            $this->emergency_phone_no=$volunteer->emergency_phone_no;
            $this->email=$volunteer->email;
            $this->volunteer_before=$volunteer->volunteer_before;
            $this->volunteer_other_name=$volunteer->volunteer_other_name;
            $this->dob=$volunteer->dob;
            $this->blood_group=$volunteer->blood_group;
            $this->city=$volunteer->city;
            $this->other_city=$volunteer->other_city;
            $this->skills=$volunteer->skills;
            $this->available_week=$volunteer->available_week;
            $this->new_team_description=$volunteer->new_team_description;
            $this->why_volunteering_description=$volunteer->why_volunteering_description;
            $this->suggestion_description=$volunteer->suggestion_description;
            $this->image_url=$volunteer->image? url($volunteer->image):null;
            $this->dispatch("message",parameter:"200");
        }else{
            $this->dispatch("message",message:"Volunteer Registration Not Found",parameter:"400");
        }

        return true;    
    }

    public function export() 
    {
        return Excel::download(new VolunteerExport, 'Volunteers.xlsx');
    }

}

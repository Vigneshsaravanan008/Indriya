@section("meta-details")
@include("web.seo.custom",["common"=>$page])
@endsection
<div>
     <section wire:ignore class="banner__inner-page bg-image pt-160 pb-160 bg-image"
     data-background="{{asset("site-images/about/volunteer.jpeg")}}">
     <div class="container">
         <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Volunteer</h2>
         <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
             <a href="{{url("/")}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Volunteer Registration</span>
         </div>
     </div>
 </section>

 <section class="project-single-area pt-120 pb-120">
     <div class="container">
         <div class="project-single__item">
             <h3 class="fs-30 mb-30">Aiding the Homeless Population in South Africa</h3>
             <p class="mb-20">Mauris sapien neque, placerat ut dolor nec, egestas tincidunt felis. Sed in ornare
                 quam, finibus aliquam justo duis eros
                 quam, semper at libero sed, vehicula the consequat arcu. In ornare, enim at egestas bibendum,
                 ligula ante congue arcu,
                 sed ornare sem nulla is nec magna. Morbi faucibus sed ante eu bibendum. lacud Phasellus posuere
                 mauris risus, pharetra
                 pellentesque turpis porta vel. Suspendisse aculis tempor. Quisque ullamcorper feugiat elit, ut
                 mollis diam finibus quis.
                 Praesent fringilla urna eu purus laoreet, ac faucibus dolor vehicula. Ut consectetur maximus
                 cursus. Proin eu purus
                 lectus. Mauris cursus elit eget mi sagittis dui volutpat. Duis fermentum a urna finibus
                 malesuada. Quisque at lacus id
                 dolor commodo rutrum. Nulla odio lacus, rhoncus vitae ultrices et, mattis ac nunc. Praesent
                 venenatis dui in nibh
                 interdum.</p>
             <p class="mb-40">The is ipsum dolor sit amet consectetur adipiscing elit. Fusce eleifend porta arcu
                 In hac habitasse the is platea augue
                 thelorem turpoi dictumst. In lacus libero faucibus at malesuada sagittis placerat eros sed
                 istincidunt augue ac ante
                 rutrum sed the is sodales augue consequat.</p>
             <div class="row g-4 align-items-center">
                 <div class="col-lg-12 order-1 order-lg-2">
                    <div class="contact__form">
                        <form wire:submit="addMembership">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <label for="Name">Name*</label>
                                    <input id="name" wire:model="name" type="text" placeholder="Your Name">
                                    @error('name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="Calling Number">Calling Number*</label>
                                    <input id="calling_number" wire:model="calling_number" type="tel" placeholder="Your Calling Number">
                                    @error('calling_number')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="Whatsapp Number">Whatsapp Number*</label>
                                    <input id="whatsapp_number" wire:model="whatsapp_number" type="text" placeholder="Your Whatsapp Number">
                                    @error('whatsapp_number')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="email">Your Email*</label>
                                    <input id="email" wire:model="email" type="text" placeholder="Your Email">
                                    @error('email')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="emergency_contact_person_name">Emergency contact person name (Mom, Dad, Brother, Sister, Husband, wife, Friends)*</label>
                                    <input id="emergency_contact_person_name" wire:model="emergency_contact_person_name" type="text" placeholder="Your Emergency Contact Person Name">
                                    @error('emergency_contact_person_name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="Emergency contact number">Emergency contact number *</label>
                                    <input id="emergency_phone_no" wire:model="emergency_phone_no" type="text" placeholder="Your Emergency Phone No">
                                    @error('emergency_phone_no')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="dob">Date of Birth*</label>
                                    <input id="dob" wire:model="dob" type="date" placeholder="Your Date of Birth">
                                     @error('dob')
                                         <span class="error">{{ $message }}</span>
                                     @enderror
                                </div>
                                 <div class="col-6">
                                     <label for="Organisation Name">Blood Group*</label>
                                     <input id="blood_group" wire:model="blood_group" type="text" placeholder="Your Blood Group">
                                     
                                     @error('blood_group')
                                         <span class="error">{{ $message }}</span>
                                     @enderror
                                 </div>
                            </div>
                            <div class="row">
                                <div class="col-6" wire:ignore>
                                    <label for="City">Which City do you live or want to volunteer? *</label>
                                    <select wire:model="city" class="form-control nice_select city_dropdown" id="city">
                                        <option value="">Please Select</option>
                                        <option value="Bangalore">Bangalore</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Kolkata">Kolkata</option>
                                        <option value="Mumbai">Mumbai</option>
                                        <option value="Pune">Pune</option>
                                        <option value="Chennai">Chennai</option>
                                        <option value="Hyderabad">Hyderabad</option>
                                        <option value="Ahmedabad">Ahmedabad</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    
                                    @error('city')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="City">Other City</label>
                                    <input id="other_city" wire:model="other_city" type="text" placeholder="Your Other City">
                                    @error('other_city')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6" wire:ignore>
                                    <label for="Volunteer Before">Have you volunteered before?</label>
                                    <select wire:model="volunteer_before" class="form-control nice_select volunteer_dropdown" id="volunteer_before">
                                        <option value="">Please Select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    
                                    @error('volunteer_before')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="Volunteer Organization">Volunteer Organization Name</label>
                                    <input id="volunteer_other_name" wire:model="volunteer_other_name" type="text" placeholder="Your Volunteer Organization Name">
                                    @error('volunteer_other_name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6" wire:ignore>
                                    <label for="Available Week">Which days of week, are you available for volunteering? *</label>
                                    <select wire:model="available_week" class="form-control nice_select volunteer_week" id="available_week">
                                        <option value="">Please Select</option>
                                        <option value="Any day of the week">Any day of the week</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                    </select>
                                    
                                    @error('available_week')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="Image">Image</label>
                                    <input type="file" wire:model="image" class="form-control"/>
                                    
                                    @error('image')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="skills">Do you have any special skills, which you would like to do while volunteering (Photography, poster designing, Website/App development, Drawing, Teaching, Dancing, Singing, Yoga, and Motivational Speaker etc.)?</label>
                                <textarea id="skills" wire:model="skills" placeholder="Your Skills"></textarea>
                                @error('skills')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                           
                            <div class="col-12">
                                <label for="New Team">Would you like to start a new team in your city & lead the team? (All guidance & support will be provide by Indriya Foundation)</label>
                                <textarea id="new_team_description" wire:model="new_team_description"></textarea>
                                @error('new_team_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div> 
                            
                            <div class="col-12">
                                <label for="Volunteer Description">Why you want to do volunteering? Please share if anything *</label>
                                <textarea id="why_volunteering_description" wire:model="why_volunteering_description"></textarea>
                                @error('why_volunteering_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="Suggestion">Suggestions if any?</label>
                                <textarea id="suggestion_description" wire:model="suggestion_description"></textarea>
                                @error('suggestion_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="btn-two mt-4">
                                <span class="btn-circle">
                                </span>
                                <button type="button" wire:click="addMembership" class="btn-inner">
                                    <span class="btn-text">
                                        Submit
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
</div>
@push('javascript')
    <script>
        Livewire.on('dismissmodal', function(data) {
            $(".nice_select").niceSelect();
            console.log(data);
            (data.parameter == 400) ? toastr.error(data.message): toastr.success(data.message);
            setTimeout(() => {
                if(data.parameter == 200)
                {
                    window.location.href="/thank-you";
                }
            }, 1500);
        });

        $(".city_dropdown").on("click change",function(e){
            @this.setCity(e.target.value);
        })

        $(".volunteer_dropdown").on("click change",function(e){
            @this.setVolunteer(e.target.value);
        })
        
        $(".volunteer_week").on("click change",function(e){
            @this.setVolunteerWeek(e.target.value);
        })
    </script>
@endpush
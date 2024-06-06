@section('meta-details')
    @include('web.seo.custom', ['common' => $page])
@endsection
<div>
    <section wire:ignore class="banner__inner-page bg-image pt-160 pb-160 bg-image"
        data-background="{{ asset('site-images/about/volunteer.jpeg') }}">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Volunteer</h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <a href="{{ url('/') }}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Why Volunteer
                    With Indriya</span>
            </div>
        </div>
    </section>

    <section class="project-single-area pt-120 pb-120">
        <div class="container">
            <div class="section-header mb-60">
                <h3 class="fs-30 mb-30 mx-auto text-center">Why Volunteer With Indriya</h3>
                <p class="mt-2 mb-4">
                    We offer numerous volunteering opportunities that resonate with your passions. You'll join a
                    community focused on creating meaningful change.
                </p>
                <div class="row g-4">
                    <div class="col-lg-6 col-sm-6 wow fadeInUp volunteer_section">
                        <div class="card">
                            <div class="volunteer__content">
                                <ul class="mb-4">
                                    <li>
                                        <h4>Weekend Teaching Crew</h4>
                                    </li>
                                </ul>
                                <p> Spend your weekends teaching children in shelter homes, communities, and schools.
                                    Subjects to teach include English, mathematics, science, arts, computers, dance,
                                    life skills, and environmental awareness.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 wow fadeInUp volunteer_section">
                        <div class="card">
                            <div class="volunteer__content">
                                <ul class="mb-4">
                                    <li>
                                        <h4>Community Change Squad</h4>
                                    </li>
                                </ul>
                                <p> Be a part of our mission. Volunteer for causes such as environmental conservation,
                                    animal welfare, elder assistance, and more. You can also organize events in your
                                    city, with full support available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="contact__form">
                        <form wire:submit="addMembership">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <label for="Name">Name <span class="error">*</span></label>
                                    <input id="name" wire:model="name" type="text" placeholder="Your Name*">
                                    @error('name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-sm-8" wire:ignore>
                                    <label for="Calling Number">Calling Number <span class="error">*</span></label><br>
                                    <input wire:model="calling_number"  class="mobile" id="phone_number" type="tel"
                                        placeholder="Your Calling Number*">
                                    @error('calling_number')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row" wire:ignore>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="Whatsapp Number">Whatsapp Number <span class="error">*</span></label><br>
                                    <input id="whatsapp_number" wire:model="whatsapp_number" type="tel"
                                        placeholder="Your Whatsapp Number*">
                                    @error('whatsapp_number')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="email">Your Email <span class="error">*</span></label>
                                    <input id="email" wire:model="email" type="text" placeholder="Your Email*">
                                    @error('email')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <label for="emergency_contact_person_name">Emergency contact person name (Mom, Dad,
                                        Brother, Sister, Husband, wife, Friends) <span class="error">*</span></label>
                                    <input id="emergency_contact_person_name" wire:model="emergency_contact_person_name"
                                        type="text" placeholder="Your Emergency Contact Person Name*">
                                    @error('emergency_contact_person_name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-sm-12" wire:ignore>
                                    <label for="Emergency contact number">Emergency contact number *</label><br>
                                    <input id="emergency_phone_no" wire:model="emergency_phone_no" type="tel"
                                        placeholder="Your Emergency Phone No*">
                                    @error('emergency_phone_no')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <label for="dob">Date of Birth <span class="error">*</span></label>
                                    <input id="dob" wire:model="dob" type="date"
                                        placeholder="Your Date of Birth">
                                    @error('dob')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-sm-12" wire:ignore>
                                    <label for="Organisation Name">Blood Group <span class="error">*</span></label>
                                    <select wire:model="blood_group"
                                        class="form-control nice_select blood_group_dropdown" id="blood_group">
                                        <option value="">Select Blood Group</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                    @error('blood_group')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12" wire:ignore>
                                    <label for="City">Which City do you live or want to volunteer? <span class="error">*</span></label>
                                    <select wire:model="city" class="form-control nice_select city_dropdown"
                                        id="city">
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
                                <div class="col-lg-6 col-sm-12 other_city" style="display:none" wire:ignore>
                                    <label for="City">Other City</label>
                                    <input id="other_city" wire:model="other_city" type="text"
                                        placeholder="Your Other City">
                                    @error('other_city')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12" wire:ignore>
                                    <label for="Volunteer Before">Have you volunteered before? <span class="error">*</span></label>
                                    <select wire:model="volunteer_before"
                                        class="form-control nice_select volunteer_dropdown" id="volunteer_before">
                                        <option value="">Please Select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>

                                    @error('volunteer_before')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-sm-12 volunteer_name" style="display:none" wire:ignore>
                                    <label for="Volunteer Organization">Volunteer Organization Name</label>
                                    <input id="volunteer_other_name" wire:model="volunteer_other_name" type="text"
                                        placeholder="Your Volunteer Organization Name">
                                    @error('volunteer_other_name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12" wire:ignore>
                                    <label for="Available Week">Which days of week, are you available for volunteering?
                                        <span class="error">*</span></label>
                                    <select wire:model="available_week"
                                        class="form-control nice_select volunteer_week" id="available_week">
                                        <option value="">Please Select</option>
                                        <option value="Any day of the week">Any day of the week</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                    </select>

                                    @error('available_week')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="Image">Image <span class="error">*</span></label>
                                    <input type="file" wire:model="image" class="form-control" />

                                    @error('image')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="skills">Do you have any special skills, which you would like to do while
                                    volunteering (Photography, poster designing, Website/App development, Drawing,
                                    Teaching, Dancing, Singing, Yoga, and Motivational Speaker etc.)? <span class="error">*</span></label>
                                <textarea id="skills" wire:model="skills" placeholder="Your Skills"></textarea>
                                @error('skills')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="New Team">Would you like to start a new team in your city & lead the team?
                                    (All guidance & support will be provide by Indriya Foundation) <span class="error">*</span></label>
                                <textarea id="new_team_description" wire:model="new_team_description"></textarea>
                                @error('new_team_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="Volunteer Description">Why you want to do volunteering? Please share if
                                    anything <span class="error">*</span></label>
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
    </section>
</div>
@push('javascript')
    <script>
        $(function() {
            var input = document.querySelector("#phone_number");
            var number = window.intlTelInput(input, {
                    initialCountry: "IN",
                    autoPlaceholder: "off",
                    hiddenInput: "phone",
                    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/utils.js",
                    separateDialCode: true,
                    formatOnDisplay: false,
                    separateDialCode: true,
                });
            input.addEventListener("countrychange", function() {
                var value = number.getSelectedCountryData();
                @this.setCallingNumber(value.dialCode);
            });

            var whatsapp_input = document.querySelector("#whatsapp_number");
            var whatsapp_number = window.intlTelInput(whatsapp_input, {
                    initialCountry: "IN",
                    autoPlaceholder: "off",
                    hiddenInput: "phone",
                    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/utils.js",
                    separateDialCode: true,
                    formatOnDisplay: false,
                    separateDialCode: true,
                });
            whatsapp_input.addEventListener("countrychange", function() {
                var whatsapp_value = whatsapp_number.getSelectedCountryData();
                @this.setWhatsappNumber(whatsapp_value.dialCode);
            });

            var emergency_input = document.querySelector("#emergency_phone_no");
            var emergency_number = window.intlTelInput(emergency_input, {
                    initialCountry: "IN",
                    autoPlaceholder: "off",
                    hiddenInput: "phone",
                    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/utils.js",
                    separateDialCode: true,
                    formatOnDisplay: false,
                    separateDialCode: true,
                });
            emergency_input.addEventListener("countrychange", function() {
                var emergency_value = emergency_number.getSelectedCountryData();
                @this.setEmergencyNumber(emergency_value.dialCode);
            });
        })
        
        Livewire.on('dismissmodal', function(data) {
            $(".nice_select").niceSelect();
            (data.parameter == 400) ? toastr.error(data.message): toastr.success(data.message);
            setTimeout(() => {
                if (data.parameter == 200) {
                    window.location.href = "/thank-you";
                }
            }, 1500);
        });

        $(".city_dropdown").on("click change", function(e) {
            if(e.target.value=="Other")
            {
                $(".other_city").css("display","block");
            }else{
                $(".other_city").css("display","none");
            }
            @this.setCity(e.target.value);
        })

        $(".volunteer_dropdown").on("click change", function(e) {
            if(e.target.value=="Yes")
            {
                $(".volunteer_name").css("display","block");
            }else{
                $(".volunteer_name").css("display","none");
            }
            @this.setVolunteer(e.target.value);
        })

        $(".volunteer_week").on("click change", function(e) {
            @this.setVolunteerWeek(e.target.value);
        })
        
        $(".blood_group_dropdown").on("click change", function(e) {
            @this.setBloodGroup(e.target.value);
        })
    </script>
@endpush

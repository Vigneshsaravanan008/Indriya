@section("meta-details")
@include("web.seo.custom",["common"=>$page])
@endsection
<div>
     <section class="banner__inner-page bg-image pt-160 pb-160 bg-image"
     data-background="{{asset("web-assets/assets/images/banner/banner-inner-page.jpg")}}">
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
                 {{-- <div class="col-lg-5">
                     <h3 class="fs-30 mb-20">The Installation Challenge</h3>
                     <p>Pharetra pellentesque turpis porta vel. Suspendisse aculis tempor. Quisque ullamcorper
                         feugiat elit</p>
                     <div class="row mt-30">
                         <div class="col-6 mb-15">
                             <h6 class="fs-14">
                                 <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <g clip-path="url(#clip0_20_5)">
                                         <path
                                             d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                             fill="#F74F22"></path>
                                         <path
                                             d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                             fill="#F74F22"></path>
                                     </g>
                                     <defs>
                                         <clipPath>
                                             <rect width="18" height="18" fill="white"></rect>
                                         </clipPath>
                                     </defs>
                                 </svg>
                                 Immediate Assistance
                             </h6>
                         </div>
                         <div class="col-6 mb-15">
                             <h6 class="fs-14">
                                 <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <g clip-path="url(#clip0_20_5)">
                                         <path
                                             d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                             fill="#F74F22"></path>
                                         <path
                                             d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                             fill="#F74F22"></path>
                                     </g>
                                     <defs>
                                         <clipPath>
                                             <rect width="18" height="18" fill="white"></rect>
                                         </clipPath>
                                     </defs>
                                 </svg>
                                 Quick Fundraise
                             </h6>
                         </div>
                         <div class="col-6 mb-15">
                             <h6 class="fs-14">
                                 <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <g clip-path="url(#clip0_20_5)">
                                         <path
                                             d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                             fill="#F74F22"></path>
                                         <path
                                             d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                             fill="#F74F22"></path>
                                     </g>
                                     <defs>
                                         <clipPath>
                                             <rect width="18" height="18" fill="white"></rect>
                                         </clipPath>
                                     </defs>
                                 </svg>
                                 Long-Time Support
                             </h6>
                         </div>
                         <div class="col-6 mb-15">
                             <h6 class="fs-14">
                                 <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <g clip-path="url(#clip0_20_5)">
                                         <path
                                             d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                             fill="#F74F22"></path>
                                         <path
                                             d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                             fill="#F74F22"></path>
                                     </g>
                                     <defs>
                                         <clipPath>
                                             <rect width="18" height="18" fill="white"></rect>
                                         </clipPath>
                                     </defs>
                                 </svg>
                                 Handle With Care
                             </h6>
                         </div>
                         <div class="col-6 mb-15">
                             <h6 class="fs-14">
                                 <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <g clip-path="url(#clip0_20_5)">
                                         <path
                                             d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                             fill="#F74F22"></path>
                                         <path
                                             d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                             fill="#F74F22"></path>
                                     </g>
                                     <defs>
                                         <clipPath>
                                             <rect width="18" height="18" fill="white"></rect>
                                         </clipPath>
                                     </defs>
                                 </svg>
                                 Clean Water and Save life
                             </h6>
                         </div>
                         <div class="col-6 mb-15">
                             <h6 class="fs-14">
                                 <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <g clip-path="url(#clip0_20_5)">
                                         <path
                                             d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                             fill="#F74F22"></path>
                                         <path
                                             d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                             fill="#F74F22"></path>
                                     </g>
                                     <defs>
                                         <clipPath>
                                             <rect width="18" height="18" fill="white"></rect>
                                         </clipPath>
                                     </defs>
                                 </svg>
                                 Organizations joined
                             </h6>
                         </div>
                         <div class="col-6 mb-15">
                             <h6 class="fs-14">
                                 <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <g clip-path="url(#clip0_20_5)">
                                         <path
                                             d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                             fill="#F74F22"></path>
                                         <path
                                             d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                             fill="#F74F22"></path>
                                     </g>
                                     <defs>
                                         <clipPath>
                                             <rect width="18" height="18" fill="white"></rect>
                                         </clipPath>
                                     </defs>
                                 </svg>
                                 Volunteer
                             </h6>
                         </div>
                         <div class="col-6 mb-15">
                             <h6 class="fs-14">
                                 <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <g clip-path="url(#clip0_20_5)">
                                         <path
                                             d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                             fill="#F74F22"></path>
                                         <path
                                             d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                             fill="#F74F22"></path>
                                     </g>
                                     <defs>
                                         <clipPath>
                                             <rect width="18" height="18" fill="white"></rect>
                                         </clipPath>
                                     </defs>
                                 </svg>
                                 Send Us Donations
                             </h6>
                         </div>
                     </div>
                 </div> --}}
                 <div class="col-lg-12 order-1 order-lg-2">
                    <div class="contact__form">
                        <form wire:submit="addMembership">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <label for="Name">Name*</label>
                                    <input id="name"  wire:model="name" type="text" placeholder="Your Name">
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
                            <div class="col-12" wire:ignore>
                                <label for="emergency_contact_person_name">Emergency contact person name (Mom, Dad, Brother, Sister, Husband, wife, Friends)*</label>
                                <input id="emergency_contact_person_name" wire:model="emergency_contact_person_name" type="text" placeholder="Your Emergency Contact Person Name">
                                @error('emergency_contact_person_name')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="Emergency contact number">Emergency contact number *</label>
                                <input id="emergency_phone_no" wire:model="emergency_phone_no" type="text" placeholder="Your Emergency Phone No">
                                @error('emergency_phone_no')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div> 
                           <div class="col-12" wire:ignore>
                               <label for="dob">Date of Birth*</label>
                               <input id="dob" wire:model="dob" type="date" placeholder="Your Date of Birth">
                                @error('dob')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                           </div>
                            <div class="col-12">
                                <label for="Organisation Name">Blood Group*</label>
                                <input id="blood_group" wire:model="blood_group" type="text" placeholder="Your Blood Group">
                                
                                @error('blood_group')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="City">Which City do you live or want to volunteer? *</label>
                                <select wire:model="city" class="form-control" id="city">
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
                            <div class="col-12">
                                <label for="City">Other City</label>
                                <input id="other_city" wire:model="other_city" type="text" placeholder="Your Other City">
                                @error('other_city')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="Volunteer Before">Have you volunteered before?</label>
                                <select wire:model="volunteer_before" class="form-control" id="volunteer_before">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Other">Other</option>
                                </select>
                                
                                @error('volunteer_before')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="Volunteer Organization">Volunteer Organization Name</label>
                                <input id="volunteer_other_name" wire:model="volunteer_other_name" type="text" placeholder="Your Volunteer Organization Name">
                                @error('volunteer_other_name')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="skills">Do you have any special skills, which you would like to do while volunteering (Photography, poster designing, Website/App development, Drawing, Teaching, Dancing, Singing, Yoga, and Motivational Speaker etc.)?</label>
                                <textarea id="skills" wire:model="skills" placeholder="Your Skills"></textarea>
                                @error('skills')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="Available Week">Which days of week, are you available for volunteering? *</label>
                                <select wire:model="available_week" class="form-control" id="available_week">
                                    <option value="Any day of the week">Any day of the week</option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                </select>
                                
                                @error('available_week')
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
            (data.parameter == 400) ? toastr.error(data.message): toastr.success(data.message);
            setTimeout(() => {
                if(data.parameter == 200)
                {
                    location.reload();
                }
            }, 1500);
        });

        $(".gender_dropdown").on("click change",function(e){
            @this.setGender(e.target.value);
        })
        
        $(".category_dropdown").on("click change",function(e){
            @this.setCategory(e.target.value);
        })
    </script>
@endpush
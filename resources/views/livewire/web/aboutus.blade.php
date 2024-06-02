@section("meta-details")
    @include("web.seo.custom",["common"=>$page])
@endsection
<div>
    <section class="banner__inner-page bg-image pt-160 pb-160 bg-image"
        data-background="{{asset("site-images/about/about.jpeg")}}">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">About Us</h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <a href="{{url("/")}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>About
                    Us</span>
            </div>
        </div>
    </section>
    <!-- Page banner area end here -->

    <!-- About area start here -->
    <section class="about-area pt-120 pb-120">
        <div class="container">
            <div class="row g-2 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="about__image">
                        <div class="dots about-dot__animation">
                            <img src="{{asset("web-assets/assets/images/shape/about-dot.png")}}" alt="dots">
                        </div>
                        <div class="image">
                            <img src="{{asset("site-images/about/indriya.jpg")}}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header mb-20">
                        <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <i class="fa-regular fa-angles-left pe-1"></i> ABOUT US <i
                                class="fa-regular fa-angles-right ps-1"></i>
                        </h5>
                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Empowering Hope, Transforming Lives</h2>
                        <p align="justify" class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            Established in 2022, The Indriya Foundation is a charitable organisation dedicated to improving the lives of individuals and communities grappling with neurological conditions.<br> 
                            Our mission is driven by a steadfast commitment to social progress, accessible education, and compassionate healthcare, empowering those navigating the complexities of these debilitating disorders.
                        </p>
                    </div>
                    <div class="about__content">
                        <div class="row g-4 mt-10 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="col-6">
                                <h6 class="fs-14">
                                    <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_20_5)">
                                            <path
                                                d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                                fill="#F74F22" />
                                            <path
                                                d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                                fill="#F74F22" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Immediate Assistance
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6 class="fs-14">
                                    <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_20_5)">
                                            <path
                                                d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                                fill="#F74F22" />
                                            <path
                                                d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                                fill="#F74F22" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Quick Fundraise
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6 class="fs-14">
                                    <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_20_5)">
                                            <path
                                                d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                                fill="#F74F22" />
                                            <path
                                                d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                                fill="#F74F22" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Long-Time Support
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6 class="fs-14">
                                    <svg class="me-1" width="18" height="18" viewBox="0 0 18 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_20_5)">
                                            <path
                                                d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                                fill="#F74F22" />
                                            <path
                                                d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                                fill="#F74F22" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Handle With Care
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About area end here -->

    <!-- About area start here -->
    <section class="about-two-area pt-120 pb-120 overflow-hidden">
        <div class="about-two__wrp">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about-two__image image pr-60">
                            <img src="{{asset("site-images/about/about_2.jpg")}}" alt="image">
                            <div class="line-shape sway_Y__animation">
                                <img src="{{asset("web-assets/assets/images/shape/about-line.png")}}" alt="shape">
                            </div>
                            <div class="dot-shape sway__animation">
                                <img src="{{asset("web-assets/assets/images/shape/about-dot3.png")}}" alt="shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header mb-20">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <i class="fa-regular fa-angles-left pe-1"></i> ABOUT US <i
                                    class="fa-regular fa-angles-right ps-1"></i>
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Our Beliefs</h2>
                            <p align="justify" class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">We believe in the power of giving back to the community through education, support, and collaboration. <br>Individuals with cognitive challenges require assistance not only with medical issues but also with various aspects of their lives. Education is fundamental to our approach.<br> We endeavour to raise awareness and understanding of brain disorders, empowering individuals to make informed health decisions.<br> Through our projects, we provide education to patients and caregivers, equipping them with the knowledge and skills to navigate these challenges effectively.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About area end here -->
    <div class="container">
        <div class="project-single__item">
            <h3 class="fs-30 mb-30">Creating Community</h3>
            <p align="justify" class="mb-20">Creating a welcoming and supportive community is integral to our mission. We strive to foster a sense of belonging and solidarity among individuals dealing with brain disorders. Through open discussions, community events, and collaborative initiatives, we bring individuals together to share experiences, offer mutual support, and work as a unified team</p>
        </div>
    
        <div class="project-single__item">
            <h3 class="fs-30 mb-30">Caring Support</h3>
            <p align="justify" class="mb-20">We understand the emotional and financial toll of receiving a diagnosis of a brain disorder. That's why we offer compassionate support to help individuals through every step of their journey. From financial assistance for medical bills to counselling services and support groups, we ensure that nobody faces these challenges alone.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="hilight-text mt-40 mb-30 sub-bg">
            <p align="justify" class="p-2">Join us in our efforts to build a better future for those suffering from neurological disorders. Together, let's ensure that care, support, and education are accessible to everyone. By working hand in hand, we can make a tangible and lasting difference in the lives of those affected by these disorders.</p>
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 20.3698H7.71428L2.57139 30.5546H10.2857L15.4286 20.3698V5.09253H0V20.3698Z" fill="#F74F22"></path>
                <path d="M20.5703 5.09253V20.3698H28.2846L23.1417 30.5546H30.856L35.9989 20.3698V5.09253H20.5703Z" fill="#F74F22"></path>
            </svg>
        </div>
    </div>

    <section class="about-two-area pt-120 pb-120 overflow-hidden">
        <div class="about-two__wrp">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about-two__image image pr-60">
                            <img src="{{asset("site-images/about/our_mission.jpg")}}" alt="image">
                            <div class="line-shape sway_Y__animation">
                                <img src="{{asset("web-assets/assets/images/shape/about-line.png")}}" alt="shape">
                            </div>
                            <div class="dot-shape sway__animation">
                                <img src="{{asset("web-assets/assets/images/shape/about-dot3.png")}}" alt="shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header mb-20">
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Our Vision</h2>
                            <p class="wow fadeInUp" align="justify" data-wow-delay="400ms" data-wow-duration="1500ms">The Indriya Foundation is more than just a charitable organisation; we are a symbol of hope and goodwill for individuals with neurological disorders. Motivated by our ideals and a deep-seated desire to make a meaningful difference, we are committed to building a better future for those afflicted by these disorders.
                            </p>

                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Our Mission</h2>
                            <p align="justify" class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_20_5)">
                                        <path
                                            d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                            fill="#F74F22" />
                                        <path
                                            d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                            fill="#F74F22" />
                                    </g>
                                    <defs>
                                        <clipPath>
                                            <rect width="18" height="18" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg> The Indriya Foundation is committed to enhancing the lives of individuals and communities affected by neurological conditions through compassionate support, accessible education, and collaborative initiatives. <br>
                                <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_20_5)">
                                            <path
                                                d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                                fill="#F74F22" />
                                            <path
                                                d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                                fill="#F74F22" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                Our mission is to empower those navigating the challenges of brain disorders by fostering a culture of understanding, resilience, and community. We strive to raise awareness, provide essential resources, and offer unwavering support to individuals and caregivers, ensuring that no one faces these debilitating disorders alone.
                                <br>
                                <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_20_5)">
                                            <path
                                                d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                                fill="#F74F22" />
                                            <path
                                                d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                                fill="#F74F22" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>Guided by our commitment to social progress and inclusive healthcare, we endeavour to create a future where every individual affected by neurological conditions receives the care, support, and opportunities they need to thrive and live their best lives.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@if(isset($volunteer_registrations) && count($volunteer_registrations)>0)
<section class="team-area pt-120 pb-120 sub-bg">
    <div class="container">
        <div class="section-header mb-60 text-center">
            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <i class="fa-regular fa-angles-left pe-1"></i> Our Volunteers <i
                    class="fa-regular fa-angles-right ps-1"></i>
            </h5>
            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Volunteers Our Precious
                Assets</h2>
        </div>
        <div class="row g-4">
            @foreach($volunteer_registrations as $volunteer)
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="team__item image">
                        <img src="{{asset($volunteer->image)}}" alt="image">
                        <div class="team__content">
                            <div class="content">
                                <h4><a href="javascript:void(0)" class="primary-hover">{{$volunteer->name}}</a></h4>
                                <span>Volunteer</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
</div>

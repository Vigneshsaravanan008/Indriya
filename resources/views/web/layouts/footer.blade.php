<footer class="footer-area secondary-bg overflow-hidden">
    <div class="footer__main-wrp">
        <div class="footer__shape-left wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img class="footer__shape__animation" src="{{asset("web-assets/assets/images/shape/footer-shape-left.png")}}" alt="shape">
        </div>
        <div class="footer__shape-right wow slideInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
            <img class="footer__shape__animation-right" src="{{asset("web-assets/assets/images/shape/footer-shape-right.png")}}"
                alt="shape">
        </div>
        <div class="container">
            <div class="footer__wrp pt-120 pb-120">
                <div class="row g-4 justify-content-between">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="footer__item">
                            <a href="{{url("/")}}" class="logo mb-40">
                                <img src="{{asset($setting->logo)}}" alt="image">
                            </a>
                            <p class="text-white">The INDRIYA FOUNDATION was founded in 2022 with the main goal of working for the social development and caring of individuals and groups who are suffering from a brain tumors.</p>
                            <div class="btn-one mt-40">
                                <span class="btn-circle">
                                </span>
                                <a href="cause-single.html" class="btn-inner">
                                    <span class="btn-text">
                                        DONATE NOW
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="footer__item">
                            <h3 class="title mb-40 text-white">Quick Links</h3>
                            <ul class="link">
                                <li class="mb-3">
                                    <a href="{{route("site.aboutus")}}"><i class="fa-light fa-angles-right me-2"></i> About Us</a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{route("site.membership")}}"><i class="fa-light fa-angles-right me-2"></i> Memberships</a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{route("site.events")}}"><i class="fa-light fa-angles-right me-2"></i> Upcoming
                                        Event</a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{route("site.blog")}}"><i class="fa-light fa-angles-right me-2"></i>
                                        Blogs</a>
                                </li>
                                <li>
                                    <a href="{{route("site.contactus")}}"><i class="fa-light fa-angles-right me-2"></i> Contact
                                        Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="footer__item">
                            <h3 class="title mb-40 text-white">Latest Post</h3>
                            <ul class="post">
                                @foreach($latest_blogs as $latest_blog)
                                    <li class="mb-3">
                                        <div class="image">
                                            <img src="{{asset($latest_blog->banner_image)}}" alt="image" width="100px" height="100px">
                                        </div>
                                        <div class="con">
                                            <span>{{Carbon\Carbon::parse($latest_blog->created_at)->format('d, M Y')}}</span>
                                            <a href="{{route('site.viewblog',$latest_blog->slug)}}">
                                                {{$latest_blog->name}}
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="footer__item">
                            <h3 class="title mb-40 text-white">Contact Info</h3>
                            <ul class="link info">
                                <li class="mb-3">
                                    <a href="tel:{{$setting->phone_number}}"><i
                                            class="fa-solid fa-phone me-1 primary-color"></i>
                                        {{$setting->phone_number}}</a>
                                </li>
                                <li class="mb-3">
                                    <a href="mailto:{{$setting->email}}"><i class="fa-sharp fa-solid fa-envelope me-1 primary-color"></i>
                                        {{$setting->email}}</a>
                                </li>
                                <li>
                                    <a href="jvascript:void(0)"><i class="fa-solid fa-location-dot me-1 primary-color"></i> {!!$setting->address!!}</a>
                                </li>
                            </ul>
                            <div class="social-icon mt-30">
                                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                <a class="active" href="#0"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                {{-- <a href="#0"><i class="fa-brands fa-pinterest-p"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copytext">
        <p class="wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">&copy; All Copyright {{date("Y")}} by <a
                href="{{url("/")}}" class="text-white primary-hover">{{$setting->name}}</a></p>
    </div>
</footer>
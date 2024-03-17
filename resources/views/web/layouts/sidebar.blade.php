<div id="targetElement" class="sidebar-area sidebar__hide">
    <div class="sidebar__overlay"></div>
    <a href="{{url("/")}}" class="logo mb-40">
        <img src="{{asset($setting->logo)}}" alt="logo">
    </a>
    <div class="mobile-menu overflow-hidden"></div>
    <ul class="info pt-40">
        <li><i class="fa-solid primary-color fa-location-dot"></i> <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
        </li>
        <li class="py-2"><i class="fa-solid primary-color fa-phone-volume"></i> <a
                href="tel:{{$setting->phone_number}}">{{$setting->phone_number}}</a>
        </li>
        <li><i class="fa-solid primary-color fa-paper-plane"></i> <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></li>
    </ul>
    <div class="social-icon mt-20">
        <a href="{{$social->facebook_url}}"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="{{$social->twitter}}"><i class="fa-brands fa-twitter"></i></a>
        <a href="{{$social->instagram}}"><i class="fa-brands fa-instagram"></i></a>
    </div>
    <button id="closeButton" class="text-white"><i class="fa-solid fa-xmark"></i></button>
</div>
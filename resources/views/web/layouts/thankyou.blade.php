@extends("web.layouts.master")
@section("meta-details")
    @include("web.seo.metadetails")
@endsection
@section("content")
<section class="error-area">
    <div class="container">
        <div class="error__item">
            <div class="image mb-4 mx-auto">
                <img src="{{asset("site-images/about/thank_you.jpg")}}" alt="image" width="600px">
            </div>
            <div class="btn-two mb-3">
                <a href="{{url("/")}}" class="btn-inner">
                    <span class="btn-text">
                        HOME
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
@extends("web.layouts.master")
@section("meta-details")
    @include("web.seo.metadetails")
@endsection
@section("content")
<section class="error-area pt-60 pb-60">
    <div class="container">
        <div class="error__item">
            <div class="image mb-4 mx-auto">
                <img src="{{asset("web-assets/assets/images/error/404.png")}}" alt="image" width="600px">
            </div>
            <h1 class="text_404">Whoops! This Page got Lost
                in converstion</h1>
            <div class="btn-two mt-2">
                <span class="btn-circle">
                </span>
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
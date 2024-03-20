@section("meta-details")
@include("web.seo.custom",["common"=>$page])
@endsection
<div>
    <section class="banner__inner-page bg-image pt-160 pb-160 bg-image"
        data-background="{{asset("web-assets/assets/images/banner/banner-inner-page.jpg")}}">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Campaign</h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <a href="{{url("/")}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Campaign</span>
            </div>
        </div>
    </section>
    <!-- Page banner area end here -->

    <!-- Blog area start here -->
    <section class="blog-area pt-120 pb-120">
        <div class="container">
            <div class="row g-4">
                @forelse($campaigns as $campaign)
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="blog__item">
                            <div class="image">
                                <img src="{{asset($campaign->image)}}" alt="image">
                                {{-- <span class="blog-tag">Education</span> --}}
                            </div>
                            <div class="blog__content pt-4">
                                <ul>
                                    <li>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.66667 4.7915C6.325 4.7915 6.04167 4.50817 6.04167 4.1665V1.6665C6.04167 1.32484 6.325 1.0415 6.66667 1.0415C7.00833 1.0415 7.29167 1.32484 7.29167 1.6665V4.1665C7.29167 4.50817 7.00833 4.7915 6.66667 4.7915ZM13.3333 4.7915C12.9917 4.7915 12.7083 4.50817 12.7083 4.1665V1.6665C12.7083 1.32484 12.9917 1.0415 13.3333 1.0415C13.675 1.0415 13.9583 1.32484 13.9583 1.6665V4.1665C13.9583 4.50817 13.675 4.7915 13.3333 4.7915ZM7.08333 12.0832C6.975 12.0832 6.86667 12.0582 6.76667 12.0165C6.65833 11.9748 6.575 11.9165 6.49167 11.8415C6.34167 11.6832 6.25 11.4748 6.25 11.2498C6.25 11.1415 6.275 11.0332 6.31667 10.9332C6.35833 10.8332 6.41667 10.7415 6.49167 10.6582C6.575 10.5832 6.65833 10.5248 6.76667 10.4832C7.06667 10.3582 7.44167 10.4248 7.675 10.6582C7.825 10.8165 7.91667 11.0332 7.91667 11.2498C7.91667 11.2998 7.90833 11.3582 7.9 11.4165C7.89167 11.4665 7.875 11.5165 7.85 11.5665C7.83333 11.6165 7.80833 11.6665 7.775 11.7165C7.75 11.7582 7.70833 11.7998 7.675 11.8415C7.51667 11.9915 7.3 12.0832 7.08333 12.0832ZM10 12.0832C9.89167 12.0832 9.78333 12.0582 9.68333 12.0165C9.575 11.9748 9.49167 11.9165 9.40833 11.8415C9.25833 11.6832 9.16667 11.4748 9.16667 11.2498C9.16667 11.1415 9.19167 11.0332 9.23333 10.9332C9.275 10.8332 9.33333 10.7415 9.40833 10.6582C9.49167 10.5832 9.575 10.5248 9.68333 10.4832C9.98333 10.3498 10.3583 10.4248 10.5917 10.6582C10.7417 10.8165 10.8333 11.0332 10.8333 11.2498C10.8333 11.2998 10.825 11.3582 10.8167 11.4165C10.8083 11.4665 10.7917 11.5165 10.7667 11.5665C10.75 11.6165 10.725 11.6665 10.6917 11.7165C10.6667 11.7582 10.625 11.7998 10.5917 11.8415C10.4333 11.9915 10.2167 12.0832 10 12.0832ZM12.9167 12.0832C12.8083 12.0832 12.7 12.0582 12.6 12.0165C12.4917 11.9748 12.4083 11.9165 12.325 11.8415L12.225 11.7165C12.1934 11.6701 12.1682 11.6196 12.15 11.5665C12.1259 11.5193 12.1091 11.4687 12.1 11.4165C12.0917 11.3582 12.0833 11.2998 12.0833 11.2498C12.0833 11.0332 12.175 10.8165 12.325 10.6582C12.4083 10.5832 12.4917 10.5248 12.6 10.4832C12.9083 10.3498 13.275 10.4248 13.5083 10.6582C13.6583 10.8165 13.75 11.0332 13.75 11.2498C13.75 11.2998 13.7417 11.3582 13.7333 11.4165C13.725 11.4665 13.7083 11.5165 13.6833 11.5665C13.6667 11.6165 13.6417 11.6665 13.6083 11.7165C13.5833 11.7582 13.5417 11.7998 13.5083 11.8415C13.35 11.9915 13.1333 12.0832 12.9167 12.0832ZM7.08333 14.9998C6.975 14.9998 6.86667 14.9748 6.76667 14.9332C6.66667 14.8915 6.575 14.8332 6.49167 14.7582C6.34167 14.5998 6.25 14.3832 6.25 14.1665C6.25 14.0582 6.275 13.9498 6.31667 13.8498C6.35833 13.7415 6.41667 13.6498 6.49167 13.5748C6.8 13.2665 7.36667 13.2665 7.675 13.5748C7.825 13.7332 7.91667 13.9498 7.91667 14.1665C7.91667 14.3832 7.825 14.5998 7.675 14.7582C7.51667 14.9082 7.3 14.9998 7.08333 14.9998ZM10 14.9998C9.78333 14.9998 9.56667 14.9082 9.40833 14.7582C9.25833 14.5998 9.16667 14.3832 9.16667 14.1665C9.16667 14.0582 9.19167 13.9498 9.23333 13.8498C9.275 13.7415 9.33333 13.6498 9.40833 13.5748C9.71667 13.2665 10.2833 13.2665 10.5917 13.5748C10.6667 13.6498 10.725 13.7415 10.7667 13.8498C10.8083 13.9498 10.8333 14.0582 10.8333 14.1665C10.8333 14.3832 10.7417 14.5998 10.5917 14.7582C10.4333 14.9082 10.2167 14.9998 10 14.9998ZM12.9167 14.9998C12.7 14.9998 12.4833 14.9082 12.325 14.7582C12.2479 14.6799 12.1882 14.5862 12.15 14.4832C12.1083 14.3832 12.0833 14.2748 12.0833 14.1665C12.0833 14.0582 12.1083 13.9498 12.15 13.8498C12.1917 13.7415 12.25 13.6498 12.325 13.5748C12.5167 13.3832 12.8083 13.2915 13.075 13.3498C13.1333 13.3582 13.1833 13.3748 13.2333 13.3998C13.2833 13.4165 13.3333 13.4415 13.3833 13.4748C13.425 13.4998 13.4667 13.5415 13.5083 13.5748C13.6583 13.7332 13.75 13.9498 13.75 14.1665C13.75 14.3832 13.6583 14.5998 13.5083 14.7582C13.35 14.9082 13.1333 14.9998 12.9167 14.9998ZM17.0833 8.19984H2.91667C2.575 8.19984 2.29167 7.9165 2.29167 7.57484C2.29167 7.23317 2.575 6.94984 2.91667 6.94984H17.0833C17.425 6.94984 17.7083 7.23317 17.7083 7.57484C17.7083 7.9165 17.425 8.19984 17.0833 8.19984Z"
                                                fill="#F74F22" />
                                            <path
                                                d="M13.3333 18.9582H6.66667C3.625 18.9582 1.875 17.2082 1.875 14.1665V7.08317C1.875 4.0415 3.625 2.2915 6.66667 2.2915H13.3333C16.375 2.2915 18.125 4.0415 18.125 7.08317V14.1665C18.125 17.2082 16.375 18.9582 13.3333 18.9582ZM6.66667 3.5415C4.28333 3.5415 3.125 4.69984 3.125 7.08317V14.1665C3.125 16.5498 4.28333 17.7082 6.66667 17.7082H13.3333C15.7167 17.7082 16.875 16.5498 16.875 14.1665V7.08317C16.875 4.69984 15.7167 3.5415 13.3333 3.5415H6.66667Z"
                                                fill="#F74F22" />
                                        </svg>
                                        <span>{{Carbon\Carbon::parse($campaign->created_at)->format('d, M Y')}}</span>
                                    </li>
                                </ul>
                                <h4 class="mt-20 pb-25 bor-bottom"><a href="{{route("site.viewevent",["slug"=>$campaign->slug])}}"
                                        class="primary-hover">{{$campaign->title}}</a></h4>
                                <a class="mt-4" href="#"><span class="read-more fw-bold transition">Read
                                        More <i class="fa-solid fa-arrow-right ms-1"></i></span></a>
                            </div>
                        </div>
                    </div>
                @empty
                <div class="col-xl-4 col-md-6 text-align-center">
                    <h4>No Campaigns</h4>
                </div>
                @endforelse
            </div>
            <div class="pegi justify-content-center mt-80">
                {{$campaigns->links()}}
            </div>
        </div>
    </section>
</div>

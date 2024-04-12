@section("meta-details")
@include("web.seo.custom",["common"=>$page])
@endsection
<div>
    <section class="banner__inner-page bg-image pt-160 pb-160 bg-image"
        data-background="{{asset("web-assets/assets/images/banner/banner-inner-page.jpg")}}">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Contact</h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <a href="{{url("/")}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Contact</span>
            </div>
        </div>
    </section>
    <!-- Page banner area end here -->

    <!-- Contact area start here -->
    <section class="contact-area pt-120 pb-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="contact__item">
                        <div class="contact__icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M28 13.3333C28 22.6667 16 30.6667 16 30.6667C16 30.6667 4 22.6667 4 13.3333C4 10.1507 5.26428 7.0985 7.51472 4.84806C9.76516 2.59763 12.8174 1.33334 16 1.33334C19.1826 1.33334 22.2348 2.59763 24.4853 4.84806C26.7357 7.0985 28 10.1507 28 13.3333Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M16 17.3333C18.2091 17.3333 20 15.5425 20 13.3333C20 11.1242 18.2091 9.33334 16 9.33334C13.7909 9.33334 12 11.1242 12 13.3333C12 15.5425 13.7909 17.3333 16 17.3333Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h5 class="fs-16 mt-20"><a href="#0">{{$setting->address}}</a></h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact__item">
                        <div class="contact__icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.33464 5.33334H26.668C28.1346 5.33334 29.3346 6.53334 29.3346 8.00001V24C29.3346 25.4667 28.1346 26.6667 26.668 26.6667H5.33464C3.86797 26.6667 2.66797 25.4667 2.66797 24V8.00001C2.66797 6.53334 3.86797 5.33334 5.33464 5.33334Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M29.3346 8L16.0013 17.3333L2.66797 8" stroke="white" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h5 class="fs-16 mt-20"><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact__item">
                        <div class="contact__icon">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="80" height="80" rx="40" fill="#F74F22" />
                                <path
                                    d="M32.6559 27C32.1329 27 31.6169 27.188 31.1869 27.531L31.1249 27.562L31.0939 27.594L27.9689 30.813L27.9999 30.843C27.5413 31.2594 27.2164 31.8022 27.0662 32.4031C26.916 33.004 26.9472 33.6359 27.1559 34.219C27.1599 34.227 27.1519 34.242 27.1559 34.25C28.0039 36.676 30.1719 41.36 34.4059 45.594C38.6559 49.844 43.4019 51.926 45.7499 52.844H45.7809C46.3693 53.0385 46.998 53.0774 47.6059 52.9568C48.2139 52.8362 48.7802 52.5604 49.2499 52.156L52.4059 49C53.2339 48.172 53.2339 46.734 52.4059 45.906L48.3439 41.844L48.3119 41.781C47.4839 40.953 46.0159 40.953 45.1869 41.781L43.1869 43.781C41.6859 43.0599 40.3053 42.1114 39.0939 40.969C37.4569 39.406 36.6209 37.609 36.3129 36.906L38.3129 34.906C39.1529 34.066 39.1679 32.668 38.2809 31.844L38.3119 31.812L38.2189 31.719L34.2189 27.594L34.1879 27.563L34.1249 27.531C33.7098 27.1921 33.1917 27.0048 32.6559 27ZM32.6559 29C32.7376 29.0047 32.8151 29.038 32.8749 29.094L36.8749 33.187L36.9689 33.281C36.9609 33.273 37.0269 33.379 36.9059 33.5L34.4059 36L33.9369 36.438L34.1569 37.062C34.1569 37.062 35.3049 40.137 37.7189 42.438L37.9379 42.625C40.2609 44.746 42.9999 45.906 42.9999 45.906L43.6249 46.188L46.5939 43.218C46.7659 43.047 46.7339 43.047 46.9059 43.218L50.9999 47.314C51.1719 47.485 51.1719 47.423 50.9999 47.594L47.9369 50.657C47.4769 51.052 46.9879 51.134 46.4069 50.939C44.1409 50.048 39.7379 48.114 35.8119 44.189C31.8549 40.231 29.7889 35.743 29.0319 33.564C28.8789 33.157 28.9879 32.556 29.3439 32.251L29.4059 32.188L32.4379 29.095C32.4969 29.0391 32.5737 29.0055 32.6549 29H32.6559Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h5 class="fs-16 mt-20"><a href="tel:{{$setting->phone_number}}">{{$setting->phone_number}}</a></h5>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt-20">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="contact__map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122897.88733150701!2d-48.09324971503908!3d-15.721541570017282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3d18df9ae275%3A0x738470e469754a24!2sBras%C3%ADlia%20-%20Brasilia%2C%20Federal%20District%2C%20Brazil!5e0!3m2!1sen!2sbd!4v1703471804969!5m2!1sen!2sbd"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 order-1  order-lg-2">
                    <div class="contact__form">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <i class="fa-regular fa-angles-left pe-1"></i> Contact <i
                                    class="fa-regular fa-angles-right ps-1"></i>
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                Get in Touch
                            </h2>
                        </div>
                        <form wire:submit="addContactus">
                            @csrf
                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" value="">
                            <input type="hidden" name="action" value="validate_captcha">
                            <div class="row">
                                <div class="col-6">
                                    <label for="name">Your Name*</label>
                                    <input id="name" wire:model="name" type="text" placeholder="Your Name">
                                </div>
                                <div class="col-6">
                                    <label for="email">Your Email*</label>
                                    <input id="email" wire:model="email" type="email" placeholder="Your Email">
                                </div>
                            </div>
                            <label for="subject">Phone Number</label>
                            <input id="phone_number" wire:model="phone_number" type="tel" placeholder="Your Phone Number">
                            <div class="text-area">
                                <label for="message">Your Review*</label>
                                <textarea id="message" wire:model="message" placeholder="Write Message"></textarea>
                            </div>
                            <div class="btn-two">
                                <span class="btn-circle">
                                </span>
                                <button type="button" wire:click="addContactus" class="btn-inner">
                                    <span class="btn-text">
                                        Post Comment
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
<script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
<script>
    var reCAPTCHA_site_key = "{{ env('RECAPTCHA_SITE_KEY') }}"
    $(function(){
           grecaptcha.ready(function() {
          grecaptcha.execute(reCAPTCHA_site_key, {action:'validate_captcha'})
                    .then(function(token) {
              $('#g-recaptcha-response').val(token);
          });
      });
       $('#g-recaptcha-response').val('123');
    })

    Livewire.on('dismissmodal', function(data) {
        (data.parameter == 400) ? toastr.error(data.message): toastr.success(data.message);
        setTimeout(() => {
            location.reload();
        }, 1500);
    });
</script>
@endpush
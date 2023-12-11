@extends('layouts.site')
@section('page_title', 'Projects')
@section('page_description', 'Explore the dynamic world of our services and witness how we can elevate your business to new heights.')
@section('content')

<section class="py-5" style="background-image: url('{{asset('assets/static/site-images/our-work-banner-image.jpg')}}'); background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-8">
                <h1 class="_bthe_contact_title text-white">Our Services</h1>
                <hr class="_btheswhiteline">
                <p class="_bthe_page_title_text mb-5 text-white" style="max-width:calc(830px*var(--scale))">Explore the dynamic world of our services and witness how we can elevate your business to new heights.</p>
            </div>
        </div>
    </div>
</section>
<section id="services" class="py-4">
    <div class="container-xl mt-3">
        <div data-aos="zoom-in-down" class="row mb-4 row align-items-end no-gutters">
            <div class="col-md-5 _btheservicecard">
                <a href="{{route('liveRecording')}}">
                    <div class="card _bthecard" style="position: relative;">
                      <img src="{{asset('assets/static/site-images/live-recording-banner.jpg')}}" class="img-fluid" alt="Live Recording" loading="lazy">
                      <div class="card-overlay">
                        <div class="overlay-content">
                          <span class="text-left _bthecard_text">Live Broadcasting</span>
                          <i class="bi bi-arrow-down-right-circle _bthecard_arrow"></i>
                        </div>
                      </div>
                    </div>
                  </a>   
            </div>

            <div class="col-md-7">
                <div class="row">
                    <div data-aos="zoom-in-diwn" class="col-md-6 _btheservicecard">
                        <a href="{{route('p_photography')}}">
                            <div class="card _bthecard" style="position: relative;">
                              <img src="{{asset('assets/static/site-images/portrait-photography-banner.jpg')}}" class="img-fluid" alt="Portrait Photography" loading="lazy">
                              <div class="card-overlay">
                                <div class="overlay-content">
                                  <span class="text-left _bthecard_text">Portrait Photography</span>
                                  <i class="bi bi-arrow-down-right-circle _bthecard_arrow"></i>
                                </div>
                              </div>
                            </div>
                          </a> 
                    </div>
                    <div data-aos="zoom-in-down" class="col-md-6 _btheservicecard">
                        <a href="{{route('fineArtandfashion')}}">
                            <div class="card _bthecard" style="position: relative;">
                              <img src="{{asset('assets/static/site-images/fine-art-and-fashion.jpg')}}" class="img-fluid" alt="Fine art and fashion">
                              <div class="card-overlay">
                                <div class="overlay-content">
                                  <span class="text-left _bthecard_text">Fine Art & Fashion</span>
                                  <i class="bi bi-arrow-down-right-circle _bthecard_arrow"></i>
                                </div>
                              </div>
                            </div>
                          </a> 
                    </div>

                </div>
            </div>
        </div>
        <div  data-aos="zoom-in-down" class="row align-items-end no-gutters">
            <div  class="col-md-7">
                <div class="row">
                    <div class="col-md-6 _btheservicecard">
                        <a href="{{route('musicVideo')}}">
                            <div class="card _bthecard" style="position: relative;">
                              <img src="{{asset('assets/static/site-images/music-video.jpg')}}" class="img-fluid">
                              <div class="card-overlay">
                                <div class="overlay-content">
                                  <span class="text-left _bthecard_text">Music Video</span>
                                  <i class="bi bi-arrow-down-right-circle _bthecard_arrow"></i>
                                </div>
                              </div>
                            </div>
                          </a> 
                    </div>
                    <div class="col-md-6 _btheservicecard">
                        <a href="{{route('realEstate')}}">
                            <div class="card _bthecard" style="position: relative;">
                              <img src="{{asset('assets/static/site-images/real-estate-banner.jpg')}}" class="img-fluid" alt="Real Estate">
                              <div class="card-overlay">
                                <div class="overlay-content">
                                  <span class="text-left _bthecard_text">Real Estate</span>
                                  <i class="bi bi-arrow-down-right-circle _bthecard_arrow"></i>
                                </div>
                              </div>
                            </div>
                          </a> 
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <a href="{{route('eventLifestyle')}}">
                    <div class="card _bthecard" style="position: relative;">
                      <img src="{{asset('assets/static/site-images/events-and-life-style-banner.jpg')}}" class="img-fluid" alt="Events and Life Style">
                      <div class="card-overlay">
                        <div class="overlay-content">
                          <span class="text-left _bthecard_text">Events & Life Style</span>
                          <i class="bi bi-arrow-down-right-circle _bthecard_arrow"></i>
                        </div>
                      </div>
                    </div>
                  </a>   
            </div>

        </div>
    </div>
 </section>

 @push('scripts')
<script>
    AOS.init({
    // Specify your desired AOS options here
    // For example:
    easing: 'ease-in-out',
    once: true
  });
    </script>
 @endpush
@endsection
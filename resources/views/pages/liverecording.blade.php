@extends('layouts.site')
@section('page_title', 'Live Broadcasting')
@section('content')
<section class="page-header" style="background-image: url('{{asset('assets/static/site-images/live-broadcasting-banner.jpg')}}');">
    <div class="container-xl">
      <div class="row">
        <div class="col-md-6">
          <h1 class="page-title">Live Broadcasting</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white">
              <li class="breadcrumb-item"><a href="{{route('services')}}" class="decoration-no text-white">Services</a></li>
              <li class="breadcrumb-item text-white"><a href="#" class="decoration-no text-white">Live Broadcasting</a></li>
            </ol>
          </nav>
        </div>
        
      </div>
    </div>
  </section>
  
  
<section class="py-5">
<div class="container-xl">
    <div class="row">
       <div class="col-md-8">
            <h1 class="_bthe_page_title">High Quality Broadcast solutions tailored to your event</h1>
            <hr class="_btheblackline">
            <p class="_bthe_page_title_text mb-5">Where we breed magic and innovation</p>

          <!--<div class="d-flex">
                <div class="d-flex align-items-center" style="transform: rotate(90deg); white-space: nowrap;">
                  <hr class="m-0" style="width: 45px;">
                  <p>SCROLL</p>
                </div>
              </div> -->

              <div class="d-flex justify-content-start">
                <div class="d-flex align-items-center" style="transform: rotate(-90deg); white-space: nowrap; margin-left: -50px;">
                 
                  <p style="margin-bottom: 0;">SCROLL</p>
                  <hr class="m-0" style="width: 45px;">
                </div>
              </div>
        </div>

        <div class="col-md-5">
            
        </div>
        <div class="col-md-7">
            <img src="{{asset('assets/static/site-images/live-recording-banner.jpg')}}" class="img-fluid brd-15">
            
          </div>
              
    </div>
</div>
</section>

<section class="_btheBckgreen">
    <div class="container-xl text-white text-left">
      <hr>
      <div style="max-width: 950px; text-align: left; margin: 0 auto;">
        <h1 class="mb-5 mt-5">We’re experts in multi-camera production, live streaming and hybrid events.</h1>
        <p style="line-height:3;">We engage audiences for brands and businesses through high quality broadcasts, interactive online venues and expert hybrid production.</p>
        <p style="line-height:3;">Working with you side-by-side, our team provides a bespoke production service that takes the pressure off whether you want to communicate change, launch new products and services, motivate teams or entertain a crowd.</p>
      </div>
    </div>
  </section>

  <section class="py-5" style="overflow: hidden;">
    <div class="container-xl">
        <hr class="_btheblackline">
        <h1 class="_bthe_page_title mt-5">We're good at</h1>
        <div class="row py-5">
            <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                <div data-aos="fade-up"  data-aos-delay="300" class="card b-0 b-10">
                  <img src="{{asset('assets/static/site-images/multicamera-production.jpg')}}" class="card-img img-fluid" alt="Multi Camera Production">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <h5 class="card-title text-white">Multi Camera Production</h5>
                  </div>
                </div>
              </div>
              <div data-aos="fade-up"  data-aos-delay="400" class="col-lg-3 col-md-3 col-sm-6 mb-3">
                <div class="card b-0 b-10">
                  <img src="{{asset('assets/static/site-images/multi-camera-image.jpg')}}" class="card-img img-fluid" alt="Multi Camera Production">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <h5 class="card-title text-white">Multi Camera Production</h5>
                  </div>
                </div>
              </div>
            <div  class="col-md-3">
                <div data-aos="fade-up"  data-aos-delay="500" class="card b-0 b-10 mb-3" >
                    <img src="{{asset('assets/static/site-images/hybrid-event-production.jpg')}}" class="card-img img-fluid" alt="Hybrid Event Production">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                      <h5 class="card-title text-white">Hybrid Event Production</h5>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div data-aos="fade-up"  data-aos-delay="600" class="card b-0 b-10 mb-3" >
                    <img src="{{asset('assets/static/site-images/live-streaming.jpg')}}" class="card-img img-fluid" alt="Background Image">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                      <h5 class="card-title text-white">Live Streaming</h5>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    </section>
    <section class="_btheBckcolor"></section>
<section>
    <img class="img-fluid" src="{{asset('assets/static/site-images/recording-team-with-camera.jpg')}}" loading="lazy">
</section>
@include('partials.startSmth')
        

@endsection
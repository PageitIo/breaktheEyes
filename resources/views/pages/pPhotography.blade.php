@extends('layouts.site')
@section('page_title', $title)
@section('page_description', 'We specialize in creating stunning and personalized portrait photographs that beautifully capture the unique character and personality of each individual.')
@section('content')
@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<style>
    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: contain;
    }
</style>
@endpush


<section class="page-header"  style="background-image: url('{{asset('assets/static/site-images/portrait-photography.jpg')}}');">
    <div class="container-xl">
      <div class="row">
        <div class="col-md-6">
          <h1 class="page-title">Portrait Photography</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white">
              <li class="breadcrumb-item"><a href="{{route('services')}}" class="decoration-no text-white">Services</a></li>
              <li class="breadcrumb-item text-white"><a class="decoration-no text-white">Portrait Photography</a></li>
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
                <h1 class="_bthe_page_title">We Portray <br> Characters</h1>
                <hr class="_btheblackline">
                <p class="_bthe_page_title_text mb-5">Creating stunning and captivating portrait photographs that truly reflect the unique personality and character of each person we photograph.</p>

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
            <div class="col-md-7 mt-5">
               <div class="row">
                <div class="col-md-6 mb-4">
                    <img data-aos="fade-up" src="{{asset('assets/static/site-images/portrait-image-1.jpg')}}" class="img-fluid" loading="lazy">
                </div>
                <div class="col-md-6">
                    <img data-aos="fade-up" src="{{asset('assets/static/site-images/portrait-image-2.jpg')}}" class="img-fluid" loading="lazy">
                </div>
               </div>
                
              </div>  
        </div>
    </div>
 </section>
 <section class="py-5">
    <div class="container-xl">
        <hr class="_btheblackline">
        <div class="row">
            <div class="col-md-6">
                <h1 cass="_btheFontReg" style="line-height: inherit;text-transform: uppercase;">Capturing beauty, elegance and creativity</h1>
                <h4 class="text-black">Through careful attention to</h4>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center align-items-center _bth_portrait_text">
                    <div>
                        <div class="d-flex justify-content-left align-items-center mb-3 text-left ln-6" data-aos="zoom-in-up" data-aos-delay="500">
                            <i class="bi bi-circle-fill"></i>
                            <h5 class="_bthetextlist">Composition</h5>
                        </div>
                        <div class="d-flex justify-content-left align-items-center mb-3 text-left ln-6" data-aos="zoom-in-up" data-aos-delay="600">
                            <i class="bi bi-circle-fill"></i>
                            <h5 class="_bthetextlist">Lighting</h5>
                        </div>
                        <div class="d-flex justify-content-left align-items-center mb-3 text-left ln-6" data-aos="zoom-in-up" data-aos-delay="700">
                            <i class="bi bi-circle-fill"></i>
                            <h5 class="_bthetextlist">Posing</h5>
                        </div>
                    </div>
                    
                  </div>
                  
                  
                  
                  
            </div>
        </div>
    </div>
 </section>
 <section>
    <div class="container-xl">
        <div class="row mb-3">
            <div class="col-md-6">
                <h1 cass="_btheFontReg" style="line-height: inherit;text-transform: uppercase;">Our Latest Projects</h1>
            </div>
            <div class="col-md-6">
               <h5 class="text-black" style="line-height:inherit">Browse through our latest projects to witness the artistry and craftsmanship that goes into each portrait.</h5>
            </div>
        </div>
      
          
        <div class="progress-container">
          <svg id="progress-circle" width="100" height="100">
            <circle id="progress-bar" cx="50" cy="50" r="45"></circle>
          </svg>
        </div>
        
        <div class="swiper mySwiper mt-5">
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                    <div class="swiper-slide">
                        <img src="{{ asset('assets') . '/' . $slider }}" class="img-fluid" loading="lazy">
                    </div>
                @endforeach
            </div>

            
            
          <div class="swiper-scrollbar"></div>

        </div>
        
    </div>
 </section>

 <section class="py-5" style="overflow: hidden;">
    <div class="container-xl">
        <h1 class="_bthe_page_title mt-5">We're good at</h1>
        <hr class="_btheblackline">
        <div class="row py-5">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div data-aos="fade-up"  data-aos-delay="300" class="card b-0 b-10 mb-3">
                  <img src="{{asset('assets/static/site-images/individuak-portraits.jpg')}}" class="card-img img-fluid" alt="Individual Portrait">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <h5 class="card-title text-white">Individual Portraits</h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div data-aos="fade-up"  data-aos-delay="400"  class="card b-0 b-10 mb-3">
                  <img src="{{asset('assets/static/site-images/familiy-portraits.jpg')}}" class="card-img img-fluid" alt="Family Portrait">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <h5 class="card-title text-white">Family Portraits</h5>
                  </div>
                </div>
              </div>
            <div class="col-md-3">
                <div data-aos="fade-up"  data-aos-delay="500"  class="card b-0 b-10 mb-3">
                    <img src="{{asset('assets/static/site-images/couples-portraits.jpg')}}" class="card-img img-fluid" alt="Couples Portraits">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                      <h5 class="card-title text-white">Couples Portraits</h5>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div data-aos="fade-up"  data-aos-delay="600" class="card b-0 b-10 mb-3">
                    <img src="{{asset('assets/static/site-images/lifestyle-portraits.jpg')}}" class="card-img img-fluid" alt="Lifestyle Portraits">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                      <h5 class="card-title text-white">Lifestyle Portraits</h5>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    </section>
    <section class="_btheBckcolorgr"></section>
@include('partials.startSmth')



@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    var progressCircle = document.getElementById("progress-bar");
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: "auto",
      spaceBetween: 30,
    
    
      scrollbar: {
        el: ".swiper-scrollbar",
        hide: false,
      },
    
      breakpoints: {
        // Breakpoint for screens larger than or equal to 768px
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        // Breakpoint for screens larger than or equal to 1024px
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      },
      on: {
        progress: function (swiper) {
          var progress = swiper.progress;
          var progressOffset = progress * 283;
          progressCircle.style.strokeDasharray = progressOffset + ", 283";
        },
      },
    });
    
    
      </script>
@endpush
@endsection
@extends('layouts.site')
@section('page_title', $title)
@section('page_description', 'Through careful attention to lighting, composition, and styling, we create images that evoke emotion and make a lasting impact.')
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


<section class="page-header"  style="background-image: url('{{asset('assets/static/site-images/fine-art-banner-image.jpg')}}');">
    <div class="container-xl">
      <div class="row">
        <div class="col-md-6">
          <h1 class="page-title text-black">Fine Art & Fashion</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-black">
              <li class="breadcrumb-item"><a href="{{route('services')}}" class="decoration-no text-black">Services</a></li>
              <li class="breadcrumb-item"><a class="decoration-no text-black">Fine Art & Fashion</a></li>
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
                <h1 class="_bthe_page_title">Translating Fashion Trends Into Captivating Images</h1>
                <hr class="_btheblackline">
                <p class="_bthe_page_title_text mb-5">We understand that fashion is more than just clothing; it's an art form, a means of self-expression, and a reflection of individuality.</p>

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
                    <img data-aos="fade-up" src="{{asset('assets/static/site-images/fine-art-home-1.jpg')}}" class="img-fluid " loading="lazy">
                </div>
                <div class="col-md-6">
                    <img data-aos="fade-up" src="{{asset('assets/static/site-images/fine-art-home-2.jpg')}}" class="img-fluid " loading="lazy">
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
                <h1 cass="_btheFontReg" style="line-height: inherit;text-transform: uppercase;">Creating your own identity and expressing your own style</h1>
            </div>
        </div>
    </div>
 </section>
 <section>
    <img class="img-fluid" src="{{asset('assets/static/site-images/absa-banner-image.jpg')}}" loading="lazy">

</section>

 <section class="py-5 _btheBckgreen">
    <div class="container-xl">
        <div class="row mb-3">
            <div class="col-md-6">
                <h1 cass="_btheFontReg" style="line-height: inherit;text-transform: uppercase;color: #fff;">Our Latest Projects</h1>
            </div>
            <div class="col-md-6">
               <p class="text-white">We engage audiences for brands and businesses through high quality broadcasts, interactive online venues and expert hybrid production.</p>
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
                <img src="{{asset('assets/static/site-images/fashion-edits.jpg')}}" class="card-img img-fluid" alt="Fashion Editorials">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-white">Fashion Editorials</h5>
                </div>
              </div>
            </div>
            <div  class="col-lg-3 col-md-3 col-sm-6">
              <div data-aos="fade-up"  data-aos-delay="400" class="card b-0 b-10 mb-3">
                <img src="{{asset('assets/static/site-images/high-fashion.jpg')}}" class="card-img img-fluid" alt="High Fashion Portraits">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-white">High Fashion Portraits</h5>
                </div>
              </div>
            </div>
          <div class="col-md-3">
              <div data-aos="fade-up"  data-aos-delay="500" class="card b-0 b-10 mb-3">
                  <img src="{{asset('assets/static/site-images/conceptual-arts.jpg')}}" class="card-img img-fluid" alt="Conceptual Art">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <h5 class="card-title text-white">Conceptual Art</h5>
                  </div>
                </div>
          </div>
          <div class="col-md-3">
              <div data-aos="fade-up"  data-aos-delay="600" class="card b-0 b-10 mb-3">
                  <img src="{{asset('assets/static/site-images/look-books.jpg')}}" class="card-img img-fluid" alt="Lookbooks and Catalogs">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <h5 class="card-title text-white">Lookbooks and Catalogs</h5>
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
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
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

<script>
    window.addEventListener('scroll', function() {
      var section = document.querySelector('section._btheBckgreen');
      var sectionHeight = section.offsetHeight;
      var scrollPosition = window.pageYOffset;
      var scrollPercentage = (scrollPosition / sectionHeight) * 100;
      section.style.backgroundColor = 'hsl(' + scrollPercentage + ', 50%, 50%)';
    });
  </script>
@endpush
@endsection
@extends('layouts.site')
@section('page_title', 'Real Estate')
@section('page_description', 'At Break The Eyes, we specialize in capturing stunning interior and exterior shots that showcase the architecture, design elements, and the true potential of every property. Our goal is to create visually compelling images that highlight the unique features, capturing the essence of each space.')
@section('content')
<section class="page-header"  style="background-image: url('{{asset('assets/static/site-images/real-estate-banner-image.jpg')}}');">
  <div class="container-xl">
    <div class="row">
      <div class="col-md-6">
        <h1 class="page-title text-white">Real Estate</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="decoration-no text-white">Services</a></li>
            <li class="breadcrumb-item"><a class="decoration-no text-white">Real Estate</a></li>
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
              <h1 class="_bthe_page_title">Unleashing the Essence of every property</h1>
              <hr class="_btheblackline">
              <p class="_bthe_page_title_text mb-5">We go above and beyond to capture the essence of each property, highlighting its unique features and creating a visual narrative that engages potential buyers.</p>

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
                  <img src="{{asset('assets/static/site-images/real-estate-1.jpg')}}" class="img-fluid " loading="lazy">
              </div>
              <div class="col-md-6">
                  <img src="{{asset('assets/static/site-images/camera-banner-2.jpg')}}" class="img-fluid " loading="lazy">
              </div>
             </div>
              
            </div>
          

          
            
      </div>
  </div>
</section>
<section class="py-5">
  <div class="container-xl mb-5">
      <hr class="_btheblackline">
      <div class="row">
          <div class="col-md-6">
              <h1 cass="_btheFontReg" style="line-height: inherit;text-transform: uppercase;">Harmonizing Vision <br> and Sound</h1>
              <p class="py-3 mt-5">Our team understands the importance of synchronization between music and visuals. We meticulously craft each frame to enhance the rhythm, dynamics, and mood of the song, creating a harmonious fusion of sight and sound. We incorporate innovative camera movements, captivating lighting, and compelling editing techniques to elevate your Real Estate to new heights.</p>
          </div>
          <div class="col-md-6 mb-5">
              <img src="{{asset('assets/static/site-images/house-banner-1.jpg')}}" loading="lazy" class="img-fluid" style="border-radius: 15px;">
          </div>
          <div class="col-md-8">
              <img src="{{asset('assets/static/site-images/house-banner-2.jpg')}}" loading="lazy" class="img-fluid" style="border-radius: 15px;">
          </div>
      </div>
  </div>

</section>

<section class="mt-5 no-gutters" style="position: relative; overflow: hidden;z-index: 1;">
  <div style="width: 100%; height: auto;">
    <video muted autoplay loop style="width: 100%; height: auto; position: relative; z-index: -1;">
      <source src="https://bb.agency/wp-content/uploads/2023/01/showcase.webm" type="video/webm">
      <source src="https://bb.agency/wp-content/uploads/2022/06/showcase.mp4" type="video/mp4">
    </video>
  </div>
  <div class="parallax-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
</section>

@include('partials.startSmth')


@endsection
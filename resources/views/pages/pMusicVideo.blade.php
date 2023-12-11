@extends('layouts.site')
@section('page_title', $title)
@section('page_description', 'Whether you\'re a musician, band, or music label looking to visually enhance your brand and music, trust Break The Eyes to deliver exceptional visual content that brings your music to life.')
@section('content')
<section class="page-header"  style="background-image: url('{{asset('assets/static/site-images/music-video-banner.jpg')}}');">
  <div class="container-xl">
    <div class="row">
      <div class="col-md-6">
        <h1 class="page-title text-white">Music Video</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('services')}}" class="decoration-no text-white">Services</a></li>
            <li class="breadcrumb-item"><a class="decoration-no text-white">Music Video</a></li>
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
              <h1 class="_bthe_page_title">We bring music to life through captivating visuals</h1>
              <hr class="_btheblackline">
              <p class="_bthe_page_title_text mb-5">With our expertise in cinematography, editing, visual effects, and storytelling techniques, we create music videos that are visually stunning, immersive, and reflective of the artist's identity.</p>
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
                  <img src="{{asset('assets/static/site-images/camera-banner-1.jpg')}}" class="img-fluid " loading="lazy">
              </div>
              <div class="col-md-6 mb-4">
                  <img src="{{asset('assets/static/site-images/camera-banner-2.jpg')}}" class="img-fluid " loading="lazy">
              </div>
             </div>
              
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

<section class="py-5">
  <div class="container-xl mb-5">
      <hr class="_btheblackline">
      <div class="row">
          <div class="col-md-6">
              <h1 cass="_btheFontReg" style="line-height: inherit;text-transform: uppercase;">Harmonizing Visual and Sound</h1>
              <p>Our team understands the importance of synchronization between music and visuals. We meticulously craft each frame to enhance the rhythm, dynamics, and mood of the song, creating a harmonious fusion of sight and sound. We incorporate innovative camera movements, captivating lighting, and compelling editing techniques to elevate your music video to new heights.</p>
          </div>
      </div>
  </div>
  <div class="container-xl">
      <div class="row">
          <div class="col-md-6 mb-3">
              <div class="ratio ratio-16x9">
                  <iframe src="{{$video_1}}" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-md-6 mb-3">
              <div class="ratio ratio-16x9">
                  <iframe src="{{$video_2}}" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-md-6 mb-3">
              <div class="ratio ratio-16x9">
                  <iframe src="{{$video_3}}" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-md-6 mb-3">
              <div class="ratio ratio-16x9">
                  <iframe src="{{$video_4}}" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
            
      </div>
  </div>
</section>
@include('partials.startSmth')


@endsection
@extends('layouts.site')
@section('page_title', 'Capturing Moments with Precision and Creativity')
@section('page_description','Experience the artistry and professionalism of Brek The Eyes, a leading media company. From live broadcasting to fine art and fashion photography, music videos, real estate photography, and event coverage, we specialize in capturing memorable moments with precision and creativity.')
@section('content')

<section style="padding-top: 1rem;">
    <div class="container-xl _bthHborder">
        <div class="row">
            <div class="col-md-8">
                    <div class="_bthetxwrapper d-flex" style="max-width: 700px;">
                        <h1 class="_btheFontReg" style="line-height: inherit;">Eye-Catching Moments Breaking the Norm with Break The Eyes <span class="_bthe-eye"></span></h1>
                    </div>
                    <div class="_btheslantline"></div>
            </div>

            <div class="col-md-4">
                <div class="">
                  <p>We thrive on capturing extraordinary moments, infusing our work with a touch of madness that sets us apart. Driven by a relentless passion for delivering exceptional results.</p>
                  <a href="{{route('services')}}" class="btn _btheBttn bttn-pill-black text-center">
                    Our Artistry 
                    <i class="bi bi-arrow-down-right"></i>
                  </a>
                  
                </div>
              </div>
              
        </div>
    </div>
 </section>

 <section class="py-4">
    <div class="container-xl mt-3">
        <div data-aos="zoom-in-up" class="row mb-4 row align-items-end no-gutters">
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
                    <div data-aos="zoom-in-up" class="col-md-6 _btheservicecard">
                        <a href="{{route('p_photography')}}">
                            <div class="card _bthecard" style="position: relative;">
                              <img src="{{asset('assets/static/site-images/portrait-photography-banner-small.jpg')}}" class="img-fluid" alt="Portrait Photography" loading="lazy">
                              <div class="card-overlay">
                                <div class="overlay-content">
                                  <span class="text-left _bthecard_text">Portrait Photography</span>
                                  <i class="bi bi-arrow-down-right-circle _bthecard_arrow"></i>
                                </div>
                              </div>
                            </div>
                          </a> 
                    </div>
                    <div data-aos="zoom-in-up" class="col-md-6 _btheservicecard">
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
        <div  data-aos="zoom-in-up" class="row align-items-end no-gutters">
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
 <section class="mt-5 no-gutters" style="position: relative; overflow: hidden;z-index: 1;">
    <div style="width: 100%; height: auto;">
      <video muted autoplay loop style="width: 100%; height: auto; position: relative; z-index: -1;">
        <source src="https://bb.agency/wp-content/uploads/2023/01/showcase.webm" type="video/webm">
        {{-- <source src="{{asset('home-video.mp4')}}" type="video/mp4"> --}}
      </video>
    </div>
    <div class="parallax-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
  </section>
  

 <section data-aos="zoom-out-up" class="_btheBckGrey py-5" style="overflow: hidden;">
    <div class="container-xl">
        <hr class="_btheblackline">
        <div class="row">
            <div class="col-md-8">
                <div  style="max-width: 900px;">
                    <h1 cass="_btheFontReg" style="line-height: inherit;">5 + Years of Creative Collaboration: Partnering, Pioneering, and Unveiling Unforgettable Moments</h1>
                </div>
                
            </div>
        </div> 
    </div>
    <!--Begin clint crousel-->
    <div class="d-flex mt-5"  id="scrollContainer" style="width: 100%;">
        <div class="_btheclient">
            <img src="https://cdn.sanity.io/images/7most0p5/production/180cac407165b59bda1ec4264d481748d5db8177-156x156.svg" class="_btheclientlogo">
        </div>
        <div class="_btheclient">
            <img src="https://cdn.sanity.io/images/7most0p5/production/180cac407165b59bda1ec4264d481748d5db8177-156x156.svg" class="_btheclientlogo">
        </div>
        <div class="_btheclient">
            <img src="https://cdn.sanity.io/images/7most0p5/production/180cac407165b59bda1ec4264d481748d5db8177-156x156.svg" class="_btheclientlogo">
        </div>
        <div class="_btheclient">
            <img src="https://cdn.sanity.io/images/7most0p5/production/180cac407165b59bda1ec4264d481748d5db8177-156x156.svg" class="_btheclientlogo">
        </div>
        <div class="_btheclient">
            <img src="https://cdn.sanity.io/images/7most0p5/production/180cac407165b59bda1ec4264d481748d5db8177-156x156.svg" class="_btheclientlogo">
        </div>
        <div class="_btheclient">
            <img src="https://cdn.sanity.io/images/7most0p5/production/180cac407165b59bda1ec4264d481748d5db8177-156x156.svg" class="_btheclientlogo">
        </div>
        <div class="_btheclient">
            <img src="https://cdn.sanity.io/images/7most0p5/production/180cac407165b59bda1ec4264d481748d5db8177-156x156.svg" class="_btheclientlogo">
        </div>
    </div>

    
    <div class="container-xl d-flex justify-content-center align-items-center" style="margin-top:7rem;">
        <a href="{{route('contactUs')}}" class="btn _btheBttn bttn-pill-black text-center" target="_tblank">
         Work with us
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>                    
 </section>

 

 <section class="_btheBckblack">
    <div class="container-xl text-center">
        <h1 class="_bthemasterfnt" style="line-height: inherit;">Masterpieces Unleashed</h1>
        <p class="text-white mb-5">Our Proud Productions, Cherished Creations, <br> and the Art that Doesn't Feel Like Labor</p>
    
    <div class="row mt-5">
        <div data-aos="fade-down" data-aos-duration="1000" class="col-md-6 mb-3">
            <a href="{{ $project_1_link}}">
                <div class="card b-0 position-relative _bthecard">
                  <img src="{{ asset('assets/' . $project_image_1) }}" class="card-img">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <div class="text-start">
                      <h3 class="card-title text-white">{{$project_1_title}}</h3>
                      <p class="card-text text-white _bthe_hidden">{{ $project_1_description}}</p>
                    </div>
                    <i class="bi bi-arrow-up-right _bthearrowwight position-absolute top-0 end-0 mt-3 me-3 _bthe_hidden"></i>
                  </div>
                </div>
              </a>
        </div>

        <div data-aos="fade-down" data-aos-duration="1000" class="col-md-6 mb-3">
            <a href="{{ $project_2_link}}">
                <div class="card b-0 position-relative _bthecard">
                  <img src="{{ asset('assets/' . $project_image_2) }}" class="card-img">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <div class="text-start">
                      <h3 class="card-title text-white">{{$project_2_title}}</h3>
                      <p class="card-text text-white _bthe_hidden">{{ $project_2_description }}</p>
                    </div>
                    <i class="bi bi-arrow-up-right _bthearrowwight position-absolute top-0 end-0 mt-3 me-3 _bthe_hidden"></i>
                  </div>
                </div>
              </a>
        </div>

        <div data-aos="fade-up" data-aos-duration="1000" class="col-md-12 mt-5">
            <a href="{{$project_3_link}}">
                <div class="card b-0 position-relative _bthecard">
                  <img src="{{ asset('assets/' . $project_3_image) }}" class="card-img">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <div class="text-start">
                      <h3 class="card-title text-white">{{$project_3_title}}</h3>
                      <p class="card-text text-white _bthe_hidden">{{ $project_3_description }}</p>
                    </div>
                    <i class="bi bi-arrow-up-right _bthearrowwight position-absolute top-0 end-0 mt-3 me-3 _bthe_hidden"></i>
                  </div>
                </div>
              </a>
        </div>
    </div>
    

    
    </div>

    @push('scripts')
    <script>
      var prevScrollPos = window.pageYOffset;
      window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollPos > currentScrollPos) {
          document.querySelector("header").style.top = "0";
        } else {
          document.querySelector("header").style.top = "-100px";
        }
        prevScrollPos = currentScrollPos;
      };
    </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    $('.parallax-overlay').css('opacity', 0.5 - (scrollTop / 700));
  });
});


</script>
    @endpush
 </section>

@endsection
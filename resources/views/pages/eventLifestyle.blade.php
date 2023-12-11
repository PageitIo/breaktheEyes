@extends('layouts.site')
@section('page_title', 'Events & Life Style')
@section('page_description', 'We understand the importance of preserving these precious moments, and our goal is to provide you with stunning and timeless photographs that you can cherish for years to come')
@section('content')
<section class="page-header"  style="background-image: url('{{asset('assets/static/site-images/events-banner-image.jpg')}}');">
    <div class="container-xl">
      <div class="row">
        <div class="col-md-6">
          <h1 class="page-title">Events & life style</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white">
              <li class="breadcrumb-item"><a href="#" class="decoration-no text-white">Services</a></li>
              <li class="breadcrumb-item text-white"><a href="#" class="decoration-no text-white">Events & Life Style</a></li>
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
                <h1 class="_bthe_page_title">Capturing Events and Life Style Moments</h1>
                <hr class="_btheblackline">
                <p class="_bthe_page_title_text mb-5">From candid shots that capture the genuine emotions of the day to carefully composed images that highlight the beauty of the surroundings, we strive to tell your unique story through our lens.</p>

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
                    <img src="{{asset('assets/static/site-images/wedding-banner-image-1.jpg')}}" class="img-fluid" loading="lazy">
                </div>
                <div class="col-md-6">
                    <img src="{{asset('assets/static/site-images/wedding-banner-image-2.jpg')}}" class="img-fluid" loading="lazy">
                </div>
               </div>
                
              </div>  
        </div>
    </div>
 </section>
 <section class="py-5 _btheBckblack">
    <div class="container-xl py-5">
        <hr class="_btheswhiteline">
        <div class="row">
            <div class="col-md-6 py-5">
                <h1 cass="_btheFontReg" style="line-height: inherit;text-transform: uppercase;color: #fff;">Delivering Exceptional Visual Content</h1>
                <p class="text-white">Whether it's documenting the raw emotions of a captivating event, showcasing the dynamic energy of sports, curating editorial-style visuals that tell a story, or providing professional B2B videography services, our team is dedicated to delivering top-notch content that exceeds expectations.</p>
            </div>
            <div class="col-md-6 py-5">
                <img src="{{asset('assets/static/site-images/house-banner-1.jpg')}}" class="img-fluid" loading="lazy" style="border-radius: 15px;"> 
                  
            </div>
        </div>
    </div>
 </section>
 <section class="py-5" style="overflow: hidden;">
    <div class="container-xl">
        <h1 class="_bthe_page_title mt-5">We're good at</h1>
        <hr class="_btheblackline">
        <div class="row py-5">
            <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                <div data-aos="fade-up"  data-aos-delay="300" class="card b-0 b-10 mb-3">
                  <img src="{{asset('assets/static/site-images/individuak-portraits.jpg')}}" class="card-img img-fluid" alt="Documentary">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <h5 class="card-title text-white">Documentary</h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                <div data-aos="fade-up"  data-aos-delay="400" class="card b-0 b-10 mb-3">
                  <img src="{{asset('assets/static/site-images/familiy-portraits.jpg')}}" class="card-img img-fluid" alt="Sports">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <h5 class="card-title text-white">Sports</h5>
                  </div>
                </div>
              </div>
            <div class="col-md-3">
                <div data-aos="fade-up"  data-aos-delay="500" class="card b-0 b-10 mb-3 mb-4">
                    <img src="{{asset('assets/static/site-images/couples-portraits.jpg')}}" class="card-img img-fluid" alt="Editorials">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                      <h5 class="card-title text-white">Editorials</h5>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div data-aos="fade-up"  data-aos-delay="600" class="card b-0 b-10 mb-3 mb-4">
                    <img src="{{asset('assets/static/site-images/lifestyle-portraits.jpg')}}" class="card-img img-fluid" alt="B2B Videography">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                      <h5 class="card-title text-white">B2B Videography</h5>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    </section>
    <section class="_btheBckcolorlgreen"></section>

@include('partials.startSmth')


@endsection
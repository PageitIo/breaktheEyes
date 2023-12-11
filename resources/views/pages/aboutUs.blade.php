@extends('layouts.site')
@section('page_title', 'About us')
@section('content')
<section style="padding-top: 2rem !important;">
    <div class="container-xl _bthHborder">
        <div class="row">
           <div class="col-md-5">
                <h1 class="_bthe_page_title">The creative laboratory</h1>
                <hr class="_btheblackline">
                <p class="_bthe_page_title_text mb-5">Where we breed magic and innovation</p>

    

                  <div class="d-flex justify-content-start mt-5">
                    <div class="d-flex align-items-center" style="transform: rotate(-90deg); white-space: nowrap; margin-left: -50px;">
                     
                      <p style="margin-bottom: 0;">SCROLL</p>
                      <hr class="m-0" style="width: 45px;">
                    </div>
                  </div>
                  
                  
                  
                   
            </div>
            

            <div class="col-md-7 mt-5">
                <img src="{{asset('assets/static/site-images/the-team-banner-image.jpg')}}" class="img-fluid tribe-banner brd-15">
                
              </div>
              
        </div>
    </div>
 </section>
 <section class="_btheBckblack">
    <div class="container-xl text-white text-left">
       <div class="row">
        <div class="col-md-6">
          <h1 class="_btheabttext">Unleashing Visual Wizardry</h1>
            <p class="mb-5">We are dedicated to crafting extraordinary moments that leave a lasting impression. As a dynamic team of creative visionaries, we strive to break the boundaries of conventional storytelling and redefine the art of visual expression.</p>
        
        </div>

        <div class="col-md-6">
            <div class="d-flex justify-content-center align-items-center">
              <img src="{{asset('assets/static/brand/brand-eye-border-white.svg')}}" class="img-fluid" width="40%">
            </div>
          </div>
          
       </div>            
    </div>
 </section>

 <section style="padding-top: 8rem;padding-bottom: 8rem;">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-6">
              <div class="d-flex align-items-center">
                <img src="{{asset('assets/static/site-images/abouut-image-1.jpg')}}" class="img-fluid" style="border-radius: 1rem;" width="80%">
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-center align-items-center">
              <p>Dedicated to pushing the boundaries of visual storytelling, we turn dreams into reality. </p>
              </div>
            </div>
          </div>
          
    </div>
 </section>

 <section class="py-5" id="tribe"  data-aos="fade-down" data-aos-anchor-placement="center-bottom">
 
    <div class="container-xl ">
      <div class="d-flex">
        <h1 class="_bthe_page_title">Our <span style="text-decoration: underline;">Team</span></h1>
      </div>
     <div class="row mt-5">
        <div class="col-md-4">
          <img src="{{asset('assets/static/site-images/team-members/team-member-1.jpg')}}" class="img-fluid">
          <div class="_bthename mt-3">
            <h2>John <span>Doe</span></h2>
            <div class="d-flex">
              <i class="bi bi-circle-fill red-dot"></i>
              <h5 class="_btheposition">Videographer</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4">
            <img src="{{asset('assets/static/site-images/team-members/team-member-1.jpg')}}" class="img-fluid">
            <div class="_bthename mt-3">
              <h2>John <span>Doe</span></h2>
              <div class="d-flex">
                <i class="bi bi-circle-fill red-dot"></i>
                <h5 class="_btheposition">Videographer</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <img src="{{asset('assets/static/site-images/team-members/team-member-1.jpg')}}" class="img-fluid">
            <div class="_bthename mt-3">
              <h2>John <span>Doe</span></h2>
              <div class="d-flex">
                <i class="bi bi-circle-fill red-dot"></i>
                <h5 class="_btheposition">Videographer</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <img src="{{asset('assets/static/site-images/team-members/team-member-1.jpg')}}" class="img-fluid">
            <div class="_bthename mt-3">
              <h2>John <span>Doe</span></h2>
              <div class="d-flex">
                <i class="bi bi-circle-fill red-dot"></i>
                <h5 class="_btheposition">Videographer</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <img src="{{asset('assets/static/site-images/team-members/team-member-1.jpg')}}" class="img-fluid">
            <div class="_bthename mt-3">
              <h2>John <span>Doe</span></h2>
              <div class="d-flex">
                <i class="bi bi-circle-fill red-dot"></i>
                <h5 class="_btheposition">Videographer</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <img src="{{asset('assets/static/site-images/team-members/team-member-1.jpg')}}" class="img-fluid">
            <div class="_bthename mt-3">
              <h2>John <span>Doe</span></h2>
              <div class="d-flex">
                <i class="bi bi-circle-fill red-dot"></i>
                <h5 class="_btheposition">Videographer</h5>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>

  @include('partials.startSmth')
@endsection
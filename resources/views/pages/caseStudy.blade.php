@extends('layouts.site')
@section('page_title', 'Projects')
@section('content')
<section class="py-5" style="background-image: url('{{asset('assets/static/site-images/our-work-banner-image.jpg')}}'); background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-8">
                <h1 class="_bthe_contact_title text-white">Our Work</h1>
                <hr class="_btheswhiteline">
                <p class="_bthe_page_title_text mb-5 text-white" style="max-width:calc(830px*var(--scale))">To understand how we work and our experience, please view our portfolio using the filters below. We also have a series of detailed case studies containing further information.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-black" style="border-bottom: solid 0.5px #fff;">
    <div class="container-xl py-5">
        <hr class="_btheswhiteline">
        <div class="row">
            @foreach ($entries as $entry)
            <div class="col-md-4 mb-4 d-flex align-items-stretch">
                <div class="card zoom-card">
                <a href="{{ $entry->url() }}"> 
                    <img src="{{ $entry->featured_image }}" class="img-fluid" alt="Image" style="border-radius: 0px;"></a>   <!-- Image size should be 1600x900-->
                  <div class="card-body _bthscsbody relative px-6 py-5 bg-[#2C2C2C] text-light">
                    <a href="/project-detail.html"><h5 class="card-title">{{ $entry->get('title') }}</h5></a>
                    <div class="d-flex flex-wrap">
                      @foreach ($entry->get('service_list') as $service)
                        <p class="_bthscspill" >{{ $service }}</p>
                         @endforeach
                    </div>
                  </div>
                </div>
              </div>
              @endforeach          
        </div>
    </div>
 </section>
@endsection
@extends('layouts.site')
@section('page_title', $entry->title)
@section('page_image', $entry->featured_image)
@section('page_description', $entry->case_description)
@section('content')

<!-- Decode the image URL -->
@php
$imageUrls = [];
$imageDataArray = json_decode(urldecode($entry->case_images), true);

foreach ($imageDataArray as $imageData) {
    if (isset($imageData['url'])) {
        $imageUrls[] = $imageData['url'];
    }
}
@endphp
<section class="bg-black py-5">
    <div class="container-xl">
        <div class="row">
          <div class="col-md-6">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="decoration-no text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('projects')}}" class="decoration-no text-white">Projects</a></li>
                <li class="breadcrumb-item"><a class="decoration-no text-white">{{$entry->title}}</a></li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
</section>
<section class="bg-black">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-6">
                <h1 class="_bthe_page_title text-white">Case Study - {{$entry->title}}</h1>
                <hr class="_btheswhiteline">
                <p class="_bthe_page_title_text text-white mb-5">{{ $entry->case_description}}</p>
                <div class="d-flex flex-wrap text-white">
                  
                    @foreach ($entry->get('service_list') as $service)
                    <p class="_bthscspill">{{ htmlspecialchars($service) }}</p>
                @endforeach
                
                  </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-xl py-5">
        <div class="row">            
            @foreach ($imageUrls as $imageUrl)
                <a href="{{ $imageUrl }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 mb-4">
                    <img src="{{ $imageUrl }}" class="img-fluid">
                </a>
            @endforeach
            
            
          

            </a>
        </div>

    </div>
</section>
<section class="py-5">
    <div class="container-xl">
        <hr class="_btheblackline">
        <div class="row">
            <div class="col-md-6">
                <h1 cass="_btheFontReg" style="line-height: inherit;text-transform: uppercase;">{{$entry->challenge_heading}}</h1>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center align-items-center _bth_portrait_text">
                    <div>
                      <div class="d-flex justify-content-left align-items-center mb-3 text-left">
                        <i class="bi bi-circle-fill"></i>
                        <h5 class="_bthetextlist">Challenge</h5>
                      </div>
                      <p>{{ $entry->challenge}}</p>
                      <div class="d-flex justify-content-left align-items-center mb-3 text-left">
                        <i class="bi bi-circle-fill"></i>
                        <h5 class="_bthetextlist">Solution</h5>
                      </div>
                      <p>{{ $entry->solution_text}}</p>
                      <div class="d-flex justify-content-left align-items-center mb-3 text-left">
                        <i class="bi bi-circle-fill"></i>
                        <h5 class="_bthetextlist">Result</h5>
                      </div>
                      <p>{{ $entry->result_text}}</p>
                      
                    </div>
                  </div>
                  
            </div>
        </div>
    </div>
 </section>

@push('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function () {
      // Get all the lightbox elements within the container
      const lightboxElements = document.querySelectorAll('#lightbox-container [data-toggle="lightbox"]');
  
      // Initialize the lightbox for each element
      lightboxElements.forEach(function (element) {
        new bootstrap5Lightbox(element);
      });
    });
  </script>
  
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
@endpush

@endsection
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>
      <title>@yield('page_title') | Break The Eyes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('page_description')">
    <meta name="author" content="Romeo Tumbee">
    <meta property="og:title" content="@yield('page_title')">
    <meta property="og:description" content="@yield('page_description')">
    <meta property="og:image" content="{{asset('assets/static/brand/seo-banner.jpg')}}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="{{asset('assets/static/brand/seo-banner.jpg')}}">
    <meta name="twitter:title" content="@yield('page_title')">
    <meta name="twitter:description" content="@yield('page_description')">
    <meta name="twitter:image" content="{{asset('assets/static/brand/seo-banner.jpg')}}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/static/brand/favicon.png') }} ">
    <link href="{{asset('assets/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bthe.css')}}" rel="stylesheet">
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/bthe.js')}}"></script>
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    
    @stack('styles')

    <!--Smoth scroll-->


</head>

  
<body>

    <!-- begin header-->
  
    @include('partials.header')
    <!--End Header-->

    <div id="app">
        <main style="background: #F0F0F0;overflow: hidden;">

  @yield('content')
         </main>
         
          
          
         
       <!--</main> --> 
       <!--Cookie Message-->
    </div>
   <!--Begin Footer-->
@include('partials.footer')
   <!--End Footer-->
    
</body>

@stack('scripts')
<script>
  AOS.init();
</script>

<script>
  // Custom JavaScript code for hover dropdown
  const dropdownMenu = document.querySelector('.dropdown');

  dropdownMenu.addEventListener('mouseover', function () {
      dropdownMenu.querySelector('.dropdown-menu').classList.add('show');
  });

  dropdownMenu.addEventListener('mouseout', function () {
      dropdownMenu.querySelector('.dropdown-menu').classList.remove('show');
  });
</script>



</html>



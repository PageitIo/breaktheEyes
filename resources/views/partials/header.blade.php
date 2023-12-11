<header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-xl mt-3 _bthHborder" style="padding-bottom: 1rem;">
        <div class="d-flex _btheNavbar">
            <a class="navbar-brand" href="/">
                <img src="{{asset('assets/static/brand/logo-black-red.svg')}}" alt="Logo" width="100" height="60">
              </a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('theTribe')}}">The Tribe</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{route('services')}}" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Services
                    </a>
                    <ul class="dropdown-menu bg-white b-0" aria-labelledby="servicesDropdown" style="line-height: inherit">
                        <li><a class="dropdown-item {{ request()->routeIs('liveRecording') ? 'active' : '' }} " href="{{route('liveRecording')}}">Live Recording</a></li>
                        <li>
                          <a class="dropdown-item {{ request()->routeIs('p_photography') ? 'active' : '' }}" href="{{ route('p_photography') }}">Portrait Photography</a>
                      </li>                      
                        <li><a class="dropdown-item {{ request()->routeIs('fineArtandfashion') ? 'active' : '' }}" href="{{route('fineArtandfashion')}}">Fine Art & Fashion</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('musicVideo') ? 'active' : '' }}" href="{{route('musicVideo')}}">Music Video</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('realEstate') ? 'active' : '' }}" href="{{route('realEstate')}}">Real Estate</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('eventLifestyle') ? 'active' : '' }}" href="{{route('eventLifestyle')}}">Event & Lifestyle</a></li>
                    </ul>
                </li>
                
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('projects')}}">Our Projects</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('contactUs')}}">Contact us</a>
                  </li>
                </ul>
              </div>
        </div>
        <div class="custom-hr"></div>
     
        <div class="d-flex align-items-center _bthePills">
            <a href="https://www.youtube.com/@breaktheeyesmedia209" class="btn _btheBttn btn-red" target="_tblank">Youtube</a>
            <a href="https://www.instagram.com/breaktheeyes/" class="btn _btheBttn btn-black" target="_tblank">Instagram</a>
            <a href="https://www.linkedin.com/company/break-the-eyes/" class="btn _btheBttn btn-red" target="_tblank">Linkedin</a>
        </div>
        <button class="navbar-toggler b-0" type="button"  data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
          <span class="navbar-toggler-icon"></span>
      </button>
        </div>
    
      </div>
    </nav>
  </header>

  <div class="offcanvas offcanvas-bottom" tabindex="-1" id="mobileMenu" style="background: #1D1D1B">
    <div class="offcanvas-header d-flex justify-content-between align-items-center">
      <a href=""><img class="brand-logo" src="{{ asset('assets/static/brand/brand-eye-border-white.svg') }}" alt="Break The Eyes Logo" width="50"></a>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
<ul class="nav flex-column">
    <li class="nav-item mobile-nav">
        <a class="nav-link px-0 py-2 _bthe_mobile_menu_text  underline-animation" href="{{route('index')}}">Home</a>
    </li>
    
    <li class="nav-item mobile-nav">
      <a class="nav-link px-0 py-2 _bthe_mobile_menu_text  underline-animation" href="{{route('services')}}">Services</a>
  </li>
  <li class="nav-item mobile-nav">
    <a class="nav-link px-0 py-2 _bthe_mobile_menu_text  underline-animation" href="{{route('theTribe')}}">The  Tribe</a>
</li>

  <li class="nav-item mobile-nav">
    <a class="nav-link px-0 py-2 _bthe_mobile_menu_text  underline-animation" href="">Projects</a>
</li>
<li class="nav-item mobile-nav">
  <a class="nav-link px-0 py-2 _bthe_mobile_menu_text  underline-animation" href="">Work with us</a>
</li>

</ul>

 </div>
          
  </div>
@extends('layouts.site')
@section('page_title', 'Contact us')
@section('content')

<section class="py-5">
    <div class="container-xl">
        <div class="row">
           <div class="col-md-8">
                <h1 class="_bthe_contact_title">Let's Start <br> Something</h1>
                <hr class="_btheblackline">
                <p class="_bthe_page_title_text mb-5" style="max-width:calc(830px*var(--scale))">Are you ready to delve into your project? If our visions intertwine like a perfect dance, we're all ears! Unleash your creative symphony, share your artistic aspirations, and let's set sail on a harmonious journey of imagination..</p>

            </div>
        </div>
    </div>
 </section>
 <section class="py-5 bg-black" style="border-bottom: solid 0.5px #fff;">
    <div class="container-xl py-5">
        <hr class="_btheswhiteline">
        <div class="row">
            <div class="col-md-4 py-5">
                <h5 cass="" style="line-height: inherit;color: #fff;">hello@brektheeyes.com</h5>
                <h6 class="text-white">Nicosia Northern Cyprus <br>
                    Via Mersin 10 Turkey.</h6>
                    <div class="d-flex">
                        <a href="https://www.youtube.com/@breaktheeyesmedia209" target="_tblank"><i class="bi bi-youtube me-3 footer-icon"></i></a>
                        <a href="https://www.instagram.com/breaktheeyes" target="_tblank"><i class="bi bi-instagram me-3 footer-icon"></i></a>
                        <a href="https://www.linkedin.com/company/break-the-eyes/" target="_tblank"><i class="bi bi-linkedin me-3 footer-icon"></i></a>
                        <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fbreaktheeyes" target="_tblank"><i class="bi bi-twitter me-3 footer-icon"></i></a>
                      </div>
            </div>
            <div class="col-md-6 py-5">
                <form class="" action="/submit_form" method="post">
                    @csrf
                
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                
                    <div class="form-row">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="text-white mb-3 text-cap" for="first_name">First Name:</label><span class="text-danger">*</span>
                                <input type="text" id="first_name" name="first_name" class="form-control _bthecontact_form " required>
                            </div>
                            <div class="col-md-6">
                                <label class="text-white mb-3 text-cap" for="last_name">Last Name</label><span class="text-danger">*</span>
                                <input type="text" id="last_name" name="last_name" class="form-control _bthecontact_form" required>
                            </div>
                        </div>
                    </div>
                
                    <br>
                
                    <div class="form-row">
                        <div class="row">
                            <div class="col">
                                <label class="text-white mb-3 text-cap" for="email">Email</label> <span class="text-danger">*</span>
                                <input type="email" id="email" name="email" class="form-control _bthecontact_form" required>
                            </div>
                            <div class="col">
                                <label class="text-white mb-3 text-cap" for="phone">Phone Number</label> <span class="text-danger">*</span>
                                <input type="tel" id="phone" name="phone" class="form-control _bthecontact_form" required>
                            </div>
                        </div>
                    </div>
                
                    <br>
                
                    <div class="form-group">
                        <label class="text-white mb-3 text-cap" for="message">Project Information</label> <span class="text-danger">*</span>
                        <textarea id="message" name="message" class="form-control _bthecontact_form" rows="5" required></textarea>
                    </div>
                
                    <br>
                
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn _btheBttn bttn-pill-white">Send Away <i class="bi bi-arrow-right"></i></button>
                    </div>
                </form>
                
              </div>
              
        </div>
    </div>
 </section>
@endsection
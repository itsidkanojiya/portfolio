@extends('frontend.layouts.main')

@section('main-container')

    <!-- About -->
    <section class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="about-me-box shadow-box">
                        <a class="overlay-link" href="about.html"></a>
                        <img src="{{url('frontend/images/bg1.png')}}" alt="BG" class="bg-img">
                        <div class="img-box">
                            <img src="{{url('frontend/images/me.png')}}" alt="About Me">
                        </div>
                        <div class="infos">
                            <h4>Software Developer</h4>
                            <h1>Siddharth Kanojiya</h1>
                            <p>Transforming ideas into interactive digital experiences through innovative software development.</p>
                            <a href="#" class="about-btn">
                                <img src="{{url('frontend/images/icon.svg')}}" alt="Button">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="about-credentials-wrap">
                        <div data-aos="zoom-in">
                            <div class="banner shadow-box">
                                <div class="marquee">
                                    <div>
                                      <span>LATEST WORK AND <b>FEATURED</b> <img src="{{url('frontend/images/star1.svg')}}" alt="Star"> LATEST WORK AND <b>FEATURED</b> <img src="assets/images/star1.svg" alt="Star"> LATEST WORK AND <b>FEATURED</b> <img src="{{url('frontend/images/star1.svg')}}" alt="Star"> LATEST WORK AND <b>FEATURED</b> LATEST WORK AND <img src="assets/images/star1.svg" alt="Star"> LATEST WORK AND <b>FEATURED</b> LATEST WORK AND <img src="assets/images/star1.svg" alt="Star"></span>
                                    </div>
                                  </div>
                            </div>

                        </div>

                        <div class="gx-row d-flex gap-24">
                            <div data-aos="zoom-in">
                                <div class="about-crenditials-box info-box shadow-box h-full">
                                    <a class="overlay-link" href="credentials.html"></a>
                                    <img src="{{url('frontend/images/bg1.png')}}" alt="BG" class="bg-img">
                                    <img src="{{url('frontend/images/sign.png')}}" alt="Sign">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="infos">
                                            <h4>more about me</h4>
                                            <h1>Credentials</h1>
                                        </div>

                                        <a href="credentials.html" class="about-btn">
                                            <img src="{{url('frontend/images/icon.svg')}}" alt="Button">
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <div data-aos="zoom-in">
                                <div class="about-project-box info-box shadow-box h-full">
                                    <a class="overlay-link" href="works.html"></a>
                                    <img src="{{url('frontend/images/bg1.png')}}" alt="BG" class="bg-img">
                                    <img src="{{url('frontend/images/my-works.png')}}" alt="My Works">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="infos">
                                            <h4>SHOWCASE</h4>
                                            <h1>Projects</h1>
                                        </div>

                                        <a href="#" class="about-btn">
                                            <img src="{{url('frontend/images/icon.svg')}}" alt="Button">
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-24">
                <div class="col-md-12">
                    <div class="blog-service-profile-wrap d-flex gap-24">
                        <div data-aos="zoom-in">
                            <div class="about-blog-box info-box shadow-box h-full">
                                <a href="blog.html" class="overlay-link"></a>
                                <img src="{{url('frontend/images/bg1.png')}}" alt="BG" class="bg-img">
                                <img src="{{url('frontend/images/gfonts.png')}}" alt="GFonts">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="infos">
                                        <h4>Blog</h4>
                                        <h1>GFonts</h1>
                                    </div>

                                    <a href="blog.html" class="about-btn">
                                        <img src="{{url('frontend/images/icon.svg')}}" alt="Button">
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div data-aos="zoom-in" class="flex-1">
                            <div class="about-services-box info-box shadow-box h-full">
                                <a href="service.html" class="overlay-link"></a>
                                <img src="{{url('frontend/images/bg1.png')}}" alt="BG" class="bg-img">
                                <div class="icon-boxes">
                                    <img width="48" height="48" src="https://img.icons8.com/fluency/48/flutter.png" alt="flutter"/>
                                    <img width="48" height="48" src="https://img.icons8.com/fluency/48/laravel.png" alt="laravel"/>
                                    <img width="48" height="48" src="https://img.icons8.com/fluency/48/node-js.png" alt="node-js"/>
                                    <img width="48" height="48" src="https://img.icons8.com/color/48/firebase.png" alt="firebase"/>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="infos">
                                        <h4>specialization</h4>
                                        <h1>Services Offering</h1>
                                    </div>

                                    <a href="service.html" class="about-btn">
                                        <img src="{{url('frontend/images/icon.svg')}}" alt="Button">
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div data-aos="zoom-in">
                            <div class="about-profile-box info-box shadow-box h-full">
                                <img src="{{url('frontend/images/bg1.png')}}" alt="BG" class="bg-img">
                                <div class="inner-profile-icons shadow-box">
                                    <a href="#">

                                        <i class="iconoir-linkedin"></i>
                                    </a>
                                    <a href="#">
                                        <i class="iconoir-github"></i>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="infos">
                                        <h4>Stay with me</h4>
                                        <h1>Profiles</h1>
                                    </div>

                                    <a href="contact.html" class="about-btn">
                                        <img src="{{url('frontend/images/icon.svg')}}" alt="Button">
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row mt-24">
                <div class="col-md-6" data-aos="zoom-in">

                    <div class="about-client-box info-box shadow-box">
                        <img src="{{url('frontend/images/bg1.png')}}" alt="BG" class="bg-img">
                        <div class="clients d-flex align-items-start gap-24 justify-content-center">
                            <div class="client-item">
                                <h1>03</h1>
                                <p>Years <br>Experience</p>
                            </div>

                            <div class="client-item">
                                <h1>+125</h1>
                                <p>CLIENTS <br>WORLDWIDE</p>
                            </div>

                            <div class="client-item">
                                <h1>+115</h1>
                                <p>Total <br>Projects</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6" data-aos="zoom-in">

                    <div class="about-contact-box info-box shadow-box">
                        <a class="overlay-link" href="contact.html"></a>
                        <img src="{{url('frontend/images/bg1.png')}}"alt="BG" class="bg-img">
                        <img src="{{url('frontend/images/icon2.png')}}" alt="Icon" class="star-icon">
                        <h1>Let's <br>work <span>together.</span></h1>
                        <a href="#" class="about-btn">
                            <img src="{{url('frontend/images/icon.svg')}}" alt="Button">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @endsection

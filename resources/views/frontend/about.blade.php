@extends('frontend.layouts.main')

@section('main-container')
        <!-- About -->
        <section class="about-area">
            <div class="container">
                <div class="d-flex about-me-wrap align-items-start gap-24">
                    <div data-aos="zoom-in">
                        <div class="about-image-box shadow-box">
                            <img src="{{url('frontend/images/bg1.png')}}" alt="BG" class="bg-img">
                            <div class="image-inner">
                                <img src="{{url('frontend/images/me2.png')}}" alt="About Me">
                            </div>
                        </div>
                    </div>

                    <div class="about-details" data-aos="zoom-in">
                        <h1 class="section-heading" data-aos="fade-up"><img src="{{url('frontend/images/star-2.png')}}" alt="Star"> Self-summary <img src="{{url('frontend/images/star-2.png')}}" alt="Star"></h1>
                        <div class="about-details-inner shadow-box">
                            <img src="{{url('frontend/images/icon2.png')}}" alt="Star">
                            <h1>Siddharth Kanojiya</h1>
                            <p>I am a skilled developer with expertise in creating websites, apps, and backend systems. My experience spans multiple industries, showcasing my versatility and adaptability. I thrive on translating ideas into tangible digital solutions. With a proven track record, I bring a dynamic perspective to every project. Let's collaborate to bring innovative visions to life.</p>
                        </div>

                    </div>
                </div>

                <div class="row mt-24">
                    <div class="col-md-6" data-aos="zoom-in">
                        <div class="about-edc-exp about-experience shadow-box">
                            <img src="{{url('frontend/images/bg1.png')}}"  alt="BG" class="bg-img">
                            <h3>EXPERIENCE</h3>

                            <ul>
                                <li>
                                    <p class="date">2021-2022</p>
                                    <h2>Mobile App Developer</h2>
                                    <p class="type">Kode Creator</p>
                                </li>
                                <li>
                                    <p class="date">2022 - 2023</p>
                                    <h2>Software Developer</h2>
                                    <p class="type">Vrundaz Technology</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="zoom-in">
                        <div class="about-edc-exp about-education shadow-box">
                            <img src="{{url('frontend/images/bg1.png')}}" alt="BG" class="bg-img">
                            <h3>EDUCATION</h3>

                            <ul>
                                <li>
                                    <p class="date">2008 - 2019</p>
                                    <h2>Schooling</h2>
                                    <p class="type">Knowledge High School</p>
                                </li>
                                <li>
                                    <p class="date">2020 - 2023</p>
                                    <h2>BE Information & Technology</h2>
                                    <p class="type">KJ Institution of Technology</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row mt-24">
                    <div class="col-md-12">
                        <div class="d-flex profile-contact-credentials-wrap gap-24">

                            <div data-aos="zoom-in">
                                <div class="about-profile-box info-box shadow-box h-full">
                                    <img src="{{url('frontend/images/bg1.png')}}" alt="BG" class="bg-img">
                                    <div class="inner-profile-icons shadow-box">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                              </svg>
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

                                        <a href="{{url('/contact')}}" class="about-btn">
                                            <img src="{{url('frontend/images/icon.svg')}}" alt="Button">
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <div data-aos="zoom-in" class="flex-1">
                                <div class="about-contact-box info-box shadow-box">
                                    <a class="overlay-link" href="{{url('/contact')}}"></a>
                                    <img src="{{url('frontend/images/bg1.png')}}" alt="BG" class="bg-img">
                                    <img src="{{url('frontend/images/icon2.png')}}" alt="Icon" class="star-icon">
                                    <h1>Let's <br>work <span>together.</span></h1>
                                    <a href="{{url('/contact')}}" class="about-btn">
                                        <img src="{{url('frontend/images/icon.svg')}}" alt="Button">
                                    </a>
                                </div>
                            </div>

                            <div data-aos="zoom-in" class="h-full">
                                <div class="about-crenditials-box info-box shadow-box">
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

                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

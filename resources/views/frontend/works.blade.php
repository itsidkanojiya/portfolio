@extends('frontend.layouts.main')

@section('main-container')
<!-- Projects -->
        <section class="projects-area">
            <div class="container">
                <h1 class="section-heading" data-aos="fade-up"><img src="{{url('frontend/images/star-2.png')}}" alt="Star"> All Projects <img src="{{url('frontend/images/star-2.png')}}" alt="Star"></h1>
                <div class="row">
                    <div class="col-md-4">
                        <div data-aos="zoom-in">
                            <div class="project-item shadow-box">
                                <a class="overlay-link" href="{{url('/work-details')}}"></a>
                                <img src="{{url('frontend/images/bg1.png')}}" alt="BG" class="bg-img">
                                <div class="project-img">
                                    <img src="{{url('frontend/images/project1.jpg')}}" alt="Project">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="project-info">
                                        <p>WEB DESIGNING</p>
                                        <h1>Dynamic</h1>
                                    </div>
                                    <a href="{{url('/work-details')}}" class="project-btn">
                                        <img src="{{url('frontend/images/icon.svg')}}" alt="Button">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div data-aos="zoom-in">
                            <div class="project-item shadow-box">
                                <a class="overlay-link" href="{{url('/work-details')}}"></a>
                                <img src="{{url('frontend/images/bg1.png')}}" alt="BG" class="bg-img">
                                <div class="project-img">
                                    <img src="{{url('frontend/images/project2.jpg')}}" alt="Project">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="project-info">
                                        <p>PHOTOGRAPHY</p>
                                        <h1>Diesel H1</h1>
                                    </div>
                                    <a href="{{url('/work-details')}}" class="project-btn">
                                        <img src="{{url('frontend/images/icon.svg')}}" alt="Button">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <h1 class="section-heading" data-aos="fade-up"><img src="{{url('frontend/images/star-2.png')}}" alt="Star"> All Projects <img src="{{url('frontend/images/star-2.png')}}" alt="Star"></h1>

                        <div class="d-flex align-items-start gap-24">
                            <div data-aos="zoom-in" class="flex-1">
                                <div class="project-item shadow-box">
                                    <a class="overlay-link" href="{{url('/work-details')}}"></a>
                                    <img src="{{url('frontend/images/bg1.png')}}" alt="BG" class="bg-img">
                                    <div class="project-img">
                                        <img src="{{url('frontend/images/project3.jpg')}}" alt="Project">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="project-info">
                                            <p>mOBILE DESIGNING</p>
                                            <h1>Seven Studio</h1>
                                        </div>
                                        <a href="{{url('/work-details')}}" class="project-btn">
                                            <img src="{{url('frontend/images/icon.svg')}}" alt="Button">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div data-aos="zoom-in" class="flex-1">
                                <div class="project-item shadow-box">
                                    <a class="overlay-link" href="{{url('/work-details')}}"></a>
                                    <img src="{{url('frontend/images/bg1.png')}}" alt="BG" class="bg-img">
                                    <div class="project-img">
                                        <img src="{{url('frontend/images/project4.jpg')}}" alt="Project">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="project-info">
                                            <p>Branding</p>
                                            <h1>Raven Studio</h1>
                                        </div>
                                        <a href="{{url('/work-details')}}" class="project-btn">
                                            <img src="{{url('frontend/images/icon.svg')}}" alt="Button">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-24">
                            <div data-aos="zoom-in" class="flex-1">
                                <div class="project-item shadow-box">
                                    <a class="overlay-link" href="{{url('/work-details')}}"></a>
                                    <img src="{{url('frontend/images/bg1.png')}}" alt="BG" class="bg-img">
                                    <div class="project-img">
                                        <img src="{{url('frontend/images/project5.jpg')}}" alt="Project">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="project-info">
                                            <p>mOBILE DESIGNING</p>
                                            <h1>Submarine</h1>
                                        </div>
                                        <a href="{{url('/work-details')}}" class="project-btn">
                                            <img src="{{url('frontend/images/icon.svg')}}" alt="Button">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div data-aos="zoom-in" class="flex-1">
                                <div class="project-item shadow-box">
                                    <a class="overlay-link" href="{{url('/work-details')}}"></a>
                                    <img src="{{url('frontend/images/bg1.png')}}" alt="BG" class="bg-img">
                                    <div class="project-img">
                                        <img src="{{url('frontend/images/project6.jpg')}}" alt="Project">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="project-info">
                                            <p>wEB DESIGNING</p>
                                            <h1>Hydra Merc</h1>
                                        </div>
                                        <a href="{{url('/work-details')}}" class="project-btn">
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

@extends('frontend.layouts.main')

@section('main-container')
      <!-- Breadcrumb -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content" data-aos="fade-up">
                    <p>HOME - BLOG</p>
                    <h1 class="section-heading"><img src="{{url('frontend/images/star-2.png')}}" alt="Star"> Blog with rightsidebar <img src="{{url('frontend/images/star-2.png')}}" alt="Star"></h1>
                </div>
            </div>
        </section>


        <!-- Blog Items -->
        <section class="blog-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-items">
                            <div class="blog-item" data-aos="zoom-in">
                                <div class="img-box">
                                    <img src="{{url('frontend/images/blog1.jpg')}}" alt="Blog">
                                </div>
                                <div class="content">
                                    <span class="meta">25 March 2022 - Comments (4) - Share (7)</span>
                                    <h1><a href="resources/views/frontend/layout/blog-details.html">Consulted admitting is power acuteness.</a></h1>
                                    <p>Sit amet luctussd fav venenatis, lectus magna fringilla inis urna, porttitor rhoncus dolor purus non enim praesent in elementum sahas facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etisam dignissim diam quis enim lobortis viverra orci sagittis eu volutpat odio facilisis mauris sit.</p>
                                    <a href="resources/views/frontend/layout/blog-details.html" class="theme-btn">Read More</a>
                                </div>
                            </div>

                            <div class="blog-item" data-aos="zoom-in">
                                <div class="img-box">
                                    <img src="{{url('frontend/images/blog2.jpg')}}" alt="Blog">
                                </div>
                                <div class="content">
                                    <span class="meta">25 March 2022 - Comments (4) - Share (7)</span>
                                    <h1><a href="resources/views/frontend/layout/blog-details.html">Unsatiable entreaties may collecting Power.</a></h1>
                                    <p>Sit amet luctussd fav venenatis, lectus magna fringilla inis urna, porttitor rhoncus dolor purus non enim praesent in elementum sahas facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etisam dignissim diam quis enim lobortis viverra orci sagittis eu volutpat odio facilisis mauris sit.</p>
                                    <a href="resources/views/frontend/layout/blog-details.html" class="theme-btn">Read More</a>
                                </div>
                            </div>

                            <div class="blog-item" data-aos="zoom-in">
                                <div class="img-box">
                                    <img src="{{url('frontend/images/blog1.jpg')}}" alt="Blog">
                                </div>
                                <div class="content">
                                    <span class="meta">25 March 2022 - Comments (4) - Share (7)</span>
                                    <h1><a href="resources/views/frontend/layout/blog-details.html">Discovery incommode earnestly he commanded</a></h1>
                                    <p>Sit amet luctussd fav venenatis, lectus magna fringilla inis urna, porttitor rhoncus dolor purus non enim praesent in elementum sahas facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etisam dignissim diam quis enim lobortis viverra orci sagittis eu volutpat odio facilisis mauris sit.</p>
                                    <a href="blog-details.html" class="theme-btn">Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-sidebar">
                            <div class="blog-sidebar-inner">

                                <div class="blog-sidebar-widget search-widget">
                                    <div class="blog-sidebar-widget-inner" data-aos="zoom-in">
                                        <form class="shadow-box">
                                            <input type="text" placeholder="Search Here...">
                                            <button class="theme-btn">Search</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="blog-sidebar-widget recent-post-widget" data-aos="zoom-in">
                                    <div class="blog-sidebar-widget-inner shadow-box">
                                        <h3>Recent Posts</h3>

                                        <ul>
                                            <li><a href="resources/views/frontend/layout/blog-details.html">Consulted admitting is power acuteness.</a></li>
                                            <li><a href="resources/views/frontend/layout/blog-details.html">Unsatiable entreaties may collecting Power.</a></li>
                                            <li><a href="resources/views/frontend/layout/blog-details.html">Discovery incommode earnestly no he commanded</a></li>
                                            <li><a href="resources/views/frontend/layout/blog-details.html">Unsatiable entreaties may collecting Power.</a></li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="blog-sidebar-widget categories-widget" data-aos="zoom-in">
                                    <div class="blog-sidebar-widget-inner shadow-box">
                                        <h3>Categories</h3>

                                        <ul>
                                            <li><a href="resources/views/frontend/layout/blog-details.html">-Analysis</a></li>
                                            <li><a href="resources/views/frontend/layout/blog-details.html">-Firewall</a></li>
                                            <li><a href="resources/views/frontend/layout/blog-details.html">-IT Solutions</a></li>
                                            <li><a href="resources/views/frontend/layout/blog-details.html">-Security</a></li>
                                            <li><a href="resources/views/frontend/layout/blog-details.html">-Technology</a></li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="blog-sidebar-widget tags-widget" data-aos="zoom-in">
                                    <div class="blog-sidebar-widget-inner shadow-box">
                                        <h3>Tags</h3>

                                        <ul>
                                            <li><a class="theme-btn" href="resources/views/frontend/layout/blog-details.html">SAAS</a></li>
                                            <li><a class="theme-btn" href="resources/views/frontend/layout/blog-details.html">Development</a></li>
                                            <li><a class="theme-btn" href="resources/views/frontend/layout/blog-details.html">UI/UX</a></li>
                                            <li><a class="theme-btn" href="resources/views/frontend/layout/blog-details.html">Web</a></li>
                                            <li><a class="theme-btn" href="resources/views/frontend/layout/blog-details.html">Figma</a></li>
                                            <li><a class="theme-btn" href="resources/views/frontend/layout/blog-details.html">Java</a></li>
                                            <li><a class="theme-btn" href="resources/views/frontend/layout/blog-details.html">WordPress</a></li>
                                        </ul>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



@endsection

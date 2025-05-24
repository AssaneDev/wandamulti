@extends('frontend.main_master')
@section('main')

@php
    $section = App\Models\SectionModel::find(1);
    $section2 = App\Models\SectionModel2::all();
    
@endphp

<main class="site-content" id="content">
    <!-- HERO SECTION START -->
     @include('frontend.home.hero')
    <!-- HERO SECTION END -->

    <!-- SERVICES SECTION START -->
     @include('frontend.home.service')
    <!-- SERVICES SECTION END -->

    <!-- start: Service Popup -->
     @foreach ($section2 as $item)
    <div id="service-wrapper-{{$item->id}}" class="popup_content_area zoom-anim-dialog mfp-hide">
        <div class="popup_modal_img">
            <img src="./assets/img/services/modal-img.jpg" alt="">
        </div>

        <div class="popup_modal_content">
            <div class="service_details">
                <div class="row">
                    <div class="col-lg-7 col-xl-8">
                        <div class="service_details_content">
                            <div class="service_info" style="color: black">
                                {!! $item->detail_service->description ?? 'Aucune description disponible.' !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-xl-4">
                        <div class="tj_main_sidebar">
                            <div class="sidebar_widget contact_form">
                                <div class="widget_title">
                                    <h3 class="title">Get in Touch</h3>
                                </div>
                                <form action="#">
                                    <div class="form_group">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                    <div class="form_group">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form_group">
                                        <textarea name="message" placeholder="Your message"></textarea>
                                    </div>
                                    <div class="form_btn">
                                        <button class="btn tj-btn-primary" type="submit">Envoyez Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

    <!-- end: Service Popup -->

    <!-- PORTFOLIO SECTION START -->
     @include('frontend.home.portfolio')
    <!-- PORTFOLIO SECTION END -->

    <!-- start: Portfolio Popup -->
   {{-- @include('frontend.home.portfolio_popup') --}}
    <!-- end: Portfolio Popup -->


  


   
    <!-- RESUME SECTION START -->

    <!-- RESUME SECTION END -->

    <!-- SKILLS SECTION START -->

    <!-- SKILLS SECTION END -->

    <!-- TESTIMONIAL SECTION START -->
    @include('frontend.home.avis')
    <!-- TESTIMONIAL SECTION END -->

    <!-- BLOG SECTION STAR -->
    <!-- <section class="blog-section" id="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center">
                        <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">Recent Blogs</h2>
                        <p class=" wow fadeInUp" data-wow-delay=".4s">We put your ideas and thus your wishes in the
                            form of a unique web project that inspires
                            you
                            and you customers.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item wow fadeInUp" data-wow-delay=".5s">
                        <div class="blog-thumb">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/1.jpg" alt="">
                            </a>
                            <a href="#" class="category">Tutorial</a>
                        </div>

                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul class="ul-reset">
                                    <li><i class="fa-light fa-calendar-days"></i> Oct 01, 2022</li>
                                    <li><i class="fa-light fa-comments"></i> <a href="#">Comment (0)</a></li>
                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="blog-details.html">top 10 ui ux designers</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item wow fadeInUp" data-wow-delay=".6s">
                        <div class="blog-thumb">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/2.jpg" alt="">
                            </a>
                            <a href="#" class="category">TIPS</a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul class="ul-reset">
                                    <li><i class="fa-light fa-calendar-days"></i> Nov 01, 2022</li>
                                    <li><i class="fa-light fa-comments"></i> <a href="#">Comment (0)</a></li>
                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="blog-details.html">App Development Guides</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item wow fadeInUp" data-wow-delay=".7s">
                        <div class="blog-thumb">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/3.jpg" alt="">
                            </a>
                            <a href="#" class="category">FREEBIES</a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul class="ul-reset">
                                    <li><i class="fa-light fa-calendar-days"></i> Dec 01, 2022</li>
                                    <li><i class="fa-light fa-comments"></i> <a href="#">Comment (0)</a></li>
                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="blog-details.html">learn graphic design free</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- BLOG SECTION END -->

    <!-- CONTACT SECTION START -->
   @include('frontend.home.contact')
    <!-- CONTACT SECTION END -->
</main>

@endsection
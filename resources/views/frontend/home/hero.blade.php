 <section class="hero-section d-flex align-items-center" id="intro">
        <div class="intro_text">
            <svg viewBox="0 0 1320 300">
                <text x="50%" Y="50%" text-anchor="middle">
                    Salut
                </text>
            </svg>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="hero-content-box">
                        <span class="hero-sub-title wow fadeInLeft" data-wow-delay="1.1s"> {{$section->titre1}} </span>
                        <h1 class="hero-title wow fadeInLeft" data-wow-delay="1.2s">{{$section->titre2}}
                        </h1>

                        <div class="hero-image-box d-md-none text-center wow fadeInRight" data-wow-delay="1.3s">
                           <img  src="{{ asset($section->photo)}}" alt="">

                        </div>

                        <p class="lead wow fadeInLeft" data-wow-delay="1.4s"> {!!$section->description!!}  </p>
                        <div class="button-box d-flex flex-wrap align-items-center">
                           <a href="#" class="btn tj-btn-secondary wow fadeInLeft"
                                data-wow-delay="1.5s">Suivez moi</a>
                            <ul class="ul-reset social-icons wow fadeInLeft" data-wow-delay="1.6s">
                                <li><a href="{{$section->facebook}}"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="{{$section->linkedin}}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="hero-image-box text-center wow fadeInRight" data-wow-delay="1.5s">
                         <img src="{{ asset($section->photo)}}" alt="">

                    </div>
                </div>
            </div>

        </div>
    </section> 

      {{-- <main class="site-content" id="content"> --}}
        <!-- HERO SECTION START -->
        
        <!-- HERO SECTION END -->

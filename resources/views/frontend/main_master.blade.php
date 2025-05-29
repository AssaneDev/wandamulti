

<!DOCTYPE html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />

    <!-- Site Title -->
    <title>Wanda Multie</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href=" {{asset('frontend/assets/img/favicon.png')}}" />
    <link rel="shortcut icon" type=" { image/png" href="{asset('frontend/assets/img/favicon.png')}}" />

    <!-- CSS here -->
    <link rel="stylesheet" href=" {{asset('frontend/assets/css/animate.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('frontend/assets/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('frontend/assets/css/font-awesome-pro.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('frontend/assets/css/flaticon_gerold.css')}} ">
    <link rel="stylesheet" href=" {{asset('frontend/assets/css/nice-select.css')}} ">
    <link rel="stylesheet" href=" {{asset('frontend/assets/css/backToTop.css')}} ">
    <link rel="stylesheet" href=" {{asset('frontend/assets/css/owl.carousel.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('frontend/assets/css/odometer-theme-default.css')}} ">
    <link rel="stylesheet" href=" {{asset('frontend/assets/css/magnific-popup.css')}} ">

    <link rel="stylesheet" href=" {{asset('frontend/assets/css/main.css ')}} ">
    <link rel="stylesheet" href=" {{asset('frontend/assets/css/responsive.css ')}} ">
</head>
<style>
    .embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden;
}

.embed-responsive::before {
    display: block;
    content: "";
}

.embed-responsive-16by9::before {
    padding-top: 56.25%;
}

.embed-responsive > iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}

/* audio */
.audio-wrapper-chill {
    background: linear-gradient(135deg, #f0f5f9, #e0f7fa);
    border-radius: 20px;
    padding: 20px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    text-align: center;
    max-width: 500px;
    margin: auto;
    transition: all 0.3s ease;
}

.audio-wrapper-chill:hover {
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.15);
}

.audio-title {
    font-family: 'Georgia', serif;
    font-size: 1.2rem;
    color: #607d8b;
    margin-bottom: 10px;
}

.custom-audio {
    width: 100%;
    height: 40px;
    border-radius: 10px;
    background-color: transparent;
}


</style>

<body>

    <!-- Preloader Area Start -->
    <div class="preloader">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="preloaderSvg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="preloader-heading">
            <div class="load-text">
                <span>W</span>
                <span>a</span>
                <span>n</span>
                <span>d</span>
                <span>a</span>
                <span>M</span>
                <span>u</span>
                <span>l</span>
                <span>t</span>
                <span>i</span>


            </div>
        </div>
    </div>
    <!-- Preloader Area End -->


    <!-- start: Back To Top -->
    <div class="progress-wrap" id="scrollUp">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- end: Back To Top -->

    <!-- HEADER START -->
    <header class="tj-header-area header-absolute">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap align-items-center">

                    <div class="logo-box">
                        <a href="index.html">
                            <img src="assets/img/logo/logo.png" alt="">
                        </a>
                    </div>


                    {{-- <div class="header-info-list d-none d-md-inline-block">
                        <ul class="ul-reset">
                            <li><a href="mailto:mail@gerolddesign.com">wanda@multi.com</a></li>
                        </ul>
                    </div> --}}

                    <a href="{{$section->lien_whatsapp}}" class="btn tj-btn-secondary wow fadeInLeft"
                                data-wow-delay="1.5s"><i class="fa-brands fa-whatsapp"></i>Whatsapp</a>

                    <div class="header-menu">
                        <nav>
                            <ul>
                                <li><a href="#services-section">Services</a></li>
                                <li><a href="#works-section">Travails</a></li>
                                {{-- <li><a href="#skills-section">Offres</a></li> --}}
                                <li><a href="#testimonials-section">Temoignages</a></li>
                                <li><a href="#contact-section">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                     <div class="header-button">
                        <a href="#" class="btn tj-btn-primary">Multivoies</a>
                    </div> 

                    <div class="menu-bar d-lg-none">
                        <button>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="tj-header-area header-2 header-sticky sticky-out">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap align-items-center">

                    <div class="logo-box">
                        <a href="index.html">
                            <img src="assets/img/logo/logo.png" alt="">
                        </a>
                    </div>

                    <div class="header-info-list d-none d-md-inline-block">
                        <ul class="ul-reset">
                            <li><a href="mailto:mail@gerolddesign.com">wanda@multivoies.com</a></li>
                        </ul>
                    </div>

                    <div class="header-menu">
                        <nav>
                            <ul>
                                <li><a href="#services-section">Services</a></li>
                                <li><a href="#works-section">Works</a></li>
                                <li><a href="#resume-section">Resume</a></li>
                                <li><a href="#skills-section">Skills</a></li>
                                <li><a href="#testimonials-section">Testimonials</a></li>
                                <li><a href="#contact-section">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="header-button">
                        <a href="#" class="btn tj-btn-primary">Multivoies</a>
                    </div>

                    <div class="menu-bar d-lg-none">
                        <button>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->

    @yield('main')

    <!-- FOOTER AREA START -->
    <footer class="tj-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer-logo-box">
                        <a href="#"><img src=" {{asset('frontend/assets/img/logo/logo.png')}} " alt=""></a>
                    </div>
                    <div class="footer-menu">
                        <nav>
                            <ul>
                                <li><a href="#services-section">Services</a></li>
                                <li><a href="#works-section">Works</a></li>
                                <li><a href="#resume-section">Resume</a></li>
                                <li><a href="#skills-section">Skills</a></li>
                                <li><a href="#testimonials-section">Testimonials</a></li>
                                <li><a href="#contact-section">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="copy-text">
                        <p>&copy; 2024 All rights reserved by <a href="#" target="_blank">ThemeJunction</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->


    <!-- CSS here -->
    <script src=" {{asset('frontend/assets/js/jquery.min.js')}} "></script>
    <script src=" {{asset('frontend/assets/js/bootstrap.bundle.min.js')}} "></script>
    <script src=" {{asset('frontend/assets/js/nice-select.min.js')}} "></script>
    <script src=" {{asset('frontend/assets/js/backToTop.js')}} "></script>
    <script src=" {{asset('frontend/assets/js/smooth-scroll.js')}} "></script>
    <script src=" {{asset('frontend/assets/js/appear.min.js')}} "></script>
    <script src=" {{asset('frontend/assets/js/wow.min.js')}} "></script>
    <script src=" {{asset('frontend/assets/js/gsap.min.js')}} "></script>
    <script src=" {{asset('frontend/assets/js/one-page-nav.js')}} "></script>
    <script src=" {{asset('frontend/assets/js/lightcase.js')}} "></script>
    <script src=" {{asset('frontend/assets/js/owl.carousel.min.js')}} "></script>
    <script src=" {{asset('frontend/assets/js/isotope.pkgd.min.js')}} "></script>
    <script src=" {{asset('frontend/assets/js/odometer.min.js')}} "></script>
    <script src=" {{asset('frontend/assets/js/magnific-popup.js')}} "></script>

    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script>
    var $grid = $('.grid').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });

    $('.filter-button-group').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
        $('.filter-button-group button').removeClass('active');
        $(this).addClass('active');
    });
</script>

    
</body>

</html>
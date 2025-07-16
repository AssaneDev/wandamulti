

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
                             <div class="sidebar_widget services_list">
                                    <div class="widget_title">
                                        <h3 class="title">Offre</h3>
                                    </div>
                                    <ul>
                                        <li class="active">
                                            <button>
                                                <i class="flaticon-design"></i>
                                                ✔ Atelier individuel (1h à 3h, sur Zoom ou en présentiel)
                                            </button>
                                        </li>
                                        
                                      
                                       
                                    </ul>
                                </div>
                            <div class="sidebar_widget contact_form">
                                <div class="widget_title">
                                    <h3 class="title">Entrer En Contact</h3>
                                </div>
                               <form method="POST" action="{{route('form.send')}}" class="contactForm" data-service="{{$item->id}}">  
                                    @csrf
                                    <div class="form_group">
                                        <input type="text" name="name" placeholder="Nom Complet" required>
                                    </div>
                                    <div class="form_group">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>
                                     <div class="form_group">
                                        <input type="tel" name="phone" id="phone" placeholder="Téléphone" required>
                                    </div>
                                    <div class="form_group">
                                        <input type="text" hidden name="projet" value="{{$item->nom_service}}" required>
                                    </div>
                                    <div class="form_group">
                                        <textarea name="message" placeholder="Votre Message" required></textarea>
                                    </div>
                                    <input type="text" name="website" style="display:none">

                                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                                    @error('g-recaptcha-response')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form_btn">
                                        <button class="btn tj-btn-primary" type="submit">Envoyer le Message</button>
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
     @include('frontend.home.portofolio')
    <!-- PORTFOLIO SECTION END -->

    <!-- start: Portfolio Popup -->
    @foreach ($projet as $item)
    <div id="portfolio-wrapper-{{$item->id}}" class="popup_content_area zoom-anim-dialog mfp-hide">
        <div class="popup_modal_img">
            <img src=" {{asset($item->photo_banniere)}} " alt="">
        </div>

        <div class="popup_modal_content">
            <div class="portfolio_info">
                <div class="portfolio_info_text">
                    <h2 class="title">{{$item->nom_service}}</h2>
                    <div class="desc">
                        <p>{{$item->petite_desc_service}}</p>
                    </div>
                </div>
                <!-- <div class="portfolio_info_items">
                    <div class="info_item">
                        <div class="key">Category</div>
                        <div class="value">Web Design</div>
                    </div>
                    <div class="info_item">
                        <div class="key">Client</div>
                        <div class="value">Artboard Studio</div>
                    </div>
                    <div class="info_item">
                        <div class="key">Start Date</div>
                        <div class="value">August 20, 2023</div>
                    </div>
                    <div class="info_item">
                        <div class="key">Designer</div>
                        <div class="value"><a href="#">ThemeJunction</a></div>
                    </div>
                </div> -->
            </div>
              
        @if (!empty($item->audio))
            <div class="audio-wrapper-chill mb-4">
                <h5 class="audio-title">Extrait audio</h5>
                <audio controls class="custom-audio">
                    <source src="{{ asset($item->audio) }}" type="audio/mpeg">
                    Votre navigateur ne supporte pas l'élément audio.
                </audio>
            </div>
        @endif         

            <div class="portfolio_description">
                <h2 class="title">{{$item->nom_service}}</h2>
                <div class="desc">
                    {{-- <p>Écriture d’un texte central pour une cérémonie de mariage laïque. Ce texte pose le ton de
                        l’engagement : poétique, sincère, profond — sans être cliché.Ce texte, pensé comme une
                        déclaration universelle, donne à la cérémonie une dimension intime, authentique, et
                        profondément humaine.</p> --}}
                       {!! $item->detail_projet->description ?? 'Aucune description disponible.' !!}



                </div>
            </div>
             @if (!empty($item->video_youtube))
                <div class="embed-responsive embed-responsive-16by9 mb-4 shadow rounded overflow-hidden">
                        <iframe width="100%" height="215"
                                src="https://www.youtube.com/embed/{{ \Illuminate\Support\Str::after($item->video_youtube, 'v=') }}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                        </iframe>
                </div> 
             @endif

            <div class="portfolio_navigation">
                    <!-- <div class="navigation_item prev-project">
                        <a href="#" class="project">
                            <i class="fal fa-arrow-left"></i>
                            <div class="nav_project">
                                <div class="label">Previous Project</div>
                                <h3 class="title">Sebastian</h3>
                            </div>
                        </a>
                    </div> -->
                    <a href="#" class="btn tj-btn-primary">Entrer en contact<i class="fal fa-arrow-right"></i></a>

                   {{-- <div class="navigation_item next-project">
                        <a href="#" class="project">
                            <div class="nav_project">
                                <div class="label">Next Project</div>
                                <h3 class="title">Qwillo</h3>
                            </div>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>  --}}
                </div>
        </div>
    </div>
    @endforeach
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
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    setTimeout(() => {
        const forms = document.querySelectorAll('.contactForm');

        forms.forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                const formData = new FormData(this);
                const url = this.getAttribute('action');

                fetch(url, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                .then(response => {
                    if (!response.ok) throw new Error('Erreur de traitement');
                    return response.json();
                })
                .then(data => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Merci !',
                        text: 'Votre message a bien été envoyé.',
                        confirmButtonText: 'Fermer'
                    });
                    this.reset();
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Erreur',
                        text: 'Une erreur est survenue. Veuillez réessayer.',
                    });
                });
            });
        });
    }, 300); // petit délai pour s'assurer que le DOM est prêt
});
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

@endpush

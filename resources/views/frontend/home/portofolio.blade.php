 <section class="portfolio-section" id="works-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center">
                        <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">Projet Récent</h2>
                        <p class=" wow fadeInUp" data-wow-delay=".4s">We put your ideas and thus your wishes in the
                            form of a unique web project that inspires
                            you
                            and you customers.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-filter text-center wow fadeInUp" data-wow-delay=".5s">
                        <div class="button-group filter-button-group">
                            <button data-filter="*" class="active">Tout</button>
                            <button data-filter=".uxui">Copyright</button>
                            <button data-filter=".branding">Voix Off</button>

                            <div class="active-bg"></div>
                        </div>
                    </div>

                    @foreach ($projet as $item)

                    <div class="portfolio-box wow fadeInUp" data-wow-delay=".6s">
                        <div class="portfolio-sizer"></div>
                        <div class="gutter-sizer"></div>
                        <div class="portfolio-item branding">
                            <div class="image-box">
                                <img src="{{$item->photo}}" alt="">
                            </div>
                            <div class="content-box">
                                <h3 class="portfolio-title">{{$item->nom_service}} </h3>
                                <p>{{$item->petite_desc_service}}</p>
                                <i class="flaticon-up-right-arrow"></i>
                                <button data-mfp-src="#portfolio-wrapper"
                                    class="portfolio-link modal-popup"></button>
                            </div>
                        </div>
                        {{-- <div class="portfolio-item uxui">
                            <div class="image-box">
                                <img src="assets/img/portfolio/1.jpg" alt="">
                            </div>
                            <div class="content-box">
                                <h3 class="portfolio-title">Discours porteur de sens </h3>
                                <p>Pour un événement qui marque.</p>
                                <i class="flaticon-up-right-arrow"></i>
                                <button data-mfp-src="#portfolio-wrapper2"
                                    class="portfolio-link modal-popup"></button>
                            </div>
                        </div>
                        <div class="portfolio-item mobile-app">
                            <div class="image-box">
                                <img src="assets/img/portfolio/3.jpg" alt="">
                            </div>
                            <div class="content-box">
                                <h3 class="portfolio-title">Méditation guidée</h3>
                                <p>Voix douce, posée, enveloppante.</p>
                                <i class="flaticon-up-right-arrow"></i>
                                <button data-mfp-src="#portfolio-wrapper3"
                                    class="portfolio-link modal-popup"></button>
                            </div>
                        </div>
                        <div class="portfolio-item branding">
                            <div class="image-box">
                                <img src="assets/img/portfolio/4.jpg" alt="">
                            </div>
                            <div class="content-box">
                                <h3 class="portfolio-title">Appel au don</h3>
                                <p>Pour une association humanitaire.</p>
                                <i class="flaticon-up-right-arrow"></i>
                                <button data-mfp-src="#portfolio-wrapper4"
                                    class="portfolio-link modal-popup"></button>
                            </div>
                        </div> --}}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
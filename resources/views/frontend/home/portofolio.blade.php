 <section class="portfolio-section" id="works-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center">
                        <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">Projets Récents</h2>
                        <p class=" wow fadeInUp" data-wow-delay=".4s">Chaque projet est une rencontre, chaque texte une aventure.
J’écris pour faire vibrer, pour faire vendre, pour faire sens.

.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-filter text-center wow fadeInUp" data-wow-delay=".5s">
                        <div class="button-group filter-button-group">
                            <button data-filter="*" class="active">Tout</button>
                           

                        @foreach($categories as $cat)
                                 <button data-filter=".cat-{{ $cat->id }}">{{ $cat->nom }}</button>
                           @endforeach
                            

                            <div class="active-bg"></div>
                        </div>
                    </div>

                   

                            <div class="portfolio-box wow fadeInUp" data-wow-delay=".6s">
                                <div class="portfolio-sizer"></div>
                                <div class="gutter-sizer"></div>
                                 @foreach ($projet as $item)
                                    <div class="portfolio-item cat-{{$item->categorie_id}}">
                                        <div class="image-box">
                                            <img src="{{$item->photo}}" alt="">
                                        </div>
                                        <div class="content-box">
                                            <h3 class="portfolio-title">{{$item->nom_service}} </h3>
                                            <p>{{$item->petite_desc_service}}</p>
                                            <i class="flaticon-up-right-arrow"></i>
                                            <button data-mfp-src="#portfolio-wrapper-{{$item->id}}"
                                                class="portfolio-link modal-popup"></button>
                                        </div>
                                    </div>
                                    
                                    @endforeach 
                                
                            </div>
                   
                </div>
            </div>
        </div>
    </section>
    
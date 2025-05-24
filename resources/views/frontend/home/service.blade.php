  <section class="services-section" id="services-section">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center">
                        <h2 class="section-title wow fadeInUp" data-wow-delay=".3s"> Mes services</h2>
                        <p class=" wow fadeInUp" data-wow-delay=".4s">Des mots qui captent, convainquent et
                            convertissent. <br>
                            Une voix pour incarner ton message.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="services-widget position-relative">

                        @foreach ($section2 as $item)
                            <div class="service-item current d-flex flex-wrap align-items-center wow fadeInUp"
                            data-wow-delay=".5s">
                            <div class="left-box d-flex flex-wrap align-items-center">
                                <span class="number">01</span>
                                <h3 class="service-title">{{$item->nom_service}}</h3>
                            </div>
                            <div class="right-box">
                                <p>{{$item->petite_desc_service}}</p>
                            </div>
                            <i class="flaticon-up-right-arrow"></i>
                     
                                <button data-mfp-src="#service-wrapper-{{$item->id}}" class="service-link modal-popup"></button>
                                
                            
                        </div>
                       
                        @endforeach
                        

                        <div class="active-bg wow fadeInUp" data-wow-delay=".5s"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

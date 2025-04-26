@extends('frontend.main_master')
@section('main')


<main class="site-content" id="content">
    <!-- HERO SECTION START -->
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
                        <span class="hero-sub-title wow fadeInLeft" data-wow-delay="1.1s">Je suis Wanda
                            Costantini</span>
                        <h1 class="hero-title wow fadeInLeft" data-wow-delay="1.2s">Copyrighting +<br>Voix off
                        </h1>

                        <div class="hero-image-box d-md-none text-center wow fadeInRight" data-wow-delay="1.3s">
                            <img src="assets/img/hero/Capture.JPG" alt="">
                        </div>

                        <p class="lead wow fadeInLeft" data-wow-delay="1.4s">Je m'appelle Wanda Costantini,
                            passionnée de mots et de voix depuis toujours. Mon univers ? L’écriture percutante et
                            l’interprétation vocale.
                            Après plusieurs années d'expérience, j’accompagne aujourd’hui les marques, les
                            entrepreneurs et les créateurs de contenu à transmettre leurs messages avec
                            authenticité, émotion et impact.
                            Mon credo : trouver le bon mot, la bonne tonalité, et la vraie intention.</p>
                        <div class="button-box d-flex flex-wrap align-items-center">
                            <a href="#" class="btn tj-btn-secondary wow fadeInLeft"
                                data-wow-delay="1.5s">Télécharger Mon Cv</a>
                            <ul class="ul-reset social-icons wow fadeInLeft" data-wow-delay="1.6s">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-basketball"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="hero-image-box text-center wow fadeInRight" data-wow-delay="1.5s">
                        <img src="assets/img/hero/Capture.JPG" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- HERO SECTION END -->

    <!-- SERVICES SECTION START -->
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
                        <div class="service-item current d-flex flex-wrap align-items-center wow fadeInUp"
                            data-wow-delay=".5s">
                            <div class="left-box d-flex flex-wrap align-items-center">
                                <span class="number">01</span>
                                <h3 class="service-title">Copyrighting</h3>
                            </div>
                            <div class="right-box">
                                <p>Le copywriting, c’est bien plus que de jolies phrases. C’est l’art de trouver les
                                    bons mots pour attirer l’attention, susciter l’émotion et provoquer l’action.
                                    Je t’aide à raconter ton histoire, à valoriser tes offres et à créer du lien
                                    avec ton audience.</p>
                            </div>
                            <i class="flaticon-up-right-arrow"></i>
                            <button data-mfp-src="#service-wrapper" class="service-link modal-popup"></button>
                        </div>
                        <div class="service-item d-flex flex-wrap align-items-center wow fadeInUp"
                            data-wow-delay=".6s">
                            <div class="left-box d-flex flex-wrap align-items-center">
                                <span class="number">02</span>
                                <h3 class="service-title">Voix Off</h3>
                            </div>
                            <div class="right-box">
                                <p>Ta marque a une histoire. Je lui donne une voix.
                                    Que ce soit pour une vidéo, un podcast, un spot publicitaire ou un livre audio,
                                    je mets ma voix à ton service pour porter ton message avec émotion, justesse et
                                    professionnalisme.</p>
                            </div>
                            <i class="flaticon-up-right-arrow"></i>
                            <button data-mfp-src="#service-wrapper" class="service-link modal-popup"></button>
                        </div>


                        <div class="active-bg wow fadeInUp" data-wow-delay=".5s"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES SECTION END -->

    <!-- start: Service Popup -->
    <div id="service-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide">
        <div class="popup_modal_img">
            <img src="./assets/img/services/modal-img.jpg" alt="">
        </div>

        <div class="popup_modal_content">
            <div class="service_details">
                <div class="row">
                    <div class="col-lg-7 col-xl-8">
                        <div class="service_details_content">
                            <div class="service_info">
                                <h6 class="subtitle">Copyright</h6>
                                <h2 class="title">🎯 Ce que je propose</h2>
                                <div class="desc">
                                    <p>J’écris pour celles et ceux qui ont un message à faire passer — mais qui
                                        veulent plus que de simples mots.
                                        Je crée des textes qui parlent juste, vrai, et qui laissent une empreinte.

                                        Que ce soit pour une cérémonie, un discours, une page web ou un manifeste de
                                        marque, je tisse des mots qui ont du sens, pensés pour ta voix, ton
                                        histoire, ton audience</p>

                                    <p>🔍 À qui s’adresse ce service ?<br>
                                        Entrepreneurs, créateurs, coachs qui veulent une présence authentique en
                                        ligne

                                        Futurs mariés, proches ou officiants d’une cérémonie laïque ou intime

                                        Porteurs de projets à impact, souhaitant un discours marquant

                                        Marques ou indépendants en quête d’un ton aligné à leurs valeurs</p>


                                </div>

                                <h3 class="title">Mon approche – sur-mesure, sensible et structurée</h3>

                                <ul>
                                    <li>Écoute & brief</li>
                                    <li>Inspiration & collecte</li>
                                    <li>Écriture intuitive & structurée</li>
                                    <li>Affinage & ajustements</li>
                                    <li>Livraison finale</li>

                                </ul>

                                <div class="desc">
                                    <p>🎁 Options possibles <br>
                                        Lecture/voix off par mes soins

                                        Version imprimable ou stylisée (pour cérémonie, print, etc.)

                                        Conseils pour mise en page, publication ou usage sur le web</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4">
                        <div class="tj_main_sidebar">


                            <div class="sidebar_widget contact_form">
                                <div class="widget_title">
                                    <h3 class="title">Get in Touch</h3>
                                </div>

                                <form action="index.html">
                                    <div class="form_group">
                                        <input type="text" name="name" id="name" placeholder="Name"
                                            autocomplete="off">
                                    </div>
                                    <div class="form_group">
                                        <input type="email" name="semail" id="semail" placeholder="Email"
                                            autocomplete="off">
                                    </div>
                                    <div class="form_group">
                                        <textarea name="smessage" id="smessage" placeholder="Your message"
                                            autocomplete="off"></textarea>
                                    </div>
                                    <div class="form_btn">
                                        <button class="btn tj-btn-primary" type="submit">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: Service Popup -->

    <!-- PORTFOLIO SECTION START -->
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

                    <div class="portfolio-box wow fadeInUp" data-wow-delay=".6s">
                        <div class="portfolio-sizer"></div>
                        <div class="gutter-sizer"></div>
                        <div class="portfolio-item branding">
                            <div class="image-box">
                                <img src="assets/img/portfolio/2.jpg" alt="">
                            </div>
                            <div class="content-box">
                                <h3 class="portfolio-title">À l’unisson </h3>
                                <p>Paroles pour dire “oui” autrement.</p>
                                <i class="flaticon-up-right-arrow"></i>
                                <button data-mfp-src="#portfolio-wrapper"
                                    class="portfolio-link modal-popup"></button>
                            </div>
                        </div>
                        <div class="portfolio-item uxui">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PORTFOLIO SECTION END -->

    <!-- start: Portfolio Popup -->
    <div id="portfolio-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide">
        <div class="popup_modal_img">
            <img src="./assets/img/portfolio/modal-img.jpg" alt="">
        </div>

        <div class="popup_modal_content">
            <div class="portfolio_info">
                <div class="portfolio_info_text">
                    <h2 class="title">À l’unisson</h2>
                    <div class="desc">
                        <p>Écriture d’un texte central pour une cérémonie de mariage laïque. Ce texte pose le ton de
                            l’engagement : poétique, sincère, profond — sans être cliché.</p>
                    </div>
                    <a href="#" class="btn tj-btn-primary">live preview <i class="fal fa-arrow-right"></i></a>
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

            <div class="portfolio_gallery owl-carousel">
                <div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-1.jpg" alt="">
                </div>
                <div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-2.jpg" alt="">
                </div>
                <div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-3.jpg" alt="">
                </div>
                <div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-4.jpg" alt="">
                </div>
            </div>

            <div class="portfolio_description">
                <h2 class="title">Texte de mariage – cérémonie laïque</h2>
                <div class="desc">
                    <p>Écriture d’un texte central pour une cérémonie de mariage laïque. Ce texte pose le ton de
                        l’engagement : poétique, sincère, profond — sans être cliché.Ce texte, pensé comme une
                        déclaration universelle, donne à la cérémonie une dimension intime, authentique, et
                        profondément humaine.</p>


                </div>
            </div>

            <div class="portfolio_story_approach">
                <div class="portfolio_story">
                    <div class="story_title">
                        <h4 class="title">📖 L’histoire</h4>
                    </div>
                    <div class="story_content">
                        <p>Deux êtres s’unissent hors du cadre religieux. Ils veulent une cérémonie à leur image :
                            libre, simple, mais intensément émotive. Ils cherchent des mots qui racontent leur lien,
                            leur chemin, sans emphase, sans fioritures.
                            Deux êtres s’unissent hors du cadre religieux. Ils veulent une cérémonie à leur image :
                            libre, simple, mais intensément émotive. Ils cherchent des mots qui racontent leur lien,
                            leur chemin, sans emphase, sans fioritures..</p>
                    </div>
                </div>
                <div class="portfolio_approach">
                    <div class="approach_title">
                        <h4 class="title">🎙️ Notre approche
                        </h4>
                    </div>
                    <div class="approach_content">
                        <p>Je commence par les écouter. Leurs histoires, leurs rituels, leurs silences. Puis je
                            tisse un texte à leur image : sensible, vibrant, sobre.
                            Le mot juste prime. La poésie n’est pas forcée : elle vient de la sincérité.
                            Et si une voix est ajoutée, elle est douce, posée, presque chuchotée.
                            Un texte à dire, à lire, ou à garder comme promesse écrite.

                            ✦ Tonalité : poétique sans pathos, élégante, ancrée dans le réel.
                            ✦ Support : texte imprimé, carte, vidéo souvenir, podcast de cérémonie</p>
                    </div>
                </div>
            </div>

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

                <!-- <div class="navigation_item next-project">
                    <a href="#" class="project">
                        <div class="nav_project">
                            <div class="label">Next Project</div>
                            <h3 class="title">Qwillo</h3>
                        </div>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
    <!-- end: Portfolio Popup -->


    <!-- start: Portfolio Popup -->
    <div id="portfolio-wrapper2" class="popup_content_area zoom-anim-dialog mfp-hide">
        <div class="popup_modal_img">
            <img src="./assets/img/portfolio/modal-img.jpg" alt="">
        </div>

        <div class="popup_modal_content">
            <div class="portfolio_info">
                <div class="portfolio_info_text">
                    <h2 class="title"> Discours pour un événement inspirant</h2>
                    <div class="desc">
                        <p>Création sur mesure d’un discours destiné à être prononcé lors d’un événement marquant
                            (conférence, lancement de projet, TEDx, cérémonie). L’objectif : inspirer, mobiliser,
                            faire passer un message qui reste.</p>
                    </div>
                    <a href="#" class="btn tj-btn-primary">live preview <i class="fal fa-arrow-right"></i></a>
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

            <div class="portfolio_gallery owl-carousel">
                <div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-1.jpg" alt="">
                </div>
                <div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-2.jpg" alt="">
                </div>
                <div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-3.jpg" alt="">
                </div>
                <div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-4.jpg" alt="">
                </div>
            </div>

            <div class="portfolio_description">
                <h2 class="title">📝 Description du projet</h2>

                <div class="desc">
                    <p>Création sur mesure d’un discours destiné à être prononcé lors d’un événement marquant
                        (conférence, lancement de projet, TEDx, cérémonie). L’objectif : inspirer, mobiliser, faire
                        passer un message qui reste.</p>


                </div>
            </div>

            <div class="portfolio_story_approach">
                <div class="portfolio_story">
                    <div class="story_title">
                        <h4 class="title">📖 L’histoire</h4>
                    </div>
                    <div class="story_content">
                        <p>Un entrepreneur, une fondatrice, un responsable associatif…
                            Ils ont une tribune. 10 minutes. Une salle remplie de personnes curieuses.
                            Mais comment captiver ? Comment faire la différence dans un monde saturé de mots ?
                            Ils ne veulent pas un discours "pro", ils veulent un discours vivant, incarné,
                            inoubliable.</p>
                    </div>
                </div>
                <div class="portfolio_approach">
                    <div class="approach_title">
                        <h4 class="title">🎙️ Notre approche
                        </h4>
                    </div>
                    <div class="approach_content">
                        <p>Je travaille en immersion : ton parcours, ton feu intérieur, ta mission. Puis je
                            structure le discours pour qu’il vive en bouche : rythme, silences, images fortes,
                            variation d’émotion.
                            Je veille à garder l’authenticité intacte, tout en travaillant la forme avec précision.
                            Et si tu veux t’entraîner à le dire, je t’accompagne dans l’intonation et la présence
                            orale.

                            ✦ Tonalité : inspirante, engagée, sincère
                            ✦ Support : script papier, prompteur, vidéo ou prestation en direct</p>
                    </div>
                </div>
            </div>

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

                <!-- <div class="navigation_item next-project">
                    <a href="#" class="project">
                        <div class="nav_project">
                            <div class="label">Next Project</div>
                            <h3 class="title">Qwillo</h3>
                        </div>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
    <!-- end: Portfolio Popup -->


    <!-- start: Portfolio Popup -->
    <div id="portfolio-wrapper3" class="popup_content_area zoom-anim-dialog mfp-hide">
        <div class="popup_modal_img">
            <img src="./assets/img/portfolio/modal-img.jpg" alt="">
        </div>

        <div class="popup_modal_content">
            <div class="portfolio_info">
                <div class="portfolio_info_text">
                    <h2 class="title">Voix off – Méditation guidée</h2>
                    <div class="desc">
                        <p>Écriture et interprétation d’un script de méditation guidée, conçu pour apaiser,
                            recentrer et accompagner les utilisateurs dans un moment de pleine présence. Adapté à
                            des applications, podcasts, vidéos ou retraites audio..</p>
                    </div>
                    <a href="#" class="btn tj-btn-primary">live preview <i class="fal fa-arrow-right"></i></a>
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

            <div class="portfolio_gallery owl-carousel">
                <div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-1.jpg" alt="">
                </div>
                <div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-2.jpg" alt="">
                </div>
                <div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-3.jpg" alt="">
                </div>
                <div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-4.jpg" alt="">
                </div>
            </div>

            <div class="portfolio_description">
                <h2 class="title">📝 Description du projet</h2>
                <div class="desc">
                    <p>Écriture et interprétation d’un script de méditation guidée, conçu pour apaiser, recentrer et
                        accompagner les utilisateurs dans un moment de pleine présence. Adapté à des applications,
                        podcasts, vidéos ou retraites audio.</p>


                </div>
            </div>

            <div class="portfolio_story_approach">
                <div class="portfolio_story">
                    <div class="story_title">
                        <h4 class="title">📖 L’histoire</h4>
                    </div>
                    <div class="story_content">
                        <p>Une marque de bien-être ou une thérapeute veut proposer une expérience audio. Pas une
                            leçon. Pas un exercice. Une présence.
                            Le public est souvent en surcharge mentale, émotionnelle. Il cherche un refuge.
                            Il ne faut pas l’instruire — il faut l’inviter à se déposer.</p>
                    </div>
                </div>
                <div class="portfolio_approach">
                    <div class="approach_title">
                        <h4 class="title">🎙️ Notre approche
                        </h4>
                    </div>
                    <div class="approach_content">
                        <p>J’écris lentement. Je laisse de l’air. Je glisse des mots comme des cailloux sur un
                            chemin : pour guider sans diriger.
                            La voix (si activée) est feutrée, chaude, bienveillante. Chaque respiration est pensée.
                            C’est une écriture sensorielle, presque tactile. On ne parle pas à l’oreille, on parle à
                            l’intérieur.

                            ✦ Tonalité : douce, minimaliste, enveloppante
                            ✦ Support : fichier audio, appli, programme de coaching ou soins énergétiques

                        </p>
                    </div>
                </div>
            </div>

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

                <!-- <div class="navigation_item next-project">
                    <a href="#" class="project">
                        <div class="nav_project">
                            <div class="label">Next Project</div>
                            <h3 class="title">Qwillo</h3>
                        </div>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
    <!-- end: Portfolio Popup -->


    <!-- start: Portfolio Popup -->
    <div id="portfolio-wrapper4" class="popup_content_area zoom-anim-dialog mfp-hide">
        <div class="popup_modal_img">
            <img src="./assets/img/portfolio/modal-img.jpg" alt="">
        </div>

        <div class="popup_modal_content">
            <div class="portfolio_info">
                <div class="portfolio_info_text">
                    <h2 class="title">Voix off – Appel au don pour une association</h2>
                    <div class="desc">
                        <p>Écriture et interprétation d’un message de sensibilisation pour une campagne de dons ou
                            de mobilisation. Ce type de voix off s’intègre dans une vidéo, une publication ou un
                            spot audio.</p>
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

            <div class="portfolio_gallery owl-carousel">
                <div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-1.jpg" alt="">
                </div>
                <div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-2.jpg" alt="">
                </div>
                <div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-3.jpg" alt="">
                </div>
                <div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-4.jpg" alt="">
                </div>
            </div>

            <div class="portfolio_description">
                <h2 class="title">📝 Description du projet</h2>
                <div class="desc">
                    <p>Écriture et interprétation d’un message de sensibilisation pour une campagne de dons ou
                        de mobilisation. Ce type de voix off s’intègre dans une vidéo, une publication ou un
                        spot audio.</p>


                </div>
            </div>

            <div class="portfolio_story_approach">
                <div class="portfolio_story">
                    <div class="story_title">
                        <h4 class="title">📖 L’histoire</h4>
                    </div>
                    <div class="story_content">
                        <p>Une ONG ou une association veut toucher les cœurs. Elle a des chiffres, des images, des
                            besoins réels. Mais ce qu’il manque, c’est une voix humaine, simple, qui relie.
                            Un fil invisible entre ceux qui souffrent… et ceux qui peuvent aider.</p>
                    </div>
                </div>
                <div class="portfolio_approach">
                    <div class="approach_title">
                        <h4 class="title">🎙️ Notre approche
                        </h4>
                    </div>
                    <div class="approach_content">
                        <p>Je travaille à partir des valeurs de l’association. Je choisis les mots qui touchent sans
                            forcer, qui racontent sans culpabiliser.
                            Puis je prête ma voix : posée, habitée, sobre.
                            Le silence entre deux phrases devient un espace pour l’émotion.
                            C’est un appel discret, mais puissant.

                            ✦ Tonalité : empathique, digne, mobilisante
                            ✦ Support : vidéo de campagne, spot radio, réseaux sociaux, événement caritatif

                        </p>
                    </div>
                </div>
            </div>

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

                <!-- <div class="navigation_item next-project">
                    <a href="#" class="project">
                        <div class="nav_project">
                            <div class="label">Next Project</div>
                            <h3 class="title">Qwillo</h3>
                        </div>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
    <!-- end: Portfolio Popup -->
    <!-- RESUME SECTION START -->

    <!-- RESUME SECTION END -->

    <!-- SKILLS SECTION START -->

    <!-- SKILLS SECTION END -->

    <!-- TESTIMONIAL SECTION START -->
    <section class="testimonial-section" id="testimonials-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-header">
                        <h2 class="section-title wow fadeInLeft" data-wow-delay=".3s"> Voici ce qu’ils en disent
                        </h2>
                        <p class=" wow fadeInLeft" data-wow-delay=".4s">Ils m’ont confié leurs mots, leur histoire,
                            leur voix.
                            .</p>
                    </div>
                </div>

                <div class="col-lg-7 col-xl-6 offset-xl-1">
                    <div class="testimonials-widget wow fadeInRight" data-wow-delay=".5s">
                        <div class="owl-carousel testimonial-carousel">
                            <div class="testimonial-item">
                                <div class="top-area d-flex flex-wrap justify-content-between">
                                    <div class="logo-box">
                                        <img src="assets/img/testimonials/logo/1.png" alt="">
                                    </div>
                                    <div class="image-box">
                                        <img src="assets/img/testimonials/user/1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                            fill="url(#paint0_linear_263_588)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_263_588" x1="-0.0363755"
                                                y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                            fill="url(#paint0_linear_263_589)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_263_589" x1="-0.0363755"
                                                y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="quote">“Wanda a su traduire notre lien en mots, mieux que nous n’aurions
                                    jamais pu le faire. Le jour de notre cérémonie, beaucoup ont pleuré. Pas par
                                    tristesse — par beauté. </p>
                                <h4 class="name">Chloé & Malik</h4>

                            </div>
                            <div class="testimonial-item">
                                <div class="top-area d-flex flex-wrap justify-content-between">
                                    <div class="logo-box">
                                        <img src="assets/img/testimonials/logo/2.png" alt="">
                                    </div>
                                    <div class="image-box">
                                        <img src="assets/img/testimonials/user/2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                            fill="url(#paint0_linear_263_511)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_263_511" x1="-0.0363755"
                                                y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                            fill="url(#paint0_linear_263_510)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_263_510" x1="-0.0363755"
                                                y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="quote">“Ce n’était pas juste un discours. C’était mon histoire, mon
                                    engagement, mes tripes… subtilement sculptés pour être entendus. Et ça a
                                    résonné, fort. </p>
                                <h4 class="name">Inès R.,</h4>
                                <span class="designation"> fondatrice de projet à impact</span>
                            </div>
                            <div class="testimonial-item">
                                <div class="top-area d-flex flex-wrap justify-content-between">
                                    <div class="logo-box">
                                        <img src="assets/img/testimonials/logo/1.png" alt="">
                                    </div>
                                    <div class="image-box">
                                        <img src="assets/img/testimonials/user/1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                            fill="url(#paint0_linear_263_512)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_263_512" x1="-0.0363755"
                                                y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                            fill="url(#paint0_linear_263_513)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_263_513" x1="-0.0363755"
                                                y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="quote">“Wanda écrit comme on respire. Sa voix m’a littéralement
                                    enveloppée. Une expérience sensorielle rare, qui a marqué mes abonnés. </p>
                                <h4 class="name">Camille</h4>
                                <span class="designation">praticienne bien-être</span>
                            </div>
                            <div class="testimonial-item">
                                <div class="top-area d-flex flex-wrap justify-content-between">
                                    <div class="logo-box">
                                        <img src="assets/img/testimonials/logo/2.png" alt="">
                                    </div>
                                    <div class="image-box">
                                        <img src="assets/img/testimonials/user/2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                            fill="url(#paint0_linear_263_514)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_263_514" x1="-0.0363755"
                                                y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                            fill="url(#paint0_linear_263_515)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_263_515" x1="-0.0363755"
                                                y1="-0.0729998" x2="35.3333" y2="-0.0729991"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="quote">“Elle a trouvé le ton juste. Celui qui touche sans culpabiliser.
                                    Grâce à sa voix, notre campagne a gagné en portée… et en cœur. </p>
                                <h4 class="name">Équipe de l’association </h4>
                                <span class="designation">Terre Lien</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <section class="contact-section" id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 order-2 order-md-1">
                    <div class="contact-form-box wow fadeInLeft" data-wow-delay=".3s">
                        <div class="section-header">
                            <h2 class="section-title">Derrière l’écran, une vraie voix vous répond.

                            </h2>
                            <p>✦ Une idée, une voix, une envie de collaborer ? Parlons-en.


                            </p>
                        </div>

                        <div class="tj-contact-form">
                            <form action="index.html">
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form_group">
                                            <input type="text" name="fname" id="fname" placeholder="Votre nom"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form_group">
                                            <input type="text" name="lname" id="lname" placeholder="Votre Prénom"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form_group">
                                            <input type="email" name="email" id="email" placeholder="Email ="
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form_group">
                                            <input type="tel" name="phone" id="phone" placeholder="Numero Téléphone"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form_group">
                                            <select name="service" id="service" class="tj-nice-select">
                                                <option value="" selected disabled>Choisir un service</option>
                                                <option value="braning">Copyright</option>
                                                <option value="web">Voix Off</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form_group">
                                            <textarea name="message" id="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form_btn">
                                            <button type="submit" class="btn tj-btn-primary">Envoyer</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1 col-md-5  d-flex flex-wrap align-items-center  order-1 order-md-2">
                    <div class="contact-info-list">
                        <ul class="ul-reset">
                            <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                                data-wow-delay=".4s">
                                <div class="icon-box">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="text-box">
                                    <p>Phone</p>
                                    <a href="tel:0123456789">+221 78 459 41 09</a>
                                </div>
                            </li>
                            <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                                data-wow-delay=".5s">
                                <div class="icon-box">
                                    <i class="flaticon-mail-inbox-app"></i>
                                </div>
                                <div class="text-box">
                                    <p>Email</p>
                                    <a href="mailto:mail@mail.com">Wanda@multi.com</a>
                                </div>
                            </li>
                            <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                                data-wow-delay=".6s">
                                <div class="icon-box">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="text-box">
                                    <p>Address</p>
                                    <a href="#">Park Street Pine, <br>FL 33157, France</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT SECTION END -->
</main>

@endsection
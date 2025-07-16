

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
                            <form action="{{route('form.contact')}}" method="POST" class="contactForm" id="contact-form">
                                @csrf
                                <input type="hidden" name="form_type" value="contact">
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
                                            <input type="email" name="email" id="email" placeholder="Email"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form_group">
                                            <input type="tel" name="phone" id="phone" placeholder="Numero Téléphone"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <input type="text" name="website" style="display:none">

                                    {{-- <div class="col-12">
                                        <div class="form_group">
                                            <select name="service" id="service" class="tj-nice-select">
                                                <option value="" selected disabled>Choisir un service</option>
                                                <option value="braning">Copyright</option>
                                                <option value="web">Voix Off</option>

                                            </select>
                                        </div>
                                    </div> --}}
                                    <div class="col-12">
                                        <div class="form_group">
                                            <textarea name="message" id="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                   <div class="col-12">
                                        <div class="form_group">
                                            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>

                                        </div>
                                    </div>

                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                    @endif





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
                                    <p>Téléphone</p>
                                    <a href="tel:0123456789">+33 6 69 31 60 16</a>
                                </div>
                            </li>
                            <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                                data-wow-delay=".5s">
                                <div class="icon-box">
                                    <i class="flaticon-mail-inbox-app"></i>
                                </div>
                                <div class="text-box">
                                    <p>Email</p>
                                    <a href="mailto:mail@mail.com">wandamulti@gmail.com</a>
                                </div>
                            </li>
                            <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                                data-wow-delay=".6s">
                                <div class="icon-box">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="text-box">
                                    <p>Address</p>
                                    <a href="#">France, <br>FL 33157, France</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div id="service-wrapper-{{$section2->id}}" class="popup_content_area zoom-anim-dialog mfp-hide">
        <div class="popup_modal_img">
            <img src="./assets/img/services/modal-img.jpg" alt="">
        </div>

        <div class="popup_modal_content">
            <div class="service_details">
                <div class="row">
                    <div class="col-lg-7 col-xl-8">
                        <div class="service_details_content">
                            <div class="service_info" style="color: black">
                                {!! $section2->description ?? 'Aucune description disponible.' !!}
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


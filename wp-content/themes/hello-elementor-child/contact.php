<?php
/*
Template Name: Custom Contact Page
*/
 get_header('custom'); 
 
 ?>
 <!--====== Start Page-title-area section ======-->
 <section class="page-title-area text-white bg_cover" style="background-image: url(assets/images/gallery/5.jpg);">
            <div class="container">
                <!--======  Page-title-Inner ======-->
                <div class="page-title-inner text-center">
                    <h1 class="page-title">Contact</h1>
                    <div class="gd-breadcrumb">
                        <span class="breadcrumb-entry"><a href="index.html">Home</a></span>
                        <span class="separator"></span>
                        <span class="breadcrumb-entry active">Contact</span>
                    </div>
                </div>
            </div>
        </section><!--====== End Page-title-area section ======-->
        <!--====== Start Contact Info section ======-->
        <section class="contact-info-section pt-100">
            <div class="container">
                <div class="contact-info-wrapper wow fadeInUp">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <!--====== Contact Info Item ======-->
                            <div class="contact-info-item text-center">
                                <div class="icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/icon-1.png" alt="icon">
                                </div>
                                <div class="info">
                                    <span class="title">Location</span>
                                    <h6>Plot 379, Industrial Area, Phase II,
                                        Chandigarh-160002, India</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!--====== Contact Info Item ======-->
                            <div class="contact-info-item text-center">
                                <div class="icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/icon-2.png" alt="icon">
                                </div>
                                <div class="info">
                                    <span class="title">Email Address</span>
                                    <h6><a href="mailto:info@merafarmhouse.com">info@merafarmhouse.com</a></h6>
                                    <!--<h6><a href="mailto:infogarden.net">infogarden.net</a></h6>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!--====== Contact Info Item ======-->
                            <div class="contact-info-item text-center">
                                <div class="icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/icon-3.png" alt="icon">
                                </div>
                                <div class="info">
                                    <span class="title">Phone No</span>
                                    <h6><a href="tel:+919875968172">+91-987-596-8172</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Contact Info section ======-->
        <!--====== Start Contact section ======-->
        <section class="contact-section pt-95 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <!--====== Section-title ======-->
                        <div class="section-title wow fadeInRight mb-50">
                            <span class="sub-title"><i class="flaticon-plant"></i>Contact</span>
                            <h2>Want to know 
                                about a new machine ?</h2>
                        </div>
                    </div>
                </div>
                <div class="contact-wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--=== Map Box ===-->
                            <div class="map-box wow fadeInLeft mb-50">
                                <!-- TODO : Embed Google Maps of MFH Office Here-->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.745850014569!2d76.78220507511145!3d30.697426087338922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fedd928f66d27%3A0x4394e2d2af9e7574!2sMera%20Farmhouse!5e0!3m2!1sen!2sin!4v1690978111321!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                          
                              </div>
                        </div>
                        <div class="col-lg-6">
                            <!--====== Contact Form Wrapper ======-->
                            <div class="contact-form-wrapper mb-50 wow fadeInRight">
                                <form class="contact-form" action="https://formsubmit.co/merafarmhouse@gmail.com" method="POST">
                                    <div class="form_group">
                                        <label><i class="far fa-user"></i></label>
                                        <input type="text" class="form_control" placeholder="Full Name" name="name" required>
                                    </div>
                                    <div class="form_group">
                                        <label><i class="far fa-envelope"></i></label>
                                        <input type="email" class="form_control" placeholder="Email Address" name="email" required>
                                    </div>
                                    <div class="form_group">
                                        <label><i class="far fa-phone-plus"></i></label>
                                        <input type="text" class="form_control" placeholder="Phone Number" name="number" required>
                                    </div>
                                    <div class="form_group">
                                        <label><i class="far fa-map-marker-exclamation"></i></label>
                                        <input type="text" class="form_control" placeholder="Subject" name="subject" required>
                                    </div>
                                    <div class="form_group">
                                        <label><i class="far fa-pen-fancy"></i></label>
                                        <textarea class="form_control" rows="3" placeholder="Message" name="message"></textarea>
                                    </div>
                                    <div class="form_group">
                                        <button type="submit" class="main-btn primary-btn">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Contact section ======-->
        <!--====== Start Info Section ======-->
        <section class="info-section pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <!--====== Single Info Item ======-->
                        <div class="single-info-item style-one mb-40 wow fadeInUp">
                            <div class="shape shape-one"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape/info-shape-1.png" alt="shape"></span></div>
                            <div class="info">
                                <span>Soil Testing</span>
                                <h4 class="title">Book Your Soil
                                    Testing Appointment Today !</h4>
                                <a href="contact.html" class="main-btn golden-btn">Book Test</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <!--====== Single Info Item ======-->
                        <div class="single-info-item style-two mb-40 wow fadeInDown">
                            <div class="shape shape-one"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape/info-shape-1.png" alt="shape"></span></div>
                            <div class="info">
                                <span>Subsidy Enquiry</span>
                                <h4 class="title">Learn about a Subsidy Scheme !
                                    </h4>
                                <a href="contact.html" class="main-btn golden-btn">Call & Enquire</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <!--====== Single Info Item ======-->
                        <div class="single-info-item style-two mb-40 wow fadeInDown">
                            <div class="shape shape-one"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape/info-shape-1.png" alt="shape"></span></div>
                            <div class="info">
                                <span>List Products</span>
                                <h4 class="title">Want to show your products to farmers ?
                                    </h4>
                                <a href="contact.html" class="main-btn golden-btn">List Products</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                       
                </div>
            </div>
        </section><!--====== End Info Section ======-->
        <!--====== Start Partners Section ======-->
        <section class="partners-section">
            <div class="container">
                <!--=== Partners Slider ===-->
                <div class="partner-slider-one pt-80 pb-70 border-top-1 wow fadeInUp">
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/1.jpg" alt="Partner Image"></a>
                        </div>
                    </div>
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/2.jpg" alt="Partner Image"></a>
                        </div>
                    </div>
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/4.jpg" alt="Partner Image"></a>
                        </div>
                    </div>
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/5.jpg" alt="Partner Image"></a>
                        </div>
                    </div>
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/6.jpg" alt="Partner Image"></a>
                        </div>
                    </div>
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/8.jpg" alt="Partner Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Partners Section ======-->
        <?php get_footer('custom'); ?>
<?php
/*
Template Name: Custom contact-hi Page
*/
get_header('custom-hi');  
 
 ?>
<!--====== Start Page-title-area section ======-->
        <section class="page-title-area text-white bg_cover" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/5.jpg);">
            <div class="container">
                <!--======  Page-title-Inner ======-->
                <div class="page-title-inner text-center">
                    <h1 class="page-title">संपर्क</h1>
                    <div class="gd-breadcrumb">
                        <span class="breadcrumb-entry"><a href="\wordpress\home">होम पेज</a></span>
                        <span class="separator"></span>
                        <span class="breadcrumb-entry active"><a href="\wordpress\contact\">संपर्क</a></span>
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
                                    <span class="title">जगह</span>
                                    <h6>प्लॉट 379, औद्योगिक क्षेत्र, द्वितीय चरण,
                                        चंडीगढ़-160002, भारत</h6>
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
                                    <span class="title">ईमेल पता</span>
                                    <h6><a href="mailto:info@merafarmhouse.com">info@merafarmhouse.com</a></h6>
                                   
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
                                    <span class="title">फोन नंबर</span>
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
                            <span class="sub-title"><i class="flaticon-plant"></i>संपर्क करें</span>
                            <h2>जानना चाहते हैं
                                एक नई मशीन के बारे में?</h2>
                        </div>
                    </div>
                </div>
                <div class="contact-wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--=== Map Box ===-->
                            <div class="map-box wow fadeInLeft mb-50">
                                <!-- TODO : Embed Google Maps of MFH Office Here-->
                                <iframe src="https://maps.google.com/maps?q=new%20york&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--====== Contact Form Wrapper ======-->
                            <div class="contact-form-wrapper mb-50 wow fadeInRight">
                                <form class="contact-form">
                                    <div class="form_group">
                                        <label><i class="far fa-user"></i></label>
                                        <input type="text" class="form_control" placeholder="पूरा नाम" name="name" required>
                                    </div>
                                    <div class="form_group">
                                        <label><i class="far fa-envelope"></i></label>
                                        <input type="email" class="form_control" placeholder="ईमेल पता" name="email" required>
                                    </div>
                                    <div class="form_group">
                                        <label><i class="far fa-phone-plus"></i></label>
                                        <input type="text" class="form_control" placeholder="फ़ोन नंबर" name="number" required>
                                    </div>
                                    <div class="form_group">
                                        <label><i class="far fa-map-marker-exclamation"></i></label>
                                        <input type="text" class="form_control" placeholder="विषय" name="subject" required>
                                    </div>
                                    <div class="form_group">
                                        <label><i class="far fa-pen-fancy"></i></label>
                                        <textarea class="form_control" rows="3" placeholder="संदेश" name="message"></textarea>
                                    </div>
                                    <div class="form_group">
                                        <button class="main-btn primary-btn">मेसेज भेजें</button>
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
                                <span>मृदा परीक्षण</span>
                                <h4 class="title">आज ही अपना मृदा परीक्षण अपॉइंटमेंट बुक करें!</h4>
                                <a href="contact-hi.html" class="main-btn golden-btn">टेस्ट बुक करें</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <!--====== Single Info Item ======-->
                        <div class="single-info-item style-two mb-40 wow fadeInDown">
                            <div class="shape shape-one"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape/info-shape-1.png" alt="shape"></span></div>
                            <div class="info">
                                <span>सब्सिडी पूछताछ</span>
                                <h4 class="title">सब्सिडी योजना के बारे में जानें !
                                    </h4>
                                <a href="contact-hi.html" class="main-btn golden-btn">कॉल करें और पूछताछ करें</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <!--====== Single Info Item ======-->
                        <div class="single-info-item style-three mb-40 wow fadeInUp">
                            <div class="shape shape-one"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape/info-shape-2.png" alt="shape"></span></div>
                            <div class="info">
                                <span>उत्पादों की सूची बनाएं</span>
                                <h4 class="title">अपने उत्पादों को किसानों को दिखाना चाहते हैं?</h4>
                                <a href="contact-hi.html" class="main-btn primary-btn">उत्पादों की सूची बनाएं</a>
                            </div>
                        </div>
                    </div>
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
                            <a href="#"><img src="assets/images/gallery/8.jpg" alt="Partner Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Partners Section ======-->
          <?php get_footer('custom-hi'); ?>
<?php
/*
Template Name: Custom About Page
*/
 get_header('custom'); 
 
 ?>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico" type="image/png">
        <!--====== Google Fonts ======-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&amp;family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/flaticon/flaticon_gadden.css">
        <!--====== FontAwesome css ======-->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/fontawesome/css/all.min.css">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
        <!--====== magnific-popup css ======-->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/magnific-popup/dist/magnific-popup.css">
        <!--====== Slick-popup css ======-->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/slick/slick.css">
        <!--====== Jquery UI css ======-->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/jquery-ui/jquery-ui.min.css">
        <!--====== Nice Select css ======-->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/nice-select/css/nice-select.css">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/animate.css">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/default.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">

<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/5.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">About Us</h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="/">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">About Us</span>
            </div>
        </div>
    </div>
</section><!--====== End Page-title-area section ======-->
<!--====== Start About Section ======-->
<section class="about-section pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!--====== Section-title ======-->
                <div class="section-title mb-50 wow fadeInLeft">
                    <span class="sub-title"><i class="flaticon-plant"></i>About Mera Farmhouse</span>
                    <h2>Custom AI Recommendations for your farms</h2>
                </div>
                <div class="section-title mb-50 wow fadeInLeft">
                    <a href="#" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/play.png" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-lg-6">
                <!--====== About Content Box ======-->
                <div class="about-content-box mb-50 wow fadeInRight">
                    <p class="mb-30">Mera farmhouse aims to transform agriculture and its allied fields with the latest
                        Artificial Intelligence technology for sustained and developed farming.
                        It plans in making farming easy and affordable to farmers along with making high profits.</p>
                    <ul class="check-style-one mb-40">
                        <li><i class="far fa-check"></i>Ecommerce</li>
                        <li><i class="far fa-check"></i>Agri-Experts</li>
                        <li><i class="far fa-check"></i>Animal Care</li>
                        <li><i class="far fa-check"></i>Farm Setup</li>
                        <li><i class="far fa-check"></i>Geospatial Analysis</li>
                        <li><i class="far fa-check"></i>Subsidiy Eligibility</li>
                    </ul>
                    <div class="about-button">
                        <a href="/services" class="main-btn secondary-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <!--====== About Image Item ======-->
                <div class="about-img-item mb-30 wow fadeInUp">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/2.jpeg" alt="About Image">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <!--====== About Image Item ======-->
                <div class="about-img-item mb-30 wow fadeInDown">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/5.jpeg" alt="About Image">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <!--====== About Image Item ======-->
                <div class="about-img-item mb-30 wow fadeInUp">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/7.jpeg" alt="About Image">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!--====== About Wrapper ======-->
                <div class="about-wrapper-two gray-bg mt-minus-110 p-r wow fadeInDown">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <!--====== About features Item ======-->
                            <div class="about-features-item text-center">
                                <div class="hover-bg bg_cover"
                                    style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/1.png);"></div>
                                <div class="icon">
                                    <i class="flaticon-target"></i>
                                </div>
                                <div class="text">
                                    <h3 class="title">Our Mission</h3>
                                    <p>Connecting manufacturers and dealers with each other globally and to improve the
                                        economic stability
                                        of farmers through transparency of agriculture related products.</p>
                                    <a href="/about" class="btn-link">Read More<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <!--====== About features Item ======-->
                            <div class="about-features-item item-active text-center">
                                <div class="hover-bg bg_cover"
                                    style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/1.png);"></div>
                                <div class="icon">
                                    <i class="flaticon-vision"></i>
                                </div>
                                <div class="text">
                                    <h3 class="title">Our Vision</h3>
                                    <p>Mera Farmhouse aims to transform agriculture and its allied fields with the
                                        latest Artificial Intelligence technology for sustained and developed farming.
                                        It plans in making farming easy and affordable to farmers along with making high
                                        profits.</p>
                                    <a href="/about" class="btn-link">Read More<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <!--====== About features Item ======-->
                            <div class="about-features-item text-center">
                                <div class="hover-bg bg_cover"
                                    style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/1.png);"></div>
                                <div class="icon">
                                    <i class="flaticon-management"></i>
                                </div>
                                <div class="text">
                                    <h3 class="title">Plan & Goals</h3>
                                    <p>Create a cohesive ecosystem for farmers to empower them</p>
                                    <a href="/about" class="btn-link">Read More<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End About Section ======-->
<!--====== Start Features Section ======-->
<!--<section class="features-section p-r z-1 pb-100">
            <div class="features-wrapper">
                <div class="features-bg bg_cover" style="background-image: url(assets/images/bg/features-bg-1.jpg);"></div>
                <div class="features-bgc-content-box main-bg text-white wow fadeInRight">
                    <div class="features-content-box">-->
<!--====== Section-title ======-->
<!--<div class="section-title mb-50 wow fadeInUp">
                            <span class="sub-title"><i class="flaticon-plant"></i>Modern Gardening</span>
                            <h2>We Offers Landscape
                                & Tree Plantations</h2>
                        </div>
                        <p class="mb-40">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abillo inventore veritatis quasi architecto
                            beatae vitae dicta sunt explicabo emo enim ipsam voluptatem quia voluptas </p>
                        <div class="single-features-item mb-30 wow fadeInDown">
                            <div class="icon">
                                <i class="flaticon-pruning-shears"></i>
                                <span class="shape-circle"></span>
                            </div>
                            <div class="text">
                                <h5 class="title">Modern Gardening
                                    & Expert Team</h5>
                                <p>Quis autem velum reprehenderit 
                                    voluptate velit essecy molestiaey
                                    consequatur vel dolorem eum</p>
                            </div>
                        </div>
                        <div class="single-features-item mb-30 wow fadeInUp">
                            <div class="icon">
                                <i class="flaticon-gardening-1"></i>
                                <span class="shape-circle"></span>
                            </div>
                            <div class="text">
                                <h5 class="title">Tree Plantations & Landscape</h5>
                                <p>On the other hand, we denounce with righteous indignation dislike beguiled and demoralized</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>--><!--====== End Features Section ======-->
<!--====== Start Team Section ======-->
<section class="team-section pt-95">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!--====== Section-title ======-->
                <div class="section-title text-center mb-50 wow fadeInDown">
                    <span class="sub-title"><i class="flaticon-plant"></i>Our Experts</span>
                    <h2>The Advisors Panel</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-item mb-50 wow fadeInLeft">
                    <div class="member-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/rajinder.jpg" alt="Team Image">
                        <!--<div class="icon-btn"><i class="far fa-plus"></i></div>-->
                    </div>
                    <div class="member-info text-center">
                        <h3 class="title"><a href="/experts">Dr. Rajendra</a></h3>
                        <p>Soil Scientist, KVK Ambala, Haryana</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-item mb-50 wow fadeInDown">
                    <div class="member-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/jaspreet.jpg" alt="Team Image">
                        <!--<div class="icon-btn"><i class="far fa-plus"></i></div>-->
                    </div>
                    <div class="member-info text-center">
                        <h3 class="title"><a href="/experts">S. Jaspreet Singh</a></h3>
                        <p>Soil & Crop Health Expert</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-item mb-50 wow fadeInRight">
                    <div class="member-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/vikas.jpg" alt="Team Image">
                        <!--<div class="icon-btn"><i class="far fa-plus"></i></div>-->
                    </div>
                    <div class="member-info text-center">
                        <h3 class="title"><a href="/experts">Dr. Vishwas Vikas</a></h3>
                        <p>Director Operations, SKYNET</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <!--====== Experience Box ======-->
                <div class="experience-box mt-25 mb-40 text-center wow fadeInUp" data-wow-delay=".35s">
                    <h2 class="fill-text">10+</h2>
                    <h4>Experienced Mentors</h4>
                    <a href="/experts" class="btn-link">View All Mentors <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Team Section ======-->

<?php get_footer('custom'); ?>
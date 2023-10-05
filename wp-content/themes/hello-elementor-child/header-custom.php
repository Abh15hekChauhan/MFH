<?php
// Get the current URL
$currentUrl = $_SERVER['REQUEST_URI'];

// Get the last part (slug)
$lastSlug = rtrim($currentUrl, '/');

?>
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Landscaping, Gardening, Florists, Groundskeeping">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>Mera Farmhouse</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico" type="image/png">
        <!--====== Google Fonts ======-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
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
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/frontpage.css">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
            <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-WR50N3JSMW"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-WR50N3JSMW');
        </script>
    </head>
   
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div><!--====== End Preloader ======-->
        <!--====== Search From ======-->
		<div class="modal fade search-modal" id="search-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form>
                        <div class="form_group">
                        	<input type="search" class="form_control" placeholder="Search here" name="search">
                        	<label><i class="fa fa-search"></i></label>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--====== Search From ======-->
        <!--====== Sidebar Wrapper ======-->
        <div class="modal fade sidebar-panel-wrapper" id="sidebar-modal">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <button class="close" data-dismiss="modal"><i class="far fa-times"></i></button>
                    <div class="sidebar-wrapper">
                        <div class="sidebar-information-area">
                            <div class="row no-gutters">
                                <div class="col-lg-4 sidebar-widget">
                                    <div class="sidebar-info-widget">
                                        <a href="index.php" class="footer-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/logo.png" alt="Brand Logo"></a>
                                        <p>Mera Farmhouse connects manufacturers and dealers with each other globally and aims at improving the 
                                            economic stability of the farmers through transparency in agriculture related products.</p>
                                        <div class="social-item">
                                            <h6>Follow Us</h6>
                                            <ul class="social-link">
                                                <!-- TODO : Add the Social Media Accounts Here-->
                                                <li><a href="https://www.facebook.com/profile.php?id=100070131415597"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="https://twitter.com/MeraFarmhouse"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://youtube.com/@MeraFarmhouse"><i class="fab fa-youtube"></i></a></li>
                                                <li><a href="https://in.pinterest.com/merafarmhousedotcom/"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="https://www.instagram.com/merafarmhouse/"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 sidebar-widget">
                                    <div class="sidebar-info-widget">
                                        <h4 class="title">Get In Touch</h4>
                                        <div class="contact-info-item-two">
                                            <h6 class="title"><i class="far fa-map-marker-alt"></i>Location</h6>
                                            <p>Plot 379, Industrial Area, Phase II,
                                                Chandigarh-160002, India</p>
                                        </div>
                                        <div class="contact-info-item-two">
                                            <h6 class="title"><i class="far fa-envelope-open"></i>Email Us</h6>
                                            <p><a href="mailto:info@merafarmhouse.com">info@merafarmhouse.com</a></p>
                                        </div>
                                        <div class="contact-info-item-two">
                                            <h6 class="title"><i class="far fa-phone-plus"></i>Hotline</h6>
                                            <p><a href="tel:+919875968172">+91-987-596-8172</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 sidebar-widget">
                                    <div class="sidebar-info-widget">
                                        <h4 class="title">Newsletter</h4>
                                        <!-- TODO : Check if MFH has Newsletter Option-->
                                        <form>
                                            <div class="form_group">
                                                <input type="email" class="form_control" placeholder="Email Address" required>
                                                <button class="main-btn secondary-btn">Subscribe Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-gallery pt-80">
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/1.jpg" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/1.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/2.jpg" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/2.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/4.jpg" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/4.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/5.jpg" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/5.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/6.jpg" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/6.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/7.jpg" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/7.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/8.jpg" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/8.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--====== Sidebar Wrapper ======-->
        <!--====== Header Area ======-->
        <header class="header-area header-one transparent-header">
            <div class="container-fluid">
                <!--====== Header Top Bar ======-->
                <div class="header-top-bar text-white main-bg in-bg d-none d-xl-block">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--====== Top Left ======-->
                            <div class="top-left">
                                <span>Best Organic Marketplace for Farmers</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--====== Top Right ======-->
                            <div class="top-right float-lg-right">
                                <ul class="social-link">
                                    <!-- TODO : Add the Social Media Platforms -->
                                    <li><a href="https://www.facebook.com/profile.php?id=100070131415597"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/MeraFarmhouse"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://youtube.com/@MeraFarmhouse"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="https://in.pinterest.com/merafarmhousedotcom/"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="https://www.instagram.com/merafarmhouse/"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== Header Navigation ======-->
            <div class="header-navigation">
                <div class="nav-overlay"></div>
                <div class="container-fluid">
                    <div class="primary-menu">
                        <!--====== Site Branding ======-->
                        <div class="site-branding">
                            <a href="index.php" class="brand-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/logo.png" alt="Site Logo"></a>
                        </div>
                        <!--====== Nav Menu ======-->
                        <div class="nav-menu">
                            <!--====== Site Branding ======-->
                            <div class="mobile-logo mb-30 d-block d-xl-none">
                                <a href="index.php" class="brand-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/logo.png" alt="Site Logo"></a>
                            </div>
                            <!--=== Nav Search ===-->
                            <div class="nav-search mb-30 d-block d-xl-none ">
                                <form>
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="Search Here" name="email" required>
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!--====== main Menu ======-->
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item has-children"><a href="/">Home</a>
                                        
                                    </li>
                                    <li class="menu-item"><a href="/about">About</a></li>
                                    <li class="menu-item has-children"><a href="/services">Services</a>
                                       
                                    </li>
                                    <li class="menu-item has-children"><a href="/solution">Solutions</a>
                                       
                                    </li>
                                    <li class="menu-item has-children"><a href="/expert">Experts</a>
                                        
                                    </li>
                                    <li class="menu-item has-children"><a href="/blogs">Blogs & News</a>
                                        
                                    </li>
                                    <!-- <li class="menu-item has-children"><a href="blogs.php">News</a>
                                       
                                    </li> -->
                                    <li class="menu-item has-children"><a href="/privacy">Privacy</a>
                                       
                                    </li>
                                    <li class="menu-item has-children"><a href="/terms">Terms</a>
                                      
                                    </li>
   
                        <li class="menu-item has-children"><a href="#">Language</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo $lastSlug ?>">English</a></li>
                                <li><a href="<?php echo $lastSlug ?>-hi">Hindi</a></li>
                                <li><a href="<?php echo $lastSlug ?>-bi">Punjabi</a></li>
                            </ul>
                        </li>            
        <li class="menu-item has-children">
            <a href= "https://app.mera.farm/" target="_self" id="loginLink">Login</a>
        </li>

  
                    </ul>
                </nav>
                <!--====== Menu Button ======-->
                <div class="menu-button mt-40 d-xl-none">
                    <a href="/contact" class="main-btn secondary-btn">Contact</a>
                </div>
            </div>
                        <!--====== Nav Right Item ======-->
                        <div class="nav-right-item">
                            <div class="menu-button d-xl-block d-none">
                                <a href="/contact" class="main-btn primary-btn">Contact</a>
                            </div>
                            <div class="bar-button" data-toggle="modal" data-target="#sidebar-modal">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bar.png" alt="Image">
                            </div>
                            <div class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--====== End Area ======-->

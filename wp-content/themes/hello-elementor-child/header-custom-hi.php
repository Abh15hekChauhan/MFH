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
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico"
        type="image/png">
    <!--====== Google Fonts ======-->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&amp;family=Roboto:wght@400;500;700&amp;display=swap"
        rel="stylesheet">
    <!--====== Flaticon css ======-->
    <link rel="stylesheet"
        href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/flaticon/flaticon_gadden.css">
    <!--====== FontAwesome css ======-->
    <link rel="stylesheet"
        href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/fontawesome/css/all.min.css">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet"
        href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--====== magnific-popup css ======-->
    <link rel="stylesheet"
        href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/magnific-popup/dist/magnific-popup.css">
    <!--====== Slick-popup css ======-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/slick/slick.css">
    <!--====== Jquery UI css ======-->
    <link rel="stylesheet"
        href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/jquery-ui/jquery-ui.min.css">
    <!--====== Nice Select css ======-->
    <link rel="stylesheet"
        href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/nice-select/css/nice-select.css">
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/animate.css">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/default.css">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
</head>

<body>
    <!--====== Start Preloader ======-->
    <div class="preloader" style="display: none;">
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
                        <input type="search" class="form_control" placeholder="यहां तलाश करो" name="search">
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
                                    <a href="/index-hi" class="footer-logo"><img
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/logo.png"
                                            alt="ब्रांड लोगो"></a>
                                    <p>मेरा फार्महाउस विश्व स्तर पर निर्माताओं और डीलरों को एक-दूसरे से जोड़ता है और
                                        इसका उद्देश्य कृषि संबंधी उत्पादों में पारदर्शिता के माध्यम से किसानों की आर्थिक
                                        स्थिरता में सुधार करना है।</p>
                                    <div class="social-item">
                                        <h6>हमारे पर का पालन करें</h6>
                                        <ul class="social-link">
                                            <!-- TODO : Add the Social Media Accounts Here-->
                                            <li><a href="https://www.facebook.com/profile.php?id=100070131415597"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://twitter.com/MeraFarmhouse"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://youtube.com/@MeraFarmhouse"><i
                                                        class="fab fa-youtube"></i></a></li>
                                            <li><a href="https://in.pinterest.com/merafarmhousedotcom/"><i
                                                        class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="https://www.instagram.com/merafarmhouse/"><i
                                                        class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 sidebar-widget">
                                <div class="sidebar-info-widget">
                                    <h4 class="title">संपर्क में रहो</h4>
                                    <div class="contact-info-item-two">
                                        <h6 class="title"><i class="far fa-map-marker-alt"></i>जगह</h6>
                                        <p>प्लॉट 379, औद्योगिक क्षेत्र, चरण II, चंडीगढ़-160002, भारत</p>
                                    </div>
                                    <div class="contact-info-item-two">
                                        <h6 class="title"><i class="far fa-envelope-open"></i>हमें ईमेल करें</h6>
                                        <p><a href="mailto:info@merafarmhouse.com">info@merafarmhouse.com</a></p>
                                    </div>
                                    <div class="contact-info-item-two">
                                        <h6 class="title"><i class="far fa-phone-plus"></i>हॉटलाइन</h6>
                                        <p><a href="tel:+919875968172">+91-987-596-8172</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 sidebar-widget">
                                <div class="sidebar-info-widget">
                                    <h4 class="title">समाचार पत्रिका</h4>
                                    <!-- TODO : Check if MFH has Newsletter Option-->
                                    <form>
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="मेल पता" required="">
                                            <button class="main-btn secondary-btn">अब सदस्यता लें</button>
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
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/1.jpg"
                                            alt="गैलरी छवि">
                                        <div class="hover-overlay">
                                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/1.jpg"
                                                class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/2.jpg"
                                            alt="गैलरी छवि">
                                        <div class="hover-overlay">
                                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/2.jpg"
                                                class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/4.jpg"
                                            alt="गैलरी छवि">
                                        <div class="hover-overlay">
                                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/4.jpg"
                                                class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/5.jpg"
                                            alt="गैलरी छवि">
                                        <div class="hover-overlay">
                                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/5.jpg"
                                                class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/6.jpg"
                                            alt="गैलरी छवि">
                                        <div class="hover-overlay">
                                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/6.jpg"
                                                class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/7.jpg"
                                            alt="गैलरी छवि">
                                        <div class="hover-overlay">
                                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/7.jpg"
                                                class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/8.jpg"
                                            alt="गैलरी छवि">
                                        <div class="hover-overlay">
                                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/8.jpg"
                                                class="img-popup icon-btn"><i class="far fa-plus"></i></a>
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
    <header class="header-area header-two">
        <div class="container-fluid">
            <!--====== Header Top Bar ======-->
            <div class="header-top-bar text-white main-bg d-none d-xl-block">
                <div class="row">
                    <div class="col-lg-6">
                        <!--====== Top Left ======-->
                        <div class="top-left">
                            <span>किसानों के लिए सर्वोत्तम जैविक बाज़ार</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--====== Top Right ======-->
                        <div class="top-right float-lg-right">
                            <ul class="social-link">
                                <!-- TODO : Add Social Media Links Here-->
                                <li><a href="https://www.facebook.com/profile.php?id=100070131415597"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/MeraFarmhouse"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://youtube.com/@MeraFarmhouse"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="https://in.pinterest.com/merafarmhousedotcom/"><i
                                            class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== Header Middle ======-->
            <div class="header-middle d-none d-xl-block">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <!--====== Information Wrapper ======-->
                        <div class="information-wrapper">
                            <div class="row">
                                <div class="col-lg-4">
                                    <!--====== Single Information Item ======-->
                                    <div class="single-information-item">
                                        <div class="icon">
                                            <i class="far fa-map-marker-alt"></i>
                                        </div>
                                        <div class="info">
                                            <span>
                                                स्थानों</span>
                                            <h5>
                                                चंडीगढ़, भारत</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <!--====== Single Information Item ======-->
                                    <div class="single-information-item">
                                        <div class="icon">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <div class="info">
                                            <span>हमें ईमेल करें</span>
                                            <h5><a href="mailto:info@merafarmhouse.com">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">info@merafarmhouse.com
                                                        </font>
                                                    </font>
                                                </a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <!--====== Single Information Item ======-->
                                    <div class="single-information-item">
                                        <div class="icon">
                                            <i class="far fa-phone-plus"></i>
                                        </div>
                                        <div class="info">
                                            <span>
                                                हॉटलाइन</span>
                                            <h5><a href="tel:+919875968172">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">+91-987-596-8172</font>
                                                    </font>
                                                </a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <!--====== menu Right Item ======-->
                        <div class="menu-right-item">
                            <span class="search-btn" data-toggle="modal" data-target="#search-modal"><i
                                    class="far fa-search"></i></span>
                            <span class="bar-btn" data-toggle="modal" data-target="#sidebar-modal"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bar.png"
                                    alt="छवि"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== Header Navigation ======-->
            <div class="header-navigation">
                <div class="nav-overlay"></div>
                <div class="primary-menu">
                    <!--====== Site Branding ======-->
                    <div class="site-branding">
                        <a href="/index-hi" class="brand-logo"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/logo.png"
                                alt="साइट लोगो"></a>
                        <a href="/index-hi" class="sticky-logo"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/logo.png"
                                alt="साइट लोगो"></a>
                    </div>
                    <!--====== Nav Menu ======-->
                    <div class="nav-menu">
                        <!--====== Site Branding ======-->
                        <div class="mobile-logo mb-30 d-block d-xl-none">
                            <a href="/index-hi" class="brand-logo"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/logo.png"
                                    alt="साइट लोगो"></a>
                        </div>
                        <!--=== Nav Search ===-->
                        <div class="nav-search mb-30 d-block d-xl-none ">
                            <form>
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="यहां तलाश करो" name="email"
                                        required="">
                                    <button class="search-btn"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <!--====== main Menu ======-->
                        <nav class="main-menu">
                            <ul>
                                <li class="menu-item has-children"><a href="/index-hi">
                                होम</a>

                                </li>
                                <li class="menu-item"><a href="/about-hi">
                                हमारे बारे</a></li>
                                <li class="menu-item has-children"><a href="/services-hi">
                                        सेवाएं</a>

                                </li>
                                <li class="menu-item has-children"><a href="/solutions-hi">समाधान</a>

                                </li>
                                <li class="menu-item has-children"><a href="/experts-hi">
                                        विशेषज्ञों</a>

                                </li>
                                <li class="menu-item has-children"><a href="/blogs-hi">ब्लॉग</a>

                                </li>
                                <li class="menu-item has-children"><a href="/privacy-hi">प्राइवेसी पालिसी</a>

                                </li>
                                <li class="menu-item has-children"><a href="/terms-hi">
                                नियम और शर्तें</a>

                                </li>

                                <li class="menu-item has-children"><a href="#">
                                        भाषा<span class="dd-trigger"><i class="far fa-angle-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php
                                        if ($lastSlug) {
                                            $lastSlug = rtrim($lastSlug, '-hi');
                                            $lastSlug = rtrim($lastSlug, '-bi');
                                            echo $lastSlug;
                                        } else {
                                            echo '/';
                                        }
                                        ?>">अंग्रेज़ी</a>
                                        </li>
                                        <li><a href="<?php
                                        if ($lastSlug && $lastSlug != "index" && $lastSlug != "index-hi" && $lastSlug != "index-bi") {
                                            $lastSlug = rtrim($lastSlug, '-hi');
                                            $lastSlug = rtrim($lastSlug, '-bi');
                                            echo $lastSlug . '-hi';
                                        } else {
                                            echo '/index-hi';
                                        }
                                        ?>">हिंदी</a></li>
                                        <li><a href="<?php
                                        if ($lastSlug && $lastSlug != "index" && $lastSlug != "index-hi" && $lastSlug != "index-bi") {
                                            $lastSlug = rtrim($lastSlug, '-hi');
                                            $lastSlug = rtrim($lastSlug, '-bi');
                                            echo $lastSlug . '-bi';
                                        } else {
                                            echo $lastSlug . '/index-bi';
                                        }
                                        ?>">पंजाबी</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children">
                                    <a href="https://app.mera.farm/" id="loginLink">लॉग इन करें</a>
                                </li>
                            </ul>
                        </nav>
                        <!--====== Menu Button ======-->
                        <div class="menu-button mt-40 d-xl-none">
                            <a href="/contact-hi" class="main-btn secondary-btn">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">संपर्क</font>
                                </font>
                            </a>
                        </div>
                    </div>


                    <!--====== Nav Right Item ======-->
                    <div class="nav-right-item">

                        <div class="menu-button d-xl-block d-none">
                            <a href="/contact-hi" class="main-btn primary-btn">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">संपर्क</font>
                                </font>
                            </a>
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

    </header><!--====== End Header ======-->
    <!--====== Jquery js ======-->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/jquery-3.6.0.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/popper/popper.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--====== Slick js ======-->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/slick/slick.min.js"></script>
    <!--====== Magnific js ======-->
    <script
        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!--====== Isotope js ======-->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/isotope.min.js"></script>
    <!--====== Imagesloaded js ======-->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/imagesloaded.min.js"></script>
    <!--====== Counterup js ======-->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/jquery.counterup.min.js"></script>
    <!--====== Waypoints js ======-->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/jquery.waypoints.js"></script>
    <!--====== Nice-select js ======-->
    <script
        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    <!--====== jquery UI js ======-->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <!--====== WOW js ======-->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/wow.min.js"></script>
    <!--====== Main js ======-->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/theme.js"></script>
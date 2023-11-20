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
                        <input type="search" class="form_control" placeholder="ਇੱਥੇ ਖੋਜ ਕਰੋ" name="search">
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
                                    <a href="/index-bi" class="footer-logo"><img
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/logo.png"
                                            alt="ਬ੍ਰਾਂਡ ਲੋਗੋ"></a>
                                    <p>ਮੇਰਾ ਫਾਰਮਹਾਊਸ ਵਿਸ਼ਵ ਪੱਧਰ 'ਤੇ ਨਿਰਮਾਤਾਵਾਂ ਅਤੇ ਡੀਲਰਾਂ ਨੂੰ ਇੱਕ ਦੂਜੇ ਨਾਲ ਜੋੜਦਾ ਹੈ ਅਤੇ
                                        ਇਸਦਾ ਉਦੇਸ਼ ਖੇਤੀਬਾੜੀ ਨਾਲ ਸਬੰਧਤ ਉਤਪਾਦਾਂ ਵਿੱਚ ਪਾਰਦਰਸ਼ਤਾ ਰਾਹੀਂ ਕਿਸਾਨਾਂ ਦੀ ਆਰਥਿਕ
                                        ਸਥਿਰਤਾ ਨੂੰ ਬਿਹਤਰ ਬਣਾਉਣਾ ਹੈ।</p>
                                    <div class="social-item">
                                        <h6>ਸਾਡੇ ਨਾਲ ਜੁੜੋ</h6>
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
                                    <h4 class="title">ਸਾਨੂੰ ਫ਼ੋੱਲੋ ਕਰੋ</h4>
                                    <div class="contact-info-item-two">
                                        <h6 class="title"><i class="far fa-map-marker-alt"></i>ਸਥਾਨ</h6>
                                        <p>ਪਲਾਟ 379, ਉਦਯੋਗਿਕ ਖੇਤਰ, ਫੇਜ਼ II, ਚੰਡੀਗੜ੍ਹ-160002, ਭਾਰਤ</p>
                                    </div>
                                    <div class="contact-info-item-two">
                                        <h6 class="title"><i class="far fa-envelope-open"></i>ਸਾਨੂੰ ਈਮੇਲ ਕਰੋ</h6>
                                        <p><a href="mailto:info@merafarmhouse.com">info@merafarmhouse.com</a></p>
                                    </div>
                                    <div class="contact-info-item-two">
                                        <h6 class="title"><i class="far fa-phone-plus"></i>ਹੌਟਲਾਈਨ</h6>
                                        <p><a href="tel:+919875968172">+91-987-596-8172</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 sidebar-widget">
                                <div class="sidebar-info-widget">
                                    <h4 class="title">ਨਿਊਜ਼ਲੈਟਰ</h4>
                                    <!-- TODO : Check if MFH has Newsletter Option-->
                                    <form>
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="ਈਮੇਲ ਪਤਾ" required="">
                                            <button class="main-btn secondary-btn">ਹੁਣੇ ਸਬਸਕ੍ਰਾਈਬ ਕਰੋ</button>
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
                                            alt="ਗੈਲਰੀ ਚਿੱਤਰ">
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
                                            alt="ਗੈਲਰੀ ਚਿੱਤਰ">
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
                                            alt="ਗੈਲਰੀ ਚਿੱਤਰ">
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
                                            alt="ਗੈਲਰੀ ਚਿੱਤਰ">
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
                                            alt="ਗੈਲਰੀ ਚਿੱਤਰ">
                                        <div class="hover-overlay">
                                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/6.jpg"
                                                class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/7.jpg"
                                            alt="ਗੈਲਰੀ ਚਿੱਤਰ">
                                        <div class="hover-overlay">
                                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/7.jpg"
                                                class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/8.jpg"
                                            alt="ਗੈਲਰੀ ਚਿੱਤਰ">
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
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ਕਿਸਾਨਾਂ ਲਈ ਸਭ ਤੋਂ ਵਧੀਆ ਆਰਗੈਨਿਕ ਮਾਰਕੀਟਪਲੇਸ</font></font></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--====== Top Right ======-->
                            <div class="top-right float-lg-right">
                                <ul class="social-link">
                                    <!-- TODO : Add Social Media Links Here-->
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
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
                                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ਟਿਕਾਣਾ</font></font></span>
                                                <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ਚੰਡੀਗੜ੍ਹ, ਭਾਰਤ</font></font></h5>
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
                                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ਸਾਨੂੰ ਈਮੇਲ ਕਰੋ</font></font></span>
                                                <h5><a href="mailto:info@merafarmhouse.com"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">info@merafarmhouse.com</font></font></font></font></a></h5>
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
                                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ਹੌਟਲਾਈਨ</font></font></span>
                                                <h5><a href="tel:+919875968172"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+91-987-596-8172</font></font></font></font></a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <!--====== menu Right Item ======-->
                            <div class="menu-right-item">
                                <span class="search-btn" data-toggle="modal" data-target="#search-modal"><i class="far fa-search"></i></span>
                                <span class="bar-btn" data-toggle="modal" data-target="#sidebar-modal"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bar.png" alt="ਚਿੱਤਰ"></span>
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
                            <a href="/index-bi" class="brand-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/logo.png" alt="ਸਾਈਟ ਲੋਗੋ"></a>
                            <a href="/index-bi" class="sticky-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/logo.png" alt="ਸਾਈਟ ਲੋਗੋ"></a>
                        </div>
                        <!--====== Nav Menu ======-->
                        <div class="nav-menu">
                            <!--====== Site Branding ======-->
                            <div class="mobile-logo mb-30 d-block d-xl-none">
                                <a href="/index-bi" class="brand-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/logo.png" alt="ਸਾਈਟ ਲੋਗੋ"></a>
                            </div>
                            <!--=== Nav Search ===-->
                            <div class="nav-search mb-30 d-block d-xl-none ">
                                <form>
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="ਇੱਥੇ ਖੋਜ ਕਰੋ" name="email" required="">
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!--====== main Menu ======-->
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item has-children"><a href="/index-bi"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ਹੋਮ</font></font></a>
                                    </li>
                                    <li class="menu-item"><a href="/about-bi"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ਸਾਡੇ ਬਾਰੇ </font></font></a></li>
                                    <li class="menu-item has-children"><a href="/services-bi"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ਸੇਵਾਵਾਂ</font></font></a>
                                       
                                    </li>
                                    <li class="menu-item has-children"><a href="/solutions-bi"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ਹੱਲ</font></font></a>
                                      
                                    </li>
                                    <li class="menu-item has-children"><a href="/experts-bi"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ਮਾਹਿਰ</font></font></a>
                                       
                                    </li>
                                    <li class="menu-item has-children"><a href="/blogs-bi"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ਬਲੌਗ</font></font></a>
                                       
                                    </li>
                                    <li class="menu-item has-children"><a href="/privacy-bi"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ਪ੍ਰਾਈਵੇਸੀ ਪਾਲਿਸੀ</font></font></a>
                                     
                                    </li>
                                    <li class="menu-item has-children"><a href="/terms-bi"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ਨਿਯਮ ਅਤੇ ਸ਼ਰਤਾਂ</font></font></a>
                                       
                                    </li>
                                    <li class="menu-item has-children"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ਭਾਸ਼ਾ</font></font><span class="dd-trigger"><i class="far fa-angle-down"></i></span></a>
                                    <ul class="sub-menu">
                                    <li><a href="<?php
                                    if ($lastSlug) {
                                        $lastSlug = rtrim($lastSlug, '-hi');
                                        $lastSlug = rtrim($lastSlug, '-bi');
                                        echo $lastSlug;
                                    } else {
                                        echo '/';
                                    }
                                    ?>">ਅੰਗਰੇਜ਼ੀ</a>
                                    </li>
                                    <li><a href="<?php
                                    if ($lastSlug && $lastSlug != "index" && $lastSlug != "index-hi" && $lastSlug != "index-bi") {
                                        $lastSlug = rtrim($lastSlug, '-hi');
                                        $lastSlug = rtrim($lastSlug, '-bi');
                                        echo $lastSlug . '-hi';
                                    } else {
                                        echo '/index-hi';
                                    }
                                    ?>">ਹਿੰਦੀ</a></li>
                                    <li><a href="<?php
                                    if ($lastSlug && $lastSlug != "index" && $lastSlug != "index-hi" && $lastSlug != "index-bi") {
                                        $lastSlug = rtrim($lastSlug, '-hi');
                                        $lastSlug = rtrim($lastSlug, '-bi');
                                        echo $lastSlug . '-bi';
                                    } else {
                                        echo $lastSlug . '/index-bi';
                                    }
                                    ?>">ਪੰਜਾਬੀ</a></li>
                                </ul>
                                    </li>
                                    <li class="menu-item has-children">
                                        <a href="#" id="loginLink">ਲਾਗਿਨ</a>
                                    </li>
                                </ul>
                            </nav>
                            <!--====== Menu Button ======-->
                            <div class="menu-button mt-40 d-xl-none">
                                <a href="/contact-bi" class="main-btn secondary-btn"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ਸੰਪਰਕ ਕਰੋ</font></font></a>
                            </div>
                        </div>
                        <!--====== Nav Right Item ======-->
                        <div class="nav-right-item">
                          
                            <div class="menu-button d-xl-block d-none">
                                <a href="/contact-bi" class="main-btn primary-btn"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ਸੰਪਰਕ ਕਰੋ</font></font></a>
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
<?php
get_header('custom')
    ?>
        <!--====== Start Page-title-area section ======-->
        <section class="page-title-area text-white bg_cover" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/5.jpg);">
            <div class="container">
                <!--======  Page-title-Inner ======-->
                <div class="page-title-inner text-center">
                    <h1 class="page-title">Blogs & News</h1>
                    <div class="gd-breadcrumb">
                        <span class="breadcrumb-entry"><a href="index.html">Home</a></span>
                        <span class="separator"></span>
                        <span class="breadcrumb-entry active">Blogs & News</span>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Page-title-area section ======-->
        <!--====== Start Blog Details section ======-->
        <section class="blog-details-section pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-12">
                        <!--=== Blog Details Wrapper ===-->
                        <div class="blog-details-wrapper">
                            <!--=== Blog Post ===-->
                            <div class="blog-post wow fadeInUp">
                                <div class="post-meta">
                                    <span class="author"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog/author-thumb-4.jpg" alt="author"><a href="news/20230430/1.html"><span>By</span>Mera Farmhouse</a></span>
                                    <span class="date"><a href="news/20230430/1.html">02 May 2023</a></span>
                                    <span class="comment"><a href="news/20230430/1.html">5 Comments</a></span>
                                </div>
                                <div class="entry-content">
                                    <h3 class="title">Sample News Title</h3>
                                    <p>
                                        Sample News Content Will Be Here

                                    </p>
                                    <div class="block-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog/blog-single-1.jpg" alt="Post Image"></div>
                                    <p>
                                        Sample News Next Paragraph
                                    </p>
                                    <!--<blockquote class="wp-block-quote">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog/quote.png" alt="quote image">
                                        <h3>Handling Mounting And Unmounting Given
                                            Navigation Routes In React Native</h3>
                                        <span>Johnny M. Martin</span>
                                    </blockquote>-->
                                </div>
                                <!--<div class="entry-footer wow fadeInUp">
                                    <div class="tag-links">
                                        <h6>Popular Tags</h6>
                                        <a href="#">Gardening</a>
                                        <a href="#">Landscape</a>
                                        <a href="#">Plants</a>
                                    </div>
                                    <div class="social-share">
                                        <h6>Share:</h6>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>-->
                            </div>
                            <!--===  Post Author Box  ===-->
                            <div class="post-author-box d-flex pb-60 mb-60 wow fadeInUp">
                                <div class="author-thumb">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog/author-2.jpg" alt="post author">
                                </div>
                                <div class="author-content">
                                    <h5>Mera Farmhouse</h5>
                                    <span class="position">Author</span>
                                    <p>
                                        Mera Farmhouse connects manufacturers and dealers with each other globally and aims at improving the 
                                        economic stability of the farmers through transparency in agriculture related products.
                                    </p>
                                    <ul class="social-link">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--===  Post Navigation  ===-->
                            <div class="post-navigation-item pb-15 mb-55 wow fadeInUp">
                                <div class="prev-post post-nav-item d-flex mb-30">
                                    <div class="thumb">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog/prev-post.jpg" alt="Post Thumb">
                                    </div>
                                    <div class="content">
                                        <span class="post-date"><a href="blogs/20230501/2.html">01 May 2023</a></span>
                                        <h6><a href="blogs/20230501/2.html">Sample Blog Title</a></h6>
                                    </div>
                                </div>
                                <div class="next-post post-nav-item d-flex mb-30">
                                    <div class="thumb">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog/next-post.jpg" alt="Post Thumb">
                                    </div>
                                    <div class="content">
                                        <span class="post-date"><a href="blogs/20230502/2.html">02 May 2023</a></span>
                                        <h6><a href="blogs/20230502/2.html">Sample Blog Title</a></h6>
                                    </div>
                                </div>               
                            </div>
                            <!--===  Comments Area  ===-->
                            <!--<div class="comments-area mb-80 wow fadeInUp">
                                <h3 class="comments-title mb-40">Popular Comments</h3>
                                <ul class="comments-list">
                                    <li class="comment mb-40">
                                        <div class="comment-avatar">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog/comment-1.jpg" alt="comment author">
                                        </div>
                                        <div class="comment-wrap">
                                            <div class="comment-author-content">
                                                <span class="author-name">Jonathan M. Dickinson<span class="date">September 25, 2022</span></span>
                                                <p>Nov ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque
                                                    laudantium, totam rem aperiam quae abillo inventore veritatis</p>
                                                <a href="#" class="btn-link">Reply<i class="far fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="comment mb-40">
                                        <div class="comment-avatar">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog/comment-2.jpg" alt="comment author">
                                        </div>
                                        <div class="comment-wrap">
                                            <div class="comment-author-content">
                                                <span class="author-name">Michael C. Paille<span class="date">September 25, 2022</span></span>
                                                <p>Nov ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque
                                                    laudantium, totam rem aperiam quae abillo inventore veritatis</p>
                                                <a href="#" class="btn-link">Reply<i class="far fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="comment mb-40">
                                        <div class="comment-avatar">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog/comment-3.jpg" alt="comment author">
                                        </div>
                                        <div class="comment-wrap">
                                            <div class="comment-author-content">
                                                <span class="author-name">Michael C. Paille<span class="date">September 25, 2022</span></span>
                                                <p>Nov ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque
                                                    laudantium, totam rem aperiam quae abillo inventore veritatis</p>
                                                <a href="#" class="btn-link">Reply<i class="far fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>-->
                            <!--===  Comments Form  ===-->
                            <!--<div class="comments-respond mb-35 wow fadeInUp">
                                <h3 class="comments-heading">Leave a Comments</h3>
                                <p>Send us your valuable feedback about our services</p>
                                <form class="comment-form">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Name *" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="email" class="form_control" placeholder="Email *" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <textarea name="message" class="form_control" cols="30" placeholder="Comments"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <button class="main-btn primary-btn">Send comments</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <!--=== Sidebar widget Area ===-->
                        <div class="sidebar-widget-area">
                            <!--=== Search Widget ===-->
                            <!--<div class="sidebar-widget widget-search gray-bg mb-40 wow fadeInUp">
                                <h4 class="widget-title">Search</h4>
                                <form>
                                    <div class="form_group">
                                        <label><i class="far fa-search"></i></label>
                                        <input type="text" class="form_control" placeholder="Search" name="search" required>
                                    </div>
                                </form>
                            </div>-->
                            <!--=== Author Widget ===-->
                            <div class="sidebar-widget widget-post-author mb-40 wow fadeInUp">
                                <div class="author-img">
                                    <!-- TODO : Add Nikhil's Image Here-->
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog/author-1.jpg" alt="Nikhil Garg Profile Image">
                                </div>
                                <div class="author-content text-center">
                                    <div class="author-title-box">
                                        <h4>Nikhil Garg</h4>
                                        <span class="posiiton">CEO & Founder</span>
                                    </div>
                                    <p>Mera Farmhouse connects manufacturers and dealers with each other globally and aims at improving the 
                                        economic stability of the farmers through transparency in agriculture related products.</p>
                                    <ul class="social-link">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <!--<li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>-->
                                    </ul>
                                </div>
                            </div>
                            <!--=== Category Widget ===-->
                            <!--<div class="sidebar-widget widget-category gray-bg mb-40 wow fadeInUp">
                                <h4 class="widget-title">Category</h4>
                                <ul>
                                    <li><a href="#">Yard Cleaning<i class="far fa-angle-double-right"></i></a></li>
                                    <li><a href="#">Garden Makeup<i class="far fa-angle-double-right"></i></a></li>
                                    <li><a href="#">Landscaping<i class="far fa-angle-double-right"></i></a></li>
                                    <li><a href="#">Lawn Mowing<i class="far fa-angle-double-right"></i></a></li>
                                    <li><a href="#">Decorative Plants<i class="far fa-angle-double-right"></i></a></li>
                                    <li><a href="#">Yard Maintenance<i class="far fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>-->
                            <!--=== Recent Post Widget ===-->
                            <div class="sidebar-widget widget-recent-post mb-40 wow fadeInUp">
                                <h4 class="widget-title">Recent News</h4>
                                <ul class="recent-post-list">
                                    <li class="post-thumbnail-content">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog/post-thumb-1.jpg" alt="New Subsidy Launched">
                                        <div class="post-title-date">
                                            <span class="posted-on"><a href="news/20230430/1.html">30 Apr 2023</a></span>
                                            <h6><a href="news/20230430/1.html">New Subsidy Launched!</a></h6>
                                        </div>
                                    </li>
                                    <li class="post-thumbnail-content">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog/post-thumb-2.jpg" alt="How to grow Elaichi">
                                        <div class="post-title-date">
                                            <span class="posted-on"><a href="news/20230501/1.html">01 May 2023</a></span>
                                            <h6><a href=news/20230501/1.html">How to grow Elaichi?</a></h6>
                                        </div>
                                    </li>
                                    <li class="post-thumbnail-content">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog/post-thumb-3.jpg" alt="Know your farm's health">
                                        <div class="post-title-date">
                                            <span class="posted-on"><a href="news/20230501/2.html">01 May 2023</a></span>
                                            <h6><a href="news/20230501/2.html">Know your farm's health!</a></h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--=== Banner Widget ===-->
                            <div class="sidebar-widget widget-banner mb-40 wow fadeInUp">
                                <div class="banner-content text-white">
                                    <h3 class="title">Looking For 
                                        Tools & Machinery!</h3>
                                    <p>You’re in right place</p>
                                    <a href="contact.html" class="main-btn secondary-btn">Contact Us</a>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/7.jpg" alt="Banner Image">
                                </div>
                            </div>
                            <!--=== Tag Widget ===-->
                            <div class="sidebar-widget widget-tag-cloud mb-40 wow fadeInUp">
                                <h4 class="widget-title">Tags</h4>
                                <a href="#">Organic Farming</a>
                                <a href="#">Subsidiy</a>
                                <a href="#">Leguminous Crops</a>
                                <a href="#">Belarus Tractor</a>
                                <a href="#">Animal Husbandary</a>
                                <a href="#">Farm Setup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Blog Details section ======-->
        <!--====== Start Partners Section ======-->
        <!--<section class="partners-section">
            <div class="container">-->
                <!--=== Partners Slider ===-->
                <!--<div class="partner-slider-one pt-80 pb-70 border-top-1">
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/partner-1.png" alt="Partner Image"></a>
                        </div>
                    </div>
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/partner-2.png" alt="Partner Image"></a>
                        </div>
                    </div>
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/partner-3.png" alt="Partner Image"></a>
                        </div>
                    </div>
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/partner-4.png" alt="Partner Image"></a>
                        </div>
                    </div>
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/partner-5.png" alt="Partner Image"></a>
                        </div>
                    </div>
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/partner-4.png" alt="Partner Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>--><!--====== End Partners Section ======-->
        <!--====== Start Footer ======-->
        <footer class="footer-area text-white main-bg">
            <div class="shape shape-one animate-float-y"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape/tree.png" alt="Tree Image"></span></div>
            <div class="shape shape-two animate-float-y"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape/tree2.png" alt="Tree Image"></span></div>
            <div class="container">
                <!--====== Footer Widget ======-->
                <div class="footer-widget-area pt-80 pb-40">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <!--====== Footer Widget ======-->
                            <div class="footer-widget footer-about-widget mb-40 pr-lg-70 wow fadeInUp">
                                <div class="widget-content">
                                    <div class="footer-logo mb-25">
                                        <a href="index.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/logo.png" alt="Logo"></a>
                                    </div>
                                    <p>Mera Farmhouse connects manufacturers and dealers with each other globally and aims at improving the 
                                        economic stability of the farmers through transparency in agriculture related products. </p>
                                    <a href="contact.html" class="main-btn filled-btn filled-white">Contact</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!--====== Footer Widget ======-->
                            <div class="footer-widget contact-info-widget mb-40 wow fadeInDown">
                                <h4 class="widget-title">Get In Touch</h4>
                                <div class="widget-content">
                                    <ul class="info-list">
                                        <li>Plot 379, Industrial Area, Phase II,
                                            Chandigarh-160002, India</li>
                                        <li><a href="mailto:info@merafarmhouse.com">info@merafarmhouse.com</a></li>
                                        <li><a href="tel:+919875968172">+91-987-596-8172</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <!--====== Footer Widget ======-->
                            <div class="footer-widget footer-nav-widget mb-40 wow fadeInUp">
                                <h4 class="widget-title">Quick Link</h4>
                                <div class="widget-content">
                                    <ul class="footer-nav">
                                        <!-- TODO : Add the Links to these pages-->
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Our Services</a></li>
                                        <li><a href="#">Blogs</a></li>
                                        <li><a href="#">Solutions</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-widget footer-nav-widget mb-40 wow fadeInUp">
                                <a href="#" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/play.png" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!--====== Footer Widget ======-->
                            <div class="footer-widget footer-gallery-widget float-lg-right mb-40 wow fadeInUp">
                                <h4 class="widget-title">Gallery</h4>
                                <div class="widget-content">
                                    <ul class="gallery-list">
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/1.jpg" alt="Image">
                                                <div class="hover-overlay">
                                                    <i class="fas fa-arrow-right"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/2.jpg" alt="Image">
                                                <div class="hover-overlay">
                                                    <i class="fas fa-arrow-right"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/4.jpg" alt="Image">
                                                <div class="hover-overlay">
                                                    <i class="fas fa-arrow-right"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/5.jpg" alt="Image">
                                                <div class="hover-overlay">
                                                    <i class="fas fa-arrow-right"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/6.jpg" alt="Image">
                                                <div class="hover-overlay">
                                                    <i class="fas fa-arrow-right"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/8.jpg" alt="Image">
                                                <div class="hover-overlay">
                                                    <i class="fas fa-arrow-right"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=== Copyright Area ===-->
                <div class="copyright-area">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--====== Copyright Text ======-->
                            <div class="copyright-text">
                                <P>Copy&copy; 2023 Mera Farmhouse. All Rights Reserved.</P>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--====== Copyright Nav ======-->
                            <div class="copyright-nav float-lg-right">
                                <ul>
                                    <!-- TODO : Add the Links here-->
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--====== End Footer ======-->
        <!--====== Back To Top  ======-->
        <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/jquery-3.6.0.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/popper/popper.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--====== Slick js ======-->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/slick/slick.min.js"></script>
        <!--====== Magnific js ======-->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
        <!--====== Isotope js ======-->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/isotope.min.js"></script>
        <!--====== Imagesloaded js ======-->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/imagesloaded.min.js"></script>
        <!--====== Counterup js ======-->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/jquery.counterup.min.js"></script>
        <!--====== Waypoints js ======-->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/jquery.waypoints.js"></script>
        <!--====== Nice-select js ======-->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
        <!--====== jquery UI js ======-->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/jquery-ui/jquery-ui.min.js"></script>
        <!--====== WOW js ======-->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/wow.min.js"></script>
        <!--====== Main js ======-->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/theme.js"></script>
    <?php
    get_footer('custom')
        ?>
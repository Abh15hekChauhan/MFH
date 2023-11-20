<?php
/*
Template Name: Custom Home Page
*/
get_header('home'); ?>

<section class="banner-section">
    <!--=== Hero Wrapper ===-->
    <div class="hero-wrapper-one gray-bg">
        <div class="shape shape-one animate-float-y"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero/shape-1.png" alt="shape"></span>
        </div>
        <div class="shape shape-two animate-float-x"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero/shape-2.png" alt="shape"></span>
        </div>
        <div class="shape shape-three animate-float-x"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero/shape-3.png"
                    alt="shape"></span></div>
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-xl-6 col-lg-12">
                    <!--=== Hero Content ===-->
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">
                            Cohesive Agricultural Ecosystem for Farmers
                        </h1>
                        <p class="wow fadeInDown" data-wow-delay=".6s">Think Global not Local</p>
                        <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">
                            <a href="about.php" class="main-btn golden-btn mb-10">Explore More</a>
                            <a href="solution.php" class="main-btn filled-btn mb-10">How It Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <!--=== Hero Image Box ===-->
                    <div class="hero-image-box d-xl-block d-none wow fadeInRight" data-wow-delay=".75s">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ship2.jpg" alt="Hero Image">
                        <div class="shape hero-svg">
                            <svg width="237" height="569" viewBox="0 0 237 569" fill="none">
                                <path
                                    d="M0.552583 568.307L1.99989 0.226473C1.99989 0.226473 237.025 -9.37181 236.276 284.731C235.527 578.834 0.552583 568.307 0.552583 568.307Z"
                                    fill="#F1D2A9" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Banner Section ======-->
<!--====== Start Features Section ======-->
<section class="features-section-two p-r z-1">
    <!--=== Features Wrapper ===-->
    <div class="features-wrapper-two main-bg wow fadeInDown">
        <div class="shape shape-one"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape/leaf-5.png" alt="Leaf"></span></div>
        <div class="shape shape-two"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape/leaf-5.png" alt="Leaf"></span></div>
        <div class="shape shape-three"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape/leaf-5.png" alt="Leaf"></span></div>
        <div class="features-area pb-30">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!--=== Features Item ===-->
                    <div class="single-features-item-two mb-40 wow fadeInUp">
                        <div class="text">
                            <div class="icon">
                                <i class="fl-icon flaticon-watering-plants"></i>
                                <a href="services.php" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <!-- TODO : Add the icon image -->
                            <h5 class="title">Soil Testing</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!--=== Features Item ===-->
                    <div class="single-features-item-two mb-40 wow fadeInDown">
                        <div class="text">
                            <div class="icon">
                                <i class="fl-icon flaticon-watering-plants"></i>
                                <a href="services.php" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <!-- TODO : Add the icon image -->
                            <h5 class="title">Geospatial Analysis</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!--=== Features Item ===-->
                    <div class="single-features-item-two mb-40 wow fadeInUp">
                        <div class="text">
                            <div class="icon">
                                <i class="fl-icon flaticon-watering-plants"></i>
                                <a href="services.php" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <!-- TODO : Add the icon image -->
                            <h5 class="title">Animal & Crop Farm Setup</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=== Counter Area ===-->
        <div class="counter-area">
            <div class="row pt-70">
                <div class="col-lg-3 col-sm-6">
                    <!--=== Counter Item ===-->
                    <div class="single-counter-item-two mb-30 wow fadeInDown">
                        <div class="inner-counter">
                            <div class="icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <h2 class="number"><span class="count">5000</span></h2>
                            <p>Farmers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!--=== Counter Item ===-->
                    <div class="single-counter-item-two mb-30 wow fadeInUp">
                        <div class="inner-counter">
                            <div class="icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <h2 class="number"><span class="count">500</span></h2>
                            <p>FPOs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!--=== Counter Item ===-->
                    <div class="single-counter-item-two mb-30 wow fadeInDown">
                        <div class="inner-counter">
                            <div class="icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <h2 class="number"><span class="count">3000</span>+</h2>
                            <p>Agri-Products</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!--=== Counter Item ===-->
                    <div class="single-counter-item-two mb-30 wow fadeInUp">
                        <div class="inner-counter">
                            <div class="icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <h2 class="number"><span class="count">300</span>+</h2>
                            <p>Crops & Animals Information</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--====== End Features Section ======-->

<!--====== Start About Section ======-->
<section class="about-section">
    <div class="container-fluid">
        <!--=== About Wrapper ===-->
        <div class="about-wrapper gray-bg wow fadeInUp">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-xl-5 col-lg-12">
                        <!--=== About Image Box ===-->
                        <div class="about-two_image-box wow fadeInLeft">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tractor2.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12">
                        <!--=== About Content Box ===-->
                        <div class="about-three_content-box pl-lg-70 wow fadeInRight">
                            <!--=== Section Title ===-->
                            <div class="section-title mb-25 wow fadeInUp">
                                <span class="sub-title"><i class="flaticon-plant"></i>About Mera Farmhouse</span>
                                <h2>Custom AI Recommendations for your farms</h2>
                            </div>
                            <p class="mb-40 wow fadeInDown">
                                Mera farmhouse aims to transform agriculture and its allied fields with the latest
                                Artificial Intelligence technology for sustained and developed farming.
                                It plans in making farming easy and affordable to farmers along with making high
                                profits.
                            </p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!--=== Fancy About Item ===-->
                                    <div class="fancy-about-item mb-40 wow fadeInUp">
                                        <div class="text">
                                            <h5><i class="far fa-angle-double-right"></i>Ecommerce</h5>
                                            <p>MFH Farmer app connects farmers with suppliers of
                                                agricultural products and services.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!--=== Fancy About Item ===-->
                                    <div class="fancy-about-item mb-40 wow fadeInDown">
                                        <div class="text">
                                            <h5><i class="far fa-angle-double-right"></i>Agri-Experts</h5>
                                            <p> A wide network of agricultural advisors helps
                                                farmers to understand the nutritional needs of land to grow crops.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!--=== Fancy About Item ===-->
                                    <div class="fancy-about-item mb-40 wow fadeInUp">
                                        <div class="text">
                                            <h5><i class="far fa-angle-double-right"></i>Animal Care</h5>
                                            <p>Livestock experts helping farmers knowing
                                                their proper vaccine schedule, disease and their cure. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!--=== Fancy About Item ===-->
                                    <div class="fancy-about-item mb-40 wow fadeInUp">
                                        <div class="text">
                                            <h5><i class="far fa-angle-double-right"></i>Farm Setup</h5>
                                            <p>Helps farmers plan their crop farm and livestock farm economically.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!--=== Fancy About Item ===-->
                                    <div class="fancy-about-item mb-40 wow fadeInUp">
                                        <div class="text">
                                            <h5><i class="far fa-angle-double-right"></i>Geospatial Analysis</h5>
                                            <p>With help of Artificial Intelligence and satellite images,
                                                farmer can plan and examine their crop health.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!--=== Fancy About Item ===-->
                                    <div class="fancy-about-item mb-40 wow fadeInUp">
                                        <div class="text">
                                            <h5><i class="far fa-angle-double-right"></i>Subsidy Eligibility</h5>
                                            <p>Helps farmers knowing their subsidy eligibility on available machinery.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End About Section ======-->
<!--====== Start Services Section ======-->
<section class="service-section pt-100 pb-20 text-black main-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title text-center text-white mb-100 wow fadeInDown">
                    <span class="sub-title"><i class="flaticon-plant"></i>Our Services</span>
                    <h2>We help Farmers plan and execute their farms efficiently</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-service-item-two mb-80 wow fadeInDown" data-wow-delay=".2s">
                    <div class="icon">
                        <i class="flaticon-scissors"></i>
                    </div>
                    <div class="text">
                        <h4 class="title"><a href="services.php">Soil Testing</a></h4>
                        <p>Quick Soil Testings reveal its nutritional content</p>
                        <a href="services.php" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-service-item-two mb-80 wow fadeInUp" data-wow-delay=".25s">
                    <div class="icon">
                        <i class="flaticon-watering"></i>
                    </div>
                    <div class="text">
                        <h4 class="title"><a href="services.php">Geospatial Analysis</a></h4>
                        <p>Satelltie Images detect crop health</p>
                        <a href="services.php" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-service-item-two mb-80 wow fadeInDown" data-wow-delay=".3s">
                    <div class="icon">
                        <i class="flaticon-yard"></i>
                    </div>
                    <div class="text">
                        <h4 class="title"><a href="services.php">Farm Planning</a></h4>
                        <p>Plan your farm for the next season and get recommendations</p>
                        <a href="services.php" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-service-item-two mb-80 wow fadeInUp" data-wow-delay=".35s">
                    <div class="icon">
                        <i class="flaticon-growing"></i>
                    </div>
                    <div class="text">
                        <h4 class="title"><a href="services.php">Subsidy Check</a></h4>
                        <p>Find Machinery Subsidies you are eligible for</p>
                        <a href="services.php" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Services Section ======-->
<!--====== Start Project Section ======-->
<!--------------------------------------------------------------------------------------------------->
<!--=== Author Widget ===-->
<div class="d-flex row col-md-12 author-section justify-content-around mt-5 mx-0">
    <div class="sidebar-widget-area px-5 px-xl-0 d-flex justify-content-center">
        <div class="sidebar-widget widget-post-author mb-40 wow fadeInUp">
            <div class="author-img">
                <!-- TODO : Add Pawan Mangla Image Here-->
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets\images/pawan.jpeg" alt="Pawan Mangla Profile Image">
            </div>
            <div class="author-content text-center">
                <div class="author-title-box">
                    <h4>Pawan Mangla</h4>
                    <span class="posiiton">
                        Managing Director & Co
                        -Founder</span>
                </div>
                <p style="text-align: justify;">I started my journey from a small town of PUNJAB ‘MAUR MANDI’ with a
                    very humble background to reach my present level as the Owner of M/s. Bhagwati Steel Sales
                    –Distributor of TATA Steel serving the industry which mainly manufacturer Agriculture equipment for
                    My Farmer brothers.
                    During this journey from a small town with agriculture surroundings, the only character or word
                    which left a strong impression on my mind was a ‘Farmer’. His hardships, innocence trusty and caring
                    nature left a deep & and lasting impression on me.
                    MERA FARM HOUSE is an expression of that impression. It is a sincere effort on my part to ease the
                    life of a farmer and give him a profitable platform to meet his agricultural needs.
                    MERA FARM HOUSE is an interface between Farmers, Agriculture researchers, Farm Equipment
                    manufacturers, Advisors on More You Know - More You Grow,
                </p>
                <p><b><a class="team-img" href="pawansir" target="_blank">Read more...</a></b></p>

            </div>
        </div>
    </div>
    <div class="sidebar-widget-area px-5 px-xl-0 d-flex justify-content-center">
        <div class="sidebar-widget widget-post-author mb-40 wow fadeInUp">
            <div class="author-img">
                <!-- TODO : Add Nikhil's Image Here-->
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/nikhil sir.jpg" alt="Nikhil Garg Profile Image" class="nikli">
            </div>
            <div class="author-content text-center">
                <div class="author-title-box">
                    <h4>Nikhil Garg</h4>
                    <span class="posiiton">CEO & Co-Founder</span>
                </div>
                <p style="text-align: justify;">Being from a family deeply connected with farmers , I grew up feeling
                    their hustle and problems
                    which connects me with Farmers so well. The problems connected with farming are deep rooted and
                    need advancements in many areas to make it a better platform to earn and motivate youth to choose
                    agriculture as their profession. With deep study of 3 years knowing the psychology of farmers and
                    problems associated with current farming , I decided to transform the idea or vision of farming to
                    a new sustained developed position. Day to day interaction with farmers helps adding up to scaling
                    more transparency of their thoughts and vision related to farming. It is not easy to make farmer
                    abandon with primitive methods of agriculture and enter into new phase, but with time and technology
                    it can be made easy , reliable , cost efficient to farmers . </p>
                <p><b><a class="team-img" href="nikhilsir" target="_blank">Read more...</a></b></p>
            </div>
        </div>
    </div>
    <div class="sidebar-widget-area px-5 px-xl-0 d-flex justify-content-center">
        <div class="sidebar-widget widget-post-author mb-40 wow fadeInUp">
            <div class="author-img">
                <!-- TODO : Add Nikhil's Image Here-->
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/varshney.jpeg" alt="Nikhil Garg Profile Image">
            </div>
            <div class="author-content text-center">
                <div class="author-title-box">
                    <h4>Prof. A.C Varshney</h4>
                    <span class="posiiton">Executive Director </span>
                </div>
                <p style="text-align: justify;">
                    Prof. AC Varshney, Former Vice-Chancellor DUVASU, Mathura, UP and Former Dean CAU, Aizwal,
                    Mizoram and CSKHPKV, Palampur, HP has worked in the livestock field for years. He always
                    wants to revolutionise the agricultural landscape then he met Mr. Pawan Mangla, Chairman,
                    MFH. After 2 to 3 meetings, he came to know about the project idea of Mr. Mangla of creating
                    a platform that provides reliable and transparent information to farmers and he found that
                    it was the best way to contribute to the farmer society. He advised to add livestock information
                    to the portal Mera Farmhouse to empower farmers as he earlier came across farmers who are not
                    aware of the latest advancements in veterinary science, livestock management, and dairy
                    farming machinery.He thought that this is the best way that can help in prosperity and
                    the sustainable growth of the agricultural sector. </p>
                <p><b><a class="team-img" href="varshny-sir" target="_blank">Read more...</a></b></p>

            </div>
        </div>
    </div>
</div>

</section><!--====== End Project Section ======-->
<!--====== Start Team Section ======-->
<section class="team-section pt-95 pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-50 wow fadeInDown">
                    <span class="sub-title"><i class="flaticon-plant"></i>Mentors</span>
                    <h2>Know about our Mentors & Experts</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <!--====== Single Team Item ======-->
                <div class="single-team-item-two mb-40 wow fadeInDown" data-wow-delay=".2s">
                    <div class="member-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/rajinder.jpg" alt="Team Image">

                    </div>
                    <div class="member-info text-center">
                        <h4 class="title"><a href="mentors.php">Dr. Rajendra</a></h4>
                        <p>Soil Scientist, KVK Ambala, Haryana</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <!--====== Single Team Item ======-->
                <div class="single-team-item-two mb-40 wow fadeInUp" data-wow-delay=".25s">
                    <div class="member-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/jaspreet.jpg" alt="Team Image">

                    </div>
                    <div class="member-info text-center">
                        <h4 class="title"><a href="mentors.php">S. Jaspreet Singh</a></h4>
                        <p>Crop & Soil Health Expert</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <!--====== Single Team Item ======-->
                <div class="single-team-item-two mb-40 wow fadeInDown" data-wow-delay=".3s">
                    <div class="member-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/vikas.jpg" alt="Team Image">

                    </div>
                    <div class="member-info text-center">
                        <h4 class="title"><a href="mentors.php">Dr. Vishwas Vikas</a></h4>
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

<!--====== Start Project Section ======-->
<section class="project-section">
    <div class="container-fluid">
        <!--====== Project Slider ======-->
        <div class="projects-slider-four wow fadeInUp" data-wow-delay=".2s">
            <!--====== Project Item ======-->
            <div class="single-project-item-four">
                <div class="project-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/2.jpeg" alt="Project Image">
                </div>
            </div>
            <!--====== Project Item ======-->
            <div class="single-project-item-four">
                <div class="project-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/5.jpeg" alt="Project Image">
                </div>
            </div>
            <!--====== Project Item ======-->
            <div class="single-project-item-four">
                <div class="project-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/7.jpeg" alt="Project Image">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer('custom'); ?>
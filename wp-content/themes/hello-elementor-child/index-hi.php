<?php
/*
Template Name: Custom index-hi Page
*/
get_header('custom-hi'); 
 
 ?>
 <!--====== Start Banner Section ======-->
        <section class="banner-section">
            <!--=== Hero Wrapper ===-->
            <div class="hero-wrapper-one gray-bg">
                <div class="shape shape-one animate-float-y"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>\assets/images/hero/shape-1.png" alt="आकार"></span></div>
                <div class="shape shape-two animate-float-x"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>\assets/images/hero/shape-2.png" alt="आकार"></span></div>
                <div class="shape shape-three animate-float-x"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>\assets/images/hero/shape-3.png" alt="आकार"></span></div>
                <div class="container">
                    <div class="row align-items-lg-center">
                        <div class="col-xl-6 col-lg-12">
                            <!--=== Hero Content ===-->
                            <div class="hero-content">
                                <h1 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                    किसानों के लिए सामंजस्यपूर्ण कृषि पारिस्थितिकी तंत्र
                                </h1>
                                <p class="wow fadeInDown" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInDown;">लोकल नहीं ग्लोबल सोचो</p>
                                <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                    <a href="about.html" class="main-btn golden-btn mb-10">और ज्यादा खोजें</a>
                                    <a href="solution.html" class="main-btn filled-btn mb-10">यह कैसे कार्य करता है</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <!--=== Hero Image Box ===-->
                            <div class="hero-image-box d-xl-block d-none wow fadeInRight" data-wow-delay=".75s" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInRight;">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>\assets/images/ship2.jpg" alt="हीरो छवि">
                                <div class="shape hero-svg">
                                    <svg width="237" height="569" viewBox="0 0 237 569" fill="none">
                                    <path d="M0.552583 568.307L1.99989 0.226473C1.99989 0.226473 237.025 -9.37181 236.276 284.731C235.527 578.834 0.552583 568.307 0.552583 568.307Z" fill="#F1D2A9"></path>
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
            <div class="features-wrapper-two main-bg wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                <div class="shape shape-one"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>\assets/images/shape/leaf-5.png" alt="पत्ता"></span></div>
                <div class="shape shape-two"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>\assets/images/shape/leaf-5.png" alt="पत्ता"></span></div>
                <div class="shape shape-three"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>\assets/images/shape/leaf-5.png" alt="पत्ता"></span></div>
                <div class="features-area pb-30">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <!--=== Features Item ===-->
                            <div class="single-features-item-two mb-40 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                <div class="text">
                                    <div class="icon">
                                        <i class="fl-icon flaticon-watering-plants"></i>
                                        <a href="services.html" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                    <!-- TODO : Add the icon image -->
                                    <h5 class="title">मृदा परीक्षण</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <!--=== Features Item ===-->
                            <div class="single-features-item-two mb-40 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                                <div class="text">
                                    <div class="icon">
                                        <i class="fl-icon flaticon-watering-plants"></i>
                                        <a href="services.html" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                    <!-- TODO : Add the icon image -->
                                    <h5 class="title">भू-स्थानिक विश्लेषण</h5>
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <!--=== Features Item ===-->
                            <div class="single-features-item-two mb-40 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                <div class="text">
                                    <div class="icon">
                                        <i class="fl-icon flaticon-watering-plants"></i>
                                        <a href="services.html" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                    <!-- TODO : Add the icon image -->
                                    <h5 class="title">पशु एवं फसल फार्म सेटअप</h5>
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
                            <div class="single-counter-item-two mb-30 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                                <div class="inner-counter">
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <h2 class="number"><span class="count">5000</span></h2>
                                    <p>किसानों</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Counter Item ===-->
                            <div class="single-counter-item-two mb-30 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                <div class="inner-counter">
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <h2 class="number"><span class="count">500</span></h2>
                                    <p>एफपीओ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Counter Item ===-->
                            <div class="single-counter-item-two mb-30 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                                <div class="inner-counter">
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <h2 class="number"><span class="count">3000</span>+</h2>
                                    <p>कृषि उत्पाद</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Counter Item ===-->
                            <div class="single-counter-item-two mb-30 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                <div class="inner-counter">
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <h2 class="number"><span class="count">300</span>+</h2>
                                    <p>फसलें एवं पशुओं की जानकारी</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section><!--====== End Features Section ======-->
        
        <!--====== Start About Section ======-->
        <section class="about-section">
            <div class="container-fluid">
                <!--=== About Wrapper ===-->
                <div class="about-wrapper gray-bg wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="container">
                        <div class="row align-items-xl-center">
                            <div class="col-xl-5 col-lg-12">
                                <!--=== About Image Box ===-->
                                <div class="about-two_image-box wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>\assets/images/tractor2.png" alt="">
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-12">
                                <!--=== About Content Box ===-->
                                <div class="about-three_content-box pl-lg-70 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                    <!--=== Section Title ===-->
                                    <div class="section-title mb-25 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                        <span class="sub-title"><i class="flaticon-plant"></i>मेरा फार्महाउस के बारे में</span>
                                        <h2>आपके खेतों के लिए कस्टम एआई अनुशंसाएँ</h2>
                                    </div>
                                    <p class="mb-40 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                                        मेरा फार्महाउस का लक्ष्य निरंतर और विकसित खेती के लिए नवीनतम आर्टिफिशियल इंटेलिजेंस तकनीक के साथ कृषि और उसके संबद्ध क्षेत्रों को बदलना है। यह उच्च मुनाफा कमाने के साथ-साथ किसानों के लिए खेती को आसान और किफायती बनाने की योजना बना रहा है।  
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!--=== Fancy About Item ===-->
                                            <div class="fancy-about-item mb-40 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="text">
                                                    <h5><i class="far fa-angle-double-right"></i>ई-कॉमर्स</h5>
                                                    <p>एमएफएच फार्मर ऐप किसानों को कृषि उत्पादों और सेवाओं के आपूर्तिकर्ताओं से जोड़ता है।</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <!--=== Fancy About Item ===-->
                                            <div class="fancy-about-item mb-40 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                                                <div class="text">
                                                    <h5><i class="far fa-angle-double-right"></i>कृषि-विशेषज्ञ</h5>
                                                    <p>कृषि सलाहकारों का एक विस्तृत नेटवर्क किसानों को फसल उगाने के लिए भूमि की पोषण संबंधी आवश्यकताओं को समझने में मदद करता है।</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <!--=== Fancy About Item ===-->
                                            <div class="fancy-about-item mb-40 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="text">
                                                    <h5><i class="far fa-angle-double-right"></i>पशु देखभाल</h5>
                                                    <p>पशुधन विशेषज्ञ किसानों को उनके उचित टीकाकरण कार्यक्रम, बीमारी और उनके इलाज के बारे में जानने में मदद कर रहे हैं।</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <!--=== Fancy About Item ===-->
                                            <div class="fancy-about-item mb-40 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="text">
                                                    <h5><i class="far fa-angle-double-right"></i>फार्म सेटअप</h5>
                                                    <p>किसानों को उनके फसल फार्म और पशुधन फार्म की आर्थिक रूप से योजना बनाने में मदद करता है।</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <!--=== Fancy About Item ===-->
                                            <div class="fancy-about-item mb-40 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="text">
                                                    <h5><i class="far fa-angle-double-right"></i>भू-स्थानिक विश्लेषण</h5>
                                                    <p>आर्टिफिशियल इंटेलिजेंस और सैटेलाइट इमेज की मदद से किसान अपनी फसल के स्वास्थ्य की योजना बना सकते हैं और उसकी जांच कर सकते हैं।</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <!--=== Fancy About Item ===-->
                                            <div class="fancy-about-item mb-40 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="text">
                                                    <h5><i class="far fa-angle-double-right"></i>सब्सिडी पात्रता</h5>
                                                    <p>किसानों को उपलब्ध मशीनरी पर उनकी सब्सिडी पात्रता जानने में मदद मिलती है।</p>
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
                        <div class="section-title text-center text-white mb-100 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                            <span class="sub-title"><i class="flaticon-plant"></i>हमारी सेवाएँ</span>
                            <h2>हम किसानों को उनके खेतों की योजना बनाने और उन्हें कुशलतापूर्वक निष्पादित करने में मदद करते हैं</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-service-item-two mb-80 wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
                            <div class="icon">
                                <i class="flaticon-scissors"></i>
                            </div>
                            <div class="text">
                                <h4 class="title"><a href="services.html">मृदा परीक्षण</a></h4>
                                <p>त्वरित मृदा परीक्षण से इसकी पोषण सामग्री का पता चलता है</p>
                                <a href="services.html" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-service-item-two mb-80 wow fadeInUp" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="icon">
                                <i class="flaticon-watering"></i>
                            </div>
                            <div class="text">
                                <h4 class="title"><a href="services.html">भू-स्थानिक विश्लेषण</a></h4>
                                <p>सैटेलाइट छवियाँ फसल के स्वास्थ्य का पता लगाती हैं</p>
                                <a href="services.html" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-service-item-two mb-80 wow fadeInDown" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
                            <div class="icon">
                                <i class="flaticon-yard"></i>
                            </div>
                            <div class="text">
                                <h4 class="title"><a href="services.html">फार्म योजना</a></h4>
                                <p>अगले सीज़न के लिए अपने खेत की योजना बनाएं और अनुशंसाएँ प्राप्त करें</p>
                                <a href="services.html" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-service-item-two mb-80 wow fadeInUp" data-wow-delay=".35s" style="visibility: visible; animation-delay: 0.35s; animation-name: fadeInUp;">
                            <div class="icon">
                                <i class="flaticon-growing"></i>
                            </div>
                            <div class="text">
                                <h4 class="title"><a href="services.html">सब्सिडी जांच</a></h4>
                                <p>वह मशीनरी सब्सिडी ढूंढें जिसके लिए आप पात्र हैं</p>
                                <a href="services.html" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Services Section ======-->
        <!--====== Start Project Section ======-->
 <!--------------------------------------------------------------------------------------------------->       
         <!--=== Author Widget ===-->
        <div class="d-flex row col-md-12 author-section justify-content-around mt-5 mx-0">
            <div class="sidebar-widget-area px-5 px-xl-0 d-flex justify-content-center">
                <div class="sidebar-widget widget-post-author mb-40 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="author-img">
                        <!-- TODO : Add Pawan Mangla Image Here-->
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets\images/pawan.jpeg" alt="पवन मंगला प्रोफ़ाइल छवि">
                    </div>
                    <div class="author-content text-center">
                        <div class="author-title-box">
                            <h4>पवन मंगला</h4>
                            <span class="posiiton">
                                प्रबंध निदेशक</span>
                        </div>
                        <p style="text-align: justify;">मैसर्स के मालिक के रूप में अपने वर्तमान स्तर तक पहुंचने के लिए मैंने एक बहुत ही साधारण पृष्ठभूमि के साथ पंजाब के एक छोटे से शहर 'मौर मंडी' से अपनी यात्रा शुरू की। भगवती स्टील सेल्स-टाटा स्टील के वितरक उद्योग की सेवा करते हैं जो मुख्य रूप से मेरे किसान भाइयों के लिए कृषि उपकरण बनाती है। कृषि परिवेश वाले एक छोटे से शहर से इस यात्रा के दौरान, एकमात्र चरित्र या शब्द जिसने मेरे मन पर गहरी छाप छोड़ी, वह था 'किसान'। उनकी कठिनाइयों, मासूमियत, भरोसेमंदता और देखभाल करने वाले स्वभाव ने मुझ पर गहरी और स्थायी छाप छोड़ी। मेरा फार्म हाउस उसी धारणा की अभिव्यक्ति है। यह एक किसान के जीवन को आसान बनाने और उसे अपनी कृषि जरूरतों को पूरा करने के लिए एक लाभदायक मंच देने का मेरा ईमानदार प्रयास है। 
                          </p>
                                  <p><b><a class="team-img" href="/pawansir" target="_blank">और पढ़ें...</a></b></p>
                        
                    </div>
                </div>
            </div>
            <div class="sidebar-widget-area px-5 px-xl-0 d-flex justify-content-center">
                <div class="sidebar-widget widget-post-author mb-40 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="author-img">
                        <!-- TODO : Add Nikhil's Image Here-->
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets\images\gallery/nikhil sir.jpg" alt="निखिल गर्ग प्रोफ़ाइल छवि" class="nikli">
                    </div>
                    <div class="author-content text-center">
                        <div class="author-title-box">
                            <h4>निखिल गर्ग</h4>
                            <span class="posiiton">सीईओ व संस्थापक</span>
                        </div>
                        <p style="text-align: justify;">किसानों से गहराई से जुड़े परिवार से होने के कारण, मैं उनकी परेशानियों और समस्याओं को महसूस करते हुए बड़ा हुआ हूं, जो मुझे किसानों से अच्छी तरह जोड़ता है। खेती से जुड़ी समस्याएं बहुत गहरी हैं और इसे कमाई का एक बेहतर मंच बनाने और युवाओं को कृषि को अपने पेशे के रूप में चुनने के लिए प्रेरित करने के लिए कई क्षेत्रों में प्रगति की आवश्यकता है। किसानों के मनोविज्ञान और वर्तमान खेती से जुड़ी समस्याओं को जानने के 3 वर्षों के गहन अध्ययन के बाद, मैंने खेती के विचार या दृष्टिकोण को एक नई निरंतर विकसित स्थिति में बदलने का फैसला किया। किसानों के साथ दिन-प्रतिदिन की बातचीत से खेती से संबंधित उनके विचारों और दृष्टिकोण में अधिक पारदर्शिता लाने में मदद मिलती है।</p>
                                  <p><b><a class="team-img" href="/nikhilsir" target="_blank">और पढ़ें...</a></b></p>
                        
                    </div>
                </div>
            </div>
            <div class="sidebar-widget-area px-5 px-xl-0 d-flex justify-content-center">
                <div class="sidebar-widget widget-post-author mb-40 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="author-img">
                        <!-- TODO : Add Nikhil's Image Here-->
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets\images\team/varshney.jpeg" alt="निखिल गर्ग प्रोफ़ाइल छवि">
                    </div>
                    <div class="author-content text-center">
                        <div class="author-title-box">
                            <h4>प्रो एसी वार्ष्णेय</h4>
                            <span class="posiiton">कार्यकारी निदेशक</span>
                        </div>
                        <p style="text-align: justify;">
                            प्रोफेसर एसी वार्ष्णेय, पूर्व कुलपति डुवासु, मथुरा, यूपी और पूर्व डीन सीएयू, आइजोल, मिजोरम और सीएसकेएचपीकेवी, पालमपुर, एचपी ने वर्षों से पशुधन क्षेत्र में काम किया है। वह हमेशा कृषि परिदृश्य में क्रांति लाना चाहते हैं, तभी उनकी मुलाकात एमएफएच के अध्यक्ष श्री पवन मंगला से हुई। 2 से 3 बैठकों के बाद, उन्हें एक ऐसा मंच बनाने के श्री मंगला के प्रोजेक्ट विचार के बारे में पता चला जो किसानों को विश्वसनीय और पारदर्शी जानकारी प्रदान करता है और उन्होंने पाया कि यह किसान समाज में योगदान करने का सबसे अच्छा तरीका है।</p>
                                  <p><b><a class="team-img" href="/varshny-sir" target="_blank">और पढ़ें...</a></b></p>
                       
                    </div>
                </div>
            </div>
        </div>
 
        <!--====== End Project Section ======-->
        <!--====== Start Team Section ======-->
        <section class="team-section pt-95 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-50 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                            <span class="sub-title"><i class="flaticon-plant"></i>मेंटर्स</span>
                            <h2>हमारे गुरुओं और विशेषज्ञों के बारे में जानें</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <!--====== Single Team Item ======-->
                        <div class="single-team-item-two mb-40 wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
                            <div class="member-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/rajinder.jpg" alt="टीम छवि">
                               
                            </div>
                            <div class="member-info text-center">
                                <h4 class="title"><a href="mentors.html">डॉ. राजेंद्र</a></h4>
                                <p>मृदा वैज्ञानिक, केवीके अम्बाला, हरियाणा</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!--====== Single Team Item ======-->
                        <div class="single-team-item-two mb-40 wow fadeInUp" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="member-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/jaspreet.jpg" alt="टीम छवि">
                                
                            </div>
                            <div class="member-info text-center">
                                <h4 class="title"><a href="mentors.html">एस.जसप्रीत सिंह</a></h4>
                                <p>फसल एवं मृदा स्वास्थ्य विशेषज्ञ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!--====== Single Team Item ======-->
                        <div class="single-team-item-two mb-40 wow fadeInDown" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
                            <div class="member-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/vikas.jpg" alt="टीम छवि">
                                
                            </div>
                            <div class="member-info text-center">
                                <h4 class="title"><a href="mentors.html">डॉ. विश्वास विकास</a></h4>
                                <p>निदेशक संचालन, स्काईनेट</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!--====== Experience Box ======-->
                        <div class="experience-box mt-25 mb-40 text-center wow fadeInUp" data-wow-delay=".35s" style="visibility: visible; animation-delay: 0.35s; animation-name: fadeInUp;">
                            <h2 class="fill-text">10+</h2>
                            <h4>अनुभवी सलाहकार</h4>
                            <a href="mentors.html" class="btn-link">सभी सलाहकार देखें<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Team Section ======-->
        
            <!--====== Start Project Section ======-->
        <section class="project-section">
            <div class="container-fluid">
                <!--====== Project Slider ======-->
                <div class="projects-slider-four wow fadeInUp slick-initialized slick-slider" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!--====== Project Item ======-->
                    
                    <!--====== Project Item ======-->
                    
                    <!--====== Project Item ======-->
                    <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1350px; transform: translate3d(0px, 0px, 0px);"><div class="single-project-item-four slick-slide slick-current slick-active" style="width: 420px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                        <div class="project-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/2.jpeg" alt="प्रोजेक्ट छवि">
                           
                        </div>
                    </div><div class="single-project-item-four slick-slide slick-active" style="width: 420px;" tabindex="0" data-slick-index="1" aria-hidden="false">
                        <div class="project-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/5.jpeg" alt="प्रोजेक्ट छवि">
                            
                        </div>
                    </div><div class="single-project-item-four slick-slide slick-active" style="width: 420px;" tabindex="0" data-slick-index="2" aria-hidden="false">
                        <div class="project-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/7.jpeg" alt="प्रोजेक्ट छवि">
                          
        </div></div></div></div></div></div></section><!--====== End Blog Section ======-->
        <?php get_footer('custom'); ?>
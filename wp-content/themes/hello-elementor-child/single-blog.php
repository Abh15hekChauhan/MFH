<?php
get_header('custom');

// Get the original publish date of the post
$original_publish_date = get_the_date();

// Modify and format the date as desired
$modified_publish_date = date('j F Y', strtotime($original_publish_date));
$blog_details = get_post_meta(get_the_ID(), 'blog-details', true);

?>

<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover"
    style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets//images/gallery/5.jpg);">
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
</section><!--====== End Page-title-area section ======-->

<!-- Blog Details Block -->
<section class="blog_detail_section">
    <div class="container">
        <div class="blog_inner_pannel">
            <div class="review">

            </div>
            <div class="section_title mt-3">
                <h2><?php echo strip_tags(get_the_content());  ?></h2><br>
                <span><?php echo $modified_publish_date; ?></span>
            </div>

            <div class="info">
                <div class="main_img" style="text-align:center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/\images\gallery/GOAT.jpg"
                        alt="project management tool">
                    <p style="font-size: 8pt;"></p>
                </div>
            </div>

            <p class="mt-3"><?php echo esc_html($blog_details); ?>
            </p><br>

            <?php

            $fields = get_post_meta(get_the_ID(), 'faq', true);
            $info_data = get_post_meta(get_the_ID(), 'information', false);

            // echo $custom_field_value;
//             $custom_fields = get_post_custom();
// foreach ($custom_fields as $key => $value) {
//     echo '<p style="color: red;"><strong>' . esc_html($key) . ':</strong> ' . esc_html(implode(', ', $value)) . '</p>';
// }
            
            if ($fields) {
                foreach ($fields as $field) {
                    $question = $field['heading'];
                    $answer = $field['desc'];
                    ?>

                    <strong>
                        <h5>
                            <?php echo $question; ?>
                        </h5>
                    </strong>
                    <p>
                        <?php echo $answer; ?>
                    </p><br>

                    <?php
                }
            }

            if (!empty($info_data)) {
                foreach($info_data as $info_item){
                ?>
                <p><?php echo $info_item; ?></p><br>
                <?php
                }
            }
            ?>
        </div>
    </div>
</section>

<!--====== Back To Top  ======-->
<a href="#" class="back-to-top"><i class="far fa-angle-up"></i></a>
<!--====== Jquery js ======-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets//vendor/jquery-3.6.0.min.js"></script>
<!--====== Bootstrap js ======-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets//vendor/popper/popper.min.js"></script>
<!--====== Bootstrap js ======-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets//vendor/bootstrap/js/bootstrap.min.js"></script>
<!--====== Slick js ======-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets//vendor/slick/slick.min.js"></script>
<!--====== Magnific js ======-->
<script
    src="<?php echo get_stylesheet_directory_uri(); ?>/assets//vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<!--====== Isotope js ======-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets//vendor/isotope.min.js"></script>
<!--====== Imagesloaded js ======-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets//vendor/imagesloaded.min.js"></script>
<!--====== Counterup js ======-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets//vendor/jquery.counterup.min.js"></script>
<!--====== Waypoints js ======-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets//vendor/jquery.waypoints.js"></script>
<!--====== Nice-select js ======-->
<script
    src="<?php echo get_stylesheet_directory_uri(); ?>/assets//vendor/nice-select/js/jquery.nice-select.min.js"></script>
<!--====== jquery UI js ======-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets//vendor/jquery-ui/jquery-ui.min.js"></script>
<!--====== WOW js ======-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets//vendor/wow.min.js"></script>
<!--====== Main js ======-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets//js/theme.js"></script>

<?php
get_footer('custom')
    ?>
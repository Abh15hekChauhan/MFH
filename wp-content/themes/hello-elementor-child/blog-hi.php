<?php
/*
Template Name: Custom blogs-hi Page
*/
get_header('custom-hi');
?>
<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover"
    style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/5.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">ब्लॉग एवं समाचार</h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="/">होम</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">ब्लॉग एवं समाचार</span>
            </div>
        </div>
    </div>
</section><!--====== End Page-title-area section ======-->
<section class="blog-standard-section pt-100 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-standard-wrapper">

                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $blog_args = array(
                        'post_type' => 'blog-hi',
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
                        'paged' => $paged,
                        'orderby' => 'title',
                        'order' => 'ASC',
                        'ignore_sticky_posts' => true, // Add this argument
                    );

                    $query_blog = new WP_Query($blog_args);

                    if ($query_blog->have_posts()):
                        while ($query_blog->have_posts()):
                            $query_blog->the_post();
                            // Your HTML for displaying blog posts
                            // $query_blog->the_post();
                            $title = get_the_title();
                            $author = get_the_author();
                            $description = get_the_content();
                            $image_id = get_post_meta(get_the_ID(), 'featured', true);
                            $image = get_the_post_thumbnail_url(get_the_ID());
                            // $image = preg_replace('/(width|height)="\d*"\s/', '', $image);
                            // Your HTML for each blog post goes here
                            ?>

                            <div class="single-blog-post-three mb-30 wow fadeInUp">
                                <div class="post-thumbnail">
                                    <img src=" <?php echo strip_tags($image); ?>" alt="Post Image">
                                </div>
                                <div class="entry-content">
                                    <h3 class="title"><a href="<?php the_permalink(); ?>">
                                            <?php echo $title; ?>
                                        </a></h3>
                                    <div class="author">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>\assets\images/favicon.ico"
                                            alt="Author Image">
                                        <h6><span>By</span><a href="">
                                                <?php echo $author ?>
                                            </a></h6>
                                    </div>
                                    <p>
                                        <?php echo $description ?>
                                    </p>
                                </div>
                            </div>
                            <?php
                        endwhile;

                        // Pagination for Blog Posts
                        $pagination = paginate_links(array(
                            'total' => $query_blog->max_num_pages,
                            'prev_text' => '<i class="far fa-angle-double-left"></i>',
                            'next_text' => '<i class="far fa-angle-double-right"></i>',
                            'type' => 'array', // Set type as array to get individual items
                        ));

                        if ($pagination) {
                            echo '<ul class="gadden-pagination mb-40 wow fadeInUp text-center">';
                            foreach ($pagination as $page) {
                                echo '<li>' . $page . '</li>';
                            }
                            echo '</ul>';
                        }
                        wp_reset_postdata();
                    else:
                        echo '<p>No blog posts found</p>';
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar-widget-area">
                    <?php
                    $news_args = array(
                        'post_type' => 'recent_news',
                        'post_status' => 'publish',
                        'posts_per_page' => 2,
                        'paged' => $paged,
                        'orderby' => 'title',
                        'order' => 'ASC',
                    );

                    $query_news = new WP_Query($news_args);

                    if ($query_news->have_posts()):
                        while ($query_news->have_posts()):
                            $query_news->the_post();
                            // Your HTML for displaying recent news
                            $query_news->the_post();
                            $title = get_the_title();
                            // Get the original publish date of the post
                            $original_publish_date = get_the_date();

                            // Modify and format the date as desired
                            $modified_publish_date = date('j F Y', strtotime($original_publish_date));

                            // $image_id = get_post_meta(get_the_ID(), 'featured', true);
                            $image = get_the_post_thumbnail(get_the_ID(), 'full');
                            $image = preg_replace('/(width|height)="\d*"\s/', '', $image);
                            ?>

                            <div class="sidebar-widget widget-recent-post mb-40 wow fadeInUp">
                                <h4 class="widget-title">Recent News</h4>
                                <ul class="recent-post-list">
                                    <li class="post-thumbnail-content">
                                        <?php echo $image ?>
                                        <div class="post-title-date">
                                            <span class="posted-on"><a href="news/20230430/1.html">
                                                    <?php echo $modified_publish_date ?>
                                                </a></span>
                                            <h6><a href="/blog/goat-farming/">
                                                    <?php echo $title; ?>
                                                </a></h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <?php
                        endwhile;

                        wp_reset_postdata();
                    else:
                        ?>
                        <div class="sidebar-widget widget-recent-post mb-40 wow fadeInUp">
                           <h4 class="widget-title">कोई ताज़ा समाचार नहीं</h4>
                        </div>
                        <?php
                    endif;
                    ?>
                    <!--=== Banner Widget ===-->
                    <div class="sidebar-widget widget-banner mb-40 wow fadeInUp">
                        <div class="banner-content text-white">
                            <h3 class="title">उपकरण एवं मशीनरी की तलाश में!</h3>
                            <p>आप सही जगह पर हैं</p>
                            <a href="/contact" class="main-btn secondary-btn">संपर्क करें</a>
                            <div class="mt-2"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tractor2.png"
                                    alt="Banner Image"></div>
                        </div>
                    </div>
                    <!--=== Tag Widget ===-->
                    <div class="sidebar-widget widget-tag-cloud mb-40 wow fadeInUp">
                        <h4 class="widget-title">टैग</h4>
                        <a href="#">जैविक खेती</a>
                        <a href="#">सब्सिडी</a>
                        <a href="#">फलीदार फसलें</a>
                        <a href="#">बेलारूस ट्रैक्टर</a>
                        <a href="#">पशुपालन</a>
                        <a href="#">फार्म सेटअप</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--====== Start Partners Section ======-->
<?php get_footer('custom-hi'); ?>
<?php
/*
Template Name: Custom blogs-bi Page
*/
get_header('custom-bi');
?>
<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover"
    style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/5.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">ਬਲੌਗ ਅਤੇ ਖ਼ਬਰਾਂ</h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="/">ਘਰ</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">ਬਲੌਗ ਅਤੇ ਖ਼ਬਰਾਂ</span>
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
                    $paged_bi = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $blog_args_bi = array(
                        'post_type' => 'blog-bi',
                        'post_status' => 'publish',
                        'posts_per_page' => 2,
                        'paged' => $paged_bi,
                        'orderby' => 'title',
                        'order' => 'ASC',
                        'ignore_sticky_posts' => true, // Add this argument
                    );

                    $query_blog_bi = new WP_Query($blog_args_bi);

                    if ($query_blog_bi->have_posts()):
                        while ($query_blog_bi->have_posts()):
                            $query_blog_bi->the_post();
                            // Your HTML for displaying blog posts
                            // $query_blog->the_post();
                            $title_bi = get_the_title();
                            $author_bi = get_the_author();
                            $description_bi = get_the_content();
                            $image_id_bi = get_post_meta(get_the_ID(), 'featured', true);
                            $image_bi = get_the_post_thumbnail_url(get_the_ID());
                            // $image = preg_replace('/(width|height)="\d*"\s/', '', $image);
                            // Your HTML for each blog post goes here
                            ?>

                            <div class="single-blog-post-three mb-30 wow fadeInUp">
                                <div class="post-thumbnail">
                                    <img src=" <?php echo strip_tags($image_bi); ?>" alt="Post Image">
                                </div>
                                <div class="entry-content">
                                    <h3 class="title"><a href="<?php the_permalink(); ?>">
                                            <?php echo $title_bi; ?>
                                        </a></h3>
                                    <div class="author">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>\assets\images/favicon.ico"
                                            alt="Author Image">
                                        <h6><span>By</span><a href="">
                                                <?php echo $author_bi ?>
                                            </a></h6>
                                    </div>
                                    <p>
                                        <?php echo $description_bi ?>
                                    </p>
                                </div>
                            </div>
                            <?php
                        endwhile;

                        // Pagination for Blog Posts
                        $pagination_bi = paginate_links(array(
                            'total' => $query_blog_bi->max_num_pages,
                            'prev_text' => '<i class="far fa-angle-double-left"></i>',
                            'next_text' => '<i class="far fa-angle-double-right"></i>',
                            'type' => 'array', // Set type as array to get individual items
                        ));

                        if ($pagination_bi) {
                            echo '<ul class="gadden-pagination mb-40 wow fadeInUp text-center">';
                            foreach ($pagination_bi as $page_bi) {
                                echo '<li>' . $page_bi . '</li>';
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

                        // Pagination for Recent News
                        // $pagination = paginate_links(array(
                        //     'total' => $query_news->max_num_pages,
                        //     'prev_text' => '<i class="far fa-angle-double-left"></i>',
                        //     'next_text' => '<i class="far fa-angle-double-right"></i>',
                        //     'type' => 'array', // Set type as array to get individual items
                        // ));

                        // if ($pagination) {
                        //     echo '<ul class="gadden-pagination mb-40 wow fadeInUp text-center">';
                        //     foreach ($pagination as $page) {
                        //         echo '<li>' . $page . '</li>';
                        //     }
                        //     echo '</ul>';
                        // }
                        wp_reset_postdata();
                    else:
                        ?>
                        <div class="sidebar-widget widget-recent-post mb-40 wow fadeInUp">
                           <h4 class="widget-title">ਕੋਈ ਤਾਜ਼ਾ ਖਬਰ ਨਹੀਂ</h4>
                        </div>
                        <?php
                    endif;
                    ?>


                    <!--=== Banner Widget ===-->
                    <div class="sidebar-widget widget-banner mb-40 wow fadeInUp">
                        <div class="banner-content text-white">
                            <h3 class="title">ਉਪਕਰਣ ਅਤੇ ਮਸ਼ੀਨਰੀ ਲੱਭ ਰਹੇ ਹੋ!</h3>
                            <p>ਤੁਸੀਂ ਸਹੀ ਥਾਂ 'ਤੇ ਹੋ।</p>
                            <a href="/contact" class="main-btn secondary-btn">ਸੰਪਰਕ ਕਰੋ</a>
                            <div class="mt-2"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tractor2.png"
                                    alt="Banner Image"></div>
                        </div>
                    </div>
                    <!--=== Tag Widget ===-->
                    <div class="sidebar-widget widget-tag-cloud mb-40 wow fadeInUp">
                        <h4 class="widget-title">  ਟੈਗ</h4>
                        <a href="#">ਜੈਵਿਕ ਖੇਤੀ</a>
                        <a href="#">ਸਹਾਇਕ</a>
                        <a href="#">ਫਲੀਦਾਰ ਫਸਲਾਂ</a>
                        <a href="#"> ਬੇਲਾਰੂਸ ਟਰੈਕਟਰ</a>
                        <a href="#">ਪਸ਼ੂ ਪਾਲਣ</a>
                        <a href="#">ਫਾਰਮ ਸੈੱਟਅੱਪ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--====== Start Partners Section ======-->
<?php get_footer('custom-bi'); ?>
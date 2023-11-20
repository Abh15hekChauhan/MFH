<?php
/*
Template Name: Custom Blog&News Page
*/
get_header('custom');

$blog = array(
    'post_type' => 'blog',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC',
);

$query_blog = new WP_Query($blog);

$news = array(
    'post_type' => 'recent_news',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC',
);

$query_news = new WP_Query($news);
// print_r($query_news);

?>
<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery/5.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Blogs & News</h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="/">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Blogs & News</span>
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

                    if ($query_blog->have_posts()):
                        for ($i = 0; $i < $query_blog->post_count; $i++):
                            $query_blog->the_post();
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
                                    <h3 class="title"><a href="<?php the_permalink();?>">
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
                        endfor;
                        wp_reset_postdata();
                    else: ?>
                        <div class="single-blog-post-three mb-30 wow fadeInUp d-flex justify-content-center">
                            <h5>No results</h5>
                        </div>
                        <?php
                    endif;
                    ?>
                    <!-- <ul class="gadden-pagination mb-40 wow fadeInUp text-center">
                        <li><a href="#"><i class="far fa-angle-double-left"></i></a></li>
                        <li><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#"><i class="far fa-angle-double-right"></i></a></li>
                    </ul> -->
                    <div class="pagination mt-5" id="pagination">
                <a id="previousBtn" href="#">&laquo;</a>
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a id="nextBtn" href="#">&raquo;</a>
              </div>

                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar-widget-area">

                    <!-- === Recent Post Widget === -->
                    <?php
                    if ($query_news->have_posts()):
                        for ($i = 0; $i < $query_news->post_count; $i++):
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
                                            <span class="posted-on"><a href="news/20230430/1.html"><?php echo $modified_publish_date ?></a></span>
                                            <h6><a href="/blog/goat-farming/"><?php echo $title; ?></a></h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <?php
                        endfor;
                        wp_reset_postdata();
                    else: ?>
                        <div class="sidebar-widget widget-recent-post mb-40 wow fadeInUp">
                            <h4 class="widget-title">No recent news</h4>
                        </div>
                        <?php
                    endif;
                    ?>


                    <!--=== Banner Widget ===-->
                    <div class="sidebar-widget widget-banner mb-40 wow fadeInUp">
                        <div class="banner-content text-white">
                            <h3 class="title">Looking For
                                Tools & Machinery!</h3>
                            <p>You’re in right place</p>
                            <a href="/contact" class="main-btn secondary-btn">Contact Us</a>
                            <div class="mt-2"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tractor2.png"
                                    alt="Banner Image"></div>
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
</section>
<!-- <script>
  var currentPage = 2; // Current page number
  var pagination = document.getElementById('pagination');
  var links = pagination.getElementsByTagName('a');
  var previousBtn = document.getElementById('previousBtn');
  var nextBtn = document.getElementById('nextBtn');

  // Function to update the pagination links
  function updatePagination() {
    for (var i = 1; i < links.length - 1; i++) {
      links[i].textContent = currentPage + i - 2;
    }
  }

  // Event listener for next button
  nextBtn.addEventListener('click', function(event) {
    currentPage++; // Increment the current page number
    updatePagination(); // Update the pagination links
  });

  // Event listener for previous button
  previousBtn.addEventListener('click', function(event) {
    if (currentPage > 1) {
      currentPage--; // Decrement the current page number if greater than 1
      updatePagination(); // Update the pagination links
    }
  });
</script>  -->

<!--====== Start Partners Section ======-->
<?php get_footer('custom'); ?>
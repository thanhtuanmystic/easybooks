<?php get_header();
setpostview(get_the_id());
?>
<section id="main_single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-content-box">
                    <div class="bredcrumb">Tin tức</div>
                    <div class="seperate-bredcrumb"></div>
                    <div class="single-title">
                        <?php the_title() ?>
                    </div>
                    <div class="single-date">
                        <img srcset="
                    https://easybooks.vn/wp-content/uploads/2024/06/calendar-icon.png 2x
                  " alt="" />
                        <?php echo get_the_date() ?>
                    </div>
                    <div class="single-view">
                        Lượt xem:
                        <?php
                        echo getpostviews(get_the_id());
                        ?>
                    </div>
                    <div class="single-content">
                        <?php the_content() ?>
                    </div>
                </div>
                <div class="related-post">
                    <div class="title">Bài viết liên quan</div>
                    <div class="row gy-5 d-flex align-items-stretch">
                        <?php
                        $categories = get_the_category($post->ID);
                        if ($categories) {
                            $category_ids = array();
                            foreach ($categories as $individual_category)
                                $category_ids[] = $individual_category->term_id;

                            $args = array(
                                'category__in' => $category_ids,
                                'post__not_in' => array($post->ID),
                                'showposts' => 3, // Số bài viết bạn muốn hiển thị.
                                'caller_get_posts' => 1
                            );
                            $my_query = new wp_query($args);
                            if ($my_query->have_posts()) {
                                while ($my_query->have_posts()) {
                                    $my_query->the_post();
                                    ?>
                                    <div class="col-lg-4">
                                        <div class="news-single-box" style="height: 100%">
                                            <a href="<?php the_permalink(); ?>">
                                                <img class="single-image"
                                                    srcset="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?> 2x"
                                                    alt="">
                                            </a>
                                            <div class="post-title">
                                                <?php the_title() ?>
                                            </div>
                                            <div class="post-summery" style="margin-top: auto">
                                                <?php the_excerpt(); ?>

                                            </div>
                                            <div class="post-date">
                                                <img srcset="https://easybooks.vn/wp-content/uploads/2024/06/date-icon.png 2x"
                                                    alt="">
                                                <?php echo get_the_date() ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                echo '</ul>';
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>
<?php get_header() ?>

<section class="main-title">
  <div class="container">
    <div class="main-title-heading">TIN TỨC</div>
    <div class="main-title-sub">
      Cập nhất tin tức mới nhất về kế toán, những thay đổi trong chinh sách, thuế,...
    </div>
  </div>
</section>
<section id="main-news-content">
  <div class="container">
    <div class="news-content-box">
      <div class="row gy-md-5 gy-sm-4">
        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="row gy-5">
            <?php if (have_posts()):
              while (have_posts()):
                the_post();
                ?>
                <div class="col-lg-6">
                  <div class="news-single-box">
                    <a class="single-image" href="<?php the_permalink(); ?>">
                      <img loading="lazy" class="single-avt" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="alt-cate">
                    </a>
                    <div class="post-date">
                      <img srcset="https://easybooks.vn/wp-content/uploads/2024/06/date-icon.png 2x" alt="alt-cate">
                      <?php echo get_the_date(); ?>
                    </div>
                    <div class="post-title">
                     <h3>
                     <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     </h3>
                    </div>
                    <div class="post-summery">
                      <?php the_excerpt(); ?>
                    </div>
                  </div>
                </div>

              <?php endwhile; else: ?>
              <p>Nội dung đang cập nhật</p>
            <?php endif; ?>
          </div>
          <div class="row">
            <div style="display: flex; justify-content: center; width: 100%;">
              <?php if (paginate_links() != '') { ?>
                <div class="quatrang">
                  <?php
                  global $wp_query;
                  $big = 999999999;
                  echo paginate_links(
                    array(
                      'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                      'format' => '?paged=%#%',
                      'prev_text' => __('«'),
                      'next_text' => __('»'),
                      'current' => max(1, get_query_var('paged')),
                      'total' => $wp_query->max_num_pages
                    )
                  );
                  ?>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="news-sidebar">
            <a href="https://dangkydemo.easybooks.vn/" target="_blank">
              <img style="width: 100%"
                srcset="https://easybooks.vn/wp-content/uploads/2024/06/news-col-right-demoesb.png 2x" alt="alt-cate">
            </a>
            <div class="news-search-box">
              <div class="title">Tìm kiếm</div>
              <form action="<?php bloginfo('url'); ?>/" method="GET" role="form">
                <div class="form-group">
                  <input type="text" name="s" class="form-control" id="" placeholder="Từ khóa">
                </div>
              </form>



            </div>
            <div class="news-popular-post">
              <div class="title">Xem nhiều</div>
              <div class="row">
                <div class="popular-box">
                  <?php
                  $categories = get_the_category($post->ID);
                  if ($categories) {
                    $category_ids = array();
                    foreach ($categories as $individual_category)
                      $category_ids[] = $individual_category->term_id;
                    $args = array(
                      'category__in' => $category_ids,
                      'post__not_in' => array($post->ID),
                      'showposts' => 4,
                      'caller_get_posts' => 1
                    );
                    $my_query = new wp_query($args);
                    if ($my_query->have_posts()) {
                      while ($my_query->have_posts()) {
                        $my_query->the_post();
                        ?>
                        <style>
                          .popular-post-box:hover {
                            opacity: 0.8;
                          }
                        </style>
                        <div class="col-lg-12">
                          <a href="<?php the_permalink() ?>">
                          <div class="popular-post-box">
                            <img style="width: 10rem; height: 10rem; border-radius: 0.6rem"
                              srcset="<?php echo get_the_post_thumbnail_url() ?> 2x" alt="alt-cate">
                            <div class="popular-post-info">
                              <div class="popular-post-name">
                                <?php the_title() ?>
                              </div>
                              <div class="popular-post-date">
                                <img srcset="https://easybooks.vn/wp-content/uploads/2024/06/calendar-icon.png 2x" alt="alt-cate">
                                <?php echo get_the_date() ?>
                              </div>
                            </div>
                          </div>
                          </a>
                        </div>
                        <hr>
                        <?php
                      }
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
            <a href="https://easyposs.vn/dang-ky-dung-thu/" target="_blank">
              <img style="width: 100%"
                srcset="https://easybooks.vn/wp-content/uploads/2024/06/news-col-right-demoesp.png 2x" alt="alt-cate">
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php get_footer() ?>
<?php get_header(); ?>

<div class="category">
	<section style="padding: 4rem 0" id="main-news-content">
		<div class="container">
			<div class="news-content-box">
				<div class="row gy-md-5 gy-sm-4">
					<div class="col-lg-8 col-md-12 col-sm-12">
						<div class="row gy-5">
							<?php if (have_posts()): ?>
								<div class="page-header">
									<h1 class="page-title">
										<?php printf('Kết quả tìm kiếm cho: %s', '<span>' . get_search_query() . '</span>'); ?>
									</h1>
								</div>
								<?php
								while (have_posts()):
									the_post();
									?>
									<div class="col-lg-6">
										<div class="news-single-box">
											<a class="single-image" href="<?php the_permalink(); ?>">
												<img class="single-avt"
													src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
													alt="">
											</a>
											<div class="post-date">
												<img srcset="https://easybooks.vn/wp-content/uploads/2024/06/date-icon.png 2x"
													alt="">
												<?php echo get_the_date(); ?>
											</div>
											<div class="post-title">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</div>
											<div class="post-summery">
												<?php the_excerpt(); ?>
											</div>
										</div>
									</div>

								<?php endwhile; ?>
								<style>
									.custom-pagination {
										text-align: center;
										margin: 20px 0;
									}

									.custom-pagination .page-numbers {
										display: inline-block;
										margin: 0 5px;
										padding: 8px 12px;
										border: 1px solid #ddd;
										color: #333;
										text-decoration: none;
										transition: background-color 0.3s;
									}

									.custom-pagination .page-numbers:hover {
										background-color: #f5f5f5;
									}

									.custom-pagination .current {
										background-color: #0073aa;
										color: #fff;
										border-color: #0073aa;
									}

									.custom-pagination .prev.page-numbers,
									.custom-pagination .next.page-numbers {
										font-weight: bold;
									}

									.custom-pagination .page-numbers {
										border-radius: 4px;
									}

									.custom-pagination .page-numbers:hover {
										background-color: #0073aa;
										color: #fff;
									}

									.custom-pagination .current {
										background-color: #d54e21;
										color: #fff;
										border-color: #d54e21;
									}
								</style>

								<div class="custom-pagination">
									<?php
									global $wp_query;

									$big = 999999999; // một số ngẫu nhiên đủ lớn để thay thế
								
									echo paginate_links(
										array(
											'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
											'format' => '?paged=%#%',
											'current' => max(1, get_query_var('paged')),
											'total' => $wp_query->max_num_pages,
											'prev_text' => __('« Trước'),
											'next_text' => __('Sau »'),
										)
									);
									?>
								</div>
							<?php else: ?>
								<p>Nội dung tìm kiếm không tồn tại!</p>
							<?php endif; ?>
						</div>

					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="news-sidebar">
							<a href="https://dangkydemo.easybooks.vn/" target="_blank">
								<img style="width: 100%"
									srcset="https://easybooks.vn/wp-content/uploads/2024/06/news-col-right-demoesb.png 2x"
									alt="">
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
										<div class="col-lg-12">
											<div class="popular-post-box">
												<img srcset="https://easybooks.vn/wp-content/uploads/2024/06/popular-post-img.png 2x"
													alt="">
												<div class="popular-post-info">
													<div class="popular-post-name">
														Our favorite healthy summer hiliday
													</div>
													<div class="popular-post-date">
														<img srcset="https://easybooks.vn/wp-content/uploads/2024/06/calendar-icon.png 2x"
															alt="">
														November 27, 2023
													</div>
												</div>
											</div>
										</div>
										<hr>
										<div class="col-lg-12">
											<div class="popular-post-box">
												<img srcset="https://easybooks.vn/wp-content/uploads/2024/06/popular-post-img.png 2x"
													alt="">
												<div class="popular-post-info">
													<div class="popular-post-name">
														Our favorite healthy summer hiliday
													</div>
													<div class="popular-post-date">
														<img srcset="https://easybooks.vn/wp-content/uploads/2024/06/calendar-icon.png 2x"
															alt="">
														November 27, 2023
													</div>
												</div>
											</div>
										</div>
										<hr>
										<div class="col-lg-12">
											<div class="popular-post-box">
												<img srcset="https://easybooks.vn/wp-content/uploads/2024/06/popular-post-img.png 2x"
													alt="">
												<div class="popular-post-info">
													<div class="popular-post-name">
														Our favorite healthy summer hiliday
													</div>
													<div class="popular-post-date">
														<img srcset="https://easybooks.vn/wp-content/uploads/2024/06/calendar-icon.png 2x"
															alt="">
														November 27, 2023
													</div>
												</div>
											</div>
										</div>
										<hr>
										<div class="col-lg-12">
											<div class="popular-post-box">
												<img srcset="https://easybooks.vn/wp-content/uploads/2024/06/popular-post-img.png 2x"
													alt="">
												<div class="popular-post-info">
													<div class="popular-post-name">
														Our favorite healthy summer hiliday
													</div>
													<div class="popular-post-date">
														<img srcset="https://easybooks.vn/wp-content/uploads/2024/06/calendar-icon.png 2x"
															alt="">
														November 27, 2023
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<a href="https://easyposs.vn/dang-ky-dung-thu/" target="_blank">
								<img style="width: 100%"
									srcset="https://easybooks.vn/wp-content/uploads/2024/06/news-col-right-demoesp.png 2x"
									alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
	</section>

</div>


<?php get_footer(); ?>
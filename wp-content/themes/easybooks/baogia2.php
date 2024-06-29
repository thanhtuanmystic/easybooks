<?php /* Template Name: Báo giá 2 */ ?>

<?php get_header(); ?>
<?php if(have_posts()) :
                            while (have_posts()) : the_post();
                    ?>
<div id="price-easyca">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="price_link">			<a href="https://easybooks.vn/bao-gia/thong-tu-88/">THÔNG TƯ 88</a>             
                    	<a href="https://easybooks.vn/bao-gia/thong-tu-200/">THÔNG TƯ 200</a>
                    	<a href="https://easybooks.vn/bao-gia/thong-tu-133/" class="active">THÔNG TƯ 133</a>
       
</div>
                </div>
                <div class="col-md-8">
                    <div class="slide-price-table">
						<h3>Bản hàng năm (Không giới hạn User)</h3>
                        <?php $dem=0; if( have_rows('danh_sach') ): ?>
                            <?php while( have_rows('danh_sach') ): the_row(); 
						$dem++;
                        ?>
                    	<div class="item">
                                    <h3><?= get_sub_field('tieu_de'); ?></h3>
                                    <p><?= get_sub_field('mo_ta'); ?></p>
                                    <p><span><?= get_sub_field('gia'); ?></span></p>
									<?php if($dem <= 2){ ?>
                                    <a href="#">Mua ngay <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
									<?php } else { ?>
									 <a href="https://dangkydemo.easybooks.vn/">Nhận tư vấn ngay <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
									<?php } ?>
                                </div>
                    
                        <?php endwhile; ?>
                        <?php endif; ?>
                       
                        </div>

                         <div class="description-price">
                        <?php the_content(); ?>
                    </div>
					<div class="slide-price-table">
						<h3>Bản dự án</h3>
                        <?php if( have_rows('danh_sach_2') ): ?>
                            <?php while( have_rows('danh_sach_2') ): the_row(); 
                        ?>
                    	<div class="item">
                                    <h3><?= get_sub_field('tieu_de'); ?></h3>
                                    <p><?= get_sub_field('mo_ta'); ?></p>
                                    <p><span><?= get_sub_field('gia'); ?></span></p>
                                    <a href="#">Mua ngay <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                    
                        <?php endwhile; ?>
                        <?php endif; ?>
                       
                        </div>
                </div>

                <div class="col-md-4">
                    <div class="text">
                        <ul>
                            <?php
                        $data_product = get_field('nd-bao-gia');
                        foreach ($data_product as $key => $value) {
                        ?>
                            <li>
                                <span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                                <p><?= $value['nd']; ?></p>
                            </li>
                            <?php   
                            }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div id="p3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>LIÊN HỆ NGAY, NHÂN VIÊN TƯ VẤN LUÔN</h2>
                    <div class="form-support">
                        <?php echo do_shortcode('[contact-form-7 id="548" title="Form liên hệ 1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile; else : ?>
                        <p>Nội dung đang cập nhật</p>
                    <?php endif; ?>

<?php get_footer(); ?>
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Easybooks
 */

get_header();
?>
<style>
	h1, h1 span {
		font-size: 26px;
		font-weight: bold !important;
	}
	h2, h2 span {
		font-size: 24px;
		font-weight: bold !important;
	}
	h3, h3 span {
		font-size: 20px;
		font-weight: bold !important;
	}
	p {
		font-size: 16px;
	}
	blockquote {
		display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 40px;
/*     margin-inline-end: 40px; */
    padding: 20px 0;
    border-style: solid;
    border-color: #ccc;
    border-width: 0;
    padding-left: 20px;
    padding-right: 8px;
    border-left-width: 5px;
	background: #f8e0b4;
	}
	blockquote p {
		margin: 0;
	}

	.my-custom-class {
        border: none;
        border-radius: 50px;
        transition: 0.3s;
        background-color: rgba(156, 161, 160, 0.3);
        animation: glow 0.8s infinite;
        transition: 0.5s;
        padding: 20px 40px;
        font-size: 24px;
    }

    .my-custom-class span {
        display: block;
        width: 100%;
        height: 100%;
        font-weight: 700;
        margin-right: 0px;
        transition: 0.3s;
    }


    .my-custom-class:hover {
/*         transform: translateX(-20px)rotate(30deg); */
        border-radius: 5px;
         background-color: orange;
        transition: 0.5s;
		cursor: pointer;
    }

    @keyframes glow {
        0% {
            box-shadow: 5px 5px 20px orange, -5px -5px 20px orange;
        }

        50% {
            box-shadow: 5px 5px 20px rgb(81, 224, 210), -5px -5px 20px rgb(81, 224, 210)
        }

        100% {
            box-shadow: 5px 5px 20px orange, -5px -5px 20px orange
        }
    }
	.new-detail strong  {
		font-weight: bold;
		font-size: inherit;
	}
</style>

    <section class="container-fluid" id="mycontent">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <div class="new-detail">
                        <?php if (have_posts()) :
                            while (have_posts()) : the_post();
                                ?>
                                <?php the_content(); ?>
                            <?php endwhile; else : ?>
                            <p>Nội dung đang cập nhật</p>
                        <?php endif; ?>
                    </div>
                </div>


                <div class="col-md-4 col-lg-4">
                    <a href="http://dangkydemo.easybooks.vn/" target="_blank">
                        <img src="https://easybooks.vn/wp-content/uploads/2023/08/ANH-2-01.jpg" width="100%">
                    </a>
                    <div class="highlight-box">
                        <div class="header">
                            <h3  class="title-right">BÀI VIẾT CHỌN LỌC</h3>
                        </div>

                        <div class="content">
                            <div class="container">
                                <div class="row">
                                    <?php
                                    $categories = get_the_category($post->ID);
                                    if ($categories) {
                                        $category_ids = array();
                                        foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;

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
                                                <div class="sidebar-article-1 col-6">
                                                    <div class="thumbnail-wrapper">
                                                        <a style="color: #000; text-decoration:none" href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post_id, 'full', array('class' => 'w100')); ?></a>


                                                    </div>
                                                    <div class="content">
                                                        <a href="<?php the_permalink(); ?>"
                                                           style="line-height: 1.3; margin-bottom: 10px; display: block; margin-top: 5px; text-decoration:none;color:#000">
                                                            <?php the_title(); ?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!--                                            <div class="col-md-3">-->
                        <!--                                                <div class="item-new">-->
                        <!--                                                    <div class="img">-->
                        <!--                                                        <a href="-->
                        <?php //the_permalink(); ?><!--">-->
                        <?php //echo get_the_post_thumbnail($post_id, 'full', array('class' => 'thumnail')); ?><!--</a>-->
                        <!--                                                    </div>-->
                        <!--                                                    <h3><a href="-->
                        <?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></h3>-->
                        <!---->
                        <!--                                                </div>-->
                        <!--                                            </div>-->


                    </div>
                    <div class="highlight-box">
                        <div class="header">
                            <h3 class="title-right">Xem nhiều nhất</h3>
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="sidebar-article-1 col-6">
                                    <div class="thumbnail-wrapper">
                                        <a href="https://easybooks.vn/ma-so-thue-ca-nhan/">
                                            <img width="160px" height="90px"
                                                 src="https://easybooks.vn/wp-content/uploads/2020/07/Ma-so-thue-ca-nhan.jpg"
                                                 class="w100 wp-post-image" alt="ma-so-thue-ca-nhan"
                                                 loading="lazy"
                                                 srcset="https://easybooks.vn/wp-content/uploads/2020/07/Ma-so-thue-ca-nhan.jpg 900w,https://easybooks.vn/wp-content/uploads/2020/07/Ma-so-thue-ca-nhan.jpg  300w,https://easybooks.vn/wp-content/uploads/2020/07/Ma-so-thue-ca-nhan.jpg  768w"
                                                 sizes="(max-width: 900px) 100vw, 900px"> </a>
                                    </div>
                                    <div class="content">
                                        <a href="https://easybooks.vn/ma-so-thue-ca-nhan/"
                                           style="color:#000;line-height: 1.3; margin-bottom: 10px; display: block; margin-top: 5px;">
                                            Cách tra cứu mã số thuế cá nhân</a>
                                    </div>
                                </div>
                                <div class="sidebar-article-1 col-6">
                                    <div class="thumbnail-wrapper">
                                        <a href="https://easybooks.vn/gia-von-hang-ban/">
                                            <img width="160px" height="90px"
                                                 src="https://easybooks.vn/wp-content/uploads/2021/05/gia-von-hang-ban.jpeg"
                                                 class="w100 wp-post-image" alt="quy-trinh-luan-chyen-phieu-xuat-kho"
                                                 loading="lazy"
                                                 srcset="https://easybooks.vn/wp-content/uploads/2021/05/gia-von-hang-ban.jpeg 900w, https://easybooks.vn/wp-content/uploads/2021/05/gia-von-hang-ban.jpeg 300w, https://easybooks.vn/wp-content/uploads/2021/05/gia-von-hang-ban.jpeg 768w"
                                                 sizes="(max-width: 900px) 100vw, 900px"> </a>
                                    </div>
                                    <div class="content">
                                        <a href="https://easybooks.vn/gia-von-hang-ban/"
                                           style="color:#000;line-height: 1.3; margin-bottom: 10px; display: block; margin-top: 5px;">
                                           Giá vốn bán hàng</a>
                                    </div>
                                </div>
                                <div class="sidebar-article-1 col-6">
                                    <div class="thumbnail-wrapper">
                                        <a href="https://easybooks.vn/cong-thuc-tinh-loi-nhuan/">
                                            <img width="160px" height="90px"
                                                 src="https://easybooks.vn/wp-content/uploads/2022/11/CT-tinh-loi-nhuan.png"
                                                 class="w100 wp-post-image" alt="quy-trinh-luan-chyen-phieu-xuat-kho"
                                                 loading="lazy"
                                                 srcset="https://easybooks.vn/wp-content/uploads/2022/11/CT-tinh-loi-nhuan.png 900w, https://easybooks.vn/wp-content/uploads/2022/11/CT-tinh-loi-nhuan.png 300w, https://easybooks.vn/wp-content/uploads/2022/11/CT-tinh-loi-nhuan.png 768w"
                                                 sizes="(max-width: 900px) 100vw, 900px"> </a>
                                    </div>
                                    <div class="content">
                                        <a href="https://easybooks.vn/cong-thuc-tinh-loi-nhuan/"
                                           style="color:#000;line-height: 1.3; margin-bottom: 10px; display: block; margin-top: 5px;">
                                            Công thức tính lợi nhuận </a>
                                    </div>
                                </div>
                                <div class="sidebar-article-1 col-6">
                                    <div class="thumbnail-wrapper">
                                        <a href="https://easybooks.vn/tieu-muc-thue-mon-bai/">
                                            <img width="160px" height="90px"
                                                 src="https://easybooks.vn/wp-content/uploads/2023/01/Tieu-muc-TMB-1.png"
                                                 class="w100 wp-post-image" alt="quy-trinh-luan-chyen-phieu-xuat-kho"
                                                 loading="lazy"
                                                 srcset="https://easybooks.vn/wp-content/uploads/2023/01/Tieu-muc-TMB-1.png 900w, https://easybooks.vn/wp-content/uploads/2023/01/Tieu-muc-TMB-1.png 300w, https://easybooks.vn/wp-content/uploads/2023/01/Tieu-muc-TMB-1.png 768w"
                                                 sizes="(max-width: 900px) 100vw, 900px"> </a>
                                    </div>
                                    <div class="content">
                                        <a href="https://easybooks.vn/tieu-muc-thue-mon-bai/"
                                           style="color:#000;line-height: 1.3; margin-bottom: 10px; display: block; margin-top: 5px;">
                                            Tiểu Mục Thuế Môn Bài </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <a href="https://easybooks.vn"><img src="https://easyinvoice.vn/wp-content/themes/ei/libs/images/c14.jpg" width="100%" class="pic-right ma-top"></a>
                            <a href="https://easyca.vn"><img src="https://easyinvoice.vn/wp-content/uploads/2020/06/easyca-1.png" width="100%" class="pic-right"></a>
                            <a href="https://cic.gov.vn"><img src="https://easyinvoice.vn/wp-content/themes/ei/libs/images/c17.jpg" width="100%" class="pic-right"></a>
							<img src="https://easyinvoice.vn/wp-content/themes/ei/libs/images/c15.jpg" width="100%" class="pic-right">
                </div>

            </div>
        </div>
        <hr>
        <div class="container">
            <div class="related">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Tin tức liên quan</h2>
                    </div>

                    <?php
                    $categories = get_the_category($post->ID);
                    if ($categories) {
                        $category_ids = array();
                        foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;

                        $args = array(
                            'category__in' => $category_ids,
                            'post__not_in' => array($post->ID),
                            'showposts' => 3,
                            'caller_get_posts' => 1
                        );
                        $my_query = new wp_query($args);
                        if ($my_query->have_posts()) {
                            while ($my_query->have_posts()) {
                                $my_query->the_post();
                                ?>
                                <div class="col-md-3">
                                    <div class="item-new">
                                        <div class="img">
                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post_id, 'full', array('class' => 'thumnail')); ?></a>
                                        </div>
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                                    </div>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
        <!--    Viet tam style-->
        <style>
            .highlight-box {
                background: #fff;
                margin-top: 30px;
                padding-bottom: 30px;
            }

            .highlight-box > .header {
                margin-top: 20px;
                border-bottom: 5px solid #ec702e;
                margin-bottom: 30px;
            }

            .title-right {
                background: #ec702e;
                margin: 0;
                color: #fff;
                text-align: center;
                padding: 5px 0 5px 0;
            }

            .w100 {
                width: 100%;
                height: 90px;
                object-fit: cover;
            }

            .pic-right {
                margin-bottom: 15px;
            }

        </style>
    </section>

<?php
get_footer();

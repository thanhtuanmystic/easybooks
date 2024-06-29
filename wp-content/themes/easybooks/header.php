<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Easybooks
 */
?>
<!DOCTYPE html>
<html lang="vi">

<head>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148720743-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-148720743-1');
</script>
	<link rel="icon" href="https://easybooks.vn/wp-content/uploads/2020/07/cropped-cropped-favicon-eb.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" href="https://easybooks.vn/wp-content/uploads/2020/07/favicon-eb.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/Content/libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/Content/libs/css/menu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/Content/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/Content/libs/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/Content/libs/css/custom.css">
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5BV8DNJ');</script>
<!-- End Google Tag Manager -->
<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/603c9833385de407571b17d1/1evmb52gl';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->
	
<!--  Ladichat	 -->
	<script src="https://w.ladicdn.com/ladichat/sdk.js" id="661dd4b9b8fe5900208e5317_661dd4e0b8fe5900208e56ba" async></script>
<!-- End ladichat	 -->
	<?php wp_head(); ?>
	
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BV8DNJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div id="topnav" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="https://easybooks.vn">
                            <img src="https://easybooks.vn/wp-content/themes/easybooks/images/logo-fixed.png">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <ul><li><span>Tư vấn phần mềm kế toán</span>
                            <div class="phone">
                                <a href="tel:0981772388">0981 772 388</a>
                               
                            </div>
                        </li>
                        <li>
                            <span>Hỗ trợ kỹ thuật &amp; CSKH</span>
                            <div class="phone">
                                <a href="tel:1900575754">1900 57 57 54</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	
    <header class="container-fluid" id="<?php echo (is_front_page() && is_home()) ? "header1" : "header"; ?>">
        <div class="main-header" style="">
            <div class="top <?php echo (is_home()) ? "top-normal" : ""; ?>">
                <div class="row">
                    <div class="col-md-2 offset-md-1 col-4">
                        <div class="logo">
                            <a href="<?php echo get_home_url(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="EasyBooks" height="50">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-fixed.png" alt="EasyBooks" height="50">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 col-8">
                        <?php ubermenu( 'main' , array( 'theme_location' => 'menu-1' ) ); ?>
                    </div><div class="col-md-3 nav-topbar pull-right mobile-none" style="display: flex;">
						<div class="tv1" style="width: 50%; position: relative;">
							<h3 style="font-size: 14px;color: #fff;text-transform: uppercase;font-weight: bold;">
							Hỗ trợ <br> kỹ thuật & CSKH
							</h3>
							<div class="navinfo" style="float: left !important;">
								<p class="hotline" style="padding-left: 30px;"><a href="tel:1900575754" style="font-size: 15px !important;font-weight: bold;">1900575754</a></p>
							</div>
							<span style="position: absolute; left: 10px;">
								<i class="fa fa-phone"></i>
							</span>
						</div>
						<div class="tv2" style="width: 50%; position: relative;">
							<h3 style="font-size: 14px;color: #fff;text-transform: uppercase;font-weight: bold;">
							Tư vấn <br> phần mềm kế toán
							</h3>
							<div class="navinfo" style="float: left !important;">
								<p class="hotline" style="padding-left: 30px;font-size: 15px !important;
    font-weight: bold;"><a href="tel:0981772388" style="font-size: 15px !important;font-weight: bold;">0981 772 388</a></p>
								
							</div>
							<span style="position: absolute; left: 10px; top: 47px;">
								<i class="fa fa-phone"></i>
							</span>
						</div>
						
                    </div>
                </div>
            </div>
        </div>
        <style>
            #cssmenu {
                float: left !important;
            }
			#header1 {
				display: flex;
				justify-content: center;
				align-items: center;
				padding: 5rem;
			}

            #header1 .nav-topbar span {
                float: right
            }

            #header1 .nav-topbar span i {
                color: #fd9b28;
                font-size: 30px
            }

            #header1 .nav-topbar .navinfo {
                padding-left: 5px;
                float: right
            }

            #header1 .nav-topbar .navinfo p {
                margin: 0
            }

            #header1 .nav-topbar .navinfo p:last-child {
            	font-weight: 600
            }

            #header1 .nav-topbar .navinfo p a,
            strong {
                color: #fff;
                text-decoration: none;
                font-weight: normal;
                font-size: 22px;
            }

            #header1 .nav-topbar .navinfo p strong {
                color: #fff;
                text-decoration: none;
                font-weight: normal;
                font-size: 22px;
            }
        </style>
        <div class="<?php echo (is_front_page() && is_home()) ? "" : "banner"; ?>">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-slide">
                        <?php if(is_front_page() && is_home()){ ?>
						<style>
							.main-slide {
								display: flex;
								justify-content: center;
								align-items: center;
								flex-direction: column;
							}
						</style>
                        <h1 style="z-index: 3; color: #fff; text-align: center">PHẦN MỀM KẾ TOÁN EASYBOOKS <br>
                            CÔNG CỤ ĐẮC LỰC CHO KẾ TOÁN VÀ NHÀ QUẢN TRỊ DOANH NGHIỆP</h1>
                        <div style="z-index: 3; padding: 1rem" class="btn-gr">
                            <a  href="http://dangkydemo.easybooks.vn/" style="padding: 1rem; color: #fff;background: linear-gradient(to right, #ff9c00, #fc6b00);">Đăng ký dùng thử <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    <?php } else{ ?>
                        <h1><?php (is_category()) ? single_term_title() : the_title(); ?></h1>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

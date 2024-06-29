<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="Shortcut Icon" href="https://easybooks.vn/wp-content/uploads/2020/07/favicon-eb.png">
  <title><?php
  if (is_home()) {
    echo "Easybooks - Đơn giản hoá công tác kế toán";
  } elseif (is_category()) {
    echo "Tin tức";
  } else
    echo the_title();
  ?></title>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="over-nav">
      <div class="container">
        <div class="hotline">
          Hỗ trợ kỹ thuật & CSKH
          <span><a href="tel: 1900575754"><img
                srcset="<?php bloginfo('template_directory'); ?>/assets/img/header-call-icon.png 2x" alt="" />1900 57 57
              54</a></span>
        </div>
        <div class="consulting">
          Tư vấn phần mềm Kế toán:
          <span>
            <a href="tel: 0981 772 388"><img
                srcset="<?php bloginfo('template_directory'); ?>/assets/img/header-call-icon.png 2x" alt="" />0981 772
              388</a></span>
        </div>
      </div>
    </div>
    <nav>
      <div class="navbar container">
        <i class="fa fa-bars bx-menu" aria-hidden="true"></i>
        <div class="logo">
          <a href="<?php echo get_bloginfo('url') ?>"><img
              srcset="<?php bloginfo('template_directory'); ?>/assets/img/logo-header.png 2x" alt="" /></a>
        </div>
        <div class="nav-links">
          <div class="sidebar-logo">
            <span class="logo-name"><img srcset="<?php bloginfo('template_directory'); ?>/assets/img/logo-header.png 2x"
                alt="" /></span>
            <i class="fa fa-times bx bx-x" aria-hidden="true"></i>
          </div>
          <ul class="links">
            <li class="<?php if (is_home())
              echo 'current-page'; ?>"><a href="<?php echo get_bloginfo('url') ?>">Trang
                chủ</a></li>
            <li class="<?php if (is_page('chuc-nang'))
              echo 'current-page'; ?>"><a href="<?php echo get_bloginfo('url') . "/chuc-nang" ?>">Chức năng</a></li>
            <li class="<?php if (is_page('bao-gia'))
              echo 'current-page'; ?>"><a href="<?php echo get_bloginfo('url') . "/bao-gia" ?>">Báo giá</a></li>
            <li class="<?php if (is_page('huong-dan'))
              echo 'current-page'; ?>">
              <a>Hướng dẫn</a>
              <i class="fa fa-chevron-down htmlcss-arrow arrow"></i>
              <ul class="htmlCss-sub-menu sub-menu">
                <li><a target="_blank"
                    href="https://drive.google.com/drive/folders/13mZEcsSM-PF8w_r8goHRzq98U-8CcGir">HDSD APP88</a></li>
                <li><a target="_blank" href="https://www.youtube.com/@softdreams-nangtamquantrid5086">Video hướng
                    dẫn</a></li>
              </ul>
            </li>
            <li class="<?php if (is_category() || is_single())
              echo 'current-page'; ?>"><a href="<?php echo get_bloginfo('url') . "/tin-tuc" ?>">Tin tức</a></li>
            <li class="<?php if (is_page('lien-he'))
              echo 'current-page'; ?>"><a href="<?php echo get_bloginfo('url') . "/lien-he" ?>">Liên hệ</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
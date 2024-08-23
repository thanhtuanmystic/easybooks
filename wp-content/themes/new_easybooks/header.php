<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-9M0CB323WZ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-9M0CB323WZ');
  </script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Phần mềm kế toán Easybooks đáp ứng đầy đủ nghiệp vụ kế toán theo thông tư 88, thông tư 133 và thông tư 200. Tự động nhập liệu, tối ưu năng suất x10 lần">
  <link rel="canonical" href="https://easybooks.vn/" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!-- <link rel="stylesheet" href="<?php // bloginfo('template_directory'); ?>/assets/css/style.css" /> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="Shortcut Icon" href="https://easybooks.vn/wp-content/uploads/2020/07/favicon-eb.png">
  <title><?php
  if (is_home()) {
    echo "Phần mềm kế toán Easybooks - Đơn giản hoá công tác kế toán";
  } elseif (is_category()) {
    echo "Tin tức";
  } else
    echo the_title();
  ?></title>
  <?php wp_head() ?>
  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5BV8DNJ');</script>
  <!-- End Google Tag Manager -->

  <!--  Ladichat	 -->
  <script src="https://w.ladicdn.com/ladichat/sdk.js" id="661dd4b9b8fe5900208e5317_661dd4e0b8fe5900208e56ba"
    async></script>
  <!-- End ladichat	 -->
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BV8DNJ" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header>
    <div class="over-nav">
      <div class="container">
        <div class="consulting">
          Tư vấn phần mềm Kế toán:
          <span>
            <a href="tel: 0766 074 666"><img
                srcset="<?php bloginfo('template_directory'); ?>/assets/img/header-call-icon.png 2x"
                alt="header-call-icon" />0766 074 666</a></span>
        </div>
        <div class="hotline">
          Hỗ trợ kỹ thuật & CSKH
          <span><a href="tel: 1900575754"><img
                srcset="<?php bloginfo('template_directory'); ?>/assets/img/header-call-icon.png 2x"
                alt="header-call-icon" />1900 57 57
              54</a></span>
        </div>

      </div>
    </div>
    <nav>
      <div class="navbar container">
        <i class="fa fa-bars bx-menu" aria-hidden="true"></i>
        <div class="logo">
          <a href="<?php echo get_bloginfo('url') ?>"><img
              srcset="<?php bloginfo('template_directory'); ?>/assets/img/logo-header.png 2x" alt="logo-header" /></a>
        </div>
        <div class="nav-links">
          <div class="sidebar-logo">
            <span class="logo-name"><img srcset="<?php bloginfo('template_directory'); ?>/assets/img/logo-header.png 2x"
                alt="logo-header" /></span>
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
                    href="https://drive.google.com/drive/folders/1ZACUQm22F6M4o2AOF_WVykVwfc_bNtDJ">HDSD 200</a></li>
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
  <div class="overlay">
  </div>
  <style>
    .esb-popup {
      background: var(--Blue, linear-gradient(180deg, #0172D8 0%, #0149B8 100%));
      padding: 2rem 4rem;
      align-items: center;
      flex-direction: column;
      width: 46%;
      border-radius: 1rem;
    }

    .esb-popup img {
      max-width: 40%;
    }

    .esb-popup form {
      width: 100%;
      margin-top: 10px;
      padding: 20px;
      background: #fff;
      border-radius: 10px;

    }

    .esb-popup form .form-title {
      margin-bottom: 10px;
      text-align: center;
      font-size: 26px;
      font-style: normal;
      background: var(--Blue, linear-gradient(180deg, #0172D8 0%, #0149B8 100%));
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .esb-popup form .form-info {
      display: flex;
      flex-direction: column;
      gap: 10px;
      padding: 24px 16px;
      border-radius: 16px;
      background: var(--Blue-200, #E6EDF8);
    }

    .esb-popup form .form-info .form-row input {
      border-radius: 6px;
      border: 1px solid var(--Gray-300, #E6E7EC);
      background: var(--Backgrounds-Primary, #FFF);
      color: var(--Gray-700, #363F65);
      font-family: "Averta-regular";
      font-size: 16px;
      font-style: normal;
    }

    .choose-promotion {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .choose-promotion .heading {
      color: var(--Gray-700, #363F65);
      font-family: "Averta-regular";
      font-size: 18px;
      font-style: normal;
      font-weight: 400;
      line-height: 32px;
    }

    .promotion-select {
      display: flex;
      align-items: center;
    }

    .promotion-option {
      color: var(--Gray-700, #363F65);
      font-family: "Averta-regular";
      font-size: 18px;
      font-style: normal;
    }

    .promotion-select input[type="radio"] {
      display: none;
    }

    .promotion-select .label-select {
      position: relative;
      height: 25px;
      width: 25px;
      background-image: url('https://easybooks.vn/wp-content/uploads/2024/08/Component-249-3.png');
      background-size: cover;
      display: inline-block;
      margin-right: 10px;
    }

    .esb-popup .esb-primary-btn div {
      padding: 1rem 8rem;
      font-size: 1.4rem;
    }

    /* When the radio button is checked, change the icon to another image */
    .promotion-select input[type="radio"]:checked+.label-select {
      background-image: url('https://easybooks.vn/wp-content/uploads/2024/08/Component-249-2.png');
    }

    @media screen and (max-width: 1600px) {
      .esb-popup form .form-title {
        font-size: 18px;
      }

      .esb-popup form {
        padding: 1rem;
      }

      .esb-popup form .form-info {
        padding: 1rem;
      }
    }

    @media screen and (max-width: 1200px) {
      .esb-popup {
        width: 70%;
        padding: 2rem 3rem;
      }

      .esb-popup img {
        display: none;
      }

      .esb-popup .button-x {
        font-size: 1.6rem
      }

      .esb-popup .esb-primary-btn div {
        padding: 0.6rem 2rem;
        margin-top: 10px;
      }

      .choose-promotion .heading {
        font-size: 1.6rem;
      }

      .promotion-option {
        font-size: 1.4rem;
      }

      .esb-popup form .form-info .form-row input {
        font-size: 1.4rem;
      }
    }

    @media screen and (max-width: 500px) {
      .esb-popup {
        width: 94%;
        padding: 1rem;
      }

      .esb-popup form .form-title {
        font-size: 1.4rem;
      }

      .promotion-select .label-select {
        width: 32px;
        height: 30px;
      }

      .esb-popup .button-x {
        font-size: 1.2rem;
      }
    }
  </style>
  <div class="esb-popup">
    <div class="button-x">
      X
    </div>
    <img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Group-2609674.png 2x" alt="">
    <form action="<?php if (is_home()) {
      echo "./form-handle";
    } else
      echo "../form-handle" ?>" method="POST" id="form_popup">
        <div class="form-title text-center">ĐĂNG KÝ NHẬN ƯU ĐÃI NGAY HÔM NAY!</div>
        <div class="form-info">
          <div class="form-row">
            <input type="text" name="hoten" class="form-control" placeholder="Họ và tên*">
          </div>
          <div class="form-row">
            <input type="text" name="phonenumber" class="form-control" placeholder="Số điện thoại*">
          </div>
          <div class="form-row">
            <input type="text" name="taxcode" class="form-control" placeholder="Mã số thuế*">
          </div>
          <div class="form-row">
            <input type="email" name="email" class="form-control" placeholder="Email*">
          </div>
          <input type="text" name="landing2thang9" value="landing2thang9" hidden>
          <div class="choose-promotion">
            <div class="heading">Chọn gói ưu đãi:</div>
            <label for="5phantram" class="promotion-select">
              <input type="radio" id="5phantram" name="promotion" value="5">
              <span class="label-select"></span>
              <span class="promotion-option">Giảm <strong>5%</strong> gói 2 năm giải pháp phần mềm kế toán
                EasyBooks</span><br>
            </label>
            <label for="15phantram" class="promotion-select">
              <input type="radio" id="15phantram" name="promotion" value="15" checked="checked">
              <span class="label-select"></span>
              <span class="promotion-option">Giảm <strong>15%</strong> gói 3 năm giải pháp phần mềm kế toán
                EasyBooks</span><br>
            </label>
            <label for="20phantram" class="promotion-select">
              <input type="radio" id="20phantram" name="promotion" value="20">
              <span class="label-select"></span>
              <span class="promotion-option">Giảm <strong>20%</strong> gói 5 năm giải pháp phần mềm kế toán
                EasyBooks</span>
            </label>
          </div>
        </div>
        <button type="submit" class="esb-primary-btn solution-getdemo mt-lg-3"
          style="border: none; width: 100%; background: transparent">
          <div>Đăng ký ngay!</div>
        </button>
      </form>
    </div>
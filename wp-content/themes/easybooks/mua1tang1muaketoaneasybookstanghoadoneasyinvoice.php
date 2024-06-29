<?php /* Template Name: Landing Page: Mua 1 tặng 1 mua kế toán easybooks tặng hóa đơn easyinvoice */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <meta property="og:image" content="https://easybooks.vn/wp-content/uploads/2024/06/easybooksthumbnail.png" />
    <meta property="og:image:secure_url"
        content="https://easybooks.vn/wp-content/uploads/2024/06/easybooksthumbnail.png" />
    <link rel="Shortcut Icon" href="https://easybooks.vn/wp-content/uploads/2020/07/favicon-eb.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <title><?php the_title() ?></title>
    <style>
        @font-face {
            font-family: Averta-regular;
            src: url(<?php bloginfo('template_directory'); ?>/font/Intelligent\ Design\ -\ AvertaStdCY-Regular_3.otf);
        }

        @font-face {
            font-family: Averta-bold;
            src: url(<?php bloginfo('template_directory'); ?>/font/Intelligent\ Design\ -\ AvertaStdCY-Bold_1.otf);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Averta-bold;
        }

        img {
            max-width: 100%;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            color: inherit;
        }

        .landing-title {
            color: var(--Primary-800, #ef5627);
            text-align: center;
            font-size: 32px;
            font-style: normal;
            line-height: 44px;
            /* 137.5% */
            margin-bottom: 50px;
        }

        .form-button {
            display: flex;
            width: 213px;
            padding: 10px 20px;
            justify-content: center;
            align-items: center;
            gap: 10px;
            border-radius: 6px;
            background: var(--Gradient-2, linear-gradient(269deg, #f37b20 0.55%, #ec3e2b 56.04%));
            box-shadow: 0px 4px 5.8px 0px rgba(237, 72, 41, 0.3);
            color: #fff;
            font-size: 18px;
            line-height: 24px;
            /* 133.333% */
        }

        .form-button:hover {
            opacity: 0.8;
        }

        @keyframes jump-shaking {
            0% {
                transform: translateX(0)
            }

            25% {
                transform: translateY(-9px)
            }

            35% {
                transform: translateY(-9px) rotate(17deg)
            }

            55% {
                transform: translateY(-9px) rotate(-17deg)
            }

            65% {
                transform: translateY(-9px) rotate(17deg)
            }

            75% {
                transform: translateY(-9px) rotate(-17deg)
            }

            100% {
                transform: translateY(0) rotate(0)
            }
        }

        .rise-shake {
            animation: jump-shaking 1.8s infinite;
        }


        .muangay-button {
            display: flex;
            padding: 10px 20px;
            justify-content: center;
            align-items: center;
            gap: 10px;
            border-radius: 6px;
            border: 1px solid var(--Gradient-2, #F37B20);
            background: var(--Primary-300, #FDEEE9);
            font-size: 18px;
            background: var(--Gradient-2, linear-gradient(269deg, #F37B20 0.55%, #EC3E2B 56.04%));
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .muangay-button:hover {
            opacity: 0.8;
            box-shadow: 0px 4px 5.8px 0px rgba(237, 72, 41, 0.3);


        }

        .form-button button {
            border: none;
            background: transparent;
            color: #fff;
        }

        #banner {
            background-image: url(https://easybooks.vn/wp-content/uploads/2024/06/landingbanner.png);
            background-repeat: no-repeat;
            background-size: cover;
            /* height: 100vh; */
            padding-top: 50px;
            margin-bottom: 50px;
        }

        #banner .form-banner {
            max-width: 100%;
            display: flex;
            padding: 32px 32px 40px 32px;
            flex-direction: column;
            align-items: center;
            gap: 16px;
            border-radius: 16px;
            border: 2px solid var(--Gradient, #f37b20);
            background: var(--white, #fff);
        }

        #banner .form-banner .form-title {
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            line-height: 32px;
            background: var(--Gradient, linear-gradient(180deg, #f37b20 0%, #ec3e2b 100%));
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #banner .form-banner .form-des {
            color: var(--Gray-800, #040f3e);
            text-align: center;
            font-family: "Averta-regular";
            font-size: 16px;
            line-height: 28px;
            /* 175% */
        }

        #banner .form-banner .form-info {
            display: flex;
            width: 100%;
            padding: 24px;
            flex-direction: column;
            gap: 20px;
            border-radius: 12px;
            border: 1px solid var(--Gray-400, #b1b5c3);
            background: #fff;
        }

        #banner .form-banner .form-info .form-row input,
        #banner .form-banner .form-info .form-row select {
            color: var(--Gray-700, #363f65);
            font-family: "Averta-regular";
            font-size: 16px;
            line-height: 28px;
            /* 175% */
        }

        #landing_video {
            padding: 50px 0;
        }

        #why_easybooks {
            padding: 50px 0;
        }

        #why_easybooks .why-box {
            display: flex;
            flex-direction: column;
            gap: 50px;
        }

        #why_easybooks .why-box .why-explain {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        #why_easybooks .why-box .why-explain .why-featured {
            display: flex;
            gap: 16px;
            align-items: center;
            color: var(--Orange-4, #e9580c);
            font-size: 24px;
            font-style: normal;
        }

        #why_easybooks .why-box .why-explain .why-des,
        #why_easybooks .why-box .why-explain ul li {
            color: var(--Gray-900, #030b2c);
            font-family: "Averta-regular";
            font-size: 16px;
            line-height: 28px;
            /* 175% */
        }

        #why_easybooks .why-box .why-explain .why-btn {
            display: flex;
            gap: 20px;
        }

        #feedback {
            padding-bottom: 50px;
        }

        #feedback .feedback-box {
            padding: 15px;
            border-radius: 16px;
            background: var(--Primary-300, #fdeee9);
            height: 100%;
        }

        #feedback .feedback-box .feedback-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
            border-radius: 8px;
            background: #fff;
            padding: 16px;
            height: 100%;
        }

        #feedback .feedback-box .feedback-info .feedback-position {
            color: var(--Gray-700, #363f65);
            text-align: center;
            line-height: 18px;
            /* 150% */
            font-size: 12px;
            font-family: Averta-regular;
        }

        #feedback .feedback-box .feedback-info .feedback-detail {
            color: var(--Gray-900, #030b2c);
            font-family: Averta-regular;
            text-align: center;
            font-size: 16px;
            font-style: normal;
            line-height: 28px;
            /* 175% */
        }

        #feedback .feedback-box .feedback-info img {
            max-width: 30%;
            border-radius: 50%;
        }

        .five-star {
            margin-top: auto;
        }

        #easybooks_price {
            padding: 50px 0;
            background: var(--Primary-300, #fdeee9);
        }

        #easybooks_price ul li {
            list-style: none;
        }

        #easybooks_price ul,
        #easybooks_price ol {
            margin: 0;
            padding: 0;
        }

        #easybooks_price .price-box {
            border-radius: 16px;
            background: var(--white, #fff);
            padding: 32px;
            display: flex;
            flex-direction: column;
            gap: 30px;
            height: 100%;
        }

        #easybooks_price .price-box .thongtu-name {
            display: inline-flex;
            justify-content: center;
            padding: 2px 12px;
            border-radius: 6px;
            background: var(--Primary-300, #fdeee9);
        }

        #easybooks_price .price-box .thongtu-name div {
            font-size: 24px;
            line-height: 32px;
            /* 133.333% */
            background: var(--Gradient, linear-gradient(180deg, #f37b20 0%, #ec3e2b 100%));
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #easybooks_price .price-box .nolimit {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #easybooks_price .price-box .nolimit li {
            color: var(--Gray-800, #040f3e);
            /* Body/16/Re */
            font-family: "Averta-regular";
            font-size: 16px;
            line-height: 28px;
            /* 175% */
        }

        #easybooks_price .price-box .price-specific {
            display: flex;
            justify-content: center;
            text-align: center;
            font-size: 36px;
            line-height: 40px;
            background: var(--Gradient-3, linear-gradient(232deg, #c03e55 4.15%, #673471 37.46%, #012891 94.43%));
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #easybooks_price .price-box .price-specific span {
            color: var(--Gray-800, #040f3e) !important;
            font-size: 16px;
            line-height: 24px;
            /* 150% */
        }

        #easybooks_price .price-box .form-button {
            width: 100%;
        }

        #easybooks_price .price-box .allow {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        #easybooks_price .price-box .allow li {
            color: var(--Gray-800, #040f3e);
            font-size: 16px;
            line-height: 24px;
            /* 150% */
            display: flex;
            gap: 10px;
            align-items: center;
        }

        #easybooks_price .note {
            font-family: "Averta-regular";
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 30px;
        }

        #form_bottom {
            padding: 50px 0;
            background-image: url(https://easybooks.vn/wp-content/uploads/2024/06/form-bottom-banner.png);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #form_bottom .form-title {
            text-align: center;
            font-size: 24px;
            background: var(--Gradient, linear-gradient(180deg, #f37b20 0%, #ec3e2b 100%));
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #form_bottom .slogan {
            color: #fff;
            text-align: center;
            text-shadow: 0px 3px 14.1px rgba(233, 88, 12, 0.1);
            font-size: 32px;
            font-style: normal;
            line-height: 43px;
            /* 134.375% */
        }

        #form_bottom .form-bottom {
            display: flex;
            padding: 32px 32px 48px 32px;
            flex-direction: column;
            align-items: center;
            gap: 24px;
            border-radius: 16px;
            border: 2px solid var(--Gradient, #f37b20);
            background: var(--white, #fff);
        }

        #form_bottom .form-bottom .form-info {
            padding: 24px;
            border-radius: 12px;
            border: 1px solid var(--Gray-400, #b1b5c3);
            background: #fff;
            display: flex;
            flex-direction: column;
            gap: 32px;
            width: 100%;
        }

        #form_bottom .form-bottom .form-info .form-row input,
        #form_bottom .form-bottom .form-info .form-row select {
            color: var(--Gray-700, #363f65);
            /* Sub1/16/Re */
            font-family: "Averta-regular";
            font-size: 16px;
            line-height: 28px;
            /* 175% */
        }

        #question {
            padding: 5rem 0;
        }

        #question .faq-item:last-child {
            border-bottom: none;
        }

        #question .faq-question {
            color: var(--Gray-500, #8C91A6);
            font-size: 18px;
            line-height: 24px;
        }

        #question .faq-answer {
            color: var(--Gray-500, #8C91A6);
            font-family: "Averta-regular";
            font-size: 14px;
            font-style: normal;
            line-height: 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
        }

        #question .icon-container i {
            font-size: 1.6rem;
            cursor: pointer;
            opacity: 0.5;
            transition: transform 0.3s ease-in-out;
        }

        #question .icon-container i.active {
            transform: rotate(90deg);
        }

        #question .faq-box {
            display: flex;
            padding: 1rem 3rem;
            flex-direction: column;
            align-self: stretch;
            margin-bottom: 1rem;
            border-radius: 2.4rem;
            border: 1px solid var(--Gray-300, #E6E7EC);
            background: var(--gray-50, #F9FAFB);
            -webkit-border-radius: 2.4rem;
            -moz-border-radius: 2.4rem;
            -ms-border-radius: 2.4rem;
            -o-border-radius: 2.4rem;
        }

        #question .faq-box:hover {
            background: #fffaf3;
        }

        #question .faqBoxActive {
            background: #fffaf3;
        }

        #question .faq-item {
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }


        #footer {
            padding: 50px 0;
            background: var(--Gray-800, #040f3e);
        }

        #footer ul li {
            list-style: none;
        }

        #footer .footer-col-left {
            display: inline-flex;
            flex-direction: column;
            gap: 24px;
            align-items: flex-start;
        }

        #footer .footer-col-left .footer-slogan {
            /* Sub1/16/Bold */
            font-size: 16px;
            line-height: 24px;
            /* 150% */
            background: var(--Gradient, linear-gradient(180deg, #f37b20 0%, #ec3e2b 100%));
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #footer .footer-col-left .footer-info {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        #footer .footer-col-left .footer-info li {
            display: flex;
            gap: 12px;
            align-items: center;
            color: var(--white, #fff);
            font-family: "Averta-regular";
            font-size: 16px;
            line-height: 28px;
            /* 175% */
        }

        #footer .footer-list-sns {
            display: flex;
            gap: 16px;
            align-items: center;
        }

        #banner_mobile .form-banner {
            max-width: 100%;
            display: flex;
            padding: 32px 32px 40px 32px;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            border-radius: 16px;
            border: 2px solid var(--Gradient, #f37b20);
            background: var(--white, #fff);
            margin-top: 20px;
        }

        #banner_mobile .form-banner .form-title {
            text-align: center;
            font-size: 16px;
            font-weight: 700;
            line-height: 32px;
            background: var(--Gradient, linear-gradient(180deg, #f37b20 0%, #ec3e2b 100%));
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #banner_mobile .form-banner .form-des {
            color: var(--Gray-800, #040f3e);
            text-align: center;
            font-family: "Averta-regular";
            font-size: 14px;
        }

        #banner_mobile .form-banner .form-info {
            display: flex;
            width: 100%;
            padding: 24px;
            flex-direction: column;
            gap: 10px;
            border-radius: 12px;
            border: 1px solid var(--Gray-400, #b1b5c3);
            background: #fff;
        }

        #banner_mobile .form-banner .form-info .form-row input,
        #banner_mobile .form-banner .form-info .form-row select {
            color: var(--Gray-700, #363f65);
            font-family: "Averta-regular";
            font-size: 14px;
        }

        #banner_mobile {
            display: none;
        }

        @media (min-width: 1600px) {

            /* #banner {
                padding-top: 120px
            } */
            #banner .form-banner {
                padding: 20px 10px;
                gap: 8px;
            }

            #banner .form-info {
                gap: 10px;
                padding: 20px;
            }

            #banner {
                background-image: url(https://easybooks.vn/wp-content/uploads/2024/06/banner700hight.png);
                margin-bottom: 0;
            }
        }

        @media (max-width: 1440px) {
            .form-banner {
                /* display: none !important;  */
            }

            #banner .form-banner .form-title {
                font-size: 16px;
            }

            #banner .form-banner .form-des {
                font-size: 14px;
            }

            .form-banner {
                gap: 8px;
            }

            #banner .form-banner .form-info {
                gap: 8px;
            }

            #banner {
                background-image: url(https://easybooks.vn/wp-content/uploads/2024/06/banner1440.png);
                height: auto;
            }
        }

        @media (max-width: 1200px) {
            #banner .form-banner {
                padding: 10px 5px;
            }

            #banner .form-banner .form-info {
                border: none;
            }
        }

        @media (max-width: 1024px) {
            #banner .form-banner {
                gap: 0;
            }

            #banner .form-banner {
                padding: 5px 5px;
            }

            .landing-title {
                font-size: 20px;
            }

            .form-button {
                width: auto;
            }

            .header-box ul{
                gap: 10px !important;
            }
            .header-box ul li{
                font-size: 16px;
            }
            .all-product {
                width: 100%;
            }
            .all-product .all-product-show {
                width: 100%;
            }


        }

        @media (max-width: 480px) {
            #header {
                display: none;
            }

            #banner {
                display: none;
            }

            body {
                padding-top: 0 !important;
            }

            #banner_mobile {
                display: block;
            }

            .all-product {
                width: 100%;
            }

            .all-product .all-product-show {
                width: 100%;
                padding: 20px;
            }

            #form_bottom .slogan {
                font-size: 20px;
                line-height: normal;
            }

            #form_bottom .form-bottom {
                padding: 10px;
            }

            #form_bottom .form-title {
                font-size: 20px;
                margin-top: 20px;
            }

            #form_bottom .form-bottom .form-info {
                padding: 0;
                border: none;
            }

            #form_bottom .form-bottom .form-info {
                gap: 20px;
            }

            #banner_mobile .form-banner .form-info {
                padding: 0;
                border: none;
            }

            #banner_mobile .form-banner {
                padding: 20px;
                gap: 20px;
            }

            #banner_mobile .form-button {
                margin-top: 40px;
            }

        }
    </style>
</head>
<style>
    body {
        padding-top: 80px;
    }

    #header {
        padding: 20px;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 99999;
        background: #fff;
        width: 100%;
    }

    .header-box {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header-box ul {

        display: flex;
        gap: 30px;
        margin: 0;
        padding: 0;
    }


    .header-box ul li {
        list-style: none;
        color: var(--Gray-800, #040F3E);
        font-size: 18px;
        line-height: 24px;
    }

    .header-box ul li:hover {
        color: var(--Primary-800, #EF5627);

    }

    .header-box ul li a {
        color: inherit;
    }
</style>

<body>
    <section id="header">
        <div class="container">
            <div class="header-box">
                <a target="_blank" href="https://easybooks.vn/"> <img
                        srcset="https://easybooks.vn/wp-content/uploads/2024/06/header-logo.png 2x" alt=""></a>
                <ul>
                    <li><a target="_blank" href="https://easybooks.vn/">Trang chủ</a></li>
                    <li><a href="#why_easybooks" class="scroll-link">Chức năng</a></li>
                    <li><a href="#easybooks_price" class="scroll-link">Báo giá</a></li>
                    <li><a target="_blank" href="https://easybooks.vn/tin-tuc">Tin tức</a></li>
                </ul>
                <a href="tel:  0981772388" class="form-button"> <button> 0981 772 388</button> </a>
            </div>
        </div>
    </section>
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7"></div>
                <div class="col-lg-5">
                    <form action="<?php bloginfo('template_directory'); ?>/sendmail.php" id="form_validate"
                        class="form-banner" method="POST">
                        <div class="form-title">
                            NHÂN ĐÔI LỢI ÍCH - TẶNG NGAY <br>
                            HÓA ĐƠN ĐIỆN TỬ
                        </div>
                        <div class="form-des">
                            Hơn 50.000 doanh nghiệp nhận tư vấn và tin dùng
                        </div>
                        <div class="form-info">
                            <div class="form-row">
                                <input type="text" name="hoten" class="form-control" placeholder="Họ và tên *" />
                            </div>
                            <div class="form-row">
                                <input type="text" name="chucvu" class="form-control" placeholder="Chức vụ *" />
                            </div>
                            <div class="form-row">
                                <input type="text" name="email" class="form-control" placeholder="Email *" />
                            </div>
                            <div class="form-row">
                                <input type="text" name="phonenumber" class="form-control"
                                    placeholder="Số điện thoại *" />
                            </div>
                            <div class="form-row">
                                <input type="text" name="taxcode" class="form-control" placeholder="Mã số thuế *" />
                            </div>
                            <div class="form-row">
                                <select class="form-control" name="source" id="">
                                    <option value="">
                                        Bạn biết đến Easybooks qua kênh nào?
                                    </option>
                                    <option value="website_fanpage_zalo">Website/ Fanpage/ Zalo,...|</option>
                                    <option value="hoithao_sukien">Hội thảo - Sự kiện</option>
                                    <option value="dai_ly_thue">Đại lý thuế</option>
                                    <option value="ke_toan_dich_vu">Kế toán dịch vụ</option>
                                    <option value="cong_tac_vien">Cộng tác viên</option>
                                    <option value="khac">Khác</option>
                                </select>
                            </div>
                            <input type="text" hidden value="landingmua1tang1">
                            <div class="form-row d-flex justify-content-center align-items-center">
                                <div href="" class="form-button rise-shake"> <button type="submit">NHẬN TƯ VẤN</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="banner_mobile">
        <img style="width: 100%" srcset="https://easybooks.vn/wp-content/uploads/2024/06/banner-mobile-landing.png 2x"
            alt="">
        <div class="container">
            <form action="<?php bloginfo('template_directory'); ?>/sendmail.php" id="form_validate2" class="form-banner"
                method="POST">
                <div class="form-title">
                    NHÂN ĐÔI LỢI ÍCH - TẶNG NGAY <br>
                    HÓA ĐƠN ĐIỆN TỬ
                </div>
                <div class="form-des">
                    Hơn 50.000 doanh nghiệp nhận tư vấn và tin dùng
                </div>
                <div class="form-info">
                    <div class="form-row">
                        <input type="text" name="hoten" class="form-control" placeholder="Họ và tên *" />
                    </div>
                    <div class="form-row">
                        <input type="text" name="chucvu" class="form-control" placeholder="Chức vụ *" />
                    </div>
                    <div class="form-row">
                        <input type="text" name="email" class="form-control" placeholder="Email *" />
                    </div>
                    <div class="form-row">
                        <input type="text" name="phonenumber" class="form-control" placeholder="Số điện thoại *" />
                    </div>
                    <div class="form-row">
                        <input type="text" name="taxcode" class="form-control" placeholder="Mã số thuế *" />
                    </div>
                    <div class="form-row">
                        <select class="form-control" name="source" id="">
                            <option value="">
                                Bạn biết đến Easybooks qua kênh nào?
                            </option>
                            <option value="website_fanpage_zalo">Website/ Fanpage/ Zalo,...|</option>
                            <option value="hoithao_sukien">Hội thảo - Sự kiện</option>
                            <option value="dai_ly_thue">Đại lý thuế</option>
                            <option value="ke_toan_dich_vu">Kế toán dịch vụ</option>
                            <option value="cong_tac_vien">Cộng tác viên</option>
                            <option value="khac">Khác</option>
                        </select>
                    </div>
                    <input type="text" hidden value="landingmua1tang1">
                    <div class="form-row d-flex justify-content-center align-items-center">
                        <div href="" class="form-button rise-shake"> <button type="submit">NHẬN TƯ VẤN</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section id="landing_video">
        <div class="container">
            <div class="landing-title">
                Easybooks - Phần mềm kế toán tốt nhất hiện nay
            </div>
            <iframe id="VisaChipCardVideo" style="width: 100%; height: 40rem"
                src="https://www.youtube.com/embed/O7WN7RPaAZw">
            </iframe>
        </div>
    </section>
    <section id="why_easybooks">
        <div class="container">
            <div class="landing-title" style="margin-bottom: 20px">
                Tại sao nên chọn phần mềm kế toán Easybooks
            </div>
            <div style="margin-bottom: 50px" class="d-flex justify-content-center align-items-center">
                <a href="#form_bottom" class="form-button scroll-link"> Nhận demo ngay </a>
            </div>
            <div class="why-box">
                <div class="why-row img-right">
                    <div class="row gy-4 d-flex justify-content-center align-items-center">
                        <div class="col-lg-6">
                            <div class="why-explain">
                                <div class="why-featured">
                                    <img srcset="
                        https://easybooks.vn/wp-content/uploads/2024/06/why-icon1.png 2x
                      " alt="" />
                                    Nhập liệu thông minh
                                </div>
                                <div class="why-des">
                                    Cho phép đồng bộ hóa đơn mua vào và bán ra từ cơ quan thuế,
                                    bao gồm cả hoá đơn điện tử từ máy tính tiền về phần mềm hoàn
                                    toàn miễn phí, từ đó kế toán có thể lập các chứng từ liên
                                    quan 1 cách nhanh chóng và chính xác.
                                </div>
                                <div class="why-btn">
                                    <a href="#form_bottom" class="form-button scroll-link"> Dùng thử miễn phí </a>
                                    <a href="#form_bottom" class="muangay-button scroll-link"> Mua ngay </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img srcset="
                    https://easybooks.vn/wp-content/uploads/2024/06/why-img1.png 2x
                  " alt="" />
                        </div>
                    </div>
                </div>
                <div class="why-row img-left">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-lg-6">
                            <img srcset="
                    https://easybooks.vn/wp-content/uploads/2024/06/why-img2.png 2x
                  " alt="" />
                        </div>
                        <div class="col-lg-6">
                            <div class="why-explain">
                                <div class="why-featured">
                                    <img srcset="
                        https://easybooks.vn/wp-content/uploads/2024/06/why-icon2.png 2x
                      " alt="" />
                                    Tích hợp Hóa đơn điện tử
                                </div>
                                <div class="why-des">
                                    Tích hợp HDĐT với nhiều nhà cung cấp khác nhau như:
                                    EasyInvoice, Viettel, BKAV... cho phép người dùng phát hành
                                    hóa đơn trực tiếp từ phần mềm một cách nhanh chóng, tiện
                                    lợi.
                                </div>
                                <div class="why-btn">
                                    <a href="#form_bottom" class="form-button scroll-link"> Dùng thử miễn phí </a>
                                    <a href="#form_bottom" class="muangay-button scroll-link"> Mua ngay </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="why-row img-right">
                    <div class="row gy-4 d-flex justify-content-center align-items-center">
                        <div class="col-lg-6">
                            <div class="why-explain">
                                <div class="why-featured">
                                    <img srcset="
                        https://easybooks.vn/wp-content/uploads/2024/06/why-icon3.png 2x
                      " alt="" />
                                    Truy cập đồng thời từ nhiều tài khoản
                                </div>
                                <div class="why-des">
                                    Nổi bật hơn cả là chức năng phân quyền người dùng cho phép
                                    cùng một lúc nhiều tài khoản có thể truy cập và đồng thời có
                                    thể nhập liệu giúp tiết kiệm thời gian và công sức
                                </div>
                                <div class="why-btn">
                                    <a href="#form_bottom" class="form-button scroll-link"> Dùng thử miễn phí </a>
                                    <a href="#form_bottom" class="muangay-button scroll-link"> Mua ngay </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img srcset="
                    https://easybooks.vn/wp-content/uploads/2024/06/why-img3.png 2x
                  " alt="" />
                        </div>
                    </div>
                </div>
                <div class="why-row img-left">
                    <div class="row gy-4 d-flex justify-content-center align-items-center">
                        <div class="col-lg-6">
                            <img srcset="
                    https://easybooks.vn/wp-content/uploads/2024/06/why-img4.png 2x
                  " alt="" />
                        </div>
                        <div class="col-lg-6">
                            <div class="why-explain">
                                <div class="why-featured">
                                    <img srcset="
                        https://easybooks.vn/wp-content/uploads/2024/06/why-icon4.png 2x
                      " alt="" />
                                    Tiện ích thông minh
                                </div>
                                <div class="why-des">
                                    <ul>
                                        <li>
                                            Cho phép kiểm tra đối chiếu chứng từ số sách trong quá
                                            trình nhập liệu từ đỗ tránh sai sót khi tạo lập báo cáo.
                                        </li>
                                        <li>Cảnh bảo MST bỏ chốn hoặc bị cưỡng chế</li>
                                        <li>Cho phép khôi phục dữ liệu</li>
                                        <li>Cho phép lưu nháp chứng từ</li>
                                    </ul>
                                </div>
                                <div class="why-btn">
                                    <a href="#form_bottom" class="form-button scroll-link"> Dùng thử miễn phí </a>
                                    <a href="#form_bottom" class="muangay-button scroll-link"> Mua ngay </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="why-row img-right">
                    <div class="row gy-4 d-flex justify-content-center align-items-center">
                        <div class="col-lg-6">
                            <div class="why-explain">
                                <div class="why-featured">
                                    <img srcset="
                        https://easybooks.vn/wp-content/uploads/2024/06/why-icon5.png 2x
                      " alt="" />
                                    Phân tích tài chính doanh nghiệp
                                </div>
                                <div class="why-des">
                                    Thông qua các biểu đồ phân tích trực quan, giúp Chủ doanh
                                    nghiệp chủ động phân tích và nắm bắt tình hình tài chính, từ
                                    đó dự đoán tương lai và xây dựng kế hoạch phát triển doanh
                                    nghiệp
                                </div>
                                <div class="why-btn">
                                    <a href="#form_bottom" class="form-button scroll-link"> Dùng thử miễn phí </a>
                                    <a href="#form_bottom" class="muangay-button scroll-link"> Mua ngay </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img srcset="
                    https://easybooks.vn/wp-content/uploads/2024/06/why-img5.png 2x
                  " alt="" />
                        </div>
                    </div>
                </div>
                <div class="why-row img-left">
                    <div class="row gy-4 d-flex justify-content-center align-items-center">
                        <div class="col-lg-6">
                            <img srcset="
                    https://easybooks.vn/wp-content/uploads/2024/06/why-img6.png 2x
                  " alt="" />
                        </div>
                        <div class="col-lg-6">
                            <div class="why-explain">
                                <div class="why-featured">
                                    <img srcset="
                        https://easybooks.vn/wp-content/uploads/2024/06/why-icon6.png 2x
                      " alt="" />
                                    Làm việc mọi lúc, mọi nơi
                                </div>
                                <div class="why-des">
                                    Phần mềm được vận hành trên nền tảng web, khách hàng dù ở
                                    bất cứ đâu, thời điểm nào hay dùng công cụ nào cũng có thể
                                    truy cập và nhập liệu trên phần mềm.
                                </div>
                                <div class="why-btn">
                                    <a href="#form_bottom" class="form-button scroll-link"> Dùng thử miễn phí </a>
                                    <a href="#form_bottom" class="muangay-button scroll-link"> Mua ngay </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="why-row">
                    <img srcset="
                https://easybooks.vn/wp-content/uploads/2024/06/banner-middle-landing.png 2x
              " alt="" />
                </div>
            </div>
        </div>
    </section>
    <section id="feedback">
        <div class="container">
            <div class="row gy-4 d-flex align-items-stretch">
                <div class="col-lg-4 col-sm-12 col-md-12">
                    <div class="feedback-box">
                        <div class="feedback-info">
                            <img src="
                    https://softdreams.vn/wp-content/uploads/2023/11/go-duc-thanh-1.png
                  " alt="" />
                            <div class="feedback-name">Bùi Phương Thảo</div>
                            <div class="feedback-position">
                                Giám đốc tài chính kiêm kế toán trưởng Cty CP CB gỗ Đức Thành
                            </div>
                            <img srcset="
                    https://easybooks.vn/wp-content/uploads/2024/06/clarity_block-quote-line.png 2x
                  " alt="" />
                            <div class="feedback-detail">
                                Chúng tôi đánh giá cao sự nhiệt tình hỗ trợ chăm sóc khách
                                hàng của EasyBooks. Các bạn luôn xử lý nhanh chóng và kịp thời
                                các vướng mắc của khách hàng. Chi phí vô cùng hợp lý, phần mềm
                                dễ sử dụng.
                            </div>
                            <div class="five-star">
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/star.png 2x
                    " alt="" />
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/star.png 2x
                    " alt="" />
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/star.png 2x
                    " alt="" />
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/star.png 2x
                    " alt="" />
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/star.png 2x
                    " alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-12">
                    <div class="feedback-box">
                        <div class="feedback-info">
                            <img src="
                   https://softdreams.vn/wp-content/uploads/2023/11/tynama.png
                  " alt="" />
                            <div class="feedback-name">Phạm Thị Diễm My</div>
                            <div class="feedback-position">
                                Trưởng phòng khách hàng doanh nghiệp Công ty TNHH Kế toán tư vấn quản lý Tây Nam Á
                            </div>
                            <img srcset="
                    https://easybooks.vn/wp-content/uploads/2024/06/clarity_block-quote-line.png 2x
                  " alt="" />
                            <div class="feedback-detail">
                                EasyBooks là phần mềm kế toán được thiết kế dựa trên nguyên tắc tối giản, giúp người
                                dùng hạn chế tối đa thời gian làm quen và tiếp cận với phần mềm. Softdreams cũng là đơn
                                vị có định hướng phát triển bài bản và dài hạn nên khi sử dụng Easybooks cũng yên tâm về
                                tính bền vững và an toàn của số liệu.
                            </div>
                            <div class="five-star">
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/star.png 2x
                    " alt="" />
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/star.png 2x
                    " alt="" />
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/star.png 2x
                    " alt="" />
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/star.png 2x
                    " alt="" />
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/star.png 2x
                    " alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-12">
                    <div class="feedback-box">
                        <div class="feedback-info">
                            <img src="
                    https://softdreams.vn/wp-content/uploads/2023/11/5.png
                  " alt="" />
                            <div class="feedback-name">Nguyễn Quốc Hoàng Quân</div>
                            <div class="feedback-position">
                                Kế toán dịch vụ
                            </div>
                            <img srcset="
                    https://easybooks.vn/wp-content/uploads/2024/06/clarity_block-quote-line.png 2x
                  " alt="" />
                            <div class="feedback-detail">
                                Phần mềm dễ sử dụng, có đầy đủ các chức năng và nhu cầu của doanh nghiệp về các doanh
                                nghiệp đặc thù. Nhờ có EasyBooks, tôi có thể quản lý 1 lúc nhiều công ty một cách đơn
                                giản và dễ dàng.
                            </div>
                            <div class="five-star">
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/star.png 2x
                    " alt="" />
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/star.png 2x
                    " alt="" />
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/star.png 2x
                    " alt="" />
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/star.png 2x
                    " alt="" />
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/star.png 2x
                    " alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-4">
                <a href="#form_bottom" class="form-button scroll-link"> Nhận tư vấn </a>
            </div>
        </div>
    </section>
    <section id="easybooks_price">
        <div class="container">
            <div class="landing-title">Bảng giá phần mềm kế toán EasyBooks</div>
            <div class="row gy-4 d-flex align-items-stretch">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="price-box">
                        <div class="thongtu-name">
                            <div>Thông tư 88</div>
                        </div>
                        <ul class="nolimit">
                            <li>Không giới hạn người sử dụng</li>
                            <li>Không giới hạn chứng từ</li>
                        </ul>
                        <div class="price-specific">1.000.000 <span>vnd/ năm</span></div>
                        <a href="#form_bottom" class="form-button scroll-link"> Mua ngay </a>
                        <ul class="allow">
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Tiền mặt - ngân hàng
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Mua hàng
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Bán hàng
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Kho
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Hóa đơn điện tử
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Hóa đơn từ thuế
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Tổng hợp
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Lương
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Thuế
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="price-box">
                        <div class="thongtu-name">
                            <div>Thông tư 133 & 200</div>
                        </div>
                        <ul class="nolimit">
                            <li>Không giới hạn người sử dụng</li>
                            <li>
                                < 5000 chứng từ</li>
                        </ul>
                        <div class="price-specific">1.500.000 <span>vnd/ năm</span></div>
                        <a href="#form_bottom" class="form-button scroll-link"> Mua ngay </a>
                        <ul class="allow">
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Tiền mặt - ngân hàng
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Mua hàng
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Bán hàng
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Kho
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Giá thành
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Tổng hợp
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Quản lý hóa đơn
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Hóa đơn điện tử
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Đồng bộ hóa đơn từ thuế
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Thuế
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Công cụ dụng cụ
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Tài sản cố định
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Lương
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Hợp đồng
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Khế ước vay
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="price-box">
                        <div class="thongtu-name">
                            <div>Thông tư 133 & 200</div>
                        </div>
                        <ul class="nolimit">
                            <li>Không giới hạn người sử dụng</li>
                            <li>>= 5000 chứng từ</li>
                        </ul>
                        <div class="price-specific">2.000.000 <span>vnd/ năm</span></div>
                        <a href="#form_bottom" class="form-button scroll-link"> Mua ngay </a>
                        <ul class="allow">
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Tiền mặt - ngân hàng
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Mua hàng
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Bán hàng
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Kho
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Giá thành
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Tổng hợp
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Quản lý hóa đơn
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Hóa đơn điện tử
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Đồng bộ hóa đơn từ thuế
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Thuế
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Công cụ dụng cụ
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Tài sản cố định
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Lương
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Hợp đồng
                            </li>
                            <li>
                                <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/Check-circle.png 2x
                    " alt="" />Khế ước vay
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="note">
                Lưu ý: Phí bản quyền thu 1 lần duy nhất 1.000.000 vnđ (phí bản quyền
                này chưa tính vào gói sản phẩm phần mềm kế toán)
            </div>
        </div>
    </section>
    <section id="form_bottom">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="slogan">
                        “ Với sứ mệnh phụng sự vì lợi ích khách hàng, chúng tôi luôn lắng
                        nghe những vấn đề mà bạn đang gặp phải”
                    </div>
                    <img srcset="https://easybooks.vn/wp-content/uploads/2024/06/banner-bottom-element-left.png 2x"
                        alt="">
                </div>
                <div class="col-lg-6">
                    <form action="<?php bloginfo('template_directory'); ?>/sendmail.php" method="POST"
                        class="form-bottom" id="form_bottom_validate">
                        <div class="form-title">ĐĂNG KÝ TƯ VẤN MIỄN PHÍ!</div>
                        <div class="form-info">
                            <div class="form-row">
                                <input type="text" name="hoten" placeholder="Họ và tên *" class="form-control" />
                            </div>
                            <div class="form-row">
                                <input type="text" name="chucvu" placeholder="Chức vụ *" class="form-control" />
                            </div>
                            <div class="form-row">
                                <input type="text" name="email" placeholder="Email *" class="form-control" />
                            </div>
                            <div class="form-row">
                                <input type="text" name="phonenumber" placeholder="Số điện thoại *"
                                    class="form-control" />
                            </div>
                            <div class="form-row">
                                <input type="text" name="taxcode" placeholder="Mã số thuế *" class="form-control" />
                            </div>
                            <div class="form-row">
                                <select class="form-control" name="source" id="">
                                    <option value="">
                                        Bạn biết đến Easybooks qua kênh nào?
                                    </option>
                                    <option value="website_fanpage_zalo">Website/ Fanpage/ Zalo,...|</option>
                                    <option value="hoithao_sukien">Hội thảo - Sự kiện</option>
                                    <option value="dai_ly_thue">Đại lý thuế</option>
                                    <option value="ke_toan_dich_vu">Kế toán dịch vụ</option>
                                    <option value="cong_tac_vien">Cộng tác viên</option>
                                    <option value="khac">Khác</option>
                                </select>
                            </div>
                            <input type="text" hidden value="landingmua1tang1">
                            <div class="form-row d-flex justify-content-center align-items-center">
                                <div href="" class="form-button"> <button type="submit">NHẬN TƯ VẤN</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="question">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-center align-items-center">
                <div class="col-lg-6">
                    <img srcset="https://easybooks.vn/wp-content/uploads/2024/06/question-left-element.png 2x" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="landing-title">Những câu hỏi thường gặp</div>
                    <div class="faq-box">
                        <div class="faq-item">
                            <div class="faq-question">
                                1. Phần mềm EasyBooks sử dụng online hay offline?
                            </div>
                            <div class="icon-container">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="faq-answer">
                            Phần mềm sử dụng online, người dùng dù ở bất cứ đâu, thời điểm nào hay dùng công cụ nào cũng
                            có thể truy cập và nhập liệu trên phần mềm
                        </div>
                    </div>
                    <div class="faq-box">
                        <div class="faq-item">
                            <div class="faq-question">
                                2. EasyBooks có tích hợp với các phần mềm khác không?
                            </div>
                            <div class="icon-container">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="faq-answer">
                            Có. EasyBooks cho phép kết nối thông minh với: Tổng cục thuế, hóa đơn điện tử, phần mềm bán
                            hàng, chữ ký số,...
                        </div>
                    </div>
                    <div class="faq-box">
                        <div class="faq-item">
                            <div class="faq-question">
                                3. Phần mềm dùng được bao nhiêu sổ?
                            </div>
                            <div class="icon-container">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="faq-answer">
                            EasyBooks có 2 sổ dữ liệu độc lập bao gồm: sổ thuế và sổ nội bộ
                        </div>
                    </div>
                    <div class="faq-box">
                        <div class="faq-item">
                            <div class="faq-question">
                                4. Phần mềm được truy cập bao nhiêu user cùng lúc?
                            </div>
                            <div class="icon-container">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="faq-answer">
                            Không giới hạn người dùng, tạo user theo số lượng nhân viên làm việc. Có thể nhập liệu đồng
                            thời, giúp tiết kiệm tối đa thời gian và công sức
                        </div>
                    </div>
                    <div class="faq-box">
                        <div class="faq-item">
                            <div class="faq-question">
                                5. EasyBooks có dùng được cho nhiều công ty không?
                            </div>
                            <div class="icon-container">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="faq-answer">
                            Có. EasyBooks cung cấp gói kế toán dịch vụ giúp tối ưu chi phí, hỗ trợ làm dữ liệu độc lập
                            cho từng công ty.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="container">
            <div class="row gy-4 d-flex align-items-end">
                <div class="col-lg-8">
                    <div class="footer-col-left">
                        <img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-landing-logo.png 2x" alt="">
                        <div class="footer-slogan">EASYBOOKS - PHẦN MỀM KẾ TOÁN ƯU VIỆT CHO MỌI DOANH NGHIỆP</div>
                        <ul class="footer-info">
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-landing-icon1.png 2x"
                                    alt="">Trụ sở chính: Nhà khách ATS, số 8 Phạm Hùng, Phường Mễ Trì, Quận Nam Từ Liêm,
                                Hà Nội</li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-landing-icon1.png 2x"
                                    alt="">Chi nhánh: Số H.54 đường Dương Thị Giang, Phường Tân Thới Nhất, Quận 12, TP.
                                Hồ Chí Minh</li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-landing-icon2.png 2x"
                                    alt="">easybooks.softdreams@gmail.com</li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-landing-icon3.png 2x"
                                    alt="">0981 772 388</li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-landing-icon4.png 2x"
                                    alt="">https://easybooks.vn/</li>
                        </ul>
                        <style>
                            .all-product {
                                border-radius: 6px;
                                background: rgba(255, 255, 255, 0.30);
                                color: #FFF;
                                font-size: 14px;
                                font-style: normal;
                                line-height: 20px;
                                padding: 8px 18px;
                                display: flex;
                                gap: 10px;
                                align-items: center;
                                position: relative;
                                cursor: pointer;
                            }

                            .all-product-show {
                                position: absolute;
                                background: #fff;
                                bottom: 130%;
                                left: 0;
                                width: 60rem;
                                padding: 30px 50px;
                                border-radius: 10px;
                                display: none;
                                border: 1px solid #ccc;

                            }

                            .all-product-show .software-row {
                                padding: 10px;
                                gap: 20px;
                            }

                            .all-product-show .solution-box {
                                display: flex;
                                justify-content: space-between;
                                gap: 20px;
                                flex-wrap: wrap;

                            }

                            .all-product-show .solution-box .solution-col {
                                display: flex;
                                flex-direction: column;
                                gap: 20px;
                            }

                            .all-product-show .software-row .software .software-title {
                                color: var(--Gray-800, #040F3E);
                            }

                            .all-product-show .software-row .software .software-des {
                                color: var(--Gray-900, #030b2c);
                                font-family: Averta-regular;

                            }

                            /* .all-product-show .software-row .software {
                                padding: 5px 40px 5px 20px;

                            } */

                            .all-product-show .software-row:hover {
                                background: var(--primary-5, #fdeee9);
                            }

                            .all-product-show .solution-nav-title {
                                color: var(--Gray-800, #040F3E);
                                font-size: 18px;
                            }

                            .all-product-show ul {
                                margin: 0;
                                padding: 0;
                            }

                            .all-product-show .list-software {
                                display: flex;
                                flex-direction: column;
                            }

                            .arrow-up {
                                transform: rotate(180deg);
                                transition: transform 0.3s;
                            }

                            .arrow-down {
                                transform: rotate(0deg);
                                transition: transform 0.3s;
                            }
                        </style>
                        <div class="all-product">
                            Tất cả sản phẩm của Softdreams <i class="fa fa-caret-down arrowclass"
                                aria-hidden="true"></i>
                            <div class="all-product-show">
                                <div class="solution-box">
                                    <div class="solution-col">
                                        <div class="solution-nav-title">
                                            Tài chính kế toán
                                        </div>
                                        <ul class="list-software">
                                            <a target="_blank" href="https://easybooks.vn/">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="http://softdreams.vn/wp-content/uploads/2023/10/Group-2.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyBooks</div>
                                                        <div class="software-des">
                                                            Phần mềm kế toán
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a target="_blank" href="https://easyinvoice.vn/">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="http://softdreams.vn/wp-content/uploads/2023/10/Frame.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyInvoice</div>
                                                        <div class="software-des">
                                                            Phần mềm hóa đơn điện tử
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a target="_blank" href="https://easy-pit.easyinvoice.com.vn/">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="http://softdreams.vn/wp-content/uploads/2023/10/Frame-1.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyPIT</div>
                                                        <div class="software-des">
                                                            Khấu trừ thuế TNCN
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a target="_blank"
                                                href="https://easyinvoice.vn/softdreams-ra-mat-giai-phap-in-ve-dien-tu-easyticket/">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="http://softdreams.vn/wp-content/uploads/2023/10/Frame-2.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyTicket</div>
                                                        <div class="software-des">
                                                            Phần mềm đặt vé điện tử
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="solution-col">
                                        <div class="solution-nav-title">
                                            Quản trị điều hành
                                        </div>
                                        <ul class="list-software">
                                            <a target="_blank" href="https://easyhrm.vn/">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="http://softdreams.vn/wp-content/uploads/2023/10/Frame-3.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyHRM</div>
                                                        <div class="software-des">
                                                            Phần mềm quản trị nhân lực
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a target="_blank" href="https://easyposs.vn/">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="http://softdreams.vn/wp-content/uploads/2023/10/Frame-4.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyPOS</div>
                                                        <div class="software-des">
                                                            Phần mềm bán hàng
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a target="_blank" href="https://easyca.vn/">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="http://softdreams.vn/wp-content/uploads/2023/10/Frame-5.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyCA</div>
                                                        <div class="software-des">
                                                            Phần mềm chữ ký số
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a target="_blank" href="https://easydocs.vn/">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="http://softdreams.vn/wp-content/uploads/2023/10/Group-3.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyDocs</div>
                                                        <div class="software-des">
                                                            Phần mềm hợp đồng điện tử
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img style="width: 24px"
                                                        src="http://softdreams.vn/wp-content/uploads/2023/11/Group-2609314.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyCRM</div>
                                                        <div class="software-des">
                                                            Phần mềm quản lý khách hàng
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="solution-col">
                                        <div class="solution-nav-title">
                                            Dự án CNTT
                                        </div>
                                        <ul class="list-software">
                                            <a href="#">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="http://softdreams.vn/wp-content/uploads/2023/10/Group.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyKYC</div>
                                                        <div class="software-des">
                                                            Xác thực khách hàng
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a target="_blank" href="https://cic.gov.vn/">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="http://softdreams.vn/wp-content/uploads/2023/10/Frame-6.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">CICB</div>
                                                        <div class="software-des">
                                                            Kết nối khách hàng vay
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <ul class="footer-list-sns">
                        <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-right-icon1.png 2x"
                                alt=""></li>
                        <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-right-icon2.png 2x"
                                alt=""></li>
                        <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-right-icon3.png 2x"
                                alt=""></li>
                        <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-right-icon4.png 2x"
                                alt=""></li>
                        <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-right-icon5.png 2x"
                                alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <style>
        /* nút zalo, gọi, mess  */
        #button-contact-vr {
            position: fixed;
            bottom: 0;
            z-index: 99999;
        }

        /*phone*/
        #button-contact-vr .button-contact {
            position: relative;
            margin-top: -5px;
        }

        #button-contact-vr .button-contact .phone-vr {
            position: relative;
            visibility: visible;
            background-color: transparent;
            width: 90px;
            height: 90px;
            cursor: pointer;
            z-index: 11;
            -webkit-backface-visibility: hidden;
            -webkit-transform: translateZ(0);
            transition: visibility .5s;
            left: 0;
            bottom: 0;
            display: block;
        }

        .phone-vr-circle-fill {
            width: 65px;
            height: 65px;
            top: 12px;
            left: 12px;
            position: absolute;
            box-shadow: 0 0 0 0 #c31d1d;
            background-color: rgba(230, 8, 8, 0.7);
            border-radius: 50%;
            border: 2px solid transparent;
            -webkit-animation: phone-vr-circle-fill 2.3s infinite ease-in-out;
            animation: phone-vr-circle-fill 2.3s infinite ease-in-out;
            transition: all .5s;
            -webkit-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            -webkit-animuiion: zoom 1.3s infinite;
            animation: zoom 1.3s infinite;
        }

        .phone-vr-img-circle {
            background-color: #e60808;
            width: 40px;
            height: 40px;
            line-height: 40px;
            top: 25px;
            left: 25px;
            position: absolute;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
            animation: phone-vr-circle-fill 1s infinite ease-in-out;
        }

        .phone-vr-img-circle a {
            display: block;
            line-height: 37px;
        }

        .phone-vr-img-circle img {
            max-height: 25px;
            max-width: 27px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
        }

        @-webkit-keyframes phone-vr-circle-fill {
            0% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
            }

            10% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
            }

            20% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg);
            }

            30% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
            }

            40% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg);
            }

            50% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
            }

            100% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
            }
        }

        @-webkit-keyframes zoom {
            0% {
                transform: scale(.9)
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 15px transparent
            }

            100% {
                transform: scale(.9);
                box-shadow: 0 0 0 0 transparent
            }
        }

        @keyframes zoom {
            0% {
                transform: scale(.9)
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 15px transparent
            }

            100% {
                transform: scale(.9);
                box-shadow: 0 0 0 0 transparent
            }
        }

        .phone-bar a {
            position: absolute;
            margin-top: -65px;
            left: 30px;
            z-index: -1;
            color: #fff;
            font-size: 16px;
            padding: 7px 15px 7px 50px;
            border-radius: 100px;
            white-space: nowrap;
        }

        .phone-bar a:hover {
            opacity: 0.8;
            color: #fff;
        }

        @media(max-width: 736px) {
            .phone-bar {
                display: none;
            }
        }

        #zalo-vr .phone-vr-circle-fill {
            box-shadow: 0 0 0 0 #2196F3;
            background-color: rgba(33, 150, 243, 0.7);
        }

        #zalo-vr .phone-vr-img-circle {
            background-color: #2196F3;
        }

        #viber-vr .phone-vr-circle-fill {
            box-shadow: 0 0 0 0 #714497;
            background-color: rgba(113, 68, 151, 0.8);
        }

        #viber-vr .phone-vr-img-circle {
            background-color: #714497;
        }

        #contact-vr .phone-vr-circle-fill {
            box-shadow: 0 0 0 0 #2196F3;
            background-color: rgba(33, 150, 243, 0.7);
        }

        #contact-vr .phone-vr-img-circle {
            background-color: #2196F3;
        }

        div#whatsapp-vr .phone-vr .phone-vr-circle-fill {
            box-shadow: 0 0 0 0 #1fd744;
            background-color: rgb(35 217 72 / 70%);
        }

        div#whatsapp-vr .phone-vr .phone-vr-img-circle {
            background: #1cd741;
        }

        div#whatsapp-vr .phone-vr .phone-vr-img-circle img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 50%;
        }

        #fanpage-vr img {
            max-width: 35px;
            max-height: 35px;
        }

        #fanpage-vr .phone-vr-img-circle {
            background-color: #1877f2;
        }

        #fanpage-vr .phone-vr-circle-fill {
            box-shadow: 0 0 0 0 rgb(24 119 242 / 65%);
            background-color: rgb(24 119 242 / 70%);
        }

        /*css all in one*/
        #gom-all-in-one .button-contact {
            transition: 1.6s all;
            -moz-transition: 1.6s all;
            -webkit-transition: 1.6s all;
        }

        #button-contact-vr.active #gom-all-in-one .button-contact {
            margin-left: -100%;
        }

        #all-in-one-vr .phone-bar {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 100%;
            color: #fff;
            padding: 5px 15px 5px 48px;
            border-radius: 50px;
            margin-left: -64px;
            width: max-content;
            cursor: pointer;
        }

        #popup-showroom-vr,
        div#popup-form-contact-vr {
            display: none;
        }

        #popup-showroom-vr.active,
        div#popup-form-contact-vr.active {
            display: block;
            position: fixed;
            width: 100%;
            height: 100vh;
            top: 0;
            left: 0;
            z-index: 99999;
        }

        .bg-popup-vr {
            position: absolute;
            left: 0;
            top: 0;
            background: rgb(51 51 51 / 50%);
            width: 100%;
            height: 100vh;
        }

        .content-popup-vr {
            background: #fff;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 95%;
            border-radius: 5px;
            box-shadow: 0 0 14px 5px rgb(0 0 0 / 49%);
            max-width: 600px;
            display: flex;
        }

        .content-popup-vr input,
        .content-popup-vr textarea {
            width: 100%;
            max-height: 100px;
            min-height: 38px;
            border: 1px solid #b1b1b1;
            margin-bottom: 10px;
            padding: 0 7px;
            background: #fff;
        }

        .content-popup-vr label {
            width: 100%;
        }

        .content-popup-vr input.wpcf7-form-control.wpcf7-submit {
            max-width: fit-content;
            padding: 5px 32px 2px;
            background: #2196f3;
            border: 0;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            margin: 10px auto 0;
            display: block;
            box-shadow: 0px 0px 5px 1px rgb(0 0 0 / 29%);
            font-weight: 400;
            min-height: auto;
            line-height: 30px;
        }

        .content-popup-vr input.wpcf7-form-control.wpcf7-submit:hover {
            opacity: 0.7;
        }

        .content-popup-vr .close-popup-vr {
            font-family: sans-serif;
            width: 23px;
            height: 23px;
            background: black;
            position: absolute;
            top: -10px;
            right: -10px;
            color: #fff;
            text-align: center;
            line-height: 23px;
            font-size: 17px;
            border-radius: 50%;
            cursor: pointer;
        }

        .content-popup-vr .close-popup-vr:hover {
            background: #b50000;
        }

        .content-popup-vr .content-popup-div-vr {
            width: 100%;
            padding: 25px;
        }

        .content-popup-vr .content-popup-img-vr {
            width: 100%;
            max-width: 45%;
            border-radius: 10px 0 0 10px;
            overflow: hidden;
        }

        #loco-top,
        #loco-bottom {
            display: block;
        }

        #loco-top .content-popup-img-vr,
        div#popup-form-contact-vr #loco-bottom .content-popup-img-vr {
            max-width: 100%;
            text-align: center;
        }

        #contact-showroom.no-event a {
            pointer-events: none;
        }

        .content-popup-vr .content-popup-div-vr ul {
            color: #333;
            list-style: none;
            font-size: 15px;
        }

        @media(max-width: 673px) {
            div#popup-form-contact-vr .content-popup-vr {
                display: block;
            }

            div#popup-form-contact-vr .content-popup-vr .content-popup-img-vr {
                max-width: 100%;
                display: none;
            }
        }

        #button-contact-vr {
            transform: scale(0.8);
        }

        #button-contact-vr {
            margin: -10px;
        }

        #button-contact-vr {
            bottom: 1%;
        }
    </style>
    <div style="position: fixed;" id="button-contact-vr" class="">
        <div id="gom-all-in-one">
            <div id="fanpage-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a target="_blank" href="https://www.facebook.com/www.easybooks.vn">
                            <img alt="Fanpage"
                                src="https://easyhrm.vn/wp-content/plugins/button-contact-vr/img/Facebook.png" />
                        </a>
                    </div>
                </div>
            </div>
            <div id="zalo-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a target="_blank" href="https://zalo.me/0766074666">
                            <img alt="Zalo"
                                src="https://easyhrm.vn/wp-content/plugins/button-contact-vr/img/zalo.png" />
                        </a>
                    </div>
                </div>
            </div>
            <div id="phone-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a href="tel:0981772388">
                            <img alt="Phone"
                                src="https://easyhrm.vn/wp-content/plugins/button-contact-vr/img/phone.png" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#form_validate").validate({
                rules: {
                    hoten: {
                        required: true,
                        minlength: 6
                    },
                    chucvu: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    phonenumber: {
                        required: true,
                        minlength: 9,
                        maxlength: 12
                    },
                    taxcode: {
                        required: true,
                        minlength: 6,
                    },
                },
                messages: {
                    hoten: {
                        required: "Vui lòng nhập tên!",
                        minlength: "Hãy nhập họ và tên",
                    },
                    chucvu: "Vui lòng nhập chức vụ!",
                    email: {
                        required: "Vui lòng nhập vào email",
                        email: "Email sai định dạng, hãy nhập lại!"
                    },
                    phonenumber: {
                        required: "Vui lòng nhập số điện thoại!",
                        minlength: "Độ dài số điện thoại tối thiểu 9 kí tự",
                        maxlength: "Độ dài số điện thoại tối đa 12 kí tự",
                    },
                    taxcode: {
                        required: "Vui lòng nhập mã số thuế!",
                        minlength: "Độ dài tối thiểu 6 kí tự",
                    }
                }
            });
        });
        $(document).ready(function () {
            $("#form_bottom_validate").validate({
                rules: {
                    hoten: {
                        required: true,
                        minlength: 6
                    },
                    chucvu: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    phonenumber: {
                        required: true,
                        minlength: 9,
                        maxlength: 12
                    },
                    taxcode: {
                        required: true,
                        minlength: 6,
                    },
                },
                messages: {
                    hoten: {
                        required: "Vui lòng nhập tên!",
                        minlength: "Hãy nhập họ và tên",
                    },
                    chucvu: "Vui lòng nhập chức vụ!",
                    email: {
                        required: "Vui lòng nhập vào email",
                        email: "Email sai định dạng, hãy nhập lại!"
                    },
                    phonenumber: {
                        required: "Vui lòng nhập số điện thoại!",
                        minlength: "Độ dài số điện thoại tối thiểu 9 kí tự",
                        maxlength: "Độ dài số điện thoại tối đa 12 kí tự",
                    },
                    taxcode: {
                        required: "Vui lòng nhập mã số thuế!",
                        minlength: "Độ dài tối thiểu 6 kí tự",
                    }
                }
            });
        });
        $(document).ready(function () {
            $("#form_validate2").validate({
                rules: {
                    hoten: {
                        required: true,
                        minlength: 6
                    },
                    chucvu: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    phonenumber: {
                        required: true,
                        minlength: 9,
                        maxlength: 12
                    },
                    taxcode: {
                        required: true,
                        minlength: 6,
                    },
                },
                messages: {
                    hoten: {
                        required: "Vui lòng nhập tên!",
                        minlength: "Hãy nhập họ và tên",
                    },
                    chucvu: "Vui lòng nhập chức vụ!",
                    email: {
                        required: "Vui lòng nhập vào email",
                        email: "Email sai định dạng, hãy nhập lại!"
                    },
                    phonenumber: {
                        required: "Vui lòng nhập số điện thoại!",
                        minlength: "Độ dài số điện thoại tối thiểu 9 kí tự",
                        maxlength: "Độ dài số điện thoại tối đa 12 kí tự",
                    },
                    taxcode: {
                        required: "Vui lòng nhập mã số thuế!",
                        minlength: "Độ dài tối thiểu 6 kí tự",
                    }
                }
            });
        });
   
        $(document).ready(function () {
            $('.scroll-link').on('click', function (e) {
                console.log($('header').outerHeight());
                e.preventDefault();
                // Lấy vị trí của phần tử cần scroll đến
                const targetId = $(this).attr('href').substring(1);
                const targetElement = $('#' + targetId);
                // Scroll đến vị trí của phần tử
                $('html, body').animate({
                    scrollTop: targetElement.offset().top
                }, 500);
            });
        });
         // Question Easydocs
         $(document).ready(function () {
            const $faqItems = $(".faq-item");
            $faqItems.on("click", function () {
                const $item = $(this);
                const $answer = $item.next();
                const $icon = $item.find("i");
                const $faqBox = $item.closest(".faq-box");
                $(".faq-box").removeClass("faqBoxActive");
                $faqItems.not($item).each(function () {
                    const $otherAnswer = $(this).next();
                    const $otherIcon = $(this).find("i");
                    $otherAnswer
                        .removeClass("active")
                        .css("max-height", "0")
                        .css("margin-top", 0);
                    $otherIcon.removeClass("active");

                });

                $answer.toggleClass("active");
                $icon.toggleClass("active");
                $answer.css("max-height", $answer.hasClass("active") ? $answer[0].scrollHeight + "px" : "0").css("margin-top", $answer.hasClass("active") ? "1rem" : "0");
                $faqBox.addClass($answer.hasClass("active") ? "faqBoxActive" : "");
            });

        });
        $('.all-product').on('click', function () {
            $('.all-product-show').toggle();
            $('.arrowclass').toggleClass('arrow-up');
        });
 </script>
</body>


</html>
<?php
/*
 Template Name: Landing Page: Giải pháp đơn giản hóa công tác kế toán
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải pháp đơn giản hóa công tác kế toán</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="Shortcut Icon" href="https://easybooks.vn/wp-content/uploads/2020/07/favicon-eb.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;0,6..12,1000;1,6..12,200;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        ul li {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        ul {
            padding: 0;
        }

        #hero_section {
            background: var(--Red-2, #FEEEEC);
            padding: 80px 0;
        }

        .header {
            display: flex;
            justify-content: space-between;
        }

        .left-header {
            display: flex;
            gap: 44px;
            justify-content: center;
            align-items: center;
        }

        .right-header {
            color: var(--Blue-500, #2951A0);
            font-family: Nunito Sans;
            font-size: 32px;
            font-style: normal;
            font-weight: 900;
            line-height: 150%;
            /* 48px */
        }

        .hero-title {
            color: #F05141;
            font-family: Nunito Sans;
            font-size: 36px;
            font-style: normal;
            font-weight: 900;
            line-height: 150%;
            text-align: center;
            margin-top: 80px;
            /* 54px */
            margin-bottom: 50px;
        }

        .hero-title span {
            color: var(--Blue-500, #2951A0);
            font-family: Nunito Sans;
            font-size: 36px;
            font-style: normal;
            font-weight: 900;
            line-height: 150%;
            text-align: center;
            /* 54px */
        }

        .hero-content-left {}

        .hero-content-left ul {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .hero-content-left ul li {
            display: flex;
            gap: 16px;
            align-items: center;
            color: var(--Blue-900, #112243);

            /* Text/18/Bold */
            font-family: Nunito Sans;
            font-size: 18px;
            font-style: normal;
            font-weight: 700;
            line-height: 150%;
            /* 27px */
        }

        .hero-content-right {
            padding: 40px;
            border-radius: 16px;
            border: 1px solid var(--Gray-50, #E8E9EA);
            background: #FFF;
        }

        .form-title {
            color: var(--Red, #F05141);

            /* Heading/24/Extra bold */
            font-family: Nunito Sans;
            font-size: 24px;
            font-style: normal;
            font-weight: 800;
            line-height: 150%;
            margin-bottom: 32px;
            /* 36px */
        }

        .form-label {
            color: var(--gray-700, #374151);

            /* Text/16/Semi bold */
            font-family: Nunito Sans;
            font-size: 16px;
            font-style: normal;
            font-weight: 600;
            line-height: 150%;
            /* 24px */
        }

        .form-row {
            margin-bottom: 24px;
        }

        .form-control input,
        .form-control select {
            color: var(--gray-500, #6B7280);

            /* Text/16/Medium */
            font-family: Nunito Sans;
            font-size: 16px;
            font-style: normal;
            font-weight: 500;
            line-height: 150%;
            /* 24px */
            border: none;
            width: 100%;
        }

        .form-row button {
            display: flex;
            padding: 13px 189px;
            justify-content: center;
            align-items: center;
            border-radius: 6px;
            background: var(--Red, #F05141);
            color: var(--white, #FFF);
            border: none;
            width: 100%;
            /* Text/20/Extra bold */
            font-family: Nunito Sans;
            font-size: 20px;
            font-style: normal;
            font-weight: 800;
            line-height: 150%;
            /* 30px */
        }

        #difficult_of_enterprise {
            padding: 80px 0;
        }

        .lp-title {
            color: var(--Red, #F05141);
            text-align: center;
            font-family: Nunito Sans;
            font-size: 32px;
            font-style: normal;
            font-weight: 800;
            line-height: 150%;
            /* 48px */
            text-transform: uppercase;
            margin-bottom: 40px;
        }

        .lp-title span {
            color: var(--Blue-500, #2951A0);

            /* Heading/24/Bold */
            font-family: Nunito Sans;
            font-size: 24px;
            font-style: normal;
            font-weight: 700;
            line-height: 150%;
            /* 36px */
        }

        .primary-btn {
            display: flex;
            padding: 13px 25px;
            justify-content: center;
            align-items: center;
            border-radius: 6px;
            background: var(--Red, #F05141);
            color: var(--white, #FFF);

            /* Text/20/Extra bold */
            font-family: Nunito Sans;
            font-size: 20px;
            font-style: normal;
            font-weight: 800;
            line-height: 150%;
            /* 30px */
        }

        .primary-btn:hover {
            opacity: 0.8;
        }

        .btn-box {
            display: flex;
            justify-content: center;
        }

        .featured {
            padding: 80px 0;
        }

        .content-box .title {
            color: var(--Orange-500, #EA5626);
            font-family: Nunito Sans;
            font-size: 28px;
            font-style: normal;
            font-weight: 700;
            line-height: 150%;
            /* 42px */
        }

        .content-box .des {
            color: #000;

            /* Text/18/Medium */
            font-family: Nunito Sans;
            font-size: 18px;
            font-style: normal;
            font-weight: 500;
            line-height: 150%;
            /* 27px */
            margin-bottom: 32px;
            margin-top: 16px;
        }

        #easybooks_feedback {
            padding-top: 80px;
        }

        #easybooks_partner {
            padding: 80px 0;
        }

        .list-partner {
            margin-top: 80px;
        }

        .partner-box {
            border-radius: 4px;
            border: 1px solid var(--Primary-5, #FDEEE9);
            background: #FFF;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 120px;
            margin-bottom: 10px;
        }

        .partner-box img {
            max-width: 100%;
        }

        .feedback-right {
            display: flex;
            flex-direction: column;
            gap: 60px;
        }

        .feedback-box {
            border-radius: 8px;
            border: 2px solid var(--Primary-2, #EA5626);
            background: #FFF;
            padding: 22px 24px;

        }

        .feedback-box .star {
            display: flex;
            flex-direction: row-reverse;
        }

        .feedback-box .name {
            color: #000;
            font-family: Nunito Sans;
            font-size: 18px;
            font-style: normal;
            font-weight: 700;
            line-height: 150%;
            /* 27px */
            margin-top: 14px;
        }

        .feedback-box .position {
            color: #66738C;
            /* Text/14/Medium */
            font-family: Nunito Sans;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: 150%;
            /* 21px */
            margin-bottom: 16px;
        }

        .feedback-box .content {
            color: var(--Gray-3, #6E7A8E);
            font-family: Nunito Sans;
            font-size: 16px;
            font-style: normal;
            font-weight: 600;
            /* 29.52px */
            text-align: justify;
        }

        #form_register {
            background-image: url('https://easybooks.vn/wp-content/uploads/2023/12/Group-2609460.png');
            background-size: cover;
            display: flex;
            align-items: center;
            padding: 80px 0;
        }

        footer {
            padding: 80px 0;
        }

        .right-footer .address {
            color: var(--Secondary-1, #172D58);
            font-family: Nunito Sans;
            font-size: 20px;
            font-style: normal;
            font-weight: 600;
            line-height: 164%;
        }

        .right-footer .address span {
            color: var(--Primary-2, #EA5626);
            font-family: Nunito Sans;
            font-size: 20px;
            font-style: normal;
            font-weight: 800;
            line-height: 164%;
            /* 32.8px */
        }

        .slide-bottom-to-show {
            animation: slide-bottom-to-show 1s linear forwards;
            -webkit-animation: slide-bottom-to-show 1s linear forwards;
        }

        @keyframes slide-bottom-to-show {
            0% {
                transform: translateY(300px);
                opacity: 0;
                -webkit-transform: translateY(300px);
                -moz-transform: translateY(300px);
                -ms-transform: translateY(300px);
                -o-transform: translateY(300px);
            }

            100% {
                transform: translateY(0px);
                opacity: 1;
                -webkit-transform: translateY(0px);
                -moz-transform: translateY(0px);
                -ms-transform: translateY(0px);
                -o-transform: translateY(0px);
            }
        }

        @media(max-width: 1400px) {

            .left-footer,
            .right-footer {
                width: 100%;
            }

        }

        @media(max-width: 1024px) {

            .footer,
            .header {
                display: block;
            }

            .left-footer,
            .left-header {
                margin-bottom: 20px;
            }

            .right-header {
                text-align: center;
                font-size: 26px;
            }

            .hero-title,
            .hero-title span {
                font-size: 26px;
            }

            .lp-title {
                font-size: 26px;
            }
        }

        @media(max-width: 425px) {
            .form-row button {
                padding: 10px;
            }
        }
    </style>
    <style>
        <style>html,
        body {
            position: relative;
            height: 100%;
        }

        .swiper {
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper-slide {
            /* display: block !important; */
            background: none;
        }

        /* .swiper-button-next,
                                .swiper-button-prev {
                                    top: 25%;
                                }

                                .swiper-button-next {
                                    right: 16%;
                                }

                                @media (max-width: 1400px) {
                                    .swiper-button-next {
                                    right: 3%;
                                }
                                }

                                .swiper-button-prev {
                                    left: 0;
                                } */

        :root {
            --swiper-navigation-size: 20px;
        }
    </style>
    </style>

<body>
    <section id="hero_section">
        <div class="container">
            <div class="header">
                <div class="left-header">
                    <img style="max-width: 100%" src="https://easybooks.vn/wp-content/uploads/2023/12/Frame.png" alt="">
                    <img style="max-width: 100%" src="https://easybooks.vn/wp-content/uploads/2023/12/Frame-1.png"
                        alt="">
                </div>
                <div class="right-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                        <path
                            d="M25.04 31.6597C19.1646 31.6521 13.5321 29.3147 9.37761 25.1602C5.22311 21.0057 2.88576 15.3732 2.87814 9.49786C2.87814 7.74219 3.57558 6.05843 4.81703 4.81698C6.05848 3.57553 7.74224 2.87809 9.49791 2.87809C9.86969 2.87526 10.2408 2.909 10.606 2.97883C10.959 3.03107 11.3061 3.11783 11.6421 3.23786C11.8785 3.3208 12.0891 3.46399 12.2532 3.65329C12.4172 3.84258 12.529 4.07142 12.5775 4.31717L14.5491 12.9517C14.6022 13.186 14.5958 13.43 14.5305 13.6612C14.4651 13.8925 14.3429 14.1037 14.1749 14.2756C13.9878 14.4771 13.9735 14.4915 12.2034 15.4125C13.6209 18.5221 16.1079 21.0194 19.2117 22.4496C20.1471 20.6651 20.1615 20.6507 20.363 20.4637C20.5349 20.2957 20.7461 20.1735 20.9773 20.1081C21.2086 20.0428 21.4526 20.0364 21.6869 20.0895L30.3214 22.061C30.5593 22.1162 30.7792 22.2311 30.9605 22.3947C31.1418 22.5583 31.2784 22.7654 31.3575 22.9964C31.479 23.338 31.5705 23.6895 31.631 24.047C31.6889 24.4086 31.7178 24.7744 31.7173 25.1407C31.6908 26.8888 30.9737 28.5555 29.7227 29.7769C28.4717 30.9982 26.7883 31.6751 25.04 31.6597Z"
                            fill="#2951A0" />
                    </svg> 1900 33 69 - 1900 57 57 54
                </div>
            </div>
            <div class="hero-title">
                GIẢI PHÁP ĐƠN GIẢN HÓA CÔNG TÁC KẾ TOÁN <br> <span>EASYBOOKS 11 NĂM PHÁT TRIỂN</span>
            </div>
            <div class="hero-content">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="hero-content-left">
                            <ul>
                                <li><img style="max-width: 100%"
                                        src="https://easybooks.vn/wp-content/uploads/2023/12/Group-2609373.png"
                                        alt="">Tự động nhập liệu chứng từ, tiết kiệm 85% thời gian nhập liệu</li>
                                <li><img style="max-width: 100%"
                                        src="https://easybooks.vn/wp-content/uploads/2023/12/Group-2609287.png"
                                        alt="">Kết nối thông minh với Tổng Cục Thuế, hóa đơn điện tử giúp lập chứng từ
                                    nhanh chóng</li>
                                <li><img style="max-width: 100%"
                                        src="https://easybooks.vn/wp-content/uploads/2023/12/Group-2609288.png"
                                        alt="">Tự động lập báo cáo chính xác, tức thời mọi lúc mọi nơi</li>
                                <li><img style="max-width: 100%"
                                        src="https://easybooks.vn/wp-content/uploads/2023/12/Group-2609292.png"
                                        alt="">Tự động phát hiện hóa đơn của Doanh nghiệp có rủi ro về thuế, sai sót và
                                    xuất hóa đơn ngay trên phần mềm</li>
                                <li><img style="max-width: 100%"
                                        src="https://easybooks.vn/wp-content/uploads/2023/12/Group-2609290.png"
                                        alt="">Tự động cảnh báo, nhắc nhở thông minh hạn nộp BCTC, thu nợ, trả nợ, hàng
                                    tồn kho tối thiểu và sắp hết hạn</li>
                                <li><img style="max-width: 100%"
                                        src="https://easybooks.vn/wp-content/uploads/2023/12/Group-2609291.png"
                                        alt="">Giao diện thân thiện, dễ sử dụng, sử dụng ngay sau 10 phút làm quen</li>
                            </ul>
                            <style>
                                .small-banner {
                                    position: relative;
                                }

                                .small-banner .primary-btn {
                                    border: 1px solid var(--Orange-500, #EA5626);
                                    background: var(--Orange-50, #FDEEE9);
                                    color: var(--Orange-500, #EA5626);
                                    cursor: pointer;
                                }
                            </style>
                            <div class="small-banner">
                                <div style="position: absolute; bottom: 34%; left: 8%"
                                    class="btn-box justify-content-start">
                                    <a target="_blank" href="https://dangkydemo.easybooks.vn/">
                                        <div class="primary-btn">
                                            NHẬN DEMO NGAY
                                        </div>
                                    </a>
                                </div>
                                <img style="max-width: 100%; margin-top: 30px"
                                    src="https://easybooks.vn/wp-content/uploads/2023/12/Group-2609374-1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <form id="trial_form">
                            <div class="hero-content-right">
                                <div class="form-title text-center">
                                    ĐĂNG KÝ TRẢI NGHIỆM MIỄN PHÍ
                                </div>
                                <div class="form-row">
                                    <div class="form-label">Họ và tên</div>
                                    <div class="form-control">
                                        <input name="hoten" type="text" placeholder="Nhập họ và tên">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-label">Chức vụ</div>
                                    <div class="form-control">
                                        <input name="chucvu" type="text" placeholder="Nhập chức vụ">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-label">Email</div>
                                    <div class="form-control">
                                        <input name="email" type="text" placeholder="Nhập Email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-label">Số điện thoại</div>
                                    <div class="form-control">
                                        <input name="phonenumber" type="text" placeholder="Nhập số điện thoại">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-label">Mã số thuế</div>
                                    <div class="form-control">
                                        <input name="taxcode" type="text" placeholder="Nhập mã số thuế">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div id="loading" class="load-2">
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                    </div>
                                    <button class="submit_form_ungtuyen" type="submit">ĐĂNG KÝ NGAY</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="difficult_of_enterprise">
        <div class="container">
            <div class="lp-title animation_slide_bottom_to_show">
                Thấu hiểu những khó khăn
                mà doanh nghiệp đang gặp phải về kế toán
            </div>
            <img class="animation_slide_bottom_to_show" style="max-width: 100%; margin-bottom: 80px"
                src="https://easybooks.vn/wp-content/uploads/2023/12/Group-2609352.png" alt="">
        </div>
        <div class="btn-box">
            <a class="scroll-link" href="#hero_section">
                <div class="primary-btn">
                    KHẮC PHỤC TẠI ĐÂY
                </div>
            </a>
        </div>
    </section>
    <section id="the_best_solution">
        <div class="container">
            <div class="lp-title animation_slide_bottom_to_show">
                BỘ GIẢI PHÁP QUẢN TRỊ TÀI CHÍNH - KẾ TOÁN - THUẾ TỐT NHẤT <br>
                <span>
                    Hệ sinh thái toàn diện đáp ứng đầy đủ các nghiệp vụ kế toán, lĩnh vực kinh doanh
                </span>
            </div>
        </div>
        <div class="featured animation_slide_bottom_to_show">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="content-box">
                            <div class="title">
                                1. Nhập liệu thông minh
                            </div>
                            <div class="des">
                                Cho phép đồng bộ hóa đơn mua vào và bán ra từ cơ quan thuế, bao gồm cả hoá đơn
                                điện tử từ máy tính tiền về phần mềm hoàn toàn miễn phí, từ đó kế toán có thể lập các
                                chứng từ liên quan một cách nhanh chóng và chính xác.
                            </div>
                            <div class="btn-box justify-content-start">
                                <a class="scroll-link" href="#hero_section">
                                    <div class="primary-btn">
                                        DÙNG THỬ MIỄN PHÍ
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img-box">
                            <img style="max-width: 100%"
                                src="https://easybooks.vn/wp-content/uploads/2023/12/Group-2609272.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="featured animation_slide_bottom_to_show" style="background: var(--Red-2, #FEEEEC); ">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="img-box">
                            <img style="max-width: 100%"
                                src="https://easybooks.vn/wp-content/uploads/2023/12/Group-2609275.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content-box">
                            <div class="title">
                                2. Tích hợp HĐĐT với nhiều nhà cung cấp
                                khác nhau như:
                            </div>
                            <div class="des">
                                EasyInvoice, Viettel, BKAV... cho phép người dùng phát hành hóa đơn trực tiếp từ
                                phần mềm một cách nhanh chóng, tiện lợi.
                            </div>
                            <div class="btn-box justify-content-start">
                                <a class="scroll-link" href="#hero_section">
                                    <div class="primary-btn">
                                        DÙNG THỬ MIỄN PHÍ
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="featured animation_slide_bottom_to_show">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="content-box">
                            <div class="title">
                                3. Truy cập đồng thời từ nhiều tài khoản:
                            </div>
                            <div class="des">
                                Nổi bật hơn cả là chức năng phân quyền người dùng cho phép cùng một lúc nhiều
                                tài khoản có thể truy cập và đồng thời có thể nhập liệu giúp tiết kiệm thời gian và
                                công sức.
                            </div>
                            <div class="btn-box justify-content-start">
                                <a class="scroll-link" href="#hero_section">
                                    <div class="primary-btn">
                                        DÙNG THỬ MIỄN PHÍ
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img-box">
                            <img style="max-width: 100%"
                                src="https://easybooks.vn/wp-content/uploads/2023/12/Group-2609304.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="featured animation_slide_bottom_to_show" style="background: var(--Red-2, #FEEEEC); ">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="img-box">
                            <img style="max-width: 100%"
                                src="https://easybooks.vn/wp-content/uploads/2023/12/Group-2609285.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content-box">
                            <div class="title">
                                4. Tiện ích thông minh
                            </div>
                            <div class="des">
                                Cho phép kiểm tra đối chiếu chứng từ số sách trong quá trình nhập liệu từ
                                đỗ tránh sai sót khi tạo lập báo cáo. <br>
                                Cảnh báo MST bỏ trốn hoặc bị cưỡng chế. EasyBooks cho phép khôi phục
                                dữ liệu <br>
                                Cho phép lưu nháp chứng từ
                            </div>
                            <div class="btn-box justify-content-start">
                                <a class="scroll-link" href="#hero_section">
                                    <div class="primary-btn">
                                        DÙNG THỬ MIỄN PHÍ
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="featured animation_slide_bottom_to_show">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="content-box">
                            <div class="title">
                                5. Làm việc mọi lúc, mọi nơi
                            </div>
                            <div class="des">
                                Phần mềm được vận hành trên nền tảng web, khách hàng dù ở bất cứ đâu, thời điểm nào hay
                                dùng công cụ nào cũng có thể truy cập và nhập liệu trên
                                phần mềm.
                            </div>
                            <div class="btn-box justify-content-start">
                                <a class="scroll-link" href="#hero_section">
                                    <div class="primary-btn">
                                        DÙNG THỬ MIỄN PHÍ
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img-box">
                            <img style="max-width: 100%"
                                src="https://easybooks.vn/wp-content/uploads/2023/12/Group-2609354.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="featured animation_slide_bottom_to_show" style="background: var(--Red-2, #FEEEEC); ">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="img-box">
                            <img style="max-width: 100%"
                                src="https://easybooks.vn/wp-content/uploads/2023/12/Group-2609266.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content-box">
                            <div class="title">
                                6. Phân tích tài chính doanh nghiệp
                            </div>
                            <div class="des">
                                Thông qua các biểu đồ phân tích trực quan, giúp Chủ doanh nghiệp chủ động
                                phân tích và nắm bắt tình hình tài chính, từ đó dự đoán tương lai và xây dựng
                                kế hoạch phát triển doanh nghiệp
                            </div>
                            <div class="btn-box justify-content-start">
                                <a class="scroll-link" href="#hero_section">
                                    <div class="primary-btn">
                                        DÙNG THỬ MIỄN PHÍ
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="easybooks_feedback">
        <div class="container">
            <div class="lp-title animation_slide_bottom_to_show">CHUYÊN GIA, KHÁCH HÀNG NÓI GÌ VỀ EASYBOOKS</div>
            <div class="content animation_slide_bottom_to_show">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">

                        <body>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="https://easybooks.vn/wp-content/uploads/2023/12/feedback1.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://easybooks.vn/wp-content/uploads/2023/12/z5007663982152_30b1d5b5bc67c5f2acb04a142dfe970f.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </body>
                    </div>
                    <style>
                        .feedback-box {
                            position: relative;
                        }

                        .feedback-box .avatar {
                            position: absolute;
                            border-radius: 50%;
                            width: 75px;
                            height: 75px;
                            top: -20%;
                        }
                    </style>
                    <div class="col-lg-6">
                        <div class="feedback-right">
                            <div class="feedback-box">
                                <img src="https://softdreams.vn/wp-content/uploads/2023/11/go-duc-thanh-1.png"
                                    class="avatar" alt="">
                                <div class="star">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25"
                                        fill="none">
                                        <path
                                            d="M12.6 17.3362L16.9575 19.8462C17.7555 20.3062 18.732 19.6262 18.522 18.7662L17.367 14.0462L21.2205 10.8662C21.924 10.2862 21.546 9.18617 20.622 9.11617L15.5505 8.70617L13.566 4.24617C13.209 3.43617 11.991 3.43617 11.634 4.24617L9.64948 8.69617L4.57798 9.10617C3.65398 9.17617 3.27598 10.2762 3.97948 10.8562L7.83298 14.0362L6.67798 18.7562C6.46798 19.6162 7.44448 20.2962 8.24248 19.8362L12.6 17.3362Z"
                                            fill="#FFB800" />
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                                        viewBox="0 0 26 25" fill="none">
                                        <path
                                            d="M12.6 17.3362L16.9575 19.8462C17.7555 20.3062 18.732 19.6262 18.522 18.7662L17.367 14.0462L21.2205 10.8662C21.924 10.2862 21.546 9.18617 20.622 9.11617L15.5505 8.70617L13.566 4.24617C13.209 3.43617 11.991 3.43617 11.634 4.24617L9.64948 8.69617L4.57798 9.10617C3.65398 9.17617 3.27598 10.2762 3.97948 10.8562L7.83298 14.0362L6.67798 18.7562C6.46798 19.6162 7.44448 20.2962 8.24248 19.8362L12.6 17.3362Z"
                                            fill="#FFB800" />
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                                        viewBox="0 0 26 25" fill="none">
                                        <path
                                            d="M12.6 17.3362L16.9575 19.8462C17.7555 20.3062 18.732 19.6262 18.522 18.7662L17.367 14.0462L21.2205 10.8662C21.924 10.2862 21.546 9.18617 20.622 9.11617L15.5505 8.70617L13.566 4.24617C13.209 3.43617 11.991 3.43617 11.634 4.24617L9.64948 8.69617L4.57798 9.10617C3.65398 9.17617 3.27598 10.2762 3.97948 10.8562L7.83298 14.0362L6.67798 18.7562C6.46798 19.6162 7.44448 20.2962 8.24248 19.8362L12.6 17.3362Z"
                                            fill="#FFB800" />
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                                        viewBox="0 0 26 25" fill="none">
                                        <path
                                            d="M12.6 17.3362L16.9575 19.8462C17.7555 20.3062 18.732 19.6262 18.522 18.7662L17.367 14.0462L21.2205 10.8662C21.924 10.2862 21.546 9.18617 20.622 9.11617L15.5505 8.70617L13.566 4.24617C13.209 3.43617 11.991 3.43617 11.634 4.24617L9.64948 8.69617L4.57798 9.10617C3.65398 9.17617 3.27598 10.2762 3.97948 10.8562L7.83298 14.0362L6.67798 18.7562C6.46798 19.6162 7.44448 20.2962 8.24248 19.8362L12.6 17.3362Z"
                                            fill="#FFB800" />
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                                        viewBox="0 0 26 25" fill="none">
                                        <path
                                            d="M12.6 17.3362L16.9575 19.8462C17.7555 20.3062 18.732 19.6262 18.522 18.7662L17.367 14.0462L21.2205 10.8662C21.924 10.2862 21.546 9.18617 20.622 9.11617L15.5505 8.70617L13.566 4.24617C13.209 3.43617 11.991 3.43617 11.634 4.24617L9.64948 8.69617L4.57798 9.10617C3.65398 9.17617 3.27598 10.2762 3.97948 10.8562L7.83298 14.0362L6.67798 18.7562C6.46798 19.6162 7.44448 20.2962 8.24248 19.8362L12.6 17.3362Z"
                                            fill="#FFB800" />
                                    </svg>
                                </div>
                                <div class="name">Chị Bùi Phương Thảo</div>
                                <div class="position">Giám đốc tài chính kiêm kế toán trưởng Cty CP CB gỗ Đức Thành
                                </div>
                                <div class="content">“Chúng tôi đánh giá cao sự nhiệt tình hỗ trợ chăm sóc khách hàng
                                    của EasyBooks. Các bạn luôn xử lý nhanh chóng và kịp thời các vướng mắc của khách
                                    hàng. Chi phí vô cùng hợp lý, phần mềm dễ sử dụng.
                                    .”</div>
                            </div>
                            <div class="feedback-box">
                                <img src="https://softdreams.vn/wp-content/uploads/2023/11/tynama.png"
                                    class="avatar" alt="">
                                <div class="star">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25"
                                        fill="none">
                                        <path
                                            d="M12.6 17.3362L16.9575 19.8462C17.7555 20.3062 18.732 19.6262 18.522 18.7662L17.367 14.0462L21.2205 10.8662C21.924 10.2862 21.546 9.18617 20.622 9.11617L15.5505 8.70617L13.566 4.24617C13.209 3.43617 11.991 3.43617 11.634 4.24617L9.64948 8.69617L4.57798 9.10617C3.65398 9.17617 3.27598 10.2762 3.97948 10.8562L7.83298 14.0362L6.67798 18.7562C6.46798 19.6162 7.44448 20.2962 8.24248 19.8362L12.6 17.3362Z"
                                            fill="#FFB800" />
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                                        viewBox="0 0 26 25" fill="none">
                                        <path
                                            d="M12.6 17.3362L16.9575 19.8462C17.7555 20.3062 18.732 19.6262 18.522 18.7662L17.367 14.0462L21.2205 10.8662C21.924 10.2862 21.546 9.18617 20.622 9.11617L15.5505 8.70617L13.566 4.24617C13.209 3.43617 11.991 3.43617 11.634 4.24617L9.64948 8.69617L4.57798 9.10617C3.65398 9.17617 3.27598 10.2762 3.97948 10.8562L7.83298 14.0362L6.67798 18.7562C6.46798 19.6162 7.44448 20.2962 8.24248 19.8362L12.6 17.3362Z"
                                            fill="#FFB800" />
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                                        viewBox="0 0 26 25" fill="none">
                                        <path
                                            d="M12.6 17.3362L16.9575 19.8462C17.7555 20.3062 18.732 19.6262 18.522 18.7662L17.367 14.0462L21.2205 10.8662C21.924 10.2862 21.546 9.18617 20.622 9.11617L15.5505 8.70617L13.566 4.24617C13.209 3.43617 11.991 3.43617 11.634 4.24617L9.64948 8.69617L4.57798 9.10617C3.65398 9.17617 3.27598 10.2762 3.97948 10.8562L7.83298 14.0362L6.67798 18.7562C6.46798 19.6162 7.44448 20.2962 8.24248 19.8362L12.6 17.3362Z"
                                            fill="#FFB800" />
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                                        viewBox="0 0 26 25" fill="none">
                                        <path
                                            d="M12.6 17.3362L16.9575 19.8462C17.7555 20.3062 18.732 19.6262 18.522 18.7662L17.367 14.0462L21.2205 10.8662C21.924 10.2862 21.546 9.18617 20.622 9.11617L15.5505 8.70617L13.566 4.24617C13.209 3.43617 11.991 3.43617 11.634 4.24617L9.64948 8.69617L4.57798 9.10617C3.65398 9.17617 3.27598 10.2762 3.97948 10.8562L7.83298 14.0362L6.67798 18.7562C6.46798 19.6162 7.44448 20.2962 8.24248 19.8362L12.6 17.3362Z"
                                            fill="#FFB800" />
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                                        viewBox="0 0 26 25" fill="none">
                                        <path
                                            d="M12.6 17.3362L16.9575 19.8462C17.7555 20.3062 18.732 19.6262 18.522 18.7662L17.367 14.0462L21.2205 10.8662C21.924 10.2862 21.546 9.18617 20.622 9.11617L15.5505 8.70617L13.566 4.24617C13.209 3.43617 11.991 3.43617 11.634 4.24617L9.64948 8.69617L4.57798 9.10617C3.65398 9.17617 3.27598 10.2762 3.97948 10.8562L7.83298 14.0362L6.67798 18.7562C6.46798 19.6162 7.44448 20.2962 8.24248 19.8362L12.6 17.3362Z"
                                            fill="#FFB800" />
                                    </svg>
                                </div>
                                <div class="name">Chị Phạm Thị Diễm My</div>
                                <div class="position">Trưởng phòng khách hàng doanh nghiệp Công ty TNHH Kế toán tư vấn
                                    quản lý Tây Nam Á</div>
                                <div class="content">“EasyBooks là phần mềm kế toán được thiết kế dựa trên nguyên tắc
                                    tối giản, giúp người dùng hạn chế tối đa thời gian làm quen và tiếp cận với phần
                                    mềm. Softdreams cũng là đơn vị có định hướng phát triển bài bản và dài hạn nên khi
                                    sử dụng Easybooks cũng yên tâm về tính bền vững và an toàn của số liệu.
                                    .”</div>
                            </div>
                            <div class="feedback-box">
                                <img src="https://softdreams.vn/wp-content/uploads/2023/11/5.png"
                                    class="avatar" alt="">
                                <div class="star">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25"
                                        fill="none">
                                        <path
                                            d="M12.6 17.3362L16.9575 19.8462C17.7555 20.3062 18.732 19.6262 18.522 18.7662L17.367 14.0462L21.2205 10.8662C21.924 10.2862 21.546 9.18617 20.622 9.11617L15.5505 8.70617L13.566 4.24617C13.209 3.43617 11.991 3.43617 11.634 4.24617L9.64948 8.69617L4.57798 9.10617C3.65398 9.17617 3.27598 10.2762 3.97948 10.8562L7.83298 14.0362L6.67798 18.7562C6.46798 19.6162 7.44448 20.2962 8.24248 19.8362L12.6 17.3362Z"
                                            fill="#FFB800" />
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                                        viewBox="0 0 26 25" fill="none">
                                        <path
                                            d="M12.6 17.3362L16.9575 19.8462C17.7555 20.3062 18.732 19.6262 18.522 18.7662L17.367 14.0462L21.2205 10.8662C21.924 10.2862 21.546 9.18617 20.622 9.11617L15.5505 8.70617L13.566 4.24617C13.209 3.43617 11.991 3.43617 11.634 4.24617L9.64948 8.69617L4.57798 9.10617C3.65398 9.17617 3.27598 10.2762 3.97948 10.8562L7.83298 14.0362L6.67798 18.7562C6.46798 19.6162 7.44448 20.2962 8.24248 19.8362L12.6 17.3362Z"
                                            fill="#FFB800" />
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                                        viewBox="0 0 26 25" fill="none">
                                        <path
                                            d="M12.6 17.3362L16.9575 19.8462C17.7555 20.3062 18.732 19.6262 18.522 18.7662L17.367 14.0462L21.2205 10.8662C21.924 10.2862 21.546 9.18617 20.622 9.11617L15.5505 8.70617L13.566 4.24617C13.209 3.43617 11.991 3.43617 11.634 4.24617L9.64948 8.69617L4.57798 9.10617C3.65398 9.17617 3.27598 10.2762 3.97948 10.8562L7.83298 14.0362L6.67798 18.7562C6.46798 19.6162 7.44448 20.2962 8.24248 19.8362L12.6 17.3362Z"
                                            fill="#FFB800" />
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                                        viewBox="0 0 26 25" fill="none">
                                        <path
                                            d="M12.6 17.3362L16.9575 19.8462C17.7555 20.3062 18.732 19.6262 18.522 18.7662L17.367 14.0462L21.2205 10.8662C21.924 10.2862 21.546 9.18617 20.622 9.11617L15.5505 8.70617L13.566 4.24617C13.209 3.43617 11.991 3.43617 11.634 4.24617L9.64948 8.69617L4.57798 9.10617C3.65398 9.17617 3.27598 10.2762 3.97948 10.8562L7.83298 14.0362L6.67798 18.7562C6.46798 19.6162 7.44448 20.2962 8.24248 19.8362L12.6 17.3362Z"
                                            fill="#FFB800" />
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                                        viewBox="0 0 26 25" fill="none">
                                        <path
                                            d="M12.6 17.3362L16.9575 19.8462C17.7555 20.3062 18.732 19.6262 18.522 18.7662L17.367 14.0462L21.2205 10.8662C21.924 10.2862 21.546 9.18617 20.622 9.11617L15.5505 8.70617L13.566 4.24617C13.209 3.43617 11.991 3.43617 11.634 4.24617L9.64948 8.69617L4.57798 9.10617C3.65398 9.17617 3.27598 10.2762 3.97948 10.8562L7.83298 14.0362L6.67798 18.7562C6.46798 19.6162 7.44448 20.2962 8.24248 19.8362L12.6 17.3362Z"
                                            fill="#FFB800" />
                                    </svg>
                                </div>
                                <div class="name">Anh Nguyễn Quốc Hoàng Quân</div>
                                <div class="position">Kế toán dịch vụ</div>
                                <div class="content">“Phần mềm dễ sử dụng, có đầy đủ các chức năng và nhu cầu của doanh
                                    nghiệp về các doanh nghiệp đặc thù. Nhờ có EasyBooks, tôi có thể quản lý 1 lúc nhiều
                                    công ty một cách đơn giản và dễ dàng.
                                    ”</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="easybooks_partner">
        <div class="container">
            <img class="animation_slide_bottom_to_show" style="max-width: 100%"
                src="https://easybooks.vn/wp-content/uploads/2023/12/Group-2609362-1.png" alt="">
            <div class="list-partner animation_slide_bottom_to_show">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/image-14.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/image-32.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/image-34.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/image-19.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/image-27.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/311112-08-2019_020443.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/image-25.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/image-20.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/image-24.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/image-18.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/image-17.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/387738945_824805226008625_5397499404133957620_n.png"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/image-15.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/columbia-asia-logo-01.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/2560px-Baker_McKenzie_logo_2016.png"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/image-29.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/image-30.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/logo.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/image-31.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/image-16.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/logo-benh-vien-dai-hoc-y-duoc-1.png"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/image-33.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/image-26.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="partner-box">
                            <img src="https://easybooks.vn/wp-content/uploads/2023/12/Logo_small_96.png" alt="">
                        </div>
                    </div>

                </div>
            </div>
            <div style="margin-top: 40px" class="btn-box">
                <a class="scroll-link" href="#hero_section">
                    <div class="primary-btn">DÙNG THỬ MIỄN PHÍ</div>
                </a>
            </div>
        </div>
    </section>
    <section id="form_register">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <form id="trial_form2" class="animation_slide_bottom_to_show">
                        <div class="hero-content-right">
                            <div class="form-title text-center">
                                ĐĂNG KÝ TRẢI NGHIỆM MIỄN PHÍ
                            </div>
                            <div class="form-row ">
                                <div class="form-label">Họ và tên</div>
                                <div class="form-control">
                                    <input name="hoten" type="text" placeholder="Nhập họ và tên">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-label">Chức vụ</div>
                                <div class="form-control">
                                    <input name="chucvu" type="text" placeholder="Nhập chức vụ">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-label">Email</div>
                                <div class="form-control">
                                    <input name="email" type="text" placeholder="Nhập Email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-label">Số điện thoại</div>
                                <div class="form-control">
                                    <input name="phonenumber" type="text" placeholder="Nhập số điện thoại">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-label">Mã số thuế</div>
                                <div class="form-control">
                                    <input name="taxcode" type="text" placeholder="Nhập mã số thuế">
                                </div>
                            </div>
                            <div class="form-row">
                                <style>
                                    .load-2 {
                                        text-align: center;
                                        display: none;
                                    }

                                    .line {
                                        display: inline-block;
                                        width: 15px;
                                        height: 15px;
                                        border-radius: 15px;
                                        background-color: #4b9cdb;
                                    }

                                    .load-2 .line:nth-last-child(1) {
                                        animation: loadingB 1.5s 1s infinite;
                                    }

                                    .load-2 .line:nth-last-child(2) {
                                        animation: loadingB 1.5s 0.5s infinite;
                                    }

                                    .load-2 .line:nth-last-child(3) {
                                        animation: loadingB 1.5s 0s infinite;
                                    }

                                    @keyframes loadingB {
                                        0 {
                                            width: 15px;
                                        }

                                        50% {
                                            width: 35px;
                                        }

                                        100% {
                                            width: 15px;
                                        }
                                    }

                                    #openModalBtn:hover,
                                    #openModalBtn2:hover {
                                        cursor: pointer;
                                        opacity: 0.8;
                                    }
                                </style>
                                <div id="loading" class="load-2">
                                    <div class="line"></div>
                                    <div class="line"></div>
                                    <div class="line"></div>
                                </div>
                                <button type="submit" class="submit_form_ungtuyen">ĐĂNG KÝ NGAY</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img class="animation_slide_bottom_to_show" style="max-width: 100%"
                        src="https://easybooks.vn/wp-content/uploads/2023/12/Group-2609459-1.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="header footer">
                <div class="left-header left-footer">
                    <img style="max-width: 100%" src="https://easybooks.vn/wp-content/uploads/2023/12/Frame.png" alt="">
                    <img style="max-width: 100%" src="https://easybooks.vn/wp-content/uploads/2023/12/Frame-1.png"
                        alt="">
                </div>
                <div class="right-header right-footer">
                    <div class="address"><span>Trụ sở chính:</span> Nhà khách ATS, số 8 Phạm Hùng, Phường Mễ Trì, Quận
                        Nam Từ Liêm,
                        HN </div>
                    <div class="address"><span>Chi nhánh:</span> H46 Đường A3, Tân Thới Nhất, Quận 12, Thành phố HCM
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {});
    var swiper = new Swiper(".mySwiper", {
        autoplay: {
            delay: 3000,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<script>
    $(document).ready(function () {
        // Bắt sự kiện click cho các liên kết có lớp "scroll-link"
        $('.scroll-link').on('click', function (e) {
            e.preventDefault();
            // Lấy vị trí của phần tử cần scroll đến
            const targetId = $(this).attr('href').substring(1);
            const targetElement = $('#' + targetId);
            // Scroll đến vị trí của phần tử
            $('html, body').animate({
                scrollTop: targetElement.offset().top - $('.header').outerHeight() + 240
            }, 500);
        });
    });
</script>
<script>
    function scrollMouse1(classFirst, nameClassAdd) {
        $(classFirst).addClass("hidden");
        $(classFirst).each(function () {
            var spaceTop = $(this).offset().top;
            var chieucao = $(this).height();
            var spaceBottom = $(document).height() - $(this).offset().top - chieucao;
            var scrollBottom =
                $(document).height() + $(window).height() - $(window).scrollTop();
            var scrollSpaceTop = $(window).scrollTop();
            if (
                spaceBottom < scrollBottom - $(window).height() &&
                spaceTop < scrollSpaceTop + $(window).height()
            ) {
                $(this).addClass(nameClassAdd);
            }
        });
    }
    var width = $(window).width();

    if (width > 767) {
        $(window).scroll(function () {
            scrollMouse1(".animation_slide_bottom_to_show", "slide-bottom-to-show");
        });
    }
</script>
<script>
    $(document).ready(function () {
        //khai báo nút submit form
        var submitt = $("#trial_form").find("button[type='submit']");

        //khi thực hiện kích vào nút submit
        submitt.click(function () {
            //khai báo các biến
            var hoten = $("input[name='hoten']").val();
            var email = $("input[name='email']").val();
            var phonenumber = $("input[name='phonenumber']").val();
            var taxcode = $("input[name='taxcode']").val();
            //
            if (hoten == "") {
                alert("Vui lòng nhập tên");
                return false;
            }
            if (email == "") {
                alert("Vui lòng nhập email");
                return false;
            }

            if (phonenumber == "") {
                alert("Vui lòng nhập điện thoại");
                return false;
            }
            if (taxcode == "") {
                alert("Vui lòng nhập mã số thuế");
                return false;
            }
            if (phonenumber.length < 10) {
                alert("Vui lòng số điện thoại chính xác!");
                return false;
            }
            if (taxcode.length < 10) {
                alert("Vui lòng nhập đầy đủ mã số thuế!");
                return false;
            }
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email) == false) {
                alert("Địa chỉ Email không hợp lệ, hãy nhập lại");
                return false;
            }
            $("#loading").show();
            $('.submit_form_ungtuyen').hide();

            // $("#formdkdt img").css("display", "block");

            var data = $("form#trial_form").serialize();

            $.ajax({
                type: "POST",
                url: "<?php bloginfo('template_directory') ?>/sendmail.php",
                data: data,
                success: function (data) {
                    console.log(data);
                    $("#trial_form").html(data);
                },
            });
            return false;
        });
    });
</script>
<script>
    $(document).ready(function () {
        //khai báo nút submit form
        var submitt2 = $("#trial_form2").find("button[type='submit']");

        //khi thực hiện kích vào nút submit
        submitt2.click(function () {
            //khai báo các biến
            var hoten = $("#trial_form2 input[name='hoten']").val();
            var email = $("#trial_form2 input[name='email']").val();
            var phonenumber = $("#trial_form2 input[name='phonenumber']").val();
            var taxcode = $("#trial_form2 input[name='taxcode']").val();
            //
            if (hoten == "") {
                alert("Vui lòng nhập tên");
                return false;
            }
            if (email == "") {
                alert("Vui lòng nhập email");
                return false;
            }

            if (phonenumber == "") {
                alert("Vui lòng nhập điện thoại");
                return false;
            }
            if (taxcode == "") {
                alert("Vui lòng nhập mã số thuế");
                return false;
            }
            if (phonenumber.length < 10) {
                alert("Vui lòng số điện thoại chính xác!");
                return false;
            }
            if (taxcode.length < 10) {
                alert("Vui lòng nhập đầy đủ mã số thuế!");
                return false;
            }
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email) == false) {
                alert("Địa chỉ Email không hợp lệ, hãy nhập lại");
                return false;
            }
            $("#trial_form2 #loading").show();
            $('#trial_form2 .submit_form_ungtuyen').hide();

            // $("#formdkdt img").css("display", "block");

            var data = $("form#trial_form2").serialize();

            $.ajax({
                type: "POST",
                url: "<?php bloginfo('template_directory') ?>/sendmail.php",
                data: data,
                success: function (data) {
                    console.log(data);
                    $("#trial_form2").html(data);
                },
            });
            return false;
        });
    });
</script>


</html>
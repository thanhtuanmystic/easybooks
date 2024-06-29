<?php
/*
 Template Name: Landing Page: Cảnh báo rủi ro khi thực hiện các giải pháp cân đối chi phí cho BCTC năm 2023
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Cảnh báo rủi ro khi thực hiện các giải pháp cân đối chi phí cho BCTC năm 2023</title>

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box
    }

    ul li {
        list-style: none;
    }

    a {
        text-decoration: none;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    #event_info {
        padding: 80px 0;
        background: var(--Blue-5, #E7EDF5);
    }

    .mb40 {
        margin-bottom: 40px;
    }

    .event-info-left {
        border-radius: 16px;
        background: #FFF;
        padding: 32px;
    }

    .event-info-left .event-name {
        color: var(--Secondary-1, #172D58);

        /* Heading/32/Extra Bold */
        font-family: "Nunito Sans";
        font-size: 32px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }

    .event-info-left .event-name span {
        background: var(--Gradient-2, linear-gradient(90deg, #C00B02 0%, #EEA27A 100%));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .author-name {
        color: #172D58;

        /* Text/16/Medium */
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: 150%;
        /* 24px */
    }

    .author-name span {
        color: var(--Secondary-1, #172D58);

        /* Text/16/Extra Bold */
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 800;
        line-height: 150%;
    }

    .host {
        color: var(--Red-2, #E11B1C);
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: italic;
        font-weight: 700;
        line-height: 150%;
        /* 24px */
        margin-top: 16px;
    }

    .author-name {
        ul {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }
    }

    .event-info-right {
        border-radius: 16px;
        background: #FFF;
        padding: 32px
    }

    .event-info-right .time-left {
        border-radius: 8px;
        background: var(--Red-5, #FCE8E8);
        padding: 10px 30px;
        margin-bottom: 24px;
    }

    .event-info-right .time-left .time-left-text {
        color: var(--Secondary-1, #172D58);
        text-align: center;

        /* Text/14/Bold */
        font-family: "Nunito Sans";
        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        line-height: 150%;
        /* 21px */
    }

    .event-info-right .time-left .count-down {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 24px;
    }

    .number-time,
    .seperate {
        color: var(--Red-2, #E11B1C);

        /* Text/20/Extra Bold */
        font-family: "Nunito Sans";
        font-size: 20px;
        font-style: normal;
        font-weight: 900;
        line-height: normal;
    }

    .number-text {
        color: var(--Gray-3, #6E7A8E);

        /* Text/10/Medium */
        font-family: "Nunito Sans";
        font-size: 10px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    .count-down .row2 {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .event-info-right-row {
        display: flex;
        align-items: center;
        gap: 16px;
        color: var(--Secondary-1, #172D58);

        /* Text/16/Extra Bold */
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 800;
        line-height: 150%;
        /* 24px */
    }

    .event-btn {
        display: flex;
        padding: 10px 20px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 8px;
        border: 1px solid var(--Blue-2, #0E4B9F);
        background: var(--Blue-2, #0E4B9F);
        color: #FFF;
        text-align: center;

        /* Text/16/Bold */
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 150%;
        /* 24px */
    }

    #event_useful_content {
        padding: 80px 0 40px 0;
    }

    .event-title {
        color: var(--Blue-1, #0A3571);
        text-align: center;

        /* Heading/32/Extra Bold */
        font-family: "Nunito Sans";
        font-size: 32px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }

    .useful-box {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 40px;
    }

    .useful-box .content {
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 40px;
        width: 90%;
    }

    .useful-text {
        color: var(--Gray-2, #263856);
        text-align: center;

        /* Text/20/Bold */
        font-family: "Nunito Sans";
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    #event_speaker {
        background-image: url(https://easybooks.vn/wp-content/uploads/2024/02/back-blue.png);
        background-size: cover;
        padding: 80px;
    }

    .event_speaker-title {
        color: #FFF;
        text-align: center;

        /* Heading/32/Extra Bold */
        font-family: "Nunito Sans";
        font-size: 32px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }

    .speaker-name {
        padding: 6px 50px;
        flex-shrink: 0;
        border-radius: 26px;
        background: #FFF;
        color: var(--Red-2, #E11B1C);

        /* Heading/24/Extra Bold */
        font-family: "Nunito Sans";
        font-size: 24px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
        text-align: center;
    }

    .speaker-position {
        color: #FFF;
        text-align: center;

        /* Text/16/Bold */
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 150%;
        /* 24px */
    }

    .speaker-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 14px;
    }

    #event_timeline {
        padding: 80px;
    }

    .timeline-row {
        padding: 20px 40px;
        flex-shrink: 0;
        display: flex;
        gap: 40px;
        align-items: center;
    }

    .timeline-row .stt {
        text-align: center;

        /* Heading/24/Extra Bold */
        font-family: "Nunito Sans";
        font-size: 24px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;

        background: var(--Geadient-5, linear-gradient(257deg, #FEC437 -0.07%, #EF4941 41.12%));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .timeline-row .content {
        color: var(--Gray-1, #151F2F);

        /* Heading/24/Medium */
        font-family: "Nunito Sans";
        font-size: 24px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    #event_form {
        padding: 80px 0;

    }

    #event_form form {
        padding: 32px;
        border-radius: 16px;
        background: var(--Blue-5, #E7EDF5);
    }

    #event_form form .form-row {
        margin-bottom: 32px;
    }

    #event_form form .form-label {
        color: var(--gray-700, #374151);

        /* Text/16/Semi bold */
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: 150%;
        /* 24px */
    }

    #event_form form .form-label span {
        color: var(--Red-2, #E11B1C);

    }

    #event_form form input,
    #event_form form select,
    #event_form form textarea {
        border-radius: 6px;
        border: 1px solid var(--gray-300, #D1D5DB);
        background: var(--white, #FFF);

        /* shadow/sm */
        box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.05);
        color: var(--gray-500, #6B7280);

        /* Text/16/Medium */
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: 150%;
        /* 24px */
    }

    footer {
        padding: 80px 0;
        background: var(--Blue-5, #E7EDF5);
        margin-top: 40px;
    }

    .footer-text {
        color: var(--Primary-2, #EA5626);
        font-family: "Nunito Sans";
        font-size: 20px;
        font-style: normal;
        font-weight: 800;
        line-height: 164%;
        /* 32.8px */
    }

    .footer-text span {
        color: var(--Secondary-1, #172D58);
    }

    .center-footer {
        display: flex;
        align-items: center;
    }

    #dat_cho {
        background-color: transparent !important;
        color: #fff !important;
        border: none !important;
        width: 100%;
    }

    .event-btn:hover {
        opacity: 0.8;
    }

    #event_register {
        padding: 80px 0;
        background: var(--Blue-5, #E7EDF5);
    }

    .step-row {
        display: flex;
        gap: 30px;
    }

    .step-row .step-number {
        width: 64px;
        height: 64px;
        flex-shrink: 0;
        background: var(--Blue-2, #0E4B9F);
        color: #FFF;
        text-align: center;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        /* Heading/24/Extra Bold */
        font-family: "Nunito Sans";
        font-size: 24px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }

    .step-content {
        color: var(--Gray-1, #151F2F);

        /* Heading/24/Medium */
        font-family: "Nunito Sans";
        font-size: 24px;
        font-style: normal;
        font-weight: 500;
        line-height: revert;
    }

    .step-content span {
        display: inline-flex;
        padding: 8px 16px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 8px;
        background: var(--Geadient-5, linear-gradient(257deg, #FEC437 -0.07%, #EF4941 41.12%));
        color: #FFF;
        text-align: center;
        font-family: "Nunito Sans";
        font-size: 24px;
        font-style: normal;
        font-weight: 900;
        line-height: normal;
    }

    .register-left {
        display: flex;
        flex-direction: column;
        gap: 50px;
    }

    .qr-text {
        color: var(--Gray-1, #151F2F);
        text-align: center;

        /* Heading/24/Medium */
        font-family: "Nunito Sans";
        font-size: 24px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    /* Responsive */

    /* Mobile and Tablet */
    @media (max-width: 1024px) {
        #event_timeline {
            padding: 40px 0;
        }

        #event_speaker {
            padding: 40px 0;
        }

        .useful-box {
            margin-bottom: 20px;
        }

        .useful-box>img {
            width: 100%;
        }

        #event_info {
            padding: 40px 0;
        }

        footer {
            padding: 40px 0;
        }

        #event_form {
            padding: 40px 0;
        }

        #event_useful_content {
            padding: 40px 0;
        }

        .event-title {
            font-size: 26px;
        }

        .event_speaker-title {
            font-size: 26px;
        }

        .step-row {
            flex-direction: column;
        }

        .step-number {
            display: none !important;
        }
    }

    /* Tablet */
    @media (min-width: 740px) and (max-width: 1023px) {}

    /* Mobile */
    @media (max-width:740px) {
        .event-info-left .event-name {
            font-size: 26px;
        }

    }
</style>

<body>
    <section id="header">
        <img src="http://softdreams.vn/wp-content/uploads/2024/03/Rectangle-3418.png" alt="">
    </section>
    <section id="event_info">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="event-info-left">
                        <div class="event-name mb-4">
                            CẢNH BÁO RỦI RO KHI THỰC HIỆN CÁC GIẢI PHÁP
                            CÂN ĐỐI CHI PHÍ CHO BÁO CÁO TÀI CHÍNH 2023
                        </div>
                        <div class="author-name d-flex align-items-center">
                            <img src="https://easybooks.vn/wp-content/uploads/2024/02/Group-2609397.png" alt="">
                            <ul>

                                
                                <li><span>- Mr. Nguyễn Hải</span> - CPA Việt Nam, CPT Việt Nam, Thạc sỹ kế toán,
                                    Chuyên gia tư vấn thuế</li>
                                <li><span>- Mr. Vũ Đức Thịnh</span> - CPA Việt Nam, CPT Việt Nam, CEO ATC Việt Nam</li>
								<li><span>- Mr. Vũ Văn Luật</span> - Chủ tịch HĐQT CTCP Đầu tư Công nghệ và
                                    Thương mại Softdreams</li>

                            </ul>
                        </div>
                        <div class="author-name">
                            Kính mời Quý Anh/Chị đăng ký tham dự sự kiện để có cơ hội gặp gỡ, giao lưu cùng chuyên gia,
                            chủ doanh nghiệp hàng đầu
                            thuộc lĩnh vực <span>Tài chính - Kế toán - Thuế </span>
                        </div>
                        <div class="host">
                            Sự kiện do EasyBooks hợp tác cùng ATC Việt Nam tổ chức
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event-info-right">
                        <div class="time-left">
                            <div class="time-left-text">
                                Chỉ còn
                            </div>
                            <div class="count-down">
                                <div class="row2">
                                    <div id="days" class="number-time">09</div>
                                    <div class="number-text">Ngày</div>
                                </div>
                                <div class="seperate">:</div>
                                <div class="row2">
                                    <div id="hours" class="number-time">09</div>
                                    <div class="number-text">Giờ</div>
                                </div>
                                <div class="seperate">:</div>
                                <div class="row2">
                                    <div id="minutes" class="number-time">09</div>
                                    <div class="number-text">Phút</div>
                                </div>
                                <div class="seperate">:</div>

                                <div class="row2">
                                    <div id="seconds" class="number-time">09</div>
                                    <div class="number-text">Giây</div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex" style="flex-direction: column; gap: 16px; margin-bottom: 34px">
                            <div class="event-info-right-row">
                                <img src="https://easybooks.vn/wp-content/uploads/2024/02/Group-2609345.png" alt="">20h
                                - 22h, Thứ Bảy, 06/04/2024
                            </div>
                            <div class="event-info-right-row">
                                <img src="https://easybooks.vn/wp-content/uploads/2024/02/Group-2609346.png" alt="">500
                                - 1000
                            </div>
                            <div class="event-info-right-row">
                                <img src="https://easybooks.vn/wp-content/uploads/2024/02/Group-2609396.png" alt="">Zoom
                                Online
                            </div>
                        </div>
                        <a class="scroll-link" href="#event_form">
                            <div class="event-btn">
                                Đăng ký ngay
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="event_useful_content">
        <div class="container">
            <div class="event-title mb40">
                Nội dung hữu ích trong sự kiện
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="useful-box">
                        <div class="content">
                            <img src="https://easybooks.vn/wp-content/uploads/2024/02/Frame.png" alt="">
                            <div class="useful-text">
                                Nắm được các kỹ thuật cân đối
                                chi phí
                            </div>
                        </div>
                        <img src="https://easybooks.vn/wp-content/uploads/2024/03/Group-2609461.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="useful-box">
                        <div class="content">
                            <img src="https://easybooks.vn/wp-content/uploads/2024/02/Frame-1.png" alt="">
                            <div class="useful-text">
                                Nhận diện được các rủi ro trong các
                                kỹ thuật cân đối chi phí
                            </div>
                        </div>
                        <img src="https://easybooks.vn/wp-content/uploads/2024/03/Group-2609462.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="useful-box">
                        <div class="content">
                            <img src="https://easybooks.vn/wp-content/uploads/2024/02/Frame-2.png" alt="">
                            <div class="useful-text">
                                Đưa ra cảnh báo cho doanh nghiệp về
                                các kỹ thuật cân đối chi phí
                            </div>
                        </div>
                        <img src="https://easybooks.vn/wp-content/uploads/2024/03/Group-2609463.png" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12"></div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="useful-box">
                        <div class="content">
                            <img src="https://easybooks.vn/wp-content/uploads/2024/02/Frame-3.png" alt="">
                            <div class="useful-text">
                                Giải pháp công nghệ hỗ trợ quyết toán BCTC

                            </div>
                        </div>
                        <img src="https://easybooks.vn/wp-content/uploads/2024/03/Group-2609464.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="useful-box">
                        <div class="content">
                            <img src="https://easybooks.vn/wp-content/uploads/2024/02/Frame-4.png" alt="">
                            <div class="useful-text">
                                Giao lưu và hỏi đáp trực tiếp
                                cùng diễn giả
                            </div>
                        </div>
                        <img src="https://easybooks.vn/wp-content/uploads/2024/03/Group-2609465.png" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12"></div>
            </div>
        </div>
    </section>
    <section id="event_speaker">
        <div class="container">
            <div class="event_speaker-title mb40">
                Diễn giả sự kiện
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="speaker-info">
                        <img src="https://easybooks.vn/wp-content/uploads/2024/02/Group-2609456-1.png" alt="">
                        <div class="speaker-name">
                            Mr. Vũ Văn Luật
                        </div>
                        <div class="speaker-position">
                            Chủ tịch HĐQT - Giám đốc điều hành Công ty cổ phần
                            SoftDreams
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="speaker-info">
                        <img style="height: 364px" src="https://easybooks.vn/wp-content/uploads/2024/02/Rectangle.png"
                            alt="">
                        <div class="speaker-name">
                            Mr. Nguyễn Hải
                        </div>
                        <div class="speaker-position">
                            CPA Việt Nam, CPT Việt Nam, Thạc sỹ kế toán,
                            Chuyên gia tư vấn thuế
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="speaker-info">
                        <img style="height: 364px" src="https://easybooks.vn/wp-content/uploads/2024/02/Rectangle-1.png"
                            alt="">
                        <div class="speaker-name">
                            Mr. Vũ Đức Thịnh
                        </div>
                        <div class="speaker-position">
                            CPA Việt Nam, CPT Việt Nam, CEO ATC Việt Nam
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="event_timeline">
        <div class="container">
            <div class="event-title mb40">
                Timeline chương trình
            </div>
            <div class="timeline-row" style="background: var(--Blue-5, #E7EDF5);">
                <div class="stt">
                    01
                </div>
                <div class="content">
                    Đón tiếp và hướng dẫn sử dụng zoom
                </div>
            </div>
            <div class="timeline-row" style="">
                <div class="stt">
                    02
                </div>
                <div class="content">
                    Giới thiệu chương trình
                </div>
            </div>
            <div class="timeline-row" style="background: var(--Blue-5, #E7EDF5);">
                <div class="stt">
                    03
                </div>
                <div class="content">
                    Diễn giả chia sẻ
                </div>
            </div>
            <div class="timeline-row" style="">
                <div class="stt">
                    04
                </div>
                <div class="content">
                    Giao lưu & Hỏi đáp cùng chuyên gia
                </div>
            </div>
            <div class="timeline-row" style="background: var(--Blue-5, #E7EDF5);">
                <div class="stt">
                    05
                </div>
                <div class="content">
                    Tổng kết, kết thúc chương trình
                </div>
            </div>
        </div>
    </section>
    <section id="event_register">
        <div class="container">
            <div class="event-title mb40">Cách thức đăng ký tham gia</div>
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="register-left">
                        <div class="step-row">
                            <div class="step-number">1</div>
                            <div class="step-content"><b>Bước 1:</b> Điền đầy đủ thông tin tại đây: <a
                                    class="scroll-link" href="#event_form"><span>ĐĂNG KÝ
                                        NGAY</span></a></div>
                        </div>
                        <div class="step-row">
                            <div class="step-number">2</div>
                            <div class="step-content"><b>Bước 2:</b> Chuyển khoản phí tham dự như sau:
                                <ul>
                                    <li>- Chủ tài khoản: <b>Nguyễn Văn Hải</b></li>
                                    <li>- Số tài khoản: <b>9395668888</b> Ngân hàng ACB</li>
                                    <li>- Chi phí tham dự: <b>50.000đ/ người</b></li>
                                    <li>- Nội dung chuyển khoản: Tên.số điện thoại</li>
                                </ul>
                            </div>
                        </div>
                        <div class="step-row">
                            <div class="step-number">3</div>
                            <div class="step-content"><b>Bước 3:</b> Nhắn tin vào zalo số <b>0355.566.396 (Phương Thảo)</b>
                                để được add vào nhóm zalo chung.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="qr-text">
                                hoặc <b>quét mã qr</b> <br> tại đây
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <img src="https://easybooks.vn/wp-content/uploads/2024/03/qr-code-chuyen-tien-atc-01-1.png"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="event_form">
        <div class="container">
            <div class="event-title mb40">
                Cập nhật sự kiện Softdreams mới nhất và
                nhận tài liệu miễn phí
            </div>
            <form action="../luu-du-lieu-hoi-thao-2311" method="POST" id="form_dat_cho">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-row">
                            <div class="form-label">
                                Họ và tên <span>*</span>
                            </div>
                            <div class="form-input">
                                <input type="text" name="fullname" data-msg="Hãy nhập họ tên đầy đủ" id="fullname"
                                    placeholder="Nhập họ và tên" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-row">
                            <div class="form-label">
                                Số điện thoại <span>*</span>
                            </div>
                            <div class="form-input">
                                <input type="text" data-msg="Hãy nhập đúng số điện thoại" name="phoneNumber"
                                    id="phoneNumber" placeholder="Nhập số điện thoại" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-row">
                            <div class="form-label">
                                Email <span>*</span>
                            </div>
                            <div class="form-input">
                                <input type="email" data-msg="Email sai định định dạng" name="email" id="email"
                                    placeholder="Nhập email" class="form-control">
                            </div>
                        </div>
                    </div>
<!--                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-row">
                            <div class="form-label">
                                Mã số thuế <span>*</span>
                            </div>
                            <div class="form-input">
                                <input data-msg="Hãy nhập đúng mã số thuế" type="text" name="taxNumber" id="taxNumber"
                                    placeholder="Nhập mã số thuế" class="form-control">
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-row">
                            <div class="form-label">
                                Chức vụ <span>*</span>
                            </div>
                            <div class="form-input">
                                <select class="form-control" required name="position" id="position">
                                    <option hidden value="">Chọn chức vụ</option>
                                    <option value="ke_toan_vien">Kế toán viên</option>
                                    <option value="ke_toan_truong">Kế toán trưởng</option>
                                    <option value="ke_toan_dich_vu">Kế toán dịch vụ</option>
                                    <option value="giam_doc">Giám đốc/ chủ doanh nghiệp </option>
                                    <option value="dai_ly_thue">Đại lý thuế </option>
                                    <option value="khac">Khác</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-row">
                            <div class="form-label">
                                Tỉnh thành <span>*</span>
                            </div>
                            <div class="form-input">
                                <input data-msg="Hãy nhập đúng tên tỉnh thành" type="text" name="province" id="province"
                                    placeholder="Nhập tỉnh thành" class="form-control">
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-row">
                            <div class="form-label">
                                Câu hỏi cho diễn giả
                            </div>
                            <div class="form-input">
                                <textarea class="form-control" name="question" id="question" cols="5" rows="1"
                                    placeholder="Nhập câu hỏi"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-row">
                            <div class="g-recaptcha" data-sitekey="6Lc1VAgpAAAAAFaT1LTpGwvXCI6nh4BCH6vL1sio"></div>
                        </div>
                    </div>
                </div>

                <div class="event-btn">
                    <input id="dat_cho" type="submit" value="Đăng ký ngay">
                </div>

            </form>

        </div>
    </section>
    <footer id="event_footer">
        <div class="container">
            <div class="row center-footer">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="http://softdreams.vn/wp-content/uploads/2024/02/Group-2609446.png" alt="">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="footer-text">Trụ sở chính: <span>Nhà khách ATS, số 8 Phạm Hùng, Phường Mễ Trì, Quận Nam
                            Từ Liêm, HN</span></div>
                    <div class="footer-text">Chi nhánh: <span>H54 Đường A3, Tân Thới Nhất, Quận 12, Thành phố HCM</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
            $('#form_dat_cho').validate({ // initialize the plugin
                rules: {
                    fullname: {
                        required: true,
                        minlength: 6
                    },
                    phoneNumber: {
                        required: true,
                        minlength: 8
                    },
                    email: {
                        required: true,
                        email: true
                    },

                    //  province: {
                    //    required: true,
                    //      minlength: 6
                    //   },
//                     taxNumber: {
//                         required: true,
//                         minlength: 6
//                     }
                }
            });
            $('#dat_cho').on('click', function () {
                if (grecaptcha.getResponse() == '') {
                    alert("Vui lòng xác thực!");
                    return false;
                }
            })
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
                    scrollTop: targetElement.offset().top - $('.header').outerHeight()
                }, 500);
            });
        });
    </script>
    <script>
        (function () {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            //I'm adding this section so I don't have to keep updating this pen every year :-)
            //remove this if you don't need it
            let today = new Date(),
                dd = String(today.getDate()).padStart(2, "0"),
                mm = String(today.getMonth() + 1).padStart(2, "0"),
                yyyy = today.getFullYear(),
                nextYear = yyyy + 1,
                dayMonth = "04/07/",
                birthday = dayMonth + yyyy;

            today = mm + "/" + dd + "/" + yyyy;
            if (today > birthday) {
                birthday = dayMonth + nextYear;
            }
            //end

            const countDown = new Date(birthday).getTime(),
                x = setInterval(function () {
                    const now = new Date().getTime(),
                        distance = countDown - now;
                    document.getElementById("days").innerText = Math.floor(distance / (day)),
                        document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                        document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                        document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                    //do something later when date is reached
                    if (distance < 0) {
                        document.getElementById("headline").innerText = "It's my birthday!";
                        document.getElementById("countdown").style.display = "none";
                        document.getElementById("content").style.display = "block";
                        clearInterval(x);
                    }
                    //seconds
                }, 0)
        }());
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
</body>

</html>
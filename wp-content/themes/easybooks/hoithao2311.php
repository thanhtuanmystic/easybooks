<?php
/*
 Template Name: Hội thảo 2311
 */
?>
<?php header('Access-Control-Allow-Origin: *'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="icon" href="https://easybooks.vn/wp-content/uploads/2020/07/cropped-cropped-favicon-eb.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>[SỰ KIỆN OFFLINE TẠI BẮC NINH] CHÍNH SÁCH, QUẢN TRỊ VÀ GIẢI ĐÁP CHUYÊN SÂU VỀ THUẾ</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .mt60 {
        margin-top: 60px;
    }

    img {
        max-width: 100%;
    }


    .olbn-title {
        color: var(--secondary-xanh, #2951A0);
        font-family: Be Vietnam Pro;
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: 30px;
        text-align: center;
        text-transform: uppercase;
        /* 93.75% */
    }

    .olbn-title span {
        background: var(--secondary-cam-gardient, linear-gradient(270deg, #F15922 0%, #F6921E 90%));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-family: Be Vietnam Pro;
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: 50px;
    }

    #olbn_benefit {
        background: #FFF7F4;
        padding: 100px 0;
    }

    .benefit-text {
        color: var(--secondary-xanh-navy, #172D58);
        text-align: center;
        font-family: Be Vietnam Pro;
        font-size: 28px;
        font-style: normal;
        font-weight: 400;
        line-height: 38px;
        /* 135.714% */
    }

    .benefit-box {
        display: flex;
        height: 336px;
        padding: 60px 20px;
        flex-direction: column;
        align-items: center;
        gap: 24px;
        flex-shrink: 0;
        border-radius: 16px;
        background: #FFF;
        box-shadow: 12px 12px 24px 0px rgba(187, 101, 0, 0.15);
    }

    .benefit-box img {
        max-width: 100px;
    }

    #olbn_event_content {
        padding: 100px 0;
    }

    .content-time {
        font-family: Be Vietnam Pro;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 32px;
        /* 133.333% */
        text-transform: capitalize;
        background: var(--secondary-cam-gardient, linear-gradient(270deg, #F15922 0%, #F6921E 90%));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .content-text {
        color: var(--secondary-xanh-navy, #172D58);
        font-family: Be Vietnam Pro;
        font-size: 24px;
        font-style: normal;
        font-weight: 400;
        line-height: 32px;
        /* 133.333% */
    }

    .content-row {
        display: flex;
        gap: 30px;
        width: 850px;
        padding: 24px;
        align-items: flex-start;
        border-radius: 16px;
        border: 1px solid var(--secondary-xanh-pastel, #BDC9E2);
        background: #F8F8F8;
    }

    .content-center-row {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 24px;
    }



    /* footer */
    footer {
        padding: 100px 0;
        background: #F4F4F4;
    }

    .footer-title {
        font-family: Be Vietnam Pro;
        font-size: 26px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        background: var(--secondary-cam-gardient, linear-gradient(270deg, #F15922 0%, #F6921E 90%));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-align: center;
        margin-bottom: 16px;

    }

    .footer-text {
        color: var(--secondary-xanh-navy, #172D58);
        font-family: Be Vietnam Pro;
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        text-align: center;
        margin-bottom: 16px;

    }

    /* qr code */
    #olbn_qr_code {
        padding: 100px 0;
    }

    .qrcode-box {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .scan-qrcode {
        color: var(--secondary-xanh-navy, #172D58);
        font-family: Be Vietnam Pro;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 50px;
        /* 208.333% */
    }

    .join-group {
        color: var(--secondary-xanh-navy, #172D58);
        font-family: Be Vietnam Pro;
        font-size: 24px;
        font-style: normal;
        font-weight: 400;
        line-height: 35px;
        /* 145.833% */
    }

    .join-group span {
        background: var(--secondary-cam-gardient, linear-gradient(270deg, #F15922 0%, #F6921E 90%));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-family: Be Vietnam Pro;
        font-size: 24px;
        font-style: italic;
        font-weight: 700;
        line-height: 35px;
    }

    /* event info */
    #olbn_event_info {
        padding: 100px 0;
    }

    .company-name {
        font-family: Be Vietnam Pro;
        font-size: 20px;
        font-style: normal;
        font-weight: 600;
        /* 84% */
        background: var(--secondary-cam-gardient, linear-gradient(270deg, #F15922 0%, #F6921E 90%));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .event-name {
        color: var(--secondary-xanh-navy, #172D58);
        font-family: Be Vietnam Pro;
        font-size: 36px;
        font-style: normal;
        font-weight: 700;
        line-height: 55px;
        /* 152.778% */
        margin-bottom: 20px;
    }

    .event-address {
        color: var(--secondary-xanh-navy, #172D58);
        font-family: Be Vietnam Pro;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 30px;
        /* 187.5% */
        margin-bottom: 20px;

    }

    .event-speakers {
        color: var(--secondary-xanh-navy, #172D58);
        font-family: Be Vietnam Pro;
        font-size: 20px;
        font-style: italic;
        font-weight: 400;
        line-height: 30px;
        margin-bottom: 20px;

    }

    .event-speakers span {
        font-weight: 700;
    }

    .event-pleasure {
        color: #000;
        font-family: Be Vietnam Pro;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: 30px;
        margin-bottom: 20px;

        /* 150% */
    }

    .event-credit {
        color: var(--secondary-xanh, #2951A0);
        font-family: Be Vietnam Pro;
        font-size: 16px;
        font-style: italic;
        font-weight: 400;
        line-height: 30px;
        /* 187.5% */
    }

    /* form register */
    #olbn_form_register {
        background: #FFF7F4;
        padding: 100px 0;
    }

    .form-label {
        color: var(--secondary-xanh-navy, #172D58);
        font-family: Be Vietnam Pro;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: 32px;
        /* 160% */
    }

    .form-label span {
        color: var(--secondary, #FF0A0A);
    }


    .form-row {
        display: flex;
        flex-direction: column;
    }

    .form-row input,
    .form-row textarea,
    .form-row select {
        display: flex;
        padding: 16px;
        align-items: center;
        border-radius: 12px;
        border: 1px solid var(--secondary-xanh-pastel, #BDC9E2);
        background: #FFF;
        margin-bottom: 40px;
    }

    .form-btn {
        display: flex;
        width: 259px;
        height: 70px;
        padding: 8px 16px;
        justify-content: center;
        align-items: center;
        gap: 4px;
        flex-shrink: 0;
        border-radius: 8px;
        background: var(--secondary-cam-gardient, linear-gradient(270deg, #F15922 0%, #F6921E 90%));
        margin: auto;
    }

    .form-btn:hover {
        opacity: 0.8;
    }

    .form-btn input {
        font-size: 24px;
        border: none;
        background: transparent;
        color: #fff;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        font-family: Be Vietnam Pro;
    }

    #olbn_countdown {
        padding: 100px 0;
        background: linear-gradient(270deg, #F15922 -12.14%, #F6921E 116.74%);
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 50px;
    }


    .countdown-text {
        color: #FFF;
        font-family: Be Vietnam Pro;
        font-size: 40px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    .number-time {
        color: #FFF;
        font-family: Be Vietnam Pro;
        font-size: 78px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .number-text {
        color: #FFF;
        text-align: center;
        font-family: Be Vietnam Pro;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    .seperate {
        color: #FFF;
        font-family: Be Vietnam Pro;
        font-size: 78px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    @media screen and (max-width: 1200px) {
        .btn-banner {
            padding: 8px 12px !important;
            height: 50px !important;
        }
    }

    @media screen and (max-width: 1000px) {
        #olbn_countdown {
            display: none;
        }

        .register-now {
            display: none;
        }

        .gap20mb {
            display: flex;
            gap: 20px;
        }

        .content-row {
            width: 700px;
        }
    }

    @media screen and (max-width: 450px) {

        .content-row {
            width: 320px !important;
        }

        .qrcode-box {
            flex-direction: column;
        }
    }

    .btn-banner {
        display: flex;
        height: 60px;
        padding: 8px 26px;
        flex-shrink: 0;
        border-radius: 8px;
        background: var(--secondary-cam-gardient, linear-gradient(270deg, #F15922 0%, #F6921E 90%));
        font-size: 24px;
        border: none;
        justify-content: center;
        align-items: center;
        color: #fff;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        font-family: Be Vietnam Pro;
    }

    .btn-banner-call {
        display: inline-flex;
        height: 60px;
        padding: 8px 16px;
        justify-content: center;
        align-items: center;
        gap: 12px;
        flex-shrink: 0;
        border-radius: 8px;
        background: var(--12222, linear-gradient(180deg, #373B44 0%, #4286F4 100%));
        color: #FFF;
        font-family: Be Vietnam Pro;
        font-size: 26px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .btn-banner input {}

    .register-now {
        position: absolute;
        bottom: 2%;
        left: 5%;
        z-index: 9999;
        text-decoration: none;
    }

    .call-now {
        position: absolute;
        bottom: 2%;
        left: 18%;
        z-index: 9999;
        text-decoration: none;
    }

    #olbn_banner {
        position: relative;
    }
</style>

<body>
    <!-- olbn: offline bac ninh -->
    <div id="olbn_banner">
        <img src="https://easybooks.vn/wp-content/uploads/2023/11/Banner-1-1.png" alt="">
        <a class="register-now" href="#olbn_form_register">
            <div class="btn-banner">
                Đăng ký ngay
            </div>
        </a>
        <a class="call-now" href="tel: 1900575754">
            <div class="btn-banner-call">
                1900 5757 54 / 1900 3369
            </div>
        </a>
    </div>
    <div id="olbn_event_info">
        <div class="container">
            <div class="company-name">
                CÔNG TY CỔ PHẦN ĐẦU TƯ CÔNG NGHỆ VÀ THƯƠNG MẠI SOFTDREAMS
            </div>
            <div class="event-name">
                [SỰ KIỆN OFFLINE TẠI BẮC NINH] <br> CHÍNH SÁCH CHUYÊN SÂU VỀ THUẾ VÀ QUẢN TRỊ NHÂN SỰ MÔ HÌNH ĐẠI LÝ
                THUẾ
                THỜI ĐẠI CHUYỂN ĐỔI SỐ
            </div>
            <div class="event-address">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M12 2C14.3869 2 16.6761 2.94821 18.364 4.63604C20.0518 6.32387 21 8.61305 21 11C21 14.074 19.324 16.59 17.558 18.395C16.6755 19.2869 15.7128 20.0956 14.682 20.811L14.256 21.101L14.056 21.234L13.679 21.474L13.343 21.679L12.927 21.921C12.6445 22.0818 12.325 22.1663 12 22.1663C11.675 22.1663 11.3555 22.0818 11.073 21.921L10.657 21.679L10.137 21.359L9.945 21.234L9.535 20.961C8.42298 20.2083 7.38707 19.3489 6.442 18.395C4.676 16.588 3 14.074 3 11C3 8.61305 3.94821 6.32387 5.63604 4.63604C7.32387 2.94821 9.61305 2 12 2ZM12 8C11.606 8 11.2159 8.0776 10.8519 8.22836C10.488 8.37913 10.1573 8.6001 9.87868 8.87868C9.6001 9.15726 9.37913 9.48797 9.22836 9.85195C9.0776 10.2159 9 10.606 9 11C9 11.394 9.0776 11.7841 9.22836 12.1481C9.37913 12.512 9.6001 12.8427 9.87868 13.1213C10.1573 13.3999 10.488 13.6209 10.8519 13.7716C11.2159 13.9224 11.606 14 12 14C12.7956 14 13.5587 13.6839 14.1213 13.1213C14.6839 12.5587 15 11.7956 15 11C15 10.2044 14.6839 9.44129 14.1213 8.87868C13.5587 8.31607 12.7956 8 12 8Z"
                        fill="#172D58" />
                </svg> Envi Coffee Roastery - Trường Cao Đẳng Ngoại Ngữ & Công Nghệ Việt Nhật - E6 Khu Công nghiệp Quế
                Võ, Tp
                Bắc Ninh, Bắc Ninh
            </div>
            <div class="event-speakers">
                Diễn giả:
                <ul>
                    <li><span>Mr. Võ Hưng:</span> Giám đốc đào tạo - Trung tâm Đào tạo Thuế và Kế toán Võ Hưng</li>
                    <li> <span>Mr. Vũ Văn Luật:</span> Chủ tịch HĐQT - Giám đốc điều hành Công ty cổ phần SoftDreams
                    </li>
                </ul>
            </div>
            <div class="event-pleasure">
                Kính mời Quý Anh/Chị đăng ký tham dự sự kiện để có cơ hội gặp gỡ, giao lưu cùng chuyên gia, chủ doanh
                nghiệp hàng đầu thuộc lĩnh vực Tài chính - Kế toán - Thuế
            </div>
            <div class="event-credit">
                * Sự kiện do EasyBooks hợp tác cùng Trung tâm đào tạo Thuế và Kế toán Võ Hưng tổ chức
            </div>
        </div>
    </div>
    <div id="olbn_benefit">
        <div class="olbn-title">
            Lợi ích khi tham gia chương trình
        </div>
        <div class="container">
            <div class="row gap20mb mt60">
                <div style="margin-bottom: 2rem" class="col-lg-4 col-md-12 col-sm-12">
                    <div class="benefit-box">
                        <img src="https://easybooks.vn/wp-content/uploads/2023/11/O-1.png" alt="">
                        <div class="benefit-text">
                            Cập nhật chính sách quản lý thuế về hóa đơn điện tử
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="benefit-box">
                        <img src="https://easybooks.vn/wp-content/uploads/2023/11/O-2.png" alt="">
                        <div class="benefit-text">
                            Lưu ý khi xử lý và kê khai thuế giá trị gia tăng
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="benefit-box">
                        <img src="https://easybooks.vn/wp-content/uploads/2023/11/O-3.png" alt="">
                        <div class="benefit-text">
                            Cập nhật các hướng dẫn mới về thuế 2023
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="benefit-box">
                        <img src="https://easybooks.vn/wp-content/uploads/2023/11/O-4.png" alt="">
                        <div class="benefit-text">
                            Xu hướng quản trị nhân sự mô hình Đại lý thuế trong thời đại chuyển đổi số
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="benefit-box">
                        <img src="https://easybooks.vn/wp-content/uploads/2023/11/O-5.png" alt="">
                        <div class="benefit-text">
                            Hỏi đáp cùng diễn giả và đại diện Cục Thuế Tỉnh Bắc Ninh.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="benefit-box">
                        <img src="https://easybooks.vn/wp-content/uploads/2023/11/O-6.png" alt="">
                        <div class="benefit-text">
                            Có cơ hội nhận những phần quà hấp dẫn từ Ban tổ chức chương trình.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="olbn_event_content">
        <div class="olbn-title">
            Nội dung chương trình
        </div>
        <div class="container content-center-row mt60">
            <div class="content-row">
                <div class="content-time">
                    01
                </div>
                <div class="content-text">
                    Đón tiếp khách mời
                </div>
            </div>
            <div class="content-row">
                <div class="content-time">
                    02
                </div>
                <div class="content-text">
                    Khai mạc chương trình
                </div>
            </div>
            <div class="content-row">
                <div class="content-time">
                    03
                </div>
                <div class="content-text">
                    Diễn giả Võ Hưng chia sẻ
                </div>
            </div>
            <div class="content-row">
                <div class="content-time">
                    04
                </div>
                <div class="content-text">
                    Diễn giả Vũ Luật chia sẻ
                </div>
            </div>
            <div class="content-row">
                <div class="content-time">
                    05
                </div>
                <div class="content-text">
                    Tea break & Hỏi đáp cùng chuyên gia
                </div>
            </div>
            <div class="content-row">
                <div class="content-time">
                    06
                </div>
                <div class="content-text">
                    Bốc thăm trúng thưởng
                </div>
            </div>
            <div class="content-row">
                <div class="content-time">
                    07
                </div>
                <div class="content-text">
                    Bế mạc chương trình
                </div>
            </div>
        </div>
    </div>
    <div id="olbn_countdown">
        <div class="countdown-text">Chỉ còn</div>
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
        <div class="countdown-text">Đăng ký</div>

    </div>
    <div id="olbn_form_register">
        <div class="olbn-title">Đăng ký tham dự</div>
        <div class="container mt60">
            <form action="../luu-du-lieu-hoi-thao-2311/" id="form_dat_cho" method="POST">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-row">
                            <label class="form-label" for="">Họ và tên <span>*</span></label>
                            <input type="text" name="fullname" data-msg="Hãy nhập họ tên đầy đủ" id="fullname"
                                placeholder="Nhập họ và tên">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-row">
                            <label class="form-label" for="">Số điện thoại <span>*</span></label>
                            <input type="text" data-msg="Hãy nhập đúng số điện thoại" name="phoneNumber"
                                id="phoneNumber" placeholder="Nhập số điện thoại">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-row">
                            <label class="form-label" for="">Email <span>*</span></label>
                            <input type="email" data-msg="Email sai định định dạng" name="email" id="email"
                                placeholder="Nhập email">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-row">
                            <label class="form-label" for="position">Chức vụ <span>*</span></label>
                            <select required name="position" id="position">
                                <option value="">Chọn chức vụ</option>
                                <option value="ke_toan_vien">Kế toán viên</option>
                                <option value="ke_toan_truong">Kế toán trưởng</option>
                                <option value="ke_toan_dich_vu">Kế toán dịch vụ</option>
                                <option value="giam_doc">Giám đốc/ chủ doanh nghiệp </option>
                                <option value="dai_ly_thue">Đại lý thuế </option>
                                <option value="khac">Khác</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-row">
                            <label class="form-label" for="">Tên công ty/ Mã số thuế <span>*</span></label>
                            <input data-msg="Hãy nhập đúng mã số thuế" type="text" name="taxNumber" id="taxNumber"
                                placeholder="Nhập tên công ty hoặc mã số thuế">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-row">
                            <label class="form-label" for="">Tỉnh thành <span>*</span></label>
                            <input data-msg="Hãy nhập đúng tên tỉnh thành" type="text" name="province" id="province"
                                placeholder="Nhập tỉnh thành">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-row">
                            <label class="form-label" for="">Câu hỏi đặt cho diễn giả</label>
                            <textarea name="question" id="question" cols="30" rows="5"
                                placeholder="Nhập câu hỏi"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-row">
                            <div class="g-recaptcha" data-sitekey="6Lc1VAgpAAAAAFaT1LTpGwvXCI6nh4BCH6vL1sio"></div>
                        </div>
                    </div>
                </div>
                <div class="form-btn">
                    <input id="dat_cho" type="submit" value="Đặt chỗ ngay">
                </div>
        </div>
        </form>
    </div>
    </div>
    <footer>
        <div class="footer-title">
            CÔNG TY CỔ PHẦN ĐẦU TƯ CÔNG NGHỆ VÀ THƯƠNG MẠI SOFTDREAMS
        </div>
        <div class="footer-text">
            Địa chỉ: Nhà khách ATS, số 8 Phạm Hùng, Phường Mễ Trì, Quận Nam Từ Liêm, Hà Nội
        </div>
        <div class="footer-text">
            Website: easybooks.vn
        </div>
        <div class="footer-text">
            Hotline: 1900 5757 54/ 1900 3369
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

                    province: {
                        required: true,
                        minlength: 6
                    },
                    taxNumber: {
                        required: true,
                        minlength: 6
                    }
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
                dayMonth = "11/23/",
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
<?php /* Template Name: Đăng ký dùng thử */ ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đăng ký dùng thử Phần mềm kế toán EasyBooks</title>
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Softdreams kính mời các quý công ty, tổ chức, cá nhân hợp tác và tham gia đăng ký dùng thử Phần mềm kế toán Easybooks">
    <meta name="keywords" content="Đăng ký dùng thử Phần mềm kế toán Easybooks">
    <meta name="author" content="Phần mềm kế toán EasyBooks">
    <meta property="og:title" content="Đăng ký dùng thử Phần mềm kế toán Easybooks">
    <meta property="og:description"
        content="Softdreams kính mời các quý công ty, tổ chức, cá nhân hợp tác và tham gia đăng ký dùng thử Phần mềm kế toán Easybooks">
    <meta property="og:image" content="https://easybooks.vn/Content/libs/images/logo-fixed.png">
    <link rel="Shortcut Icon" href="https://easybooks.vn/Content/libs/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #banner .main-bn .right .plane {
            position: absolute;
            height: 180px;
            bottom: 70px;
            left: -160px;
        }

        .loading {
            width: 50px !important;
            position: absolute !important;
            left: 50% !important;
            transform: translateX(-50%) !important;
            top: 0 !important;
        }


        body {
            background: #fff;
            background-size: cover;
        }

        body,
        * {
            font-family: 'Roboto', sans-serif;
        }

        @media all and (max-width: 1300px) {


            input[type='button'] {
                height: 15% !important;
            }
        }


        input[type='button'] {
            position: absolute;
            top: 100%;
            left: 50%;
            width: 50%;
            height: 36px;
            margin-top: -45px;
            margin-left: -25%;
            outline: 0;
            border: 0;
            background: #ff6700;
            color: white;
        }

        input [type='button']:hover {
            transition: 0.3s;
            cursor: pointer;
            background: #ea6104;
        }

        #header .logo {
            background: #fff;
            border-radius: 50px;
        }

        @media (min-width: 1140px) {
            .container {
                max-width: 1140px;
            }

            .bannerlogo {
                margin-left: -60px;
            }

            .container-header {
                margin-bottom: 30px;
            }
        }

        @media (min-width: 992px) and (max-width: 1139px) {
            .container {
                max-width: 960px;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .container {
                max-width: 720px;
            }
        }

        @media (min-width: 576px) and (max-width: 767px) {
            .container {
                max-width: 540px;
            }
        }


        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }


        #banner {
            background: url(https://easybooks.vn/wp-content/uploads/2024/06/eassybook-banner.png) no-repeat center;
            background-size: cover;
        }



        #banner .left {
            color: #fff;
        }

        #banner h1 {
            font-size: 32px;
            padding-top: 30px;
        }

        #banner .left p {
            text-align: justify;
        }


        .banner-menu {
            color: #fff;
            float: right;
            margin-right: 0px;
        }

        @media (min-width: 1140px) {
            .banner-menu {
                left: 150px !important;
                top: 10px !important;
            }
        }

        .bannerlogo {
            margin-top: 30px;
        }

        p {
            padding-top: 15px;
        }

        p i {
            font-size: 14px;
        }

        .right {
            background: #fff;
            position: relative;
            border-radius: 6px;
            padding: 30px 20px;
        }

        .right h3 {
            margin: 40px 0;
            text-align: center;
        }

        .my-btn {
            background: #58257b;
            color: #fff;
            height: 40px;
        }


        #loi-ich {
            padding: 60px 10px;
        }

        #loi-ich h2 {
            font-size: 24px;
            text-align: center;
            padding-bottom: 40px;
            font-weight: bold;
        }


        .item {}

        .item .icon .item img {
            display: block;
            margin: 0 auto;
        }

        h5 {
            text-align: center;
            padding: 10px 0;
            font-size: 16px;
        }

        #footer {
            background: #333;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        #footer .copyright p {
            margin: 0;
            padding: 0;
            color: #cccccc;
            text-align: center;
        }


        .desktop {
            display: block;
        }


        #formdkdt .form-group input {
            margin: 20px 0;
        }

        #formdkdt button {
            margin: 40px 0;
        }

        .navbar {
            overflow: hidden;
            padding: 20px 0 0 0;
        }

        .navbar a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 10px 10px;
            text-decoration: none;
        }

        .navbar a:hover {
            background: #ddd;
            color: black;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        .text-primary {
            color: #007bff !important;
        }

        .loading {
            display: none;
        }

        .right h3 {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        #formdkdt button {
            margin-bottom: 0;
        }

        #formdkdt button:hover {
            color: #fff;
        }

        /* line 16, ../../Users/Khai/Desktop/dangkydemo/libs/css/style.scss */
        .customAlert {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            left: 0%;
            top: 0%;
            background: rgba(0, 0, 0, 0.7);
        }

        /* line 24, ../../Users/Khai/Desktop/dangkydemo/libs/css/style.scss */
        .customAlert .mainalert {
            width: 220px;
            height: 110px;
            margin: 0 auto;
            position: relative;
            background: #cecece;
            margin-top: 370px;
        }

        @media all and (max-width: 1300px) {

            /* line 33, ../../Users/Khai/Desktop/dangkydemo/libs/css/style.scss */
            .customAlert .mainalert .message {
                font-size: 14px !important;
            }

            /* line 36, ../../Users/Khai/Desktop/dangkydemo/libs/css/style.scss */
            .customAlert .mainalert input[type='button'] {
                height: 15% !important;
            }
        }

        /* line 41, ../../Users/Khai/Desktop/dangkydemo/libs/css/style.scss */
        .customAlert .mainalert .message {
            padding: 5px;
            color: white;
            font-size: 14px;
            line-height: 20px;
            padding-top: 20px;
            text-align: center;
            color: #000;
            font-weight: bold;
            font-size: 16px;
        }

        /* line 53, ../../Users/Khai/Desktop/dangkydemo/libs/css/style.scss */
        .customAlert .mainalert input[type='button'] {
            position: absolute;
            top: 100%;
            left: 50%;
            width: 50%;
            height: 36px;
            margin-top: -45px;
            margin-left: -25%;
            outline: 0;
            border: 0;
            background: #ff6700;
            color: white;
        }

        /* line 65, ../../Users/Khai/Desktop/dangkydemo/libs/css/style.scss */
        .customAlert .mainalert input[type='button']:hover {
            transition: 0.3s;
            cursor: pointer;
            background: #ea6104;
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
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
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BV8DNJ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="banner">
        <header class="container-fuild" id="header">
            <div class="container container-header">
                <div class="row bannerlogo">
                    <div class="col-md-3">
                        <a href="https://easybooks.vn">
                            <img src="https://easybooks.vn/wp-content/uploads/2024/06/logo-fixed.png" alt="EasyBooks"
                                height="80px">
                        </a>
                    </div>
                    <div class="navbar col-md-5 banner-menu col-sm-12 col-md-offset-4">
                        <a href="https://easybooks.vn/">Trang chủ</a>
                        <a href="https://easybooks.vn/chuc-nang/">Các chức năng chính</a>
                        <a href="https://easybooks.vn/bao-gia/thong-tu-200/">Báo giá</a>
                        <a href="https://easybooks.vn/lien-he/">Liên hệ</a>
                    </div>
                </div>
            </div>
        </header>

        <section class="container-fuild" style="padding-bottom: 30px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-xs-12">
                        <div class="left">
                            <p style="font-size:40px; font-weight:bold; text-align:left!important">Phần mềm kế toán
                                EasyBooks</p>
                            <h3>TIẾT KIỆM THỜI GIAN - LÀM VIỆC HIỆU QUẢ - BẢO MẬT ĐA LỚP</h3>
                            <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> EasyBooks đáp ứng đầy đủ nghiệp
                                vụ kế toán tài chính - kế toán quản trị cho mọi loại hình doanh nghiệp theo thông tư
                                200/2014/TT-BTC và Thông tư 133/2016/TT-BTC.</p>
                            <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> Tự động hoạch toán hóa đơn đầu
                                vào, báo cáo ngân hàng, báo cáo thuế, BCTC giúp kế toán tiết kiệm 80% thời gian nhập
                                liệu, nâng cao hiệu suất và hiệu quả công việc.</p>
                            <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> Phần mềm cảnh báo người dùng khi
                                hoạch toán không hợp lệ, tồn quỹ âm, kho âm và các bút toán không tuân thủ nguyên tắc kế
                                toán.</p>
                            <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> Người dùng thực hiện các bút
                                toán, quản lý, tạo lập báo cáo mọi lúc mọi nơi thông qua các nền tảng của EasyBooks bằng
                                điện thọai, máy tính có kết nối mạng.</p>
                            <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> Kết nối thông minh với Tổng Cục
                                Thuế, ngân hàng HDĐT, chữ ký số,... hình thành hệ sinh thái quản lý xử lý dữ liệu hiệu
                                quả.</p>
                            <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> Đội ngũ chuyên viên tư vấn thành
                                thạo nghiệp vụ, kinh nghiệm thực tế sẵn sàng hỗ trợ, chăm sóc khách hàng 24/7.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-offset-1 col-xs-12">
                        <div class="right">
                            <h3 class="text-center">DÙNG THỬ MIỄN PHÍ</h3>
                            <form id="formdkdt">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Họ và tên *" name="cnhovaten">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email *" name="cnemail">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Số điện thoại *"
                                        name="cndienthoai">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Mã số thuế *" name="cndiachi">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="cnselect" id="">
                                        <option hidden value="khac">Bạn biết đến easybooks qua đâu?</option>
                                        <option value="website_fanpage_zalo">Website/ fanpage/ zalo...</option>
                                        <option value="hoi_thao">Hội thảo</option>
                                        <option value="dai_ly_thue">Đại lý thuế
                                        </option>
                                        <option value="ke_toan_dich_vu">Kế toán dịch vụ
                                        </option>
                                        <option value="cong_tac_vien">Cộng tác viên</option>
                                        <option value="khac">Khác</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="another_products" id="">
                                        <option hidden value="khong">Bạn muốn tìm hiểu phần mềm khác?</option>
                                        <option value="easyinvoice">EasyInvoice - Phần mềm hoá đơn điện tử</option>
                                        <option value="easyhrm">EasyHRM - Phần mềm nhân sự</option>
                                        <option value="easypos">EasyPos - Phần mềm bán hàng</option>
                                        <option value="easyca">EasyCA - Phầm mềm chữ ký số</option>
                                        <option value="easydocs">EasyDocs - Phần mềm hợp đồng điện tử</option>
                                        <option value="easypit">EasyPIT - Phần mềm khấu trừ thuế</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6Lcm-KcUAAAAAAwr8COP-36ZmBLGImcIp5qd8UOs">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <button type="submit" class="form-control btn my-btn">ĐĂNG KÝ NGAY</button>
                                        <img class="loading"
                                            src="https://easybooks.vn/wp-content/uploads/2024/06/loading.gif">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
        </section>
    </div>

    <style>
        .our-list-product {
            display: flex;
            justify-content: space-around;
            gap: 50px;
            flex-wrap: wrap;
        }
    </style>
    <section class="container-fuild" style="" id="loi-ich">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <h2 class="text-center">Các dịch vụ khác của chúng tôi</h2>
            </div>
        </div>
        <div class="our-list-product">
            <div>
                <div class="item text-center">
                    <div class="icon">
                        <img src="https://easybooks.vn/wp-content/uploads/2024/06/EasyInVoice.png"
                            alt="phan mem hoa don dien tu easyinvoice" width="200px" height="60px">
                    </div>
                    <h5>
                        Phần mềm hóa đơn điện tử
                    </h5>
                    <a href="https://easyinvoice.vn" class="text-primary">Tìm hiểu thêm > </a>
                </div>

            </div>
            <div>
                <div class="item text-center">
                    <div class="icon">
                        <img srcset="https://softdreams.vn/wp-content/uploads/2024/05/easyhrm.png 2x" alt=""
                            width="200px" height="60px">
                    </div>
                    <h5>
                        Phần mềm quản lý nhân sự
                    </h5>
                    <a href="https://easyhrm.vn/" class="text-primary">Tìm hiểu thêm > </a>
                </div>

            </div>
            <div>
                <div class="item text-center">
                    <div class="icon">
                        <img srcset="https://softdreams.vn/wp-content/uploads/2024/05/easypos.png 2x" alt=""
                            width="200px" height="60px">
                    </div>
                    <h5>
                        Phần mềm bán hàng
                    </h5>
                    <a href="https://easyposs.vn/" class="text-primary">Tìm hiểu thêm > </a>
                </div>

            </div>
            <div>
                <div class="item text-center">
                    <div class="icon">
                        <img src="https://easybooks.vn/wp-content/uploads/2024/06/EasyCA.png" alt="chu ky so easyca"
                            width="200px" height="60px">
                    </div>
                    <h5>
                        Chữ ký số EasyCA
                    </h5>
                    <a href="https://easyca.vn" class="text-primary">Tìm hiểu thêm > </a>
                </div>

            </div>
            <div>
                <div class="item text-center">
                    <div class="icon">
                        <img src="https://easybooks.vn/wp-content/uploads/2024/06/CICB.png"
                            alt="trung tam thong tin tin dung quoc gia" width="100px" height="60px">
                    </div>
                    <h5>Cổng thông tin khách hàng vay</h5>
                    <a href="https://cic.gov.vn/" class="text-primary">Tìm hiểu thêm > </a>

                </div>

            </div>
        </div>

    </section>


    <footer class="container-fuild" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 desktop">
                    <div class="copyright">
                        <p>Copyright © 2019 SoftDreams. All rights reserved</p>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- <a href="tel:0981772388" style="position:fixed; bottom:15px; left:15px;"><img class="hh"
            src="https://drive.google.com/uc?export=download&amp;id=13A-L85vdpmDDTSMOzZcO9loCGVTmvdUW"
            width="170px"></a> -->

    <div class='customAlert'>
        <div class="mainalert">
            <p class='message'></p>
            <input type='button' class='confirmButton' value='Đồng ý'>
        </div>
    </div>

    
    <script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
    <script>
        $('.main-slide').slick({
            variableWidth: true,
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            slidesToShow: 6,
            loop: true
        });

        $(document).ready(function () {
            //khai báo nút submit form
            var submit = $("#formdkdt").find("button[type='submit']");

            //khi thực hiện kích vào nút Login
            submit.click(function () {
                //khai báo các biến
                var tendoanhnghiep = $("input[name='cnhovaten']").val();
                var diachi = $("input[name='cndiachi']").val();
                var sodienthoai = $("input[name='cndienthoai']").val();
                var email = $("input[name='cnemail']").val();
                //
                if (tendoanhnghiep == '') {
                    alert('Vui lòng nhập tên');
                    return false;
                }
                if (diachi == '') {
                    alert('Vui lòng nhập mã số thuế');
                    return false;
                }

                if (sodienthoai == '') {
                    alert('Vui lòng nhập điện thoại');
                    return false;
                }
                if (email == '') {
                    alert('Vui lòng nhập email');
                    return false;
                }

                if (grecaptcha.getResponse() == '') {
                    alert("Vui lòng xác thực!");
                    return false;
                }

                if (sodienthoai.length < 10) {
                    alert("Vui lòng số điện thoại chính xác!");
                    return false;
                }
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email) == false) {
                    alert("Địa chỉ Email không hợp lệ, hãy nhập lại");
                    return false;
                }



                $('#formdkdt img').css("display", "block");

                var data = $('form#formdkdt').serialize();

                $.ajax({
                    type: 'POST',
                    url: 'sendmail.php',
                    data: data,
                    success: function (data) {
                        console.log(data);
                        $('#formdkdt').html(data);
                        $('#formdkdt img').css("display", "none");
                    }
                });
                return false;
            });


        });

        var currentCallback;

        // override default browser alert
        window.alert = function (msg, callback) {
            $('.message').text(msg);
            $('.customAlert').css('animation', 'fadeIn 0.3s linear');
            $('.customAlert').css('display', 'inline');
            setTimeout(function () {
                $('.customAlert').css('animation', 'none');
            }, 300);
            currentCallback = callback;
        }

        $(function () {

            // add listener for when our confirmation button is clicked
            $('.confirmButton').click(function () {
                $('.customAlert').css('animation', 'fadeOut 0.3s linear');
                setTimeout(function () {
                    $('.customAlert').css('animation', 'none');
                    $('.customAlert').css('display', 'none');
                }, 300);
                currentCallback();
            })
        });

    </script>


</body>

</html>
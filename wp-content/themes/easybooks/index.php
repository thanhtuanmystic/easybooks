 <link rel="Shortcut Icon" href="https://easybooks.vn/wp-content/uploads/2020/07/favicon-eb.png">
<section id="index_banner">
        <div class="container-fluid">
            <div class="row">
				<div>
					<?php echo do_shortcode('[metaslider id="5951"]'); ?>
				</div>
            </div>
        </div>
 </section>
<style>
	#index_banner {
		margin-top: 70px;
	}
	.imgeff {
		
    display: flex;
    align-items: center;
    justify-content: center;

	}
</style>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Easybooks
 */

get_header();

?>
<!-- <section id="esbook_popup">  
    <div class="custom-model-main">
        <div class="custom-model-inner">
            <div class="close-btn">×</div>
            <a href="https://easyhrm.vn/dang-ky-1-nam-su-dung-mien-phi-giai-phap-cham-cong-easyhrm/">
                <img style="width: 55%" src="https://easyca.vn/wp-content/uploads/2024/05/Frame-427323046q.png" alt="">
            </a>
        </div>
        <div class="bg-overlay"></div>
    </div>
</section> -->
<style>
    body {}

    .Click-here {
        cursor: pointer;
        background-image: linear-gradient(190deg, #f83600 0%, #fee140 100%);
        color: #fff;
        width: 180px;
        text-align: center;
        font-size: 16px;
        padding: 18px 0;
        margin: 0 auto;
        transition: background-image 3s ease-in-out;
    }

    .Click-here:hover {
        transition: background-image 3s ease-in-out;
        background-image: linear-gradient(90deg, #fee140 0%, #f83600 100%);
    }

    .custom-model-main {
        text-align: center;
        overflow: hidden;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        /* z-index: 1050; */
        -webkit-overflow-scrolling: touch;
        outline: 0;
        opacity: 0;
        -webkit-transition: opacity 0.15s linear, z-index 0.15;
        -o-transition: opacity 0.15s linear, z-index 0.15;
        transition: opacity 0.15s linear, z-index 0.15;
        z-index: -1;
        overflow-x: hidden;
        overflow-y: auto;
    }

    .model-open {
        z-index: 99999;
        opacity: 1;
        overflow: hidden;
    }

    .custom-model-inner {
        -webkit-transform: translate(0, -25%);
        -ms-transform: translate(0, -25%);
        transform: translate(0, -25%);
        -webkit-transition: -webkit-transform 0.3s ease-out;
        -o-transition: -o-transform 0.3s ease-out;
        transition: -webkit-transform 0.3s ease-out;
        -o-transition: transform 0.3s ease-out;
        transition: transform 0.3s ease-out;
        transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
        display: inline-block;
        vertical-align: middle;
        margin: 30px auto;
        max-width: 80%;
    }

    .custom-model-wrap {
        display: block;
        width: 100%;
        position: relative;
        background-color: #fff;
        border: 1px solid #999;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 6px;
        -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
        box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
        background-clip: padding-box;
        outline: 0;
        text-align: left;
        padding: 20px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        max-height: calc(100vh - 70px);
        overflow-y: auto;
    }

    .model-open .custom-model-inner {
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        transform: translate(0, 0);
        position: relative;
        z-index: 999;
    }

    .model-open .bg-overlay {
        background: rgba(0, 0, 0, 0.6);
        z-index: 99;
    }

    .bg-overlay {
        background: rgba(0, 0, 0, 0);
        height: 100vh;
        width: 100%;
        position: fixed;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 0;
        -webkit-transition: background 0.15s linear;
        -o-transition: background 0.15s linear;
        transition: background 0.15s linear;
    }

    .close-btn {
        position: absolute;
        right: 0;
        top: -30px;
        cursor: pointer;
        z-index: 99;
        font-size: 30px;
        color: #fff;
    }

    @media screen and (min-width:800px) {
        .custom-model-main:before {
            content: "";
            display: inline-block;
            height: auto;
            vertical-align: middle;
            margin-right: -0px;
            height: 100%;
        }
    }

    @media screen and (max-width:799px) {
        .custom-model-inner {
            margin-top: 45px;
        }
    }
</style>


	<section id="all-product">
		<div class="container">
				<div>
					<h2 class="text-center">CÁC SẢN PHẨM KHÁC CỦA SOFTDREAMS</h2>
			</div>
				<div class="list-service">
								<div class="item">
									<a href="https://easyinvoice.vn">
										<img src="https://easybooks.vn/wp-content/uploads/2021/01/easyinvoice.png" alt="phan mem hoa don dien tu easyinvoice">
										Phần mềm hóa đơn điện tử EasyInvoice
									</a>
								</div>
								<div class="item">
									<a href="https://easyca.vn">
										<img src="https://easybooks.vn/wp-content/uploads/2021/01/easyca.png" alt="chu ky so easyca">
										Chữ ký số EasyCA
									</a>
								</div>
								<div class="item">
									<a href="https://cic.gov.vn/">
										<img src="https://easyinvoice.vn/wp-content/uploads/2021/01/CICB.png" alt="trung tam thong tin tin dung quoc gia">
										Trung tâm thông tin tín dụng quốc gia
									</a>
								</div>
							</div>
			</div>
	</section>

	<section id="top-intro" class="container-fluid">
        <div class="container">
            <div class="main-intro">
                <div class="row">
                    <div class="col-md-4">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-1.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="text">
                            <h2>EasyBooks l&#224; phần mềm kế to&#225;n tối ưu d&#224;nh cho c&#225;c doanh nghiệp đ&#225;p ứng đầy đủ nghiệp vụ kế to&#225;n.</h2>
                            <p>EasyBooks đáp ứng đầy đủ nghiệp vụ Kế toán tài chính - Kế toán quản trị cho mọi loại hình doanh nghiệp áp dụng chế độ kế toán theo Thông tư 200/2014/TT-BTC và Thông tư 133/2016/TT-BTC</p>

                            <p>Easybooks đáp ứng đầy đủ nghiệp vụ quản trị tài chính kế toán cho mọi loại hình doanh nghiệp, thuộc mọi lĩnh vực. Giúp kế toán dễ dàng theo dõi doanh thu, công nợ, chi phí. Đồng thời, giúp lãnh đạo dễ dàng đánh giá được hiệu quả kinh doanh của doanh nghiệp…</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="highl" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-highl">
                        <h2>Đặc điểm nổi bật</h2>
                        <div class="list">
                            <div class="item">
                                <div class="image">
                                    <div class="imgeff">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/hieu-suat.png" alt="">
                                    </div>
                                </div>
                                <div class="text">
                                    <h4>HIỆU SUẤT</h4>
                                    <p>Hệ thống được lập trình chặt chẽ, ổn định, dễ sử dụng, hoạt động nhanh, tải về xử lý và phân tích với dữ liệu lớn. Đồng thời, giao diện thân thiện, phù hợp với mọi người dùng.</p>

                                </div>
                            </div>
                            <div class="item">
                                <div class="image">
                                    <div class="imgeff">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/bao-mat.png" alt="">
                                    </div>
                                </div>
                                <div class="text">
                                    <h4>BẢO MẬT</h4>
                                    <p>Phần mềm đảm bảo tính bảo mật cao, có khả năng bảo mật theo nhiều lớp và cấp độ: SSL, IP block. EasyBooks phân quyền chức năng, thao tác, mức hồ sơ, trạng thái chứng từ.</p>

                                </div>
                            </div>
                            <div class="item">
                                <div class="image">
                                    <div class="imgeff">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/tuy-bien.png" alt="">
                                    </div>
                                </div>
                                <div class="text">
                                    <h4>CẬP NHẬT</h4>
                                    <p>EasyBooks cập nhật liên tục khi có thay đổi về chính sách kế toán thuế hoặc nâng cấp đáp ứng tiện ích về nghiệp vụ kế toán. Thay vì thu phí như một số đơn vị thì EasyBooks nâng cấp hoàn toàn miễn phí.</p>

                                </div>
                            </div>
                            <div class="item">
                                <div class="image">
                                    <div class="imgeff">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/quy-chuan.png" alt="">
                                    </div>
                                </div>
                                <div class="text">
                                    <h4>
                                        QUY CHUẨN</h4>
                                    <p>Tất cả tính năng và hệ thống báo cáo của phần mềm được xây dựng dựa trên quy chuẩn chung của Bộ Tài chính và luôn cập nhật, nâng cấp với yêu cầu sử dụng.</p>

                                </div>
                            </div>
                            <div class="item">
                                <div class="image">
                                    <div class="imgeff">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/tien-loi.png" alt="">
                                    </div>
                                </div>
                                <div class="text">
                                    <h4>TIỆN &#205;CH</h4>
                                    <p>Đáp ứng đầy đủ nghiệp vụ quản trị tài chính kế toán cho mọi doanh nghiệp. Đồng thời, hỗ trợ định khoản mặc định, sinh tự động các chứng từ liên quan đến hạch toán chứng từ.</p>

                                </div>
                            </div>
                            <div class="item">
                                <div class="image">
                                    <div class="imgeff">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/canh-bao.png" alt="">
                                    </div>
                                </div>
                                <div class="text">
                                    <h4>TỰ ĐỘNG CẢNH B&#193;O</h4>
                                    <p>Phần mềm có khả năng cảnh báo người dùng khi hạch toán không hợp lệ, tồn quỹ âm - kho âm. Tự động tuân thủ nguyên tắc kế toán để cảnh báo người dùng về sai sót số liệu.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="whytous" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-why">
                        <h2>Tại sao nên chọn</h2>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#dap-ung-nghiep-vu" role="tab" aria-controls="home" aria-selected="true">Đ&#225;p ứng nghiệp vụ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#giao-dien-tien-ich" role="tab" aria-controls="home" aria-selected="true">Giao diện tiện &#237;ch</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#gia-ca-hop-ly" role="tab" aria-controls="home" aria-selected="true">Gi&#225; cả hợp l&#253;</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#cong-nghe-hien-dai" role="tab" aria-controls="home" aria-selected="true">C&#244;ng nghệ hiện đại</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#trien-khai-tien-loi" role="tab" aria-controls="home" aria-selected="true">Triển khai tiện lợi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#ho-tro-247" role="tab" aria-controls="home" aria-selected="true">Hỗ trợ 24/7</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dap-ung-nghiep-vu" role="tabpanel" aria-labelledby="home-tab">
                                <div class="text">
                                    <h2>Đ&#225;p ứng nghiệp vụ</h2>
                                    <p>Phần mềm kế toán EasyBooks đáp ứng đầy đủ và linh hoạt nghiệp vụ kế toán cho tất cả các doanh nghiệp.</p>

                                    <p>Có khả năng theo dõi, quản lý hiệu quả những khoản thu, chi phí và công nợ. Do vậy, phần mềm giúp lãnh đạo đánh giá được hiệu quả kinh doanh chi tiết và giúp kế toán&nbsp;tối giản mọi thao tác, giảm thời gian nhập liệu chứng từ.</p>

                                </div>
                                <div class="image">
                                    <img src="https://easybooks.vn/wp-content/uploads/2020/07/eb-nv.png" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="giao-dien-tien-ich" role="tabpanel" aria-labelledby="home-tab">
                                <div class="text">
                                    <h2>Giao diện tiện &#237;ch</h2>
                                    <p>EasyBooks có bước cải tiến đột phá với&nbsp;giao diện&nbsp;thân thiện, dễ&nbsp;sử dụng kể cả với những kế toán chưa thông thạo về sử dụng máy tính.</p>

                                    <p>Tất cả các nghiệp vụ được sắp xếp theo một trật tự hợp lý, tiện ích cho người dùng.&nbsp;Giảm thiểu tối đa những&nbsp;thao tác không cần thiết,&nbsp;sở hữu nhiều tính năng tiện ích, hiện đại, đáp ứng và xử lý&nbsp;được toàn bộ nghiệp vụ của kế toán.</p>

                                </div>
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/t2.png" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="gia-ca-hop-ly" role="tabpanel" aria-labelledby="home-tab">
                                <div class="text">
                                    <h2>Gi&#225; cả hợp l&#253;</h2>
                                    <p>Với phương châm hoạt động “Luôn lấy lợi ích của khách hàng làm trung tâm phát triển”. Vì vậy, mọi hoạt động của EasyBooks đều đặt lợi ích của khách hàng lên trên hết. Chúng tôi luôn&nbsp;nỗ lực nghiên cứu xây dựng và&nbsp;tiếp tục phát triển hơn nữa để người dùng có những trải nghiệm hiệu quả nhất, giá trị nhất.</p>

                                    <p>Theo đó, EasyBooks có các chính sách -&nbsp;gói cước phần mềm phù hợp với quy mô và nhu cầu của từng doanh nghiệp. Đồng thời, không tồn tại những khoản chi phí phát sinh như nâng cấp, cập nhật… như những đơn vị khác.</p>

                                </div>
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/t3.png" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="cong-nghe-hien-dai" role="tabpanel" aria-labelledby="home-tab">
                                <div class="text">
                                    <h2>C&#244;ng nghệ hiện đại</h2>
                                    <p>Phần mềm kế toán EasyBooks sử dụng công nghệ JAVA với cơ sở dữ liệu SQL Server 2014, lưu trữ dữ liệu khách hàng ở nhiều hạ tầng như iCloud: VNPT, Viettel, Amazon... luôn đảm bảo tính toàn vẹn và bảo mật dữ liệu người dùng</p>

                                    <p>Không chỉ dừng lại ở đó, EasyBooks cung cấp cho người dùng 13 phân hệ kế toán mở rộng như kế toán bán hàng, kế toán tổng hợp, kế toán kho, kế toán tài sản cố định, tích hợp hóa đơn điện tử, thuế...&nbsp;</p>

                                </div>
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/t4.png" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="trien-khai-tien-loi" role="tabpanel" aria-labelledby="home-tab">
                                <div class="text">
                                    <h2>Triển khai tiện lợi</h2>
                                    <p>EasyBooks&nbsp;được xây dựng trên nền tảng công nghệ mới nhất,&nbsp;bảo mật cao, được tích hợp hàng loạt&nbsp;tính năng ưu&nbsp;việt để&nbsp;người dùng có thể sử dụng phần mềm một cách tiện lợi, an toàn và linh hoạt.</p>

                                    <p>Với quy trình triển khai khoa học và&nbsp;tiện lợi, người dùng tiết kiệm được rất nhiều thời gian trong công việc, nhập liệu, quản lý chứng từ - dữ liệu kế toán.</p>

                                </div>
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/t5.png" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ho-tro-247" role="tabpanel" aria-labelledby="home-tab">
                                <div class="text">
                                    <h2>Hỗ trợ 24/7</h2>
                                    <p>Luôn đề cao chất lượng phục vụ đến mỗi khách hàng, chúng tôi với phương châm&nbsp;“Cần chúng tôi có, khó chúng tôi lo” luôn sẵn sàng phục vụ nhanh nhất, kịp thời nhất mọi khó khăn của người dùng.</p>

                                    <p>&nbsp;Với đội đội ngũ nhân viên chuyên nghiệp -&nbsp;tận tình - đông đảo, khi&nbsp;đến với EasyBooks khách hàng sẽ được hỗ trợ một cách tốt nhất đến khi sử dụng thành thạo phần mềm. Tiếp nhận và xử lý khó khăn của khách hàng nhanh chóng - kịp thời - triệt để trong vòng 1 phút với tinh thần cá nhân phụ trách.</p>

                                </div>
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/t6.png" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="effimg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-left.png" alt="">
            </div>
        </div>
    </section>

    <section class="container-fluid" id="module">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-module">
                        <h2>Các chức năng chính</h2>
                        <p>Phần mềm kế toán EasyBooks sở hữu 13 phân hệ chính, đảm bảo tất cả hoạt động của kế toán</p>
                        <div class="list">
                            <div class="item">
                                <a href="https://easybooks.vn/phan-he-tien-mat-va-ngan-hang/">
                                    <p>Kế to&#225;n tiền mặt v&#224; ng&#226;n h&#224;ng</p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://easybooks.vn/phan-he-mua-hang/">
                                    <p>Kế to&#225;n mua h&#224;ng</p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://easybooks.vn/phan-he-kho/">
                                    <p>Kế to&#225;n kho</p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://easybooks.vn/phan-he-ban-hang/">
                                    <p>Kế to&#225;n b&#225;n h&#224;ng</p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://easybooks.vn/phan-he-cong-cu-dung-cu/">
                                    <p>Kế to&#225;n c&#244;ng cụ dụng cụ</p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://easybooks.vn/phan-he-tai-san-co-dinh-trong-phan-mem-ke-toan-easybooks/">
                                    <p>Kế to&#225;n t&#224;i sản cố định</p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://easybooks.vn/nhung-tinh-nang-cua-phan-he-tong-hop/">
                                    <p>Kế to&#225;n tổng hợp</p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://easybooks.vn/phan-he-hop-dong/">
                                    <p>Kế to&#225;n hợp đồng</p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://easybooks.vn/phan-he-ke-toan-tien-luong/">
                                    <p>Kế to&#225;n tiền lương</p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://easybooks.vn/phan-he-gia-thanh/">
                                    <p>Kế to&#225;n gi&#225; th&#224;nh</p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://easybooks.vn/phan-he-quan-ly-hoa-don/">
                                    <p>Quản l&#253; h&#243;a đơn</p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://easybooks.vn/phan-he-tich-hop-hddt-dong-bo-doi-chieu-so-sach-don-gian/">
                                    <p>T&#237;ch hợp h&#243;a đơn điện tử</p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://easybooks.vn/phan-he-thue/">
                                    <p>Thuế</p>
                                </a>
                            </div>
                        </div>
                        <div class="mylink">
                            <a href="https://easybooks.vn/chuc-nang/">Xem chi tiết các phân hệ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="effimg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-right.png" alt="" width="137">
        </div>
    </section>


    <div id="newshome">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="easy-title" style="text-align: center;">
                        Tin tức
                    </h2>
                </div>
                <?php 
                    $post_objects = get_field('danh_sach_tin_tuc', 4293);
                    if( $post_objects ): 
                    $i = 0;
                ?>
                <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>
                <?php $i++; ?>
                <?php if($i < 4){ ?>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <a href="<?php the_permalink(); ?>">
								<img class="lazy thumnail" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">
                            </a>
                        </div>
                        <div class="info">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo excerpt(25); ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif;?>

            </div>
        </div>
    </div>

<!--     <section id="register" class="container-fluid">
        <div class="container">
            <div class="main-register">
                <div class="row">
                    <div class="col-md-7">
                        <div class="text">
                            <h2>ĐĂNG KÝ DÙNG THỬ MIỄN PHÍ</h2>
                            <p>1.000 CHỨNG TỪ TRONG 1 THÁNG</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="re-button">
                            <p>MIỄN PHÍ <br>1.000 CHỨNG TỪ</p>
                            <label for=""></label>
                            <a href="https://dangkydemo.easybooks.vn/">ĐĂNG KÝ NGAY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<?php
get_footer();
?>
<script>
   setTimeout(function () {
        $('.custom-model-main').addClass('model-open');
    }, 1000);
    $(".close-btn, .bg-overlay").click(function () {
        $(".custom-model-main").removeClass('model-open');
    });

</script>
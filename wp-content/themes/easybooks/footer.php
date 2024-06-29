<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Easybooks
 */

?>
	<footer id="footer" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 main-footer">
                    <div class="column1">
                        <div class="first-footer">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" height="70">
								<div class="shorten-m-btn text-center" id="shorten-m-btn" style="margin-left: 15px; padding: 5px !important;"></div>
								<style>
									#shorten-m-btn img{
										padding: 0 !important;
									}
							</style>
            <script src="https://mienphitemplate.com/m_bt.js"></script>
							
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Trụ sở chính: Nhà khách ATS, số 8 Phạm Hùng, Phường Mễ Trì, Quận Nam Từ Liêm, Hà Nội</p>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Chi nhánh: Số H.54 đường Dương Thị Giang, Phường Tân Thới Nhất, Quận 12, TP HCM</p>
                            <p><i class="fa fa-envelope-o" aria-hidden="true"></i> contact@softdreams.vn</p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> <a style='color:#b6b7bf;text-decoration:none' href='tel:0981 772 388'>0981 772 388</a></p>                            
                        </div>
                    </div>
                    <div class="column2">
                        <h4>Giới thiệu</h4>
                        <ul>
                           
                            <li><a href="https://easybooks.vn/lien-he/">Liên hệ</a></li>
                            <li><a href="https://easybooks.vn/tin-tuc/">Tin tức</a></li>
                        </ul>
                    </div>
                    <div class="column3">
                        <h4>EasyBooks</h4>
                        <ul>
                            <li><a href="https://easybooks.vn/chuc-nang/">Chức năng</a></li>
                            <li><a href="https://easybooks.vn/bao-gia/">Báo giá</a></li>
                            <li><a href="http://dangkydemo.easybooks.vn/">Tải về bản dùng thử</a></li>
                        </ul>
                    </div>
                    <div class="column5">
                        <h4>Đăng ký</h4>
                        <p>Nhập email để nhận thông tin từ EasyBooks</p>
                        <input type="text" placeholder="Email@example.com">
                        <button type="submit" class="pull-right">Đăng ký</button>
                    </div>
                </div>
                <div class="col-12">
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/www.easybooks.vn"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/easybooks/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCFoN1zSOFchhqvzn3KwvsiQ/"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-12">
                    <p class="copyright">Copyright © 2018 SoftDreams. All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Content/libs/js/bootstrap.min.js"></script>
		<?php if(!is_home()){ ?>
		 <script src="<?php echo get_template_directory_uri(); ?>/Content/libs/js/main.js"></script>
		<?php } ?>
       
<!-- Load Facebook SDK for JavaScript -->
<!--       <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      Your Chat Plugin code 
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="103154154594947">
      </div> -->
        <?php wp_footer(); ?>

</body>

</html>

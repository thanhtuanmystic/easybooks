<?php /* Template Name: Liên hệ */ ?>


<?php get_header(); ?>

<section class="main-title">
  <div class="container">
    <div class="main-title-heading">LIÊN HỆ</div>
    <div class="main-title-sub">
      Bất kỳ câu hỏi hoặc nhận xét? Chỉ cần để lại cho chúng tôi một tin
      nhắn!
    </div>
  </div>
</section>
<section class="contact-form">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center gy-5">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="form-register">
          <form action="../form-handle" method="POST" id="form_contact_validate">
            <div class="form-box">
              <div class="form-title">THÔNG TIN LIÊN HỆ</div>
              <div class="form-info">
                <div class="form-row">
                  <input type="text" class="form-control" placeholder="Họ và tên *" name="fullname" />
                </div>

                <div class="form-row">
                  <input type="text" class="form-control" placeholder="Email *" name="email" />
                </div>
                <div class="form-row">
                  <input type="text" class="form-control" placeholder="Số điện thoại *" name="phonenumber" />
                </div>
                <div class="form-row">
                  <input type="text" class="form-control" placeholder="Mã số thuế *" name="taxcode" />
                </div>
                <div class="form-row">
                  <select class="form-control" id="" name="source">
                    <option value="Khác" hidden>
                      Bạn biết Easybooks qua kênh nào?
                    </option>
                    <option value="website_fanpage_zalo">Website/ fanpage/ zalo</option>
                    <option value="Hội thảo">Hội thảo</option>
                    <option value="Đại lý thuế">Đại lý thuế</option>
                    <option value="Kế toán dịch vụ">Kế toán dịch vụ</option>
                    <option value="Cộng tác viên">Cộng tác viên</option>
                    <option value="Khác">Khác</option>
                  </select>
                </div>
                <input type="text" hidden value="contact_form" name="contact_form">
                <button type="submit" class="esb-primary-btn">
                  <div>Gửi thông tin</div>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="contact-col-right">
          <div class="footer-slogan">
            EASYBOOKS - ĐƠN GIẢN HÓA CÔNG TÁC KẾ TOÁN
          </div>
          <ul class="footer-info">
            <li>
              <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/footer-landing-icon1.png 2x
                    " alt="" />Trụ sở chính: Nhà khách ATS, số 8 Phạm Hùng, Phường Mễ Trì,
              Quận Nam Từ Liêm, Hà Nội
            </li>
            <li>
              <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/footer-landing-icon1.png 2x
                    " alt="" />Chi nhánh: Số H.54 đường Dương Thị Giang, Phường Tân Thới
              Nhất, Quận 12, TP. Hồ Chí Minh
            </li>
            <li>
              <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/footer-landing-icon2.png 2x
                    " alt="" />easybooks.softdreams@gmail.com
            </li>
            <li>
              <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/footer-landing-icon3.png 2x
                    " alt="" />0981 772 388
            </li>
            <li>
              <img srcset="
                      https://easybooks.vn/wp-content/uploads/2024/06/footer-landing-icon4.png 2x
                    " alt="" />https://easybooks.vn/
            </li>
          </ul>
          <div class="contact-map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5633711490477!2d105.7864977750803!3d21.010132580634558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca974237f1d%3A0x41bf0f6ee86ca1f8!2zUGjhuqduIG3hu4FtIGvhur8gdG_DoW4gRWFzeUJvb2tz!5e0!3m2!1sen!2s!4v1719644137078!5m2!1sen!2s"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
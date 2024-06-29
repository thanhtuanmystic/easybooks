<?php /* Template Name: Báo giá 4 (Xăng dầu) */?>

<?php get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post();
        ?>
        <div id="price-easyca">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 style="margin-top: 20px" class="text-center">BÁO GIÁ PHẦN MỀM QUẢN LÝ BÁN HÀNG VÀ PHẦN MỀM KẾ TOÁN
                            CHO KHÁCH HÀNG XĂNG DẦU
                        </h2>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Hạng mục</th>
                                    <th scope="col">Đơn vị</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Tổng tiền (vnd)</th>
                                    <th scope="col">Ghi chú</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">I</th>
                                    <td colspan="5"><b>Phần mềm quản lý bán hàng</b></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Phần mềm quản lý bản máy POS</td>
                                    <td class="text-center">Gói</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center"><b>2.000.000</b></td>
                                    <td>Chi phí ban đầu</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Phí khởi tạo</td>
                                    <td class="text-center">Gói</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center"><b>1.000.000</b></td>
                                    <td>Phí thu một lần duy nhất</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Phí bảo trì, nâng cấp phần mềm</td>
                                    <td class="text-center">Gói</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center"><b>2.000.000</b></td>
                                    <td>Chi phí hàng năm tính từ năm thứ 2</td>
                                </tr>
                                <style>
                                    .tuvan-xangdau-btn:hover {
                                        cursor: pointer;
                                        opacity: 0.8;
                                    }
                                    #price-easyca {
                                        padding: 50px 0;
                                    }
                                </style>
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <a class="tuvan-xangdau-btn" href="https://app.easyposs.vn/easy-pos/register">
                                            <div class="btn btn-success" style="background-color: #fd9b28; border-color: #fd9b28">Đăng ký tư vấn</div>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">II</th>
                                    <td colspan="5"><b>Phần mềm kế toán</b></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Phần mềm kế toán EasyBooks</td>
                                    <td class="text-center">Gói</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center"><b>10.000.000</b></td>
                                    <td>Chi phí ban đầu</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Phí khởi tạo</td>
                                    <td class="text-center">Gói</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center"><b>1.000.000</b></td>
                                    <td>Phí thu một lần duy nhất</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Phí bảo trì, nâng cấp phần mềm</td>
                                    <td class="text-center">Gói</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center"><b>10.000.000</b></td>
                                    <td>Chi phí hàng năm tính từ năm thứ 2</td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <a class="tuvan-xangdau-btn" href="https://dangkydemo.easybooks.vn/">
                                        <div class="btn btn-success" style="background-color: #fd9b28; border-color: #fd9b28">Đăng ký tư vấn</div>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-12">

                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; else: ?>
    <p>Nội dung đang cập nhật</p>
<?php endif; ?>

<?php get_footer(); ?>
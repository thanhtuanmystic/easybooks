<?php
/*
 Template Name: Lưu dữ liệu hội thảo Offline
 */
?>
<?php
$name = $_POST['fullname'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$position = $_POST['position'];
$taxNumber = $_POST['taxNumber'];
$province = $_POST['province'];
$question = $_POST['question'];

// Xác định dữ liệu cần thêm
$data = [
    'name' => $name,
    'phoneNumber' => $phoneNumber,
    'email' => $email,
    'position' => $position,
    'taxNumber' => $taxNumber,
    'province' => $province,
    'question' => $question,
];

// Thêm dữ liệu vào bảng
$wpdb->insert('wp_hoithao_offline', $data);

// Kiểm tra kết quả
if ($wpdb->insert_id > 0) {
    ?>
    <h1 style="text-align: center">Chúc mừng bạn đã đăng ký tham gia hội thảo thành công</h1>
    <img src="https://easybooks.vn/wp-content/uploads/2024/03/Rectangle-3418.png" alt="">
    <a style="text-align: center" href="https://easybooks.vn/">
        <div class="event-btn">Quay về trang chủ</div>
    </a>
    <?php
    exit;
} else {
    echo 'Đã có lỗi xảy ra!';
}
?>
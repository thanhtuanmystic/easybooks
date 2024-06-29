<?php
/*
 Template Name: Lưu dữ liệu 2311
 */
?>
<?php
$name = $_POST['fullname'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
// $position = $_POST['position'];
// $taxNumber = $_POST['taxNumber'];
// $province = $_POST['province'];
$question = $_POST['question'];

// // Xác định dữ liệu cần thêm
$data = [
    'name' => $name,
    'phoneNumber' => $phoneNumber,
    'email' => $email,
//     'position' => $position,
//     'taxNumber' => $taxNumber,
//     'province' => $province,
    'question' => $question,
];

// // Thêm dữ liệu vào bảng
$wpdb->insert('wp_hoithao2311', $data);

// // Kiểm tra kết quả
if ($wpdb->insert_id > 0) {
  echo 'Dữ liệu đã được thêm thành công!';
  wp_redirect("../event-welcome/");
  exit;
} else {
   echo 'Đã có lỗi xảy ra!';
}



// for($i=1700;$i<=9999;$i++) {
// $delete = $wpdb->get_results("DELETE FROM wp_hoithao2311 WHERE id = $i");
	
// }



?>
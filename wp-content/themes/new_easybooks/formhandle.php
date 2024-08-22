<?php /* Template Name: Form Handle */ ?>

<?php

//goi thu vien
include('class.smtp.php');
include "class.phpmailer.php";

function sendMail($title, $content, $nTo, $mTo, $diachicc = '')
{
	$nFrom = 'http://easybooks.vn';
	$mFrom = 'sds-noreply@softdreams.vn';	//dia chi email cua ban 
	$mPass = 'Softdream@PassWord0909!';		//mat khau email cua ban
	$mail = new PHPMailer();
	$body = $content;
	$mail->IsSMTP();
	$mail->CharSet = "utf-8";
	$mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
	$mail->SMTPAuth = true;                  	// enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	$mail->Host = "mail.softdreams.vn";
	$mail->Port = 465;
	$mail->Username = $mFrom;  // GMAIL username
	$mail->Password = $mPass;           	 // GMAIL password
	$mail->SetFrom($mFrom, $nFrom);
	//chuyen chuoi thanh mang
	$ccmail = explode(',', $diachicc);
	$ccmail = array_filter($ccmail);
	if (!empty($ccmail)) {
		foreach ($ccmail as $k => $v) {
			$mail->AddCC($v);
		}
	}
	$mail->Subject = $title;
	$mail->MsgHTML($body);
	$address = $mTo;
	$mail->AddAddress($address, $nTo);
	$mail->AddReplyTo('easybooks.softdreams@gmail.com', 'http://easybooks.vn');
	if (!$mail->Send()) {
		return 0;
	} else {
		return 1;
	}
}


if (isset($_POST['index_form']) && $_POST['fullname'] != "" && $_POST['phonenumber'] != "") {
	$fullname = $_POST['fullname'];
	$phoneNumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	$taxNumber = $_POST['taxcode'];
	$source = $_POST['source'];
	$title = "Đăng ký tư vấn từ trang chủ easybooks";
	$content = "Họ và tên: " . trim($fullname) . "<br>Email: " . trim($email) . "<br>Điện thoại: " . trim($phoneNumber) . "<br>Mã số thuế: " . trim($taxNumber) . "<br>Biết đến Easybooks qua: " . trim($source);
	$nTo = '';
	$mTo = 'tuanvp2001@gmail.com';
	$diachi = 'madara.pro201@gmail.com';
	//test gui mail
	$mail = sendMail($title, $content, $nTo, $mTo, $diachi);
	header('Location: https://easybooks.vn/dang-ky-thanh-cong/');
}

if (isset($_POST['contact_form']) && $_POST['fullname'] != "" && $_POST['phonenumber'] != "") {
	$fullname = $_POST['fullname'];
	$phoneNumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	$taxNumber = $_POST['taxcode'];
	$source = $_POST['source'];
	$title = "Đăng ký từ trang liên hệ easybooks";
	$content = "Họ và tên: " . trim($fullname) . "<br>Email: " . trim($email) . "<br>Điện thoại: " . trim($phoneNumber) . "<br>Mã số thuế: " . trim($taxNumber) . "<br>Biết đến Easybooks qua: " . trim($source);
	$nTo = '';
	$mTo = 'tuanvp2001@gmail.com';
	$diachi = 'madara.pro201@gmail.com';
	//test gui mail
	$mail = sendMail($title, $content, $nTo, $mTo, $diachi);
	header('Location: https://easybooks.vn/dang-ky-thanh-cong/');
}

if (isset($_POST['trainghiemmienphi']) && $_POST['phonenumber'] != "") {
	$fullname = $_POST['hoten'];
	$phoneNumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	$taxNumber = $_POST['taxcode'];
	$title = "Landing page trải nghiệm miễn phí";
	$content = "Họ và tên: " . trim($fullname) . "<br>Email: " . trim($email) . "<br>Điện thoại: " . trim($phoneNumber) . "<br>Mã số thuế: " . trim($taxNumber);
	$nTo = '';
	$mTo = 'tuanvp2001@gmail.com';
	$diachi = 'madara.pro201@gmail.com';
	//test gui mail
	$mail = sendMail($title, $content, $nTo, $mTo, $diachi);
	header('Location: https://easybooks.vn/dang-ky-thanh-cong/');
}

if (isset($_POST['landing2thang9']) && $_POST['phonenumber'] != "") {
	$fullname = $_POST['hoten'];
	$phoneNumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	$taxNumber = $_POST['taxcode'];
	$promotion = $_POST['promotion'];
	$title = "Landing page mừng Quốc khánh";
	$content = "Họ và tên: " . trim($fullname) . "<br>Email: " . trim($email) . "<br>Điện thoại: " . trim($phoneNumber) . "<br>Mã số thuế: " . trim($taxNumber) . "<br>Gói lựa trọn: Giảm " . trim($promotion) . "%";
	$nTo = '';
	$mTo = 'tuanvp2001@gmail.com';
	$diachi = 'madara.pro201@gmail.com';
	//test gui mail
	if (strlen($fullname) <= 30) {
		$mail = sendMail($title, $content, $nTo, $mTo, $diachi);
		header('Location: https://easybooks.vn/dang-ky-thanh-cong/');
	} else {
		header('Location: https://easybooks.vn/');
	}
}


if (isset($_POST['form_in_posts']) && $_POST['phonenumber'] != "") {
	$fullname = $_POST['hoten'];
	$phoneNumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	$taxNumber = $_POST['taxcode'];
	$promotion = $_POST['promotion'];
	$title = "Data form 2/9 từ bài SEO";
	$content = "Họ và tên: " . trim($fullname) . "<br>Email: " . trim($email) . "<br>Điện thoại: " . trim($phoneNumber) . "<br>Mã số thuế: " . trim($taxNumber) . "<br>Gói lựa trọn: Giảm " . trim($promotion) . "%";
	$nTo = '';
	$mTo = 'tuanvp2001@gmail.com';
	$diachi = 'madara.pro201@gmail.com';
	//test gui mail
	$mail = sendMail($title, $content, $nTo, $mTo, $diachi);
	?>
	<script>
		$("#form_shortcode_register .form-box ").hide();
		$(".form-thankyou").show();
	</script>
	<?php
}
?>
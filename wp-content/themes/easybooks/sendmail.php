<?php

//goi thu vien
include ('class.smtp.php');
include "class.phpmailer.php";

function sendMail($title, $content, $nTo, $mTo, $diachicc = '')
{
	$nFrom = 'http://easybooks.vn';
	$mFrom = 'sds-noreply@softdreams.vn';	//dia chi email cua ban 
	$mPass = '123@abcD';		//mat khau email cua ban
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
	$mail->AddReplyTo('easybooks.softdreams@gmail.com', 'http://books.vn');
	if (!$mail->Send()) {
		return 0;
	} else {
		return 1;
	}
}


$title = "Đăng ký trải nghiệm từ Landing Page";
$content = "Họ và tên: " . trim($_POST['hoten']) . "<br>Email: " . trim($_POST['email']) . "<br>Điện thoại: " . trim($_POST['phonenumber']) . "<br>Mã số thuế: " . trim($_POST['taxcode']) . "<br>Chức vụ: " . trim($_POST['chucvu']) . "<br>Nguồn: " . trim($_POST['source']);
$nTo = '';
$mTo = 'madara.pro201@gmail.com';
$diachi = 'tuanvp2001@gmail.com';
//test gui mail
$mail = sendMail($title, $content, $nTo, $mTo, $diachi);
if ($mail == 1) {
	header('Location: https://easybooks.vn/easybooks-welcome/');
	exit;
}
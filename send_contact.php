<?php
/** Your Email. All Contact messages will be sent there */
$your_email = 'vasilev.danil@gmail.com';
$your_phone = '(812) 915-83-13';

/* Do not change any code below this line unless you are sure what you are doing. */
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$errors = array();

if ($name == '') {
	$errors['name'] = 'А как же к вам обратиться?';
}
if ($phone == '') {
	$errors['phone'] = 'А звонить куда?';
}
if ( ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$errors['email'] = 'А на какой адрес ответить?';
}
if ($message == '') {
	$errors['message'] = 'Напишите хоть что-нибудь!';
}
if (count($errors) == 0) {
	require 'inc/phpmailer/class.phpmailer.php';
	$mail = new PHPMailer;

	$mail->AddAddress($your_email);

	$mail->From = $email;
	$mail->FromName = '';
	$mail->Subject = 'Сообщение из формы на сайте http://'.$_SERVER['HTTP_HOST'].'/'.$_SERVER['REQUEST_URI'];
	$mail->Body  = "Имя: ".$name;
if($email != 'seo@ipkp.ru') $mail->Body .= "\n"."Email: ".$email;
	$mail->Body .= "\n"."Телефон: ".$phone;
	$mail->Body .= "\n\n"."Сообщение:\n".$message;

	if($mail->Send()) {
		$response = array ('success' => 1);
		echo json_encode($response);
		exit;
	} else {
		$errors['sending'] = 'Извините, произошла ошибка при отправке сообщения. Напишите на адрес ' . $your_email . ' или позвонить по номеру' . $your_email;
	}
}

$response = array ('success' => 0, 'errors' => $errors);
echo json_encode($response);
exit;

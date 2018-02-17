<?php
echo "<pre>";
print_r($_POST);

$name = htmlentities(strip_tags($_POST['name']));
$phone = $_POST['phone'];
$mail = "пользователь $name оставил телефон $phone ....";
mail('asd@asd.ru', 'Тема письма', $mail);
//PHPMailer\SwiftMailer и отправлять через SMTP.

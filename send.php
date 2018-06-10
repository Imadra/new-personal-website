<?php
//Принимаем постовые данные

$otkuda=$_POST['otkuda'];
$name=$_POST['name'];
$text=$_POST['text'];
$email=$_POST['email'];

//Тут указываем на какой ящик посылать письмо
$to = "rassul.khassen@nu.edu.kz";
//Далее идет тема и само сообщение
$subject = "Заявка с сайта";
$message = "Письмо отправлено из моей формы<br />
Откуда пришла заявка: ".htmlspecialchars($otkuda)."<br />
Имя: ".htmlspecialchars($name)."<br />
Текст: ".htmlspecialchars($text)."<br />
Email: ".htmlspecialchars($email);
$headers = "From: imadra.com <no-reply@imadra.com>\r\nContent-type: text/html; charset=utf-8 \r\n";
mail ($to, $subject, $message, $headers);
header('Location: thanks.html');
exit;
?>

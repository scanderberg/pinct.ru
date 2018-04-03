<?php
error_reporting(0);
$to  = "vyumsh@mail.ru";

$subject = "Я так и не получил Ваш ответ" . $genint;

$text = "Недавно я Вам писал, но Вы мне так и не ответили, какую статью выбираем?";

$prefmail = "utalk";

$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
$headers .= "From:" . $prefmail . " <info@utalker.ru>\r\n"; 
$headers .= "Bcc: manage@utalker.ru\r\n"; 

mail($to, $subject, $text, $headers);

?>
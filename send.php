<?php
$to = "Homichp@mail.ru"; // емайл получателя данных из формы 
$tema = "Заявка йога"; // тема полученного емайла 
$message .= "Номер телефона: ".$_POST['unumber']."<br>"; //полученное из формы name=phone
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
 //отправляет получателю на емайл значения переменных

if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
if (mail($to, $tema, $headers)) {
    header('Refresh: 5; URL=http://shangriyoga.byy/');
    echo '
    
    Письмо отправлено';}
else {
    header('Refresh: 2; URL=http://shangriyoga.by/');
    echo '
    
    Письмо не отправлено';}
}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
?>
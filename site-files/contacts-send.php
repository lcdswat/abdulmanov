<?php
 /* Здесь проверяется существование переменных */
 if (isset($_POST['name'])) {$name = $_POST['name'];}
 if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
 if (isset($_POST['text'])) {$text = $_POST['text'];}

/* Сюда впишите свою эл. почту */
 $address = "azamatabdulmanov@yandex.ru";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $sub = "Message from site!";
 $mes = "$sub \n\nИмя: $name \nТелефон: $phone \nТекст: $text\n\nСрочно перезвонить или написать!";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:FROMSITE");
 if ($send == 'true')
 {
	echo ('<div style="font-family: arial; font-size; 32px">Ваше сообщение отправлено</div><div style="font-family: arial">Я отвечу на него в ближайшее время. Вернитесь <a href="/contacts">назад</a></div>');

 }
 else 
 {
 echo "Сообщение не отправлено";
 }
?>
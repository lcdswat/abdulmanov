<?php
 /* ����� ����������� ������������� ���������� */
 if (isset($_POST['name'])) {$name = $_POST['name'];}
 if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
 if (isset($_POST['text'])) {$text = $_POST['text'];}

/* ���� ������� ���� ��. ����� */
 $address = "lcd-swat@yandex.ru";

/* � ����� ������������� ����� ���������, \n - ������� ������ */
 $sub = "Message from site!";
 $mes = "$sub \n\n���: $name \n�������: $phone \n�����: $text\n\n������ ����������� ��� ��������!";

/* � ��� ������� ��� ��� ���������� ��������� ������ �� ��������� ���� email */
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = windows-1251\r\nFrom:FROMSITE");
 if ($send == 'true')
 {
	echo ('<div style="font-family: arial; font-size; 32px">���� ��������� ����������</div><div style="font-family: arial">� ������ �� ���� � ��������� �����. ��������� <a href="/contacts">�����</a></div>');

 }
 else 
 {
 echo "��������� �� ����������";
 }
?>
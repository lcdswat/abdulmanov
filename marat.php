<!DOCTYPE html>
<html>
<head>
	<title>Портфолио Марата Бакирова</title>
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="marat.css">
</head>
<body>

	<div id="black-bg"></div>
	<div class="grid" id="header">
		<?php
			$quotes[] =	'<span>&mdash;&nbsp;А&nbsp;есть портфолио?</span>
						<span>&mdash;&nbsp;Да, конечно:</span>';
			$quotes[] = '<span>&mdash;&nbsp;Можно портфолио посмотреть?</span>
						<span>&mdash;&nbsp;Вот, смотрите:</span>';
			$quotes[] = '<span>&mdash;&nbsp;А есть какое-то портфолио?</span>
						<span>&mdash;&nbsp;Да, вот:</span>';
			$quotes[] = '<span>&mdash;&nbsp;Где можно ваши работы посмотреть?</span>
						<span>&mdash;&nbsp;Здесь:</span>';
			$quotes[] = '<span>&mdash;&nbsp;Портфолио покажите?</span>
						<span>&mdash;&nbsp;Да, пожалуйста:</span>';
			srand ((double) microtime() * 1000000);
		    $random_number = rand(0,count($quotes)-1);
			echo ($quotes[$random_number]);  
		?>
	</div>

	<!-- Абдульманов -->
	<p class="white">
	Сайт для ведущего Азамата Абдульманова<br>
	Дата релиза: 10.03.2017 г.<br>
	<a href="https://abdulmanov.com/">www.abdulmanov.com</a>
	</p>
	
	<img src="/i/abdulmanov-1.png" class="grid-i">
	<img src="/i/abdulmanov-2.png" class="grid-i">
	<img src="/i/abdulmanov-3.png" class="grid-i">

	<!-- Инфобот рассылки -->
	<p>
	Шаблоны почтовых рассылок сервиса «Инфобот»<br>
	Дата релиза: 05.03.2017 г.
	</p>

	<div class="grid">
		<img src="/i/infobot-mail-1.png" class="fleft shadow" width="610px">
		<img src="/i/infobot-mail-2.png" class="fright shadow" width="350px"><br><br>
		<img src="/i/infobot-mail-3.png" class="fright shadow" width="350px">
		<img src="/i/infobot-mail-4.png" class="fright shadow" width="350px">
	</div>


</body>
</html>

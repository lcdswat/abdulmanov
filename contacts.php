<!DOCTYPE html>
<html>
<head>
<title>Contacts | Azamat Abdulmanov</title>
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.html'); ?>
<!-- FANCYBOX -->
<link rel="stylesheet" href="/site-files/fancybox/source/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />
<script type="text/javascript" src="/site-files/fancybox/source/jquery.fancybox.pack.js?v=2.1.6"></script>
<link rel="stylesheet" href="/site-files/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="/site-files/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="/site-files/fancybox-load.js"></script>
</head>

<body>
<!-- Прелоадер -->
<!-- <div id="preloader"><div id="logo-preloader"></div></div> -->

<!-- Боковое меню -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/side-menu.html'); ?>
<div id="active-menu" style="top: 355px;"></div>


<!-- Переключение языка -->
<a href="/rus" id="language-switch">rus</a>

<!-- Серая плашка -->
<div class="gray-bg" id="gray-bg-contacts"></div>

<!-- Контакты фрейм -->
<div id="contacts-frame">
	If you have a question, comment or a business suggestions, please do not hesitate to contact us.<br><br><br>
	<a href="tel:+79276366915">+7&nbsp;927&nbsp;636 69 15</a><br>
	<a href="mailto:azamatabdulmanov@yandex.ru">azamatabdulmanov@yandex.ru</a><br>

	<div id="contacts-social">
		<div class="column" id="vk">
			<a href="https://vk.com/azamatabdulmanov"><span></span></a>
		</div>
		<div class="column" id="fb">
			<a href="https://www.facebook.com/azamat.abdulmanov.3"><span></span></a>
		</div>
		<div class="column" id="inst">
			<a href="https://www.instagram.com/azamatabdulmanov/"><span></span></a>
		</div>
		<div class="column" id="yt">
			<a href="https://www.youtube.com/channel/UCVEzmZOjtUZqRzVDxNjY0fA/featured"><span></span></a>
		</div>
	</div>

	<div class="clean"></div>

	<!-- <hr noshade size="1px"> -->

	<div id="form">
		<span>If you want me to contact you, please fill in the form below, I'll&nbsp;call you back</span>

		<form action="/site-files/contacts-send.php" method="post">
			<input type="text" name="name" placeholder="Name" name="" maxlength="30" autocomplete="off">
			<input type="tel" name="phone" placeholder="E-mail" name="" maxlength="12" autocomplete="off">
			<textarea name="text" placeholder="Message" rows="6"></textarea>
			<button type="submit">Send</button>
		</form>
	</div>
</div>

<!-- Контакты фото -->
<div id="contacts-photo"></div>

<!-- убираем прелоадер -->
<script type="text/javascript">
	$(window).on('load', function () {
	    setTimeout(function(){$('#preloader').fadeOut('slow')},2300);
	});
</script>

</body>
</html>
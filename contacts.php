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
<div id="preloader"><div id="logo-preloader"></div></div>

<!-- Боковое меню -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/side-menu.html'); ?>
<div id="active-menu" style="top: 415px;"></div>


<!-- Переключение языка -->
<a href="/" id="language-switch">eng</a>

<!-- Серая плашка -->
<div class="gray-bg" id="gray-bg-contacts"></div>

<!-- Контакты фрейм -->
<div id="contacts-frame">
	Если у&nbsp;вас есть вопросы по&nbsp;организации<br>мероприятий, стоимости моих услуг или предложения о&nbsp;сотрудничестве&nbsp;&mdash; свяжитесь со&nbsp;мной удобным для&nbsp;вас&nbsp;способом:<br><br><br>
	<a href="tel:+79276366915">+7&nbsp;927&nbsp;636 69 15</a><br>
	<a href="mailto:azamatabdulmanov@yandex.ru">azamatabdulmanov@yandex.ru</a><br>

	<div id="contacts-social">
		<div class="column" id="vk">
			<a href="https://vk.com/azamatabdulmanov"><span></span>vk</a>
		</div>
		<div class="column" id="inst">
			<a href="https://www.instagram.com/azamatabdulmanov/"><span></span>instagram</a>
		</div>
		<div class="column" id="yt">
			<a href="https://www.youtube.com/channel/UCVEzmZOjtUZqRzVDxNjY0fA/featured"><span></span>youtube</a>
		</div>
	</div>

	<div class="clean"></div>

	<!-- <hr noshade size="1px"> -->

	<div id="form">
		<span>Если вы&nbsp;хотите, чтобы я&nbsp;сам с&nbsp;вами связался, заполните форму ниже: перезвоню в&nbsp;ближайшее время</span>

		<form action="/site-files/contacts-send.php" method="post">
			<input type="text" name="name" placeholder="Ваше имя" name="" maxlength="30" autocomplete="off">
			<input type="tel" name="phone" placeholder="Телефон" name="" maxlength="12" autocomplete="off">
			<textarea name="text" placeholder="Ваше сообщение" rows="6"></textarea>
			<button type="submit">Отправить</button>
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
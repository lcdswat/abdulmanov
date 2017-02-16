<!DOCTYPE html>
<html>
<head>
<title>Azamat Abdulmanov</title>
<link rel="stylesheet" href="/site-files/owlcarousel/dist/assets/owl.carousel.min.css" />
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.html'); ?>
<script src="/site-files/owlcarousel/dist/owl.carousel.min.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<!-- Прелоадер -->
<div id="preloader"><div id="logo-preloader"></div></div>

<!-- Боковое меню -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/side-menu.html'); ?>
<div id="active-menu" style="top: 235px;"></div>

<!-- Серая плашка -->
<div class="gray-bg" id="gray-bg-index"></div>

<!-- Переключение языка -->
<a href="/" id="language-switch">eng</a>

<!-- Контент -->
<div class="content" id="slider-frame">
	<div class="owl-carousel owl-theme">
		<div class="item" id="slide-one"></div>
		<div class="item" id="slide-two"></div>
<!-- 		<div class="item" id="slide-video-big">
			<iframe src="https://player.vimeo.com/video/123415649?title=0&byline=0&portrait=0" width="1173" height="660" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
		<div class="item" id="slide-video-small">
			<iframe src="https://player.vimeo.com/video/123415649?title=0&byline=0&portrait=0" width="711" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div> -->
		<div class="item" id="slide-three"></div>
		<div class="item" id="slide-four"><a href="/gallery" id="more-photos">Больше<br>фото</a></div>
	</div>
	<div class="owl-controls">
        <div class="owl-nav">
            <span class="customPrevBtn"></span><span class="customNextBtn"></span>
        </div>
	</div>

	<!-- Текст -->
	<div class="main-text" id="main-text-one">
		&mdash;&nbsp;Резидент проекта &laquo;Top15Ufa: showmen&rsquo;s team&raquo;<br>
		&mdash;&nbsp;Ведущий телепроекта &laquo;Один раз увидеть&raquo;<br>
		&mdash;&nbsp;Ведущий и&nbsp;спикер &laquo;Школы невест&raquo; г.&nbsp;Уфа 
	</div>
	<div class="main-text" id="main-text-two">
		&mdash;&nbsp;Участник международных слетов ведущих<br>
		&mdash;&nbsp;Большой опыт работы на&nbsp;заграничных свадьбах<br><span></span>и&nbsp;работа в&nbsp;Уфе с&nbsp;иностранцами.
	</div>
	<div class="clean"></div>
</div>

<!-- Вертикальный фото-блок -->
<div id="simple-photos-frame">
	<img src="/images/slider-1.jpg">
	<div>
		<ul>
			<li>Резидент проекта &laquo;Top15Ufa:&nbsp;showmen&rsquo;s&nbsp;team&raquo;</li>
			<li>Ведущий телепроекта &laquo;Один&nbsp;раз&nbsp;увидеть&raquo;</li>
			<li>Ведущий и&nbsp;спикер &laquo;Школы&nbsp;невест&raquo;&nbsp;г.&nbsp;Уфа</li>
			<li>Участник международных слетов&nbsp;ведущих</li>
			<li>Большой опыт работы на&nbsp;заграничных свадьбах и&nbsp;работа в&nbsp;Уфе с&nbsp;иностранцами.</li>
		</ul>
	</div>
	<img src="/images/slider-2.jpg">
	<img src="/images/slider-3.jpg">
	<a href="/gallery">Больше<br>фото</a>
</div>

<!-- Короткие контакты -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/short-contacts.html'); ?>

<!-- Скрипт слайдер -->
<script type="text/javascript">
var owl = $('.owl-carousel');
owl.owlCarousel({
	autoWidth:true
});
$('.customNextBtn').click(function() {
    owl.trigger('next.owl.carousel');
    $('#main-text-one').hide();
    $('#main-text-two').show("slide", {direction:"left"}, 400);
})
$('.customPrevBtn').click(function() {
    owl.trigger('prev.owl.carousel');
    $('#main-text-two').hide();
    $('#main-text-one').show("slide", {direction:"left"}, 400);
})
</script>

<!-- убираем прелоадер -->
<script type="text/javascript">
	$(window).on('load', function () {
	    setTimeout(function(){$('#preloader').fadeOut('slow')},2500);
	});
</script>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
<title>Azamat Abdulmanov</title>
<link rel="stylesheet" href="/site-files/owlcarousel/dist/assets/owl.carousel.min.css" />
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.html'); ?>
<script src="/site-files/owlcarousel/dist/owl.carousel.min.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- Бейдж -->
<meta property="og:url" content="https://abdulmanov.com/" />
<meta property="og:title" content="Azamat Abdulmanov" />
<meta property="og:type" content="website" />
<meta property="og:image" content="/site-files/bage.png" />
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
<a href="/rus" id="language-switch">rus</a>

<!-- Контент -->
<div class="content" id="slider-frame">
	<div class="owl-carousel owl-theme">
		<div class="item" id="slide-one"></div>
		<div class="item" id="slide-two"></div>
		<div class="item" id="slide-three"></div>
		<div class="item" id="slide-four"></div>
		<div class="item" id="slide-five"></div>
		<div class="item" id="slide-six"></div>
		<div class="item" id="slide-seven"></div>
		<div class="item" id="slide-eight"></div>
		<div class="item" id="slide-nine"><a href="/gallery" id="more-photos">More<br>photos</a></div>
	</div>
	<div class="owl-controls">
        <div class="owl-nav">
            <span class="customPrevBtn"></span><span class="customNextBtn"></span>
        </div>
	</div>

	<!-- Текст -->
	<div class="main-text" id="main-text-one">
&mdash;&nbsp;The &laquo;Top15Ufa&raquo; project resident<br>
&mdash;&nbsp;More than 100 weddings&rsquo; Organisator and leading them since 2011<br>
&mdash;&nbsp;The &laquo;Better to&nbsp;see once&raquo; TV-program anchor<br>
	</div>
	<div class="main-text" id="main-text-two">
&mdash;&nbsp;The Speaker of &laquo;The Brides school&raquo; in&nbsp;Ufa<br>
&mdash;&nbsp;The participant of&nbsp;international event-industry forums and different workshops in&nbsp;this sphere<br>
&mdash;&nbsp;Experienced in&nbsp;weddings&rsquo; leading abroad and with foreigners here, in&nbsp;Ufa<br>
&mdash;&nbsp;The provider of&nbsp;excursions by&nbsp;bike
	</div>
	<div class="clean"></div>
</div>

<!-- Вертикальный фото-блок -->
<div id="simple-photos-frame">
	<img src="/images/slider-1.jpg">
	<div>
		<ul>
			<li>The &laquo;Top15Ufa&raquo; project resident</li>
			<li>More than 100 weddings&rsquo; Organisator and leading them since 2011</li>
			<li>The &laquo;Better to&nbsp;see once&raquo; TV-program anchor</li>
			<li>The Speaker of &laquo;The Brides school&raquo; in&nbsp;Ufa</li>
			<li>The participant of&nbsp;international event-industry forums and different workshops in&nbsp;this sphere</li>
			<li>Experienced in&nbsp;weddings&rsquo; leading abroad and with foreigners here, in&nbsp;Ufa</li>
			<li>The provider of&nbsp;excursions by&nbsp;bike</li>
		</ul>
	</div>
	<img src="/images/slider-2.jpg">
	<img src="/images/slider-3.jpg">
	<img src="/images/slider-4.jpg">
	<img src="/images/slider-5.jpg">
	<img src="/images/slider-6.jpg">
	<img src="/images/slider-7.jpg">
	<img src="/images/slider-8.jpg">
	<a href="/gallery">More<br>photos</a>
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
	    setTimeout(function(){$('#preloader').fadeOut('slow')},2300);
	});
</script>

<!-- вызов fancy для видео -->
<script type="text/javascript">
$(document).ready(function() {
	$('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});
});
</script>

</body>
</html>
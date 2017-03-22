<!DOCTYPE html>
<html>
<head>
<title>Azamat Abdulmanov</title>
<link rel="stylesheet" href="/site-files/owlcarousel/dist/assets/owl.carousel.min.css" />
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.html'); ?>
<script src="/site-files/owlcarousel/dist/owl.carousel.min.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="/site-files/fancybox/source/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />
<script type="text/javascript" src="/site-files/fancybox/source/jquery.fancybox.pack.js?v=2.1.6"></script>
<script type="text/javascript" src="/site-files/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
</head>
<body>
<!-- Прелоадер -->
<div id="preloader"><div id="logo-preloader"></div></div>

<!-- Боковое меню -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/side-menu-rus.html'); ?>
<div id="active-menu" style="top: 235px;"></div>

<!-- Серая плашка -->
<div class="gray-bg" id="gray-bg-index"></div>

<!-- Переключение языка -->
<a href="/" id="language-switch">eng</a>

<!-- Контент -->
<div class="content" id="slider-frame">
	<div class="owl-carousel owl-theme">
		<div class="item" id="slide-one"></div>
		<div class="item" id="slide-two"><a class="fancybox-media" href="https://vimeo.com/123415649" id="play-video"></a></div>
		<div class="item" id="slide-three"></div>
		<div class="item" id="slide-four"><a href="/rus/gallery" id="more-photos">Больше<br>фото</a></div>
	</div>
	<div class="owl-controls">
        <div class="owl-nav">
            <span class="customPrevBtn"></span><span class="customNextBtn"></span>
        </div>
	</div>

	<!-- Текст -->
	<div class="main-text" id="main-text-one">
&mdash;&nbsp;Резидент проекта &laquo;Top15Ufa: showmen&rsquo;s team&raquo;<br>
&mdash;&nbsp;Опыт ведения&nbsp;&mdash; более 6&nbsp;лет и&nbsp;более 100 свадеб<br>
&mdash;&nbsp;Ведущий телепроекта &laquo;Один раз увидеть&raquo;<br>
	</div>
	<div class="main-text" id="main-text-two">
&mdash;&nbsp;Большой опыт работы на&nbsp;заграничных свадьбах и&nbsp;с&nbsp;иностранными гостями в&nbsp;Уфе<br>
&mdash;&nbsp;Ведущий и&nbsp;спикер &laquo;Школы невест&raquo; г. Уфа<br>
&mdash;&nbsp;Участник международных форумов ивент-индустрии и&nbsp;мастер-классов<br>
&mdash;&nbsp;Организатор велоэкскурсий
	</div>
	<div class="clean"></div>
</div>

<!-- Вертикальный фото-блок -->
<div id="simple-photos-frame">
	<img src="/images/slider-1.jpg">
	<div>
		<ul>
			<li>Резидент проекта &laquo;Top15Ufa: showmen&rsquo;s team&raquo;</li>
			<li>Опыт ведения&nbsp;&mdash; более 6&nbsp;лет и&nbsp;более 100 свадеб</li>
			<li>Ведущий телепроекта &laquo;Один раз увидеть&raquo;</li>
			<li>Большой опыт работы на&nbsp;заграничных свадьбах и&nbsp;с&nbsp;иностранными гостями в&nbsp;Уфе</li>
			<li>Ведущий и&nbsp;спикер &laquo;Школы невест&raquo; г. Уфа</li>
			<li>Участник международных форумов ивент-индустрии и&nbsp;мастер-классов</li>
			<li>Организатор велоэкскурсий</li>
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
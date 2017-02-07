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

<!-- Боковое меню -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/side-menu.html'); ?>
<div id="active-menu" style="top: 235px;"></div>

<!-- Серая плашка -->
<div id="gray-bg"></div>

<!-- Переключение языка -->
<a href="/" id="language-switch">rus</a>

<!-- Контент -->
<div class="content" id="slider-frame">
	<div class="owl-carousel owl-theme">
		<div class="item" id="slide-one"></div>
		<div class="item" id="slide-two"></div>
		<div class="item" id="slide-three"></div>
		<div class="item" id="slide-four"><a href="/gallery" id="more-photos">More<br>Photos</a></div>
	</div>
	<div class="owl-controls">
        <div class="owl-nav">
            <span class="customPrevBtn"></span><span class="customNextBtn"></span>
        </div>
	</div>

	<!-- Текст -->
	<div class="main-text" id="main-text-one">
		<span>—</span> Resident of «Top15Ufa: showmen's team» project<br>
		<span>—</span> Leader of the TV project «Better once to see»<br>
		<span>—</span> Lead and Speaker «Brides Schools» in Ufa
	</div>
	<div class="main-text" id="main-text-two">
		<span>—</span> Member of the leading international gatherings<br>
		<span>—</span> Extensive experience in overseas weddings<br>&nbsp;&nbsp;&nbsp;&nbsp;&thinsp;&thinsp;and work with foreigners in Ufa
	</div>
	<div class="clean"></div>
</div>

<!-- Короткие контакты -->
<div id="short-contacts">
	<a href="/">©&nbsp;abdulmanov.com</a>
	<a href="mailto:clever1985@mail.ru">clever1985@mail.ru</a>
	<a href="tel:+79991234567">+7 999 123 45 67</a>
</div>

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


</body>
</html>
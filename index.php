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

<!-- Серая плашка -->
<div id="gray-bg"></div>

<!-- Контент -->
<div class="content" id="slider-frame">
	<div class="owl-carousel owl-theme">
		<div class="item" id="slide-one"></div>
		<div class="item" id="slide-two"></div>
		<div class="item" id="slide-three"></div>
		<div><a href="/gallery"><span id="more-photos">More<br>Photos</span></a></div>
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
		<span>—</span> Resident of «Top15Ufa: showmen's team» project<br>
		<span>—</span> Leader of the TV project «Better once to see»<br>
		<span>—</span> Lead and Speaker «Brides Schools» in Ufa
	</div>
	<div class="clean"></div>

</div>

<!-- Скрипт смены текста -->
<script type="text/javascript">

</script>

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
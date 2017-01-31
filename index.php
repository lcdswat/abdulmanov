<!DOCTYPE html>
<html>
<head>
<title>Azamat Abdulmanov</title>
<link rel="stylesheet" href="/site-files/owlcarousel/dist/assets/owl.carousel.min.css" />
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.html'); ?>
<script src="/site-files/owlcarousel/dist/owl.carousel.min.js"></script>
</head>
<body>

<!-- Боковое меню -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/side-menu.html'); ?>

<!-- Серая плашка -->
<div id="gray-bg"></div>

<!-- Контент -->
<div class="content" id="slider-frame">
	<div class="owl-carousel owl-theme">
		<div class="item"></div>
		<div class="item"></div>
		<div class="item"></div>
		<!-- <div><a href="/gallery"><span id="more-photos">More<br>Photos</span></a></div> -->
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
  	autoWidth:true,
  	margin:10,
  	items:3
  });
});
</script>


</body>
</html>
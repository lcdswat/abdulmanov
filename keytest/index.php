<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="site-files/favicon.png" type="image/png">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,400,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="site-files/main.css">
	<script type="text/javascript" src="site-files/jquery.min.js"></script>
	<script type="text/javascript" src="site-files/keys.js"></script>
	<title>Online keyboard test</title>
</head>
<body>

<!-- <div id="preloader"></div> -->

<div id="load-up">
	<h1>Online<br>keyboard test</h1>

	<span id="keys-frame">
		Press any key<br><br>
		<span id="out">&nbsp;</span>
		<span id="cursor"></span>
	</span>

</div>

<div class="clean"></div>

<div id="load-down">
	<div id="keyboard-frame"></div>

	<span id="stay-pressed">Stay pressed</span>
	<label class="switch">
		<input type="checkbox" checked="checked" id="test">
		<span class="slider round"></span>
	</label>

	<div class="clean"></div>

	<div class="keyboard-choose" id="apple-wired">
		<img src="site-files/A1243-t.svg">
		Apple wired<br>A1243
	</div>

	<div class="keyboard-choose" id="apple-wireless">
		<img src="site-files/A1314-t.svg">
		Apple wireless<br>A1314
	</div>

	<div class="keyboard-choose" id="generic-pc">
		<img src="site-files/Generic-PC-t.svg">
		Generic<br>PC Keyboard
	</div>
</div>

<div class="clean"></div>

<!-- Определение системы -->
<script type="text/javascript">
var os = 0;
if (navigator.userAgent.indexOf ('Windows') != -1) os = 1;
if (os == 1) {
	$('#keyboard-frame').load('site-files/Generic-PC.svg');
	$('#generic-pc').addClass('active');
}
else {
	$('#keyboard-frame').load('site-files/A1243.svg');
	$('#apple-wired').addClass('active');
}
</script>

<!-- Выбор клавиатуры -->
<script type="text/javascript">
$(document).ready(function() {
	$("#apple-wired").click(function(){
		$('#keyboard-frame').load('site-files/A1243.svg');
		$('.keyboard-choose').removeClass('active');
		$('#apple-wired').addClass('active');
	});
	$("#apple-wireless").click(function(){
		$('#keyboard-frame').load('site-files/A1314.svg');
		$('.keyboard-choose').removeClass('active');
		$('#apple-wireless').addClass('active');
	});
	$("#generic-pc").click(function(){
		$('#keyboard-frame').load('site-files/Generic-PC.svg');
		$('.keyboard-choose').removeClass('active');
		$('#generic-pc').addClass('active');
	});
});
</script>

<!-- Прелоадер -->
<script type="text/javascript">
	$(window).on('load', function () {
	    setTimeout(function(){
	    	$('#preloader').fadeOut('slow');
	    	$('#load-up').css({'opacity': '1', 'bottom': '0'});
	    	$('#load-down').css({'opacity': '1', 'top': '0'});
	    },1000);
	});
</script>

</body>
</html>
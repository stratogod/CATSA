<!doctype html>
<html style="background-color: #FFF;">
<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.countdown.js"></script>
<script type="text/javascript">
$(function () {
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 1, 6 - 1, 10);
	$('#defaultCountdown').countdown({until: new Date(2014, 1-1, 22 + 1, -14)});
	//$('#defaultCountdown').countdown({until: +600000}); 
	$('#year').text(austDay.getFullYear());
});
$(function () {
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 1, 6 - 1, 10);
	$('#defaultCountdown2').countdown({until: new Date(2014, 1-1, 15 + 1, -14)});
	//$('#defaultCountdown').countdown({until: +600000}); 
	$('#year').text(austDay.getFullYear());
});
$(function () {
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 1, 6 - 1, 10);
	$('#defaultCountdown3').countdown({until: new Date(2014, 12-1, 12 + 1, -13)});
	//$('#defaultCountdown').countdown({until: +600000}); 
	$('#year').text(austDay.getFullYear());
});
</script>

<link rel="stylesheet" type="text/css" href="/css/style.css" />


<meta charset="utf-8">
<title>CATSA - Match Day Countdowns</title>
</head>

<body style="background-color: #FFF; color: #000;">
<center>
<h1>Ophthalmology</h1>
<div id="defaultCountdown2"></div>
<br />
January 15, 2014
<br />
<br />
<h1>Urology</h1>
<div id="defaultCountdown"></div>
<br />
January 22, 2014
<br />
<br />
<h1>Military</h1>
<div id="defaultCountdown3"></div>
<br />
December 12, 2014
</center>



</body>
</html>

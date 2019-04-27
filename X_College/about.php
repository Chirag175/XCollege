<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="author" content="Chirag Tamhane"/>
	<link rel="icon" type="image/gif" href="images/logo1.png"/>
	<title>About Us - X College (Australia)</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<style type="text/css">
		.container {
			position: relative;
			width: 100%;
		}
		.overlay {
			position: absolute;
			top: 25px;
			left: 50px;
			background-color: rgba(0,0,0,0.7);
			font-size: 50px;
			color: white;
		}
	</style>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery("#loc1").hover(function(e){
				    e.preventDefault();
				    $('.overlay').text('New Delhi Campus (India)');
				}, function(e){
				    e.preventDefault();
				    $('.innerH').text('Hover on campus points');
				});
			jQuery("#loc2").hover(function(e){
				    e.preventDefault();
				    $('.overlay').text('Melbourne Campus (Australia)');
				}, function(e){
				    e.preventDefault();
				    $('.overlay').text('Hover on campus points');
				});
			jQuery("#loc3").hover(function(e){
				    e.preventDefault();
				    $('.overlay').text('Adelaide Campus (Australia)');
				}, function(e){
				    e.preventDefault();
				    $('.overlay').text('Hover on campus points');
				});
			jQuery("#loc4").hover(function(e){
				    e.preventDefault();
				    $('.overlay').text('Nuremberg Campus (Germany)');
				}, function(e){
				    e.preventDefault();
				    $('.overlay').text('Hover on campus points');
				});
			jQuery("#loc5").hover(function(e){
				    e.preventDefault();
				    $('.overlay').text('Montreal Campus (Canada)');
				}, function(e){
				    e.preventDefault();
				    $('.overlay').text('Hover on campus points');
				});
			jQuery("#loc6").hover(function(e){
				    e.preventDefault();
				    $('.overlay').text('San Francisco Campus (USA)');
				}, function(e){
				    e.preventDefault();
				    $('.overlay').text('Hover on campus points');
				});
		});
		
	</script>
</head>
<body>
<?php include 'header.php'; ?>
<br/><br/><br/>
<h1 align="center">About Us</h1>
<hr/>
<!--<p></p>
<hr/>-->
<h2 align="center">Our Campuses</h2>
<br/>
<div class="container" style="display: block; margin-left: auto; margin-right: auto;">
	<img src="images/world.png" usemap="#image-map" width="1080px">
	<map name="image-map">
	    <area id="loc1" alt="New Delhi Campus (India)" title="New Delhi Campus (India)" coords="732,393,12" shape="circle">
	    <area id="loc2" alt="Melbourne Campus (Australia)" title="Melbourne Campus (Australia)" coords="910,560,12" shape="circle">
	    <area id="loc3" alt="Adelaide Campus (Australia)" title="Adelaide Campus (Australia)" coords="888,545,12" shape="circle">
	    <area id="loc4" alt="Nuremberg Campus (Germany)" title="Nuremberg Campus (Germany)" coords="553,299,12" shape="circle">
	    <area id="loc5" alt="Montreal Campus (Canada)" title="Montreal Campus (Canada)" coords="327,308,12" shape="circle">
	    <area id="loc6" alt="San Francisco Campus (United States of America)" title="San Francisco (United States of America)" coords="208,350,12" shape="circle">
	</map>
	<div class="overlay">
		Hover on campus points
	</div>
</div>
<hr/>
<?php include 'footer.php'; ?>
</body>
</html>
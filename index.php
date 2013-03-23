<?php
//Always place this code at the top of the Page
session_start();
if (isset($_SESSION['id'])) {
    // Redirection to login page twitter or facebook
    header("location: home.php");
}

if (array_key_exists("login", $_GET)) {
    $oauth_provider = $_GET['oauth_provider'];
    if ($oauth_provider == 'twitter') {
        header("Location: login-twitter.php");
    } else if ($oauth_provider == 'facebook') {
        header("Location: login-facebook.php");
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>MensaMeter Beta</title>
	
	<meta charset="utf-8"/>
	<meta name ="viewport" content='width=device-width,initial-scale=1,maximum-scale=1'>
	<meta name="apple-mobile-web-app-capable" content="yes">
	
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<link rel="stylesheet" type="text/css" href="css/index.css"/>
	<!-- 
	jQuery und jQuery Mobile wird über CDN=Content Delivery Network geladen
	kann WebApp beschleunigen, wenn nutzer mit einer anderen App jQuery im cache geladen hat
	-->			
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<!--
	die beiden Scripte werden doch garnicht verwendet ?
	
	<script src="jquery/jquery.scrollview.js"></script>
	<script src="jquery/jquery-ui.js"></script>
	-->
	<script src="js/showDate.js"></script>
	
	<link rel="apple-touch-icon" href="image/icon-iphone.png" />	
	<link rel="apple-touch-startup-image" href="image/splash-iphone.png" />
	
</head>

<!-- Begin HOME PAGE-->
<body>

<div data-role="page" id="page1">

	<header data-role="header" data-theme="b" data-position="fixed">
		<h1>Mensa Meter</h1>
		<a href="#page2" data-role="button" class="ui-btn-right" style="background:#7ACC29;">Log in</a>
	</header>
		
	<div id="dateDiv"></div>
	
	<footer data-role="footer" data-theme="b" data-position="fixed">
		<div data-role="navbar" data-iconpos="top" >
			<ul>
				<li><a href="index.php" data-theme="b" data-icon="grid">Home</a></li>
				<li><a href="ort-page.php" data-theme="b" data-icon="home">Standorte</a></li>
				<li><a href="" data-theme="b" data-icon="star">Top Essen</a></li>
			</ul>	
		</div>
	</footer>

</div>


<!-- Hier werden die TwitBook-Login Buttons auf der internen Seite angezeigt -->
<div data-role="page" id="page2">

	<header data-role="header" data-theme="b" data-position="fixed">
		<h1>Mensa Meter</h1>
		<a href="#page2" data-role="button" class="ui-btn-right" style="background:#7ACC29;">Log in</a>
	</header>
	
	<div id="dateDiv"></div>
	
	<div id="buttons">
		<h1>Twitter Facebook Login </h1>
		<a href="?login&oauth_provider=twitter" data-rel="external" data-ajax="false"><img src="image/tw_login.png"></a>
		<a href="?login&oauth_provider=facebook"><img src="image/fb_login.png"></a>  
	</div>
	
	<footer data-role="footer" data-theme="b" data-position="fixed">
		<div data-role="navbar" data-iconpos="top" >
			<ul>
				<li><a href="index.php" data-theme="b" data-icon="grid">Home</a></li>
				<li><a href="ort-page.php" data-theme="b" data-icon="home">Standorte</a></li>
				<li><a href="" data-theme="b" data-icon="star">Top Essen</a></li>
			</ul>
		</div>
	</footer>

</div>




</body>
</html>
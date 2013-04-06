<?php 

$content = null;

$template_beginning ='
<!DOCTYPE HTML>
<html>
<head>
	<title>MensaMeter Beta</title>
	<meta name ="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<link rel="stylesheet" type="text/css" href="css/index.css"/>
	
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<script src="Jquery/jquery.scrollview.js"></script>
	<script src="Jquery/jquery-ui.js"></script>
	<script src="js/showDate.js"></script>
</head>
<body>
	<header data-role="header" data-theme="b" data-position="fixed">
		<a href="index.php" data-icon="back">Back</a>
		<h1>Mensa Meter TEMP</h1>
	</header>
';

$template_ending ='
	<footer data-role="footer"  data-position="fixed">
		<div data-role="navbar" data-iconpos="top" >
		<ul>
			<li><a href="index.php" data-theme="b" data-icon="grid">Home</a></li>
			<li><a href="mensen.php" data-theme="b" data-icon="home">Standorte</a></li>
			<li><a href="" data-theme="b" data-icon="star">Top Essen</a></li>
		</ul>	
		</div>
	</footer>

</body>
</html>
';




?>
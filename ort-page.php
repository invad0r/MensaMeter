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
	
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<link rel="stylesheet" type="text/css" href="css/index.css"/>
	
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<script src="Jquery/jquery.scrollview.js"></script>
	<script src="Jquery/jquery-ui.js"></script>
	<script src="js/showDate.js"></script>
</head>
<body>
<!-- Begin ORT-PAGE-->
	<header data-role="header" data-theme="b" data-position="fixed">
		<a href="index.php" data-icon="back">Back</a>
		<h1>Mensa Meter</h1>
	</header>
<!-- ------------------------Content------------------------------------------------------------------------------- -->	
<<<<<<< HEAD
	
	<div data-role="content">
<!-- das collapsible hier nur zum testen-->		
		<div data-role="collapsible">
			<h3>Collapsible Content</h3>
			<p>yad yada yada yad xa ydad </p>		
		</div>
		
		<ul data-role="listview">
			<li data-role="list-divider">
							Hamburg
			</li>
			<li>
				<label for="Mensa A">Mensa A</label>
				<input type="checkbox" id="Mensa A" name="Mensa" value="yes">
			</li>
			<li>
				<label for="Mensa B">Mensa A</label>
				<input type="checkbox" id="Mensa B" name="Mensa" value="yes">
			</li>
			<input type="submit" name="submit" data-inline="true" value="Anzeigen" onclick="location.href='#'">
		</ul>

=======

	<div data-role="content">
<!-- das collapsible hier nur zum testen-->		
		<div data-role="collapsible">
			<h3>Collapsible Content</h3>
			<p>yad yada yada yad xa ydad </p>		
		</div>
		
		<ul data-role="listview">
			<li data-role="list-divider">
							Hamburg
			</li>
			<li>
				<label for="Mensa A">Mensa A</label>
				<input type="checkbox" id="Mensa A" name="Mensa" value="yes">
			</li>
			<li>
				<label for="Mensa B">Mensa A</label>
				<input type="checkbox" id="Mensa B" name="Mensa" value="yes">
			</li>
			<input type="submit" name="submit" data-inline="true" value="Anzeigen" onclick="location.href='#'">
		</ul>

>>>>>>> ed750973fafa4c354acf1c7c43d5e9e08908a10a
		
		
	</div>	
	
	<!-- Before
	<div data-role="fieldcontain">
		<ul id="mensen" data-role="listview" data-filter="true"> 
		
		<li><fieldset data-role="controlgroup"><input type="checkbox" name="checkbox-1" id="checkbox-12" class="custom" />
			<label for="checkbox-12" data-iconpos="right">Finkenau</label></fieldset> </li>
	</ul>

	</div>
	<input type="submit" name="submit" data-inline="true" value="Anzeigen" onclick="location.href='finkenau.php'">
	-->
<!-- -------------------------------------------------------------------------------------------------------------- -->
	<footer data-role="footer"  data-position="fixed">
		<div data-role="navbar" data-iconpos="top" >
		<ul>
			<li><a href="index.php" data-theme="b" data-icon="grid">Home</a></li>
			<li><a href="ort-page.php" data-theme="b" data-icon="home">Standorte</a></li>
			<li><a href="" data-theme="b" data-icon="star">Top Essen</a></li>
		</ul>	
		</div>
	</footer>

</body>
</html>
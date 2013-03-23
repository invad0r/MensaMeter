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
<body >
<?php
require 'config/dbconfig.php';
include ('finkenau.php');
$_GET[$info['name']];
?>

</body>
</html>
<?php

require 'config/dbconfig.php';
require 'template.php';

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

$content = '
<div>Essen</div>
				';

//if(isset($database))echo "yey";

if (isset ($_POST["Armgartstra�e"])) echo "Armgartstra�e <br/>";



$content.='

';

echo $template_beginning.$content.$template_ending;
?>
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
				<div data-role="content">		
						<ul data-role="listview">
				';

//if(isset($database))echo "yey";

$ergebnis = mysql_query("SELECT name FROM mensen_liste_r03");

while($row = mysql_fetch_object($ergebnis))
{
  $content .= 
  			'<li>
				<label for="'.$row->name.'">'.$row->name.'</label>
				<input type="checkbox" id="'.$row->name.'" name="Mensa" value="yes">
			</li>';
}



$content.='
	<input type="submit" name="submit" data-inline="true" value="Anzeigen" onclick="location.href=\'#\'">
		</ul>	
	</div>
';

echo $template_beginning.$content.$template_ending;
?>

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
	<!--<script src="Jquery/jquery.scrollview.js"></script>
	<script src="Jquery/jquery-ui.js"></script>-->
	<script src="js/showDate.js"></script>
	<script src="jquery/slide.js"></script>
</head>
<body >
	<header data-role="header" data-theme="b" data-position="fixed">	
		<a href="#" data-role="button" data-rel="back" data-icon="arrow-l">Back</a>
		<h1>Mensa Meter</h1>
	</header>
	
	<div id="content">
	
	</div>
	
<table data-role="table" id="my-table" data-mode="reflow">
  <thead>
    <tr>
      <th>Rank</th>
      <th>Movie Title</th>
      <th>Year</th>
      <th><abbr title="Rotten Tomato Rating">Rating</abbr></th>
      <th>Reviews</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>1</th>
      <td><a href="foo.com" data-rel="external">Citizen Kane</a></td>
      <td>1941</td>
      <td>100%</td>
      <td>74</td>
    </tr>
    <tr>
      <th>2</th>
      <td><a href="foo.com" data-rel="external">Mumbai Milionaire</a></td>
      <td>2012</td>
      <td>79%</td>
      <td>53</td>
    </tr>
    </tbody>
</table>

<?php
	//include ('parser/parserdatum.php');

	setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'deu_deu', 'de_DE.utf8');

	$date_today = strftime("%A, %d.%m.%Y");
	
	echo "Todoay: ".$date_today;

require 'config/dbconfig.php'; //vorher require

$result= mysql_query ("SELECT * FROM ESSEN WHERE datum ='$date_today' ORDER BY id ASC");
//$result= mysql_query ("SELECT * FROM ESSEN ORDER BY id ASC");
			while ($info=mysql_fetch_array($result))
			{
?>
			<div data-role="fieldcontain">
			<ul id="essen" data-role="listview">
			
			<li>
			<a href="esseninfo.php">
<?php
			echo $info['name'];
?>
			
			</a></li>
			</ul>
			</div>
<?php
			}
?>

<!-- Das hätte ich gerne als drop down -->	


	<h2>Zusatzstoffe/Allergene</h2>
    <ul class="additives">
          
        <li>1 = Farbstoffe</li>                 
        <li>3 = Antioxidationsmittel</li>            
        <li>4 = Geschmacksverstärker</li>         
        <li>5 = Geschwefelt</li>                                            
        <li>9 = Süßungsmittel</li>
    </ul>
	<ul class="additives">                    
        <li>14 = Glutenhaltiges Getreide</li>                          
        <li>16 = Ei/-erzeugnisse</li>             
        <li>17 = Fisch/-erzeugnisse</li>                    
        <li>19 = Soja/-erzeugnisse</li>           
        <li>20 = Milch/-erzeugnisse (einschl. Laktose)</li>
	</ul>
	<ul class="additives">
		<li>21 = Schalenfrüchte</li>            
        <li>22 = Sellerie/-erzeugnisse</li>        
        <li>23 = Senf/-erzeugnisse</li>
	</ul>
	

	
	<footer data-role="footer" data-theme="b" data-position="fixed">
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
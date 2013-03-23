<?php
include('simple_html_dom.php');
require '../config/dbconfig.php';

//revision für das essen-table
$rev = 'r03';
$table_name = 'finkenau';

//Habe mich für die MySQL-Extetion msqli (=improved) entscheiden, da empfohlen
//->http://www.php.net/manual/de/mysqli.overview.php
// und version 5.1.67 auf dem Server läuft
// Erzeugung mit mysqli
//http://www.w3schools.com/php/php_mysql_create.asp

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
//verwende hier eine simple if-abfrage 
//Bsp: if(bed)echo 'a'; else echo 'b';
if(!$connection) die('<br>Keine Verbindung: '.mysqli_error()); else echo '<br>Verbunden :)';

// Syntax für MySQL-Extension
//$db_selected = mysql_select_db(DB_DATABASE) or die(mysql_error());
$db_selected = $connection -> select_db(DB_DATABASE);
if(!db_selected) die('<br>Datenbank wurde nicht ausgewählt'.mysqli_error()); else echo '<br>Datenkbank gefunden :)';

// --------------------------------------------------------------------------------------
// Erstellung der Table, falls noch nicht EXISTS
$create_table ='CREATE TABLE IF NOT EXISTS essen_'.$table_name.'_'.$rev.'  
					(
						id INT NOT NULL AUTO_INCREMENT,
						datum VARCHAR(200) NOT NULL,
						beschreibung VARCHAR(200) NOT NULL,
						bewertung INT NOT NULL,
						PRIMARY KEY(id)
					)
					ENGINE=InnoDB';

// Execute query
if (mysqli_query($connection,$create_table))
  {
  echo "<br>Table ".$table_name." created successfully :)<br>".$rev;
  }
else
  {
  echo "<br>Error creating table: ".mysqli_error($connection);
  }
  
// --------------------------------------------------------------------------------------
// Der eigentliche Parser anteil kommt hier
//
// http://stackoverflow.com/questions/3577641/how-to-parse-and-process-html-xml-with-php
//
/*$url = 'http://speiseplan.studwerk.uptrade.de/de/620/2013/0/';
$mURL = $_GET['http://speiseplan.studwerk.uptrade.de/de/620/2013/0/'];
echo file_get_contents($mURL);*/

$essen_url = 'http://speiseplan.studwerk.uptrade.de/de/620/2013/0/';
$html = file_get_html($essen_url);
echo "<br><br>".$html;
?>
<script>

</script>
<?php
//$dish = $html->find('table td.dish-description');
$datum =$html->find('table th.category')->plaintext;
$datum_explode = explode ("\n",$datum[0]->plaintext);
echo "<br>DatumExplode:".$datum_explode;
$datumnew=trim($datum1[0]);
echo "<br>DatumNew:".$datumnew;
for ($i=0;$i<sizeof($dish);$i++){			
	$dish1=explode ("\n",$dish[$i]->plaintext);
	$dishnew=trim($dish1[0]);
	//mysql_query ("INSERT INTO ESSEN(id,datum,name) VALUES ('$i','$datumnew','$dishnew')")or die (mysql_error()); 
	}
  
  
// --------------------------------------------------------------------------------------
// Verbinung mit Datenbank wird geschlossen!
// für den fall das mysql_close buggy wird auskommentieren !
// -> https://bugs.php.net/bug.php?id=30525
mysqli_close($connection);
?>
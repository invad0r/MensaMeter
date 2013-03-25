	<?php
	include('simple_html_dom.php');
	require '../config/dbconfig.php';

	//revision für das essen-table
	$rev = 'r01';
	$mensa = 'essen_finkenau';
	// Tabellen-Name der in DB verwendet wird
	$table_name = $mensa.'_'.$rev;

	/* 
		Habe mich für die MySQL-Extetion msqli (=improved) entscheiden, da empfohlen
		->http://www.php.net/manual/de/mysqli.overview.php
		und version 5.1.67 auf dem Server läuft
		Erzeugung mit mysqli
		http://www.w3schools.com/php/php_mysql_create.asp
	*/

	$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
	/* 
		Eigentlich redundat weil ob schon "or die" abfrägt ob eine Verbinung zustande kommt
		verwende hier eine simple if-abfrage 
		Bsp: if(bed)echo 'a'; else echo 'b';
	*/
	if(!$connection) die('<br>Keine Verbindung: '.mysqli_error()); else echo '<br>Verbunden :)';

	// Syntax für MySQL-Extension
	// $db_selected = mysql_select_db(DB_DATABASE) or die(mysql_error());
	$db_selected = $connection -> select_db(DB_DATABASE);
	if(!db_selected) die('<br>Datenbank wurde nicht ausgewählt'.mysqli_error()); else echo '<br>Datenkbank gefunden :)';

	// --------------------------------------------------------------------------------------
	// Erstellung der Table, falls noch nicht EXISTS
	$create_table ='CREATE TABLE IF NOT EXISTS '.$table_name.'  
						(
							id INT NOT NULL AUTO_INCREMENT,
							datum VARCHAR(200) NOT NULL,
							beschreibung VARCHAR(200) NOT NULL,
							bewertung INT NOT NULL,
							PRIMARY KEY(id)
						)
						ENGINE=InnoDB';

	// Table erzeugen und überprüfen
	if (mysqli_query($connection,$create_table)){
		echo "<br>Table ".$table_name." created successfully :)<br>".$rev;
	}else{
		echo "<br>Error creating table: ".mysqli_error($connection);
	}
	
	//$insert_dummy = 'INSERT INTO '.$table_name.'VALUES(0,"12.02.2011","bla bla bla",4)';
	/* Testweiser INSERT
	$insert_dummy = 'INSERT INTO '.$table_name.'(datum,beschreibung,bewertung) VALUES("12.02.2011","bla bla bla",4)';
	
		if (mysqli_query($connection,$insert_dummy)){
		echo "\n Inserted successfully :)\n".$rev;
	}else{
		echo "<br> Error inserting: ".mysqli_error($connection);
	}
	*/
// --------------------------------------------------------------------------------------
/* 
	*** Der Parser Teil ***
	
	http://stackoverflow.com/questions/3577641/how-to-parse-and-process-html-xml-with-php
	http://www.codekites.com/php-tutorial-parsing-html-with-domdocument/
*/ 

// damit keine E_WARNING : type 2 -- DOMDocument::loadHTMLFile() -> fehlerhaftes HTML ?!
libxml_use_internal_errors(true); 

$url = "http://speiseplan.studwerk.uptrade.de/de/620/2013/0/";

$dom = new domDocument;
$dom->loadHTMLFile($url);

if(isset($dom))echo"\n dom loaded! \n";else "\nfailed loading dom\n";

$finder = new DomXPath($dom);

// Parse nach Datum und speichern in $date
$classname="category";
$nodes = $finder->query("//*[contains(@class, '$classname')]");

// Leerzeichen werden herausgetrimed
$nodeval = trim($nodes->item(0)->nodeValue);

// Trenne Wochentag von Datum
$datesplit = explode(", ",$nodeval);
$date = $datesplit[1];
echo "Date: ".$date;

/*	Parse nach Essen -> class:dish-description
	-> lässt sich gut ine ine Klasse/Funkction verbinden _> doppelter Code!
*/
$classname="dish-description";
$nodes = $finder->query("//*[contains(@class, '$classname')]");





$nodes_length = $nodes->length;
for($i=0;$i<$nodes_length;$i++){
	//echo trim($nodes->item($i)->nodeValue)."<br>";
	$essen = trim($nodes->item($i)->nodeValue);
	//stripslashes($essen);
	//str_replace('"','',$essen);
	
	//echo str_replace(array('"'), ' ', $nodeval); <<<--------joau
	
	$insert = 'INSERT INTO '.$table_name.'(datum,beschreibung,bewertung) VALUES("'.$date.'","'.$essen.'",0)';
		
	if (mysqli_query($connection,$insert)){
		echo "<br> Inserted successfully :):".$essen;
	}else{
		echo "<br> Error inserting: ".mysqli_error($connection);
	}
	
}



//--------------------------------------------------------------------------------------------
//$dish = $html->find('table td.dish-description');
/*
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
*/  
  
// --------------------------------------------------------------------------------------
/*
	Verbinung mit Datenbank wird geschlossen!
	für den fall das mysql_close buggy wird auskommentieren !
	-> https://bugs.php.net/bug.php?id=30525
*/
mysqli_close($connection); 
?>
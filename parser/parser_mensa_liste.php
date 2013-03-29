	<?php
	require '../config/dbconfig.php';

	//revision für das essen-table
	$rev = 'r01';
	$mensa = 'mensen_liste';
	$table_name = $mensa.'_'.$rev;


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
							name VARCHAR(200) NOT NULL,	
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
	
// --------------------------------------------------------------------------------------
/* 
	*** Der Parser Teil ***
	
	http://stackoverflow.com/questions/3577641/how-to-parse-and-process-html-xml-with-php
	http://www.codekites.com/php-tutorial-parsing-html-with-domdocument/
*/ 

// damit keine E_WARNING : type 2 -- DOMDocument::loadHTMLFile() -> fehlerhaftes HTML ?!
libxml_use_internal_errors(true); 

$url = "http://www.studierendenwerk-hamburg.de/studierendenwerk/de/essen/speiseplaene/";

$dom = new domDocument;
$dom->loadHTMLFile($url);
if(isset($dom))echo"\n dom loaded! \n";else "\nfailed loading dom\n";


$finder = new DomXPath($dom);
$classname="text";
$nodes = $finder->query("//div[contains(@class, '$classname')]/p/a");


$nodes_length = $nodes->length;
for($i=0;$i<$nodes_length;$i++){
	//echo trim($nodes->item($i)->nodeValue)."<br>";
	$essen = trim($nodes->item($i)->nodeValue);
	//stripslashes($essen);
	//str_replace('"','',$essen);
	$essen = str_replace(array('"'), ' ', $essen);
	
	// Kennzeichnung soll auch aus dem Text herausgeholt werden und seperat abgespeichert werden !
	//$essen = preg_replace('/[0-9]/','',$essen);
	
	$insert = 'INSERT INTO '.$table_name.'(name,bewertung) VALUES("'.$essen.'","'.$essen.'")';
		
	if (mysqli_query($connection,$insert)){
		echo "<br> <b>Inserted successfully :):</b>".$essen;
	}else{
		echo "<br> Error inserting: ".mysqli_error($connection);
	}
	
}

  
// --------------------------------------------------------------------------------------
/*
	Verbinung mit Datenbank wird geschlossen!
	für den fall das mysql_close buggy wird auskommentieren !
	-> https://bugs.php.net/bug.php?id=30525
*/
mysqli_close($connection); 
?>
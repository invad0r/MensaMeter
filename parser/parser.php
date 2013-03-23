<?php
include('simple_html_dom.php');
require '../config/dbconfig.php';

$table= "ESSEN";
mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
echo " connected ";
mysql_select_db(DB_DATABASE) or die(mysql_error());
echo " database found";
echo ('</br>');

$html= file_get_html('http://speiseplan.studwerk.uptrade.de/de/620/2013/0/');
$dish= $html->find('table td.dish-description') ;
$datum=$html->find('table th.category') ;
$datum1= explode ("\n",$datum[0]->plaintext);
$datumnew=trim($datum1[0]);
echo $datumnew;
for ($i=0;$i<sizeof($dish);$i++){			
	$dish1=explode ("\n",$dish[$i]->plaintext);
	$dishnew=trim($dish1[0]);
	mysql_query ("INSERT INTO ESSEN(id,datum,name) VALUES ('$i','$datumnew','$dishnew')")or die (mysql_error()); 
	}
?>
<?php
include('simple_html_dom.php');
require '../config/dbconfig.php';

$table= "ESSEN";
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());

$html= file_get_html('http://speiseplan.studwerk.uptrade.de/de/620/2013/0/');
$datum=$html->find('table th.category') ;
$datum1= explode ("\n",$datum[0]->plaintext);
$datumnew=trim($datum1[0]);
echo "Datum New: ".$datumnew;
?>
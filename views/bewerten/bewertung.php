<?php
session_start();
$mytest=$_SESSION['test'];
$b=$_POST["punkt"];
echo "Du hast für "; echo $mytest; echo " ";echo $b; echo " Punkte abgegeben"; 
mysql_connect(localhost,root);
mysql_select_db(danieltinney) or die ( "Unable to select database");
$bewert=mysql_query("UPDATE essen SET bewertung=bewertung +$b WHERE name='$mytest'");
?>
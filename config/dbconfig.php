<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'danieltinney');
define('DB_PASSWORD', 'danieltinney');
define('DB_DATABASE', 'danieltinney');
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
?>

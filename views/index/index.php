
This is the main page. Welcome !
Hier sind top Essen
<div id="top5">
<?php
mysql_connect(localhost,root);
mysql_select_db(danieltinney) or die ( "Unable to select database");
$result=mysql_query("SELECT name, bewertung,name_mensa FROM essen, mensa WHERE essen.mensa_id=mensa.id ORDER BY bewertung DESC LIMIT 5 ");

    echo "<table border='1'>
        <tr>
        <th>blah</th>
        <th>Speise</th>
        <th>Bewertung</th>
        <th>Mensa</th>
        </tr>";
    while ($row = mysql_fetch_array($result)) { 
        
    echo "<tr>";
    echo "<td>" .$count. "</td>";
    echo "<td>" .$row['name']. "</td>";
    echo "<td >".$row['bewertung']."</td>";
    echo "<td >".$row['name_mensa']."</td>";
    echo "</tr>";
    
    }

echo "</table>";
?>
</div>
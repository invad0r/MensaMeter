
<div data-role="listview" data-inset="true">

    <?php
    echo "<table border='1'>
<tr>
<th>Kategorie</th>
<th>Speise</th>
<th>Preis</th>
<th>Bewertung</th>
</tr>";
  
    foreach ($this->essenList as $key => $value) { 
        
        echo "<tr>";
        echo "<td> </td>";      
        echo "<td>" . $value['name'] . "</td>";
        echo "</tr>";     
    }
    echo "</table>";

    ?>
 
</div>



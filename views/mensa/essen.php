
<div data-role="listview" data-inset="true">

    <?php
 $q=$_POST["mensa"];
 //echo $q;
 //echo "abc";
    echo "<table border='1'>
<tr>
<th>Kategorie</th>
<th>Speise</th>
<th>Preis Studierende</th>
<th>Preis Bedienstete</th>
<th>Bewertung</th>
</tr>";
    
    foreach ($this->essenList as $key => $value ) { 
       if($value['mensa_id']==$q){
        echo "<tr>";
        echo "<td>".$kat. "</td>";
        echo "<td>" .$value['name']. "</td>";
        echo "<td>".$preis_std. "</td>";
        echo "<td>".$preis_mit. "</td>";
        echo "<td>".$bewertung. "</td>";    
       echo "</tr>";    
       }
    }
    
    
    echo "</table>";

    ?>
 
</div>



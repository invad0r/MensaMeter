
<div data-role="listview" data-inset="true">

    <?php
 $q=$_POST["mensa"];
 mysql_connect(localhost,root);
 mysql_select_db(danieltinney) or die ( "Unable to select database");
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
     
    echo "<tr>"; 
   
    foreach ($this->essenList as $key => $value ){
        if($value['mensa_id']==$q){ 
        if($value['kat_id']=='1'){
        $result = mysql_query("SELECT name,preis_std,preis_mit FROM kategorie WHERE id = '1'");}
        if($value['kat_id']=='2'){
        $result = mysql_query("SELECT name,preis_std,preis_mit FROM kategorie WHERE id = '2'");}
        if($value['kat_id']=='3'){
        $result = mysql_query("SELECT name,preis_std,preis_mit FROM kategorie WHERE id = '3'");}
        if($value['kat_id']=='4'){
        $result = mysql_query("SELECT name,preis_std,preis_mit FROM kategorie WHERE id = '4'");}
        if($value['kat_id']=='5'){
        $result = mysql_query("SELECT name,preis_std,preis_mit FROM kategorie WHERE id = '5'");}
        if($value['kat_id']=='6'){
        $result = mysql_query("SELECT name,preis_std,preis_mit FROM kategorie WHERE id = '6'");}
        if($value['kat_id']=='7'){
        $result = mysql_query("SELECT name,preis_std,preis_mit FROM kategorie WHERE id = '7'");}
        if($value['kat_id']=='8'){
        $result = mysql_query("SELECT name,preis_std,preis_mit FROM kategorie WHERE id = '8'");}
        
            while($row=  mysql_fetch_array($result))
            {
            echo "<td>" .$row['name']. "</td>";
            
            echo "<td>" .$value['name']. "</td>";
            
            echo "<td>".$row['preis_std']. "</td>";
            
            echo "<td>".$row['preis_mit']. "</td>";
            
            echo "<td>".$bewertung. "</td>";   
            }
    echo "</tr>";    
        }
    }
    echo "</table>";

    ?>
 </div>



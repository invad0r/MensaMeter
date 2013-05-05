<form id="myForm" action="<?php echo URL; ?>mensa/essen" method="post">
    <!--Mit data-inset="true" werden Umlaute wieder angezeigt ??!!-->
    <!--<div data-role="fieldcontain" data-inset="true">-->
    <div data-role="listview" data-inset="true">
        <fieldset data-role="controlgroup">
            <?php
            foreach ($this->mensenList as $key => $value) {
                //echo "<li>" . $value['name'] . "</li>";

                echo '<label for ="' . $value['name'] . '">' . $value['name'] . '</label>';
                //Aus einem mir unerklärlichen Grund zerschießt $value['id'] für id jQuery Mobile ??
                echo '<input type="checkbox" name="' . $value['name'] . '" value="yes" id="' . $value['name'] . '" > ';
            }
            ?>
            <input type="submit" value="Anzeigen" />
        </fieldset>




    </div>
</form>

<?php
//foreach ($this->mensenList as $key => $value) {
//    echo $value['id']." ".$value['name']."<br />";
//}
//print_r($this->mensenList);
?>

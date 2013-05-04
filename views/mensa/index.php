<form id="myForm" action="<?php echo URL; ?>mensa/essen" method="post">
    <div data-role="fieldcontain">
        <fieldset data-role="controlgroup">
            <?php
            foreach ($this->mensenList as $key => $value) {
                //echo "<li>" . $value['name'] . "</li>";

                echo '<label for ="' . $value['name'] . '">' . $value['name'] . '</label>';
                //Aus einem mir unerklärlichen Grund zerschießt $value['id'] für id jQuery Mobile ??
                echo '<input type="checkbox" name="' . $value['name'] . '" value="yes" id="' . $value['name'] . '" > ';
            }
            ?>

        </fieldset>
    

        <input type="submit" value="Anzeigen" />

    </div>
</form>

<?php
//foreach ($this->mensenList as $key => $value) {
//    echo $value['id']." ".$value['name']."<br />";
//}
//print_r($this->mensenList);
?>

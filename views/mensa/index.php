<form id="myForm" action="<?php echo URL; ?>mensa/essen" method="post">
    <div id="mensaList" >
        <fieldset>
            <?php
                foreach ($this->mensenList as $key => $value) {
                    echo '<label for ="' . $value['id'] . '">' . $value['name'] . '</label>';
                    echo '<input type="checkbox" id="' . $value['id'] . '" name="mensa" value="'.$value['id'].'"> ';
                }
            ?>
            <input type="submit" value="Anzeigen" />
        </fieldset>
    </div>
</form>

<p><tt id="results"></tt></p>

<?php
//foreach ($this->mensenList as $key => $value) {
//    echo $value['id']." ".$value['name']."<br />";
//}
//print_r($this->mensenList);
?>

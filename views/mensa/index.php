<form id="myForm" action="<?php echo URL; ?>mensa/essen" method="post">
    <div id="mensaList" >
        <fieldset>
            <?php
                foreach ($this->mensenList as $key => $value) {
                    echo '<label for ="' . $value['id'] . '">' . $value['name'] . '</label>';
                    echo '<input type="checkbox" id="' . $value['id'] . '" name= "mensa" value="'.$value['id'].'"> ';
                }
            ?>
            <input type="submit" value="Anzeigen" />
        </fieldset>
    </div>
</form>

<p><tt id="results"></tt></p>

<div id="mensen"></div>
<div id="essen"></div>

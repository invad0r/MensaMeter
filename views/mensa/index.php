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


<!--<fieldset datarole="controlgroup">
    <ul id="mensen" data-role=listview data-inset=true> 
        <!--<li>-->
           <!-- <label for="1">
                mensa
            </label>
            <input type="checkbox" id="1">-->
<!--        </li>
        <li>-->
           <!-- <label for="2">
                blabla
            </label>
            <input type="checkbox" id="2">
        <!--</li>-->
        <!--<li>-->
            <!--<input type="submit" value="Anzeigen" />
        <!--</li>-->
        
   <!--</ul>
    
</fieldset>

<div id="essen"></div>-->


<form id="bewerten" action="<?php echo URL; ?>bewerten/bewertung" method="post">
     <?php if (Session::get('loggedIn') == true): ?>
       <div id="bewertung"> 
    <?php
    mysql_connect(localhost,root);
    mysql_select_db(danieltinney) or die ( "Unable to select database");
    session_start();
    $p=$_POST["speise"];
    $_SESSION['test']=$p;// pass php-variable in another php-pages
    $result=mysql_query("SELECT bewertung FROM essen WHERE name='$p'");
    while ($row = mysql_fetch_array($result)) {
    $try=$row['bewertung'];
}
    //echo $p; 
    ?>
           <fieldset>
               <?php echo $type;?>
	<label for="punkt"> Bewertung abgeben für: <?php echo $p;?> </label>
	<input type="range" name="punkt" id="punkt" value="<?php echo $try;?>" min="0" max="10" data-theme="a" data-track-theme="b" />
          
        <input type="submit" value="Absenden" />   
     <?php endif; ?>
     <?php if (Session::get('loggedIn') == false): 
 
            header ("Location: login");
     ?>
         <?php endif; ?>
            </fieldset>
           </div>
    </form>



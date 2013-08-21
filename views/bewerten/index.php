
<form id="bewerten" action="<?php echo URL; ?>bewerten/bewertung" method="post">
     <?php if (Session::get('loggedIn') == true): ?>
       <div id="bewertung"> 
    <?php
    session_start();
    $p=$_POST["speise"];
    $_SESSION['test']=$p;
    //echo $p;
    
    ?>
           <fieldset>
	<label for="punkt"> Bewertung abgeben für: <?php echo $p;?> </label>
	<input type="range" name="punkt" id="punkt" value="0" min="0" max="10" data-theme="a" data-track-theme="b" />
          
        <input type="submit" value="Absenden" />   
     <?php endif; ?>
     <?php if (Session::get('loggedIn') == false): 
 
            header ("Location: login");
     ?>
         <?php endif; ?>
            </fieldset>
           </div>
    </form>



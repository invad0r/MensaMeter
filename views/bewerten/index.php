<<<<<<< HEAD
<form action="<?php echo URL; ?>bewerten" method="post">
     <?php if (Session::get('loggedIn') == true): ?>
       <div id="bewertung">
           <fieldset>
	<label for="punkt">Bewertung abgeben:</label>
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
=======
<?PHP

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: login");

}

?>
>>>>>>> 0bd8a95bd9a70f7ab09d2e9c303580de124528c3

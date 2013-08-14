
<form action="<?php echo URL; ?>bewerten/bewertung" method="post">
     <?php if (Session::get('loggedIn') == true): ?>
       <div id="bewertung">
           <script>        
    var veg = document.getElementById("speise").innerText;
    alert(veg);
    $(document).ready(function()  
   {  
       $.post("http://localhost/mensameter-webapp/bewerten/index.php", { js: veg});  
   });      </script>
    <?php $_SESSION['jsvalue'] = $_POST['js'];
    echo $_SESSION['jsvalue'];
    echo "1234";
    ?>
           <fieldset>
	<label for="punkt"> Bewertung abgeben:</label>
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



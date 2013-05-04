/**
 * Dynamically inserting attr
 * http://stackoverflow.com/questions/10570679/jquery-dynamically-inserted-attr-not-working
 * 
 */

	
$(document).on('pagebeforecreate', function(){
    $("#mensaList").attr("data-role","listview");
});



$(document).ready(function(){
   // alert(1);

//    < !-- Initialize from document ready event //-->
//        $("header").attr("data-role", "header");
//        $("section div:first").attr("data-role", "content");
//        $("footer").attr("data-role", "footer");
//        
//        data-role="listview"
   // $("ul").attr("data-role","listview");

});



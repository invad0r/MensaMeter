$(document).ready(function () {
    $('.additives').hide();   
    $('h2').click(function(){
      if ($(".additives").is(":hidden")) {
        $(".additives").slideDown("slow");
      } else {
        $(".additives").hide();
      }
    });

});
/**
 * Dynamically inserting attr
 * http://stackoverflow.com/questions/10570679/jquery-dynamically-inserted-attr-not-working
 * 
 */

var showFood;


$(document).on('pagebeforecreate', function() {
//    $("fieldset").attr("data-role", "controlgroup");
//    $("#mensaList").attr("data-role", "listview").attr("data-inset", "true");
showFood();
});

$(document).ready(function() {
    console.log("is ready!");
    




    // alert(1);
//    function showValues() {
//        var str = $("form").serialize();
//        $("#results").text(str);
//    }
//    $("input[type='checkbox']").on("click", showValues);
//    $("select").on("change", showValues);
//    showValues();


//    $('#myForm').submit(function(){
//        var checked = $("input[type='checkbox']").attr('id');
//        
//        $.ajax({
//            type:"post",
//            url:"mensa.php",
//            data: {checked: checked},
//            datatype:"json",
//            success: function(){
//                alert("data was sent");
//                //$.mobile.changePage("essen.php");
//            }
//        });
//    });
//    
//    $('#myForm').submit(function(){
//        var id = $("input[type='checkbox']").attr('id');
//        //alert(id);
//        $.post(
//                'mensa/essenList',
//                {'id': id},
//                function(){
//                    alert (id);
//                }
//        ),'json';
////            return false;
//    });


});


showFood = function() {
    $.ajax({
        url: 'mensa/xhrGetMensen',
        type: 'POST',
        success: function(r) {
            var food, i, len;

            food = JSON.parse(r); //alternative: var food = $.parseJSON(r);

            for (i = 0, len = food.length; i < len; i++) {
                // @TODO: herausfinden warum manche Einträge mit null zurückgegeben werden
                if (food[i].name !== null) {
                    $('#mensen').append(
                            '<li>' +
                            '<input type="checkbox" id="' + food[i].name + '-' + i + '" name="mensa" value="' + i + '">' +
                            '<label for="' + i + '">' + food[i].name + '</label>' +
                            '</li>'
                            );
                }
            }
        }
    });
};
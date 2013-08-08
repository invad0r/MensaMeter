/**
 * Dynamically inserting attr
 * http://stackoverflow.com/questions/10570679/jquery-dynamically-inserted-attr-not-working
 * 
 */

$(document).on('pagebeforecreate', function() {
    $("fieldset").attr("data-role", "controlgroup");
    $("#mensaList").attr("data-role", "listview").attr("data-inset", "true");
});

$(document).ready(function() {
    console.log("is ready!");

    var name = "le";

    $.ajax({
        url: 'mensa/hello/' + name,
        type: 'POST',
        success: function(result) {
            var data = JSON.parse(result);
            console.log(data);
            var foo = $('#name');
            console.log(foo);

            $('#mensen').append('foo' + data);
        }
    });


    $.ajax({
        url: 'mensa/xhrGetEssenList',
        type: 'POST',
        success: function (r){
            console.log(r);
            var food = JSON.parse(r);
//            var food = $.parseJSON(r);
            console.log(food);
            $('#essen').append('<p>' + food[2].name + '</p>');
        }
    });
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
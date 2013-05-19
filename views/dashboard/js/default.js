$(document).ready(function() {
//TODO: Dashboard kommentar werden erst nach refresh angezeigt -> .on("pageshow",..) könnte helfen ?!
//    $('#class').on("pageshow",function(){
//        //Alles was hier steht wird ausgeführt, wenn die Seite angezeigt wird
//    })
    
    $.get('dashboard/xhrGetListings', function(o) {

        for (var i = 0; i < o.length; i++)
        {
            console.log(o[i].text + "\n")
            //$('#listInserts').append('<div id="comment">' + o[i].text + '<a class="del" rel="' + o[i].id + '" href="#">X</a></div>');
            $('#listInserts').append('<div>' + o[i].text + '<a class="del" rel="' + o[i].id + '" href="#">[delete]</a></div>');
        }

        $('#content').on('click', '.del', function() {
            delItem = $(this);
            var id = $(this).attr('rel');

            $.post(
                    'dashboard/xhrDeleteListing',
                    {'id': id},
                    function() {
                        delItem.parent().remove();
                    });

            return false;
        });

    }, 'json');



    $('#randomInsert').submit(function() {

        //alert(1);

        var url = $(this).attr('action');
        var data = $(this).serialize();

        //console.log('url:' + url);
        //console.log('data:' + data);

        $.post(url, data, function(o) {
            //console.log('post:' + o.text + ' ' + o.id);
            $('#listInserts').append(
                    '<div id="container">' +
                        o.text + 
                        '<a class="del" rel="' + o.id + '" href="#">[delete]</a>\n\
                    </div>');
        }, 'json');


        return false;
    });
});

$(function () {

    var baseurl = 'http://localhost/t3/user_slip-show.php/';

    // $('input.send-notify')(function () {
    
    //     if (value != null) {
    //         $.ajax({

    //             url: baseurl + 'notify.php',
    //             method: 'post',
    //             dataType: 'json',
    //             lab_id: {lab},  
    //             pc_id: {pc},

    //         }).done(function (responce) {
    //             console.log(responce)
    //         });
    //     }
    // });
    
    $('input.send-notify').submit(function () {

        if ($(this) != null) { 

            console.log(5);
            $.ajax({

                url: baseurl + 'noti.php',
                method: 'post',
                dataType: 'json',
                send_url: {url},
                data: {
                    "submit": 1
                }

            }).done(function (responce) {
                console.log(responce)
            });
        }
    });

});
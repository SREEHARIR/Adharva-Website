/* ---------------------------------------------
 Registration form
 --------------------------------------------- */

$(document).ready(function() {

    $('#IEEEpay').show();
    // $('#IEEENo').attr('disabled', 'false');
    // $('#IEEENo').show();
    $('#NON-IEEEpay').hide();

    $('input[type="radio"]').click(function() {
        if ($(this).attr('id') == 'IEEE') {
            $('#IEEEpay').show();
            // $('#IEEENo').attr('disabled', 'false');
            // $('#IEEENo').show();
            $('#NON-IEEEpay').hide();
        } else {
            $('#IEEEpay').hide();
            // $('#IEEENo').attr('disabled', 'true');
            // $('#IEEENo').hide();
            $('#NON-IEEEpay').show();
        }
    });

    // $('.explara_button').click(function() {
    // });

    // $("#submit_btn").click(function() {

    //     var user_name = $('input[name=name]').val();
    //     var user_college = $('input[name=college]').val();
    //     var user_email = $('input[name=email]').val();
    //     var user_phone = $('input[name=phone]').val();
    //     var user_facebook = $('input[name=facebook]').val();
    //     var user_fiction = $('textarea[name=fiction]').val();
    //     var user_city = $('input[name=city]').val();

    //     var proceed = true;
    //     if (user_name == "") {
    //         $('input[name=name]').css('border-color', '#e41919');
    //         proceed = false;
    //     }
    //     if (user_email == "") {
    //         $('input[name=email]').css('border-color', '#e41919');
    //         proceed = false;
    //     }

    //     if (user_fiction == "" || user_fiction.length > 180) {
    //         $('textarea[name=fiction]').css('border-color', '#e41919');
    //         proceed = false;
    //     }
    //     if (user_college == "") {
    //         $('input[name=college]').css('border-color', '#e41919');
    //         proceed = false;
    //     }
    //     if (user_phone == "") {
    //         $('input[name=phone]').css('border-color', '#e41919');
    //         proceed = false;
    //     }

    //     if (user_facebook == "") {
    //         $('input[name=facebook]').css('border-color', '#e41919');
    //         proceed = false;
    //     }

    //     if (user_city == "") {
    //         $('input[name=city]').css('border-color', '#e41919');
    //         proceed = false;
    //     }

    //     //everything looks good! proceed...
    //     if (proceed) {
    //         //data to be sent to server
    //         post_data = {
    //             'userName': user_name,
    //             'userEmail': user_email,
    //             'userFiction': user_fiction,
    //             'userCollege': user_college,
    //             'userPhone': user_phone,
    //             'userFacebook': user_facebook,
    //             'userCity': user_city


    //         };
    //         // SUBMIT TO DATABASE
    //     }
    // });


});

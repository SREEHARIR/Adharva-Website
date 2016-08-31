/* ---------------------------------------------
 Contact form
 --------------------------------------------- */
$(document).ready(function() {
    $("#submit_btn").click(function() {
        //get input field values
        var user_name = $('input[name=name]').val();
        var user_college = $('input[name=college]').val();
        var user_email = $('input[name=email]').val();
        var user_phone = $('input[name=phone]').val();
        var user_facebook = $('input[name=facebook]').val();
        var user_fiction = $('textarea[name=fiction]').val();
        var user_city = $('input[name=city]').val();


        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if (user_name == "") {
            $('input[name=name]').css('border-color', '#e41919');
            proceed = false;
        }
        if (user_email == "") {
            $('input[name=email]').css('border-color', '#e41919');
            proceed = false;
        }

        if (user_fiction == "" || user_fiction.length > 180) {
            $('textarea[name=fiction]').css('border-color', '#e41919');
            proceed = false;
        }
        if (user_college == "") {
            $('input[name=college]').css('border-color', '#e41919');
            proceed = false;
        }
        if (user_phone == "") {
            $('input[name=phone]').css('border-color', '#e41919');
            proceed = false;
        }

        if (user_facebook == "") {
            $('input[name=facebook]').css('border-color', '#e41919');
            proceed = false;
        }

        if (user_city == "") {
            $('input[name=city]').css('border-color', '#e41919');
            proceed = false;
        }

        //everything looks good! proceed...
        if (proceed) {
            //data to be sent to server
            post_data = {
                'userName': user_name,
                'userEmail': user_email,
                'userFiction': user_fiction,
                'userCollege': user_college,
                'userPhone': user_phone,
                'userFacebook': user_facebook,
                'userCity': user_city


            };
            // console.log($user_city);
            //Ajax post data to server
            $.post('flashfiction.php', post_data, function(response) {

                //load json data from server and output message     
                if (response.type == 'error') {
                    output = '<div class="error">' + response.text + '</div>';
                } else {
                    output = '<div class="success">' + response.text + '</div>';

                    //reset values in all input fields
                    $('#contact_form input').val('');
                    $('#contact_form textarea').val('');
                }

                $("#result").hide().html(output).slideDown();
            }, 'json');
        }

        return false;
    });

    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function() {
        $("#contact_form input, #contact_form textarea").css('border-color', '');
        $("#result").slideUp();
    });

});

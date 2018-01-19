jQuery(document).ready(function(){
   'use strict';
    jQuery('form#reg_form').submit(
        function(event){
            event.preventDefault();

            let userName = jQuery('#name').val();
            let login = jQuery('#login').val();
            let pwd = jQuery('#pass').val();
            let email = jQuery('#email').val();

            let user_data = {
                userName: userName,
                login: login,
                pwd: pwd,
                email: email
            };
           
            user_data = 'user_data=' + JSON.stringify(user_data);
            
            jQuery.ajax({
                url: '../models/reg_user.php',
                type: 'post',
                data: user_data,
                success: function(response){
                    console.log("response", response);
                    if(response === 'user add'){
                        window.location = "/"; // перенаправление на другую страницу
                    } else {
                        console.log("Пользователь не добавлен");
                    }
                },
                error: function(err){
                    console.log("Error", err);
                }
            });
        }
    )
});
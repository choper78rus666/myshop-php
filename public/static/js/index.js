jQuery(document).ready(function(){
   'use strict';
    jQuery('form#reg_form').submit(
        function(event){
            event.preventDefault();

            let userName = checkInput(jQuery('#name').val());
            let login = checkInput(jQuery('#login').val());
            let pwd = checkInput(jQuery('#pass').val());
            let email = checkInput(jQuery('#email').val());

            if(!userName || !login || !pwd || !email){
                return;
            }
            
            let user_data = {
                userName: userName,
                login: login,
                pwd: pwd,
                email: email,
                state: 'user'
            };
           
            user_data = 'user_data=' + JSON.stringify(user_data);
            
            jQuery.ajax({
                url: 'reg_user',
                type: 'post',
                data: user_data,
                success: function(response){
                    switch (response) {
                         case 'user enabled':
                            document.getElementById('response').innerHTML = 'Логин занят';
                            break;
                         case 'not adds':
                            document.getElementById('response').innerHTML = 'Повторите регистрацию';
                            break;
                         case 'user add':
                            document.getElementById('response').innerHTML = 'Пользователь зарегистрирован';
                            window.location = "/";
                            break;
                     }
                },
                error: function(err){
                    console.log("Error", err);
                }
            });
        }
    )
});
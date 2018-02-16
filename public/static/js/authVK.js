jQuery(document).ready(function(){
    'use strict';

    jQuery('#vk_reg').click(
        function(event){
        VK.init({
            apiId: 6375502
        });

        VK.Auth.login(function(response) {
            if (response.session) {
                console.log('Пользователь успешно авторизовался ');
                console.log(response.session.user);
                AuthVK(response.session.user);
                /* Пользователь успешно авторизовался */
                if (response.settings) {
                    console.log('Выбранные настройки доступа пользователя, если они были запрошены');
                    /* Выбранные настройки доступа пользователя, если они были запрошены */
                }
            } else {
                console.log('Пользователь нажал кнопку Отмена в окне авторизации');
                /* Пользователь нажал кнопку Отмена в окне авторизации */
            }
        });
            
        function AuthVK(userVK){
            
            let user = {
                id: userVK.id,
                first_name: userVK.first_name,
                last_name: userVK.last_name,
                nickname: userVK.nickname
            };
            
            user = 'userVK=' + JSON.stringify(user);
            
            jQuery.ajax({
                url: '/account/authVK',
                type: 'post',
                data: user,
                success: function(response){
                    console.log(response);
                    switch (response) {
                         case 'user not found':
                             document.getElementById('response').innerHTML = 'Пользователь не зарегистрирован';
                             break;
                         case 'user':
                             window.location = "/account/user_account";
                            console.log(response);
                             break;
                         case 'admin':
                             window.location = "/account/admin_account";
                             break;
                     }
                },
                error: function(err){
                    console.log("Error", err);
                }
            });
        }
    }
    )
});
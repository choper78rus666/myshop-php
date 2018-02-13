jQuery(document).ready(function(){
   'use strict';
    
    jQuery('form#user_info').submit(
        function(event){
            event.preventDefault();
        
            let name = checkInput(jQuery('#name').val());
            let surname = checkInput(jQuery('#surname').val());
            let middle_name = checkInput(jQuery('#middle_name').val());
            let birthday = jQuery('#birthday').val();
            let sex = jQuery('#sexm').prop("checked") ? 'male' : 'female';
            let about = jQuery('#about').val() ? checkInput(jQuery('#about').val()) : "";
            let avatar = typeof(jQuery('#avatar').prop('files')[0]) !== 'undefined' ? jQuery('#avatar').prop('files')[0]['name'] : jQuery("#image").attr('src').slice(jQuery("#image").attr('src').lastIndexOf('/') + 1);
            if (typeof(avatar) === ''){
                avatar = 'default.jpg';
            }
            
            let file_data = jQuery('#avatar').prop('files')[0];
            
            var data = new FormData();
            data.append('file', file_data);
            
            console.log("name ", name);
            console.log("surname", surname);
            console.log("middle_name", middle_name);
            console.log("birthday", birthday);
            console.log("sex", sex);
            console.log("about", about);
            console.log("avatar", avatar);
            
            
            let user_info = {
                name: name,
                surname: surname,
                middle_name: middle_name,
                birthday: birthday,
                sex: sex,
                about: about,
                avatar: avatar
                
            };
           
            user_info = 'user_info=' + JSON.stringify(user_info);
            
            jQuery.ajax({
                url: '/account/upload',
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: 'post',
                success: function(php_script_response){
                    console.log(php_script_response);
                    switch (php_script_response) {
                        case 'Upload complete!':
                            
                            jQuery("#image").attr("src",'/static/upload/'+avatar);
                            document.getElementById('response_image').innerHTML = 'Аватарка загружена';
                            break;
                        case 'Format file size too big!':
                            document.getElementById('response_image').innerHTML = 'Размер файла больше 2мб.';
                            break;
                        case 'Format not allowed!':
                            document.getElementById('response_image').innerHTML = 'Допустимы типы jpeg или png.';
                            break;
                        case 'File not found':
                            document.getElementById('response_image').innerHTML = 'Аватарка не загружена';
                            break;
                    }
                }
            });
            
            jQuery.ajax({
                url: '/account/user_info',
                type: 'post',
                data: user_info,
                success: function(response){
                    console.log(response);
                    switch (response) {
                         case '1':
                            document.getElementById('response').innerHTML = 'Данные сохранены';
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
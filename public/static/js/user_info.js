jQuery(document).ready(function(){
   'use strict';
    
    jQuery('form#user_info').submit(
        function(event){
            event.preventDefault();
        
            let name = checkInput(jQuery('#name').val());
            let surname = checkInput(jQuery('#surname').val());
            let middle_name = checkInput(jQuery('#middle_name').val());
            let birthday = jQuery('#birthday').val();
            let sex = jQuery('#sexm').prop("checked") ? 'maly' : 'femaly';
            let about = jQuery('#about').val() ? checkInput(jQuery('#about').val()) : " ";
            let avatar = jQuery('#avatar').val();
            
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
                avatar: avatar,
                
            };
           
            user_info = 'user_info=' + JSON.stringify(user_info);
            
            jQuery.ajax({
                url: '/account/user_info',
                type: 'post',
                data: user_info,
                success: function(response){
                    console.log(response);
                    switch (response) {
                            
                         case 'add data':
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
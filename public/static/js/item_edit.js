jQuery(document).ready(function(){
   'use strict';
    
    jQuery('form#item_edit').submit(
        function(event){
            event.preventDefault();
        
            let id_item = jQuery('#id_item').val();
            let category = jQuery('#category').val();
            let title = checkInput(jQuery('#title').val());
            let count = jQuery('#count').val();
            let about = checkInput(jQuery('#about').val());
            let price = jQuery('#price').val();
            let image = typeof(jQuery('#item').prop('files')[0]) !== 'undefined' ? jQuery('#item').prop('files')[0]['name'] : jQuery("#image").attr('src').slice(jQuery("#image").attr('src').lastIndexOf('/') + 1);
            if (image === ''){
                image = 'default.png';
            }
            
            let file_data = jQuery('#item').prop('files')[0];
            
            var data = new FormData();
            data.append('file', file_data);
            
            console.log("id", id_item);
            console.log("category ", category);
            console.log("title", title);
            console.log("count", count);
            console.log("about", about);
            console.log("price", price);
            console.log("image", image);
            
            
            let edit_info = {
                id: id_item,
                category: category,
                title: title,
                count: count,
                about: about,
                price: price,
                image: '/static/images/' + image
                
            };
           
            edit_info = 'edit_info=' + JSON.stringify(edit_info);
            
            jQuery.ajax({
                url: '/catalog/upload',
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
                            
                            jQuery("#image").attr("src",'/static/images/'+image);
                            document.getElementById('response_image').innerHTML = 'Картинка загружена';
                            break;
                        case 'Format file size too big!':
                            document.getElementById('response_image').innerHTML = 'Размер файла больше 2мб.';
                            break;
                        case 'Format not allowed!':
                            document.getElementById('response_image').innerHTML = 'Допустимы типы jpeg или png.';
                            break;
                        case 'File not found':
                            document.getElementById('response_image').innerHTML = 'Картинка не загружена';
                            break;
                    }
                }
            });
            
            jQuery.ajax({
                url: '/catalog/edit_info',
                type: 'post',
                data: edit_info,
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
jQuery(document).ready(function(){
   'use strict';
    
    jQuery.ajax({
        url: '/cart/getAllItem',
        success: function(response){
             document.getElementById('cart').innerHTML = response;
        },
        error: function(err){
            console.log("Error", err);
        }
    });
    
    jQuery('.add_cart>button').click(
        function(event){
        
            let id_item = jQuery(this).val();
            var button = jQuery(this);
            jQuery.ajax({
                url: '/cart/add',
                type: 'post',
                data: 'id_item='+id_item,
                success: function(response){
                    console.log('response_cart ', response);
                    if(response > 0){
                        document.getElementById('cart').innerHTML = response;
                    } else {
                        document.getElementById('cart').innerHTML = response*-1;
                        //jQuery(button).hide();
                        jQuery('div#'+id_item).removeClass("add_cart");
                        jQuery('div#'+id_item).html('<div class="text-center"><strong>Нет в наличии</strong></div>');
                    }
                    
                },
                error: function(err){
                    console.log("Error", err);
                }
            });
            
        }
                                                                
    )
});
jQuery(document).ready(function(){
   'use strict';
    
    jQuery('button#add_cart').click(
        function(event){
        
            let id_item = jQuery(this).val();
            console.log('id_item ', id_item);
            
            jQuery.ajax({
                url: '/cart/add',
                type: 'post',
                data: 'id_item='+id_item,
                success: function(response){
                    //console.log('response_cart ', response);
                     document.getElementById('cart').innerHTML = response;
                            
                     
                },
                error: function(err){
                    console.log("Error", err);
                }
            });
        }
                                                                
    )
});
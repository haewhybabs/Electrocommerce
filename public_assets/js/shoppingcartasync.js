

$(document).ready(function() {
    $('form#feedInput').submit(function(e) {

        var form = $(this);
        
        e.preventDefault();

        // var prod_id = $(this).data("prod_id");
        // var productName = $(this).data("productName");
        // var productPrice = $(this).data("productPrice");
        // var quantity = 1;

        // if (quantity != '' && quantity > 0) {
            
            $.ajax({
                url: form.attr('action'),
                type: "POST",
                data: form.serialize(),
                dataType: "html",
                success:function(response)
                {
                    alert('Product is successfully added to cart');
                    // $('#cart_details').html(data);
                    // $('#' + prod_id).val('');
                },
                error: function() { alert("Error posting feed"); }
            });

        // }

        // else {
        //     alert('Error! Quantity not specified');
        // }

    })
});

// $('form#feedInput').submit(function(e) {

//     var form = $(this);

//     e.preventDefault();

//     $.ajax({
//         type: "POST",
//         url: "<?php echo site_url('dashboard/post_feed_item'); ?>",
//         data: form.serialize(), // <--- THIS IS THE CHANGE
//         dataType: "html",
//         success: function(data){
//             $('#feed-container').prepend(data);
//         },
//         error: function() { alert("Error posting feed."); }
//    });

// });

              
			   
					// $("#cart"+id).submit(function(e)
					// {
					// e.preventDefault();
					// var me= $(this);

					// $.ajax({
					// 	url:me.attr('action'),
					// 	type:'post', 
					// 	data: me.serialize(),
					// 	dataType:'json',
					// 	success:function(response)
					// 		{

					// 			if (response.message==true)
					// 				{
					// 					//alert('success');
					// 					// $('.cart_count_value').prop('disabled',false);
					// 					// $.ajax({
					// 					// 	url:"<?=base_url();?>ShoppingCart/add_to_cart",
					// 					// 	success:function(data)
					// 					// 	{
					// 					// 		$('.cart_count_value').html(data);
					// 					// 	},
					// 					// 	error:function()
					// 					// 	{
					// 					// 		alert('Error Occur....!!');
					// 					// 	}
					// 					// });
					// 					// $('#the-mess').append('<div class="alert-success">' +'<span class="glyphicons glyphicons-ok"></span>' + 'An Item is successfully added' + '</div>');

					// 					// $('.product-quantity').removeClass('has-error')
					// 					// .removeClass('success');
					// 					// $('.text-danger').remove();
					// 					// //reset the form
					// 					// me[0].reset();

					// 					//close the message after seconds

					// 					// $('.alert-success').delay(500).show(10,function(){
					// 					// 	$(this).delay(3000).hide(10,function(){
					// 					// 		$(this).remove();
					// 					// 	});
                    //                     // })
                    //                     alert('yesso');
					// 				}
								
								
					// 		}
					// });

                    // });


                    
                    
				
			
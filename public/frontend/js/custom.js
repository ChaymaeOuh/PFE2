$('.delete-cart-item').click(function(e){
    e.preventDefault();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        
    });

    var prod_id = $(this).closest('.product_data').find('.prod_id').val();
    $.ajax({
        method: "POST",
        url:"delete-cart-item",
        data: {
            'prod-id':prod_id, 
        },
        success: function(response){
              swal("",response.status, "success");
        }
    });

});
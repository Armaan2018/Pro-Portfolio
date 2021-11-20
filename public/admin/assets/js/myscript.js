(function($) {
    $(document).ready(function() {
      

       $(document).on('click','#logout_btn',function(e){
        e.preventDefault();
        $('#logout_form').submit();

    });


     $(document).on('change','select#iconselecet',function(){
        let icon_val = $(this).val();
         $('i#icon_id').removeClass();
         $('i#icon_id').addClass(icon_val);
     });

     $(document).on('change','input[id="title_id"]',function(){
        let title_val = $(this).val();
       $('h4#title_id').text(title_val);
     });  


     $(document).on('change','textarea[id="service_desc"]',function(){
        let desc_val = $(this).val();
       $('p#service_desc').text(desc_val);
     });


    

$('div#alert_error_id').hide();

    $(document).on('submit','form#service_form',function(event){
        event.preventDefault();

        let para = "Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever";

        $.ajax({
            url:'service-create',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                $('form#service_form')[0].reset();
                showService();
                toastr.success('Have fun storming the castle!', 'Miracle Max Says');
                // $('i#icon_id').addClass('fa fa-laptop');
                //  // $('h4#title_id').text('web design');
                //  // $('p#service_desc').text(para);
                //  //  $('div#alert_error_id').hide();


            },
            error:function(response){

                 $('div#alert_error_id').show();
                 $('div#alert_error_id').text(response.responseJSON.errors.title);
                 $('div#alert_error_id').text(response.responseJSON.errors.description);
                 $('div#alert_error_id').text(response.responseJSON.errors.servicelink);
            }
        });
    });



  function showService(){
    $.ajax({

       url:'service-show',
       success:function(response){
        $('tbody#service_tbody').html(response);

       }



    });
  }

showService();



$(document).on('click','a#del_btn_id',function(e){
    e.preventDefault();

  let id = $(this).attr('del_btn_attr');  
       swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this Service!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {

    $.ajax({
        url:'service-delete/' + id,
        success:function(response){
             swal("Opps! This service has been deleted!", {
      icon: "success",
    });
            toastr.success('Service Deleted!', 'Oppps');
            showService();



        }
    })
    
  } else {
    swal("Section Not Delted");
    
  }
});


});




$(document).on('click','a#edit_btn_id',function(event){
    event.preventDefault();

    let edit_id = $(this).attr('edit_btn_attr');

    $.ajax({
        url:'service-edit/' + edit_id,
        success:function(response){
            $('#service_edit_modal input[name = "title"]').val(response.title);
            $('#service_edit_modal input[name = "hiddenid"]').val(response.hiddenid);
            $('#service_edit_modal input[name = "servicelink"]').val(response.servicelink);
            $('#service_edit_modal textarea[name = "description"]').val(response.description);
            $('#service_edit_modal select#iconselecet').val(response.icon);
            //aita jana lagbe
            //option id
            
           
           

              

           

            

        }
    });

});


// $('div#alert_error_id').hide();

    $(document).on('submit','form#service_form_update',function(event){
        event.preventDefault();

        

        $.ajax({
            url:'service-update',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                showService();
                toastr.success('Yaap Your Section Updated!', 'Miracle Max Says');
                $('#service_edit_modal').hide();
                $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();



            },
            // error:function(response){

            //      $('div#alert_error_id').show();
            //      $('div#alert_error_id').text(response.responseJSON.errors.title);
            //      $('div#alert_error_id').text(response.responseJSON.errors.description);
            //      $('div#alert_error_id').text(response.responseJSON.errors.servicelink);
            // }
        });
    });





    });

})(jQuery)

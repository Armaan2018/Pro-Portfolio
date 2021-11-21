(function($) {
    $(document).ready(function() {

        $(document).on('submit','form#contact_form_subs',function(event){
            event.preventDefault();

              $.ajax({
            url:'contact-msg',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                $('form#contact_form_subs')[0].reset();
                swal("Good job!", "You Msg Has Been Sent!", "success");
               

             


            },
            error:function(response){

                
            }
        });

        });

    });

})(jQuery)

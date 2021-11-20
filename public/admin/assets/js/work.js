(function($) {
    $(document).ready(function() {


$('input#feature_image').change(function(e){


let file_url = URL.createObjectURL(e.target.files[0]);
    $('img#feature_image_load').attr('src',file_url);
});



$(document).on('submit','form#category_form',function(event){
        event.preventDefault();

        
        $.ajax({
            url:'work-category-add',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                $('form#category_form')[0].reset();
                toastr.success('Good Job!', 'Category Added');
                 $('#addcatmodal').hide();
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
                showCategory();
                // $('i#icon_id').addClass('fa fa-laptop');
                //  // $('h4#title_id').text('web design');
                //  // $('p#service_desc').text(para);
                //  //  $('div#alert_error_id').hide();


            },
            error:function(response){

                 // $('div#alert_error_id').show();
                 // $('div#alert_error_id').text(response.responseJSON.errors.title);
                 // $('div#alert_error_id').text(response.responseJSON.errors.description);
                 // $('div#alert_error_id').text(response.responseJSON.errors.servicelink);
            }
        });
    });



$(document).on('submit','form#work_form',function(event){
        event.preventDefault();

        
        $.ajax({
            url:'work-add',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                $('form#work_form')[0].reset();
                toastr.success('Good Job!', 'Work Added');
                showWorks();
                $('#addworkmodal').hide();
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
                $('img#feature_image_load').attr('src','dummy.jpg')

                // $('i#icon_id').addClass('fa fa-laptop');
                //  // $('h4#title_id').text('web design');
                //  // $('p#service_desc').text(para);
                //  //  $('div#alert_error_id').hide();


            },
            error:function(response){

                 // $('div#alert_error_id').show();
                 // $('div#alert_error_id').text(response.responseJSON.errors.title);
                 // $('div#alert_error_id').text(response.responseJSON.errors.description);
                 // $('div#alert_error_id').text(response.responseJSON.errors.servicelink);
            }
        });
    });



















 function showWorks(){
    $.ajax({

       url:'work-show',
       success:function(response){
        $('tbody#work_tbody').html(response);

       }



    });
  }

showWorks();


function showCategory(){
    $.ajax({

       url:'category-show',
       success:function(response){
        $('tbody#category_tbody').html(response);

       }



    });
  }

showCategory();

    });

})(jQuery)

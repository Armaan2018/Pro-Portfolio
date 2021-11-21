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



//category edit
  $(document).on('click','a#cat_edit_btn',function(event){
    event.preventDefault();

    let cat_id = $(this).attr('cat_edit_attr');

    $.ajax({
        url:'work-category-edit/' + cat_id,
        success:function(response){
            $('#editcatmodal input[name="category_name"]').val(response.category_name);
            $('#editcatmodal input[name="category_id"]').val(response.category_id);

        }
    });

  });


  //work edit
  $(document).on('click','a#work_edit_btn',function(event){
    event.preventDefault();

    let work_edit_id = $(this).attr('work_edit_attr');

    $.ajax({
        url:'work-edit/' + work_edit_id,
        success:function(response){
            $('#editworkmodal input[name="title"]').val(response.title);
            $('#editworkmodal input[name="work_id"]').val(response.work_id);
            $('#editworkmodal input[name="work_link"]').val(response.work_link);
            $('#editworkmodal input[id="old_work_image"]').val(response.image);
            $('#editworkmodal select#work_category_select option#opt_id').val(response.cat_id);
            $('#editworkmodal img#feature_image_load').attr('src','public/media/work'+'/'+response.image);
           
        }
    });

  });



  $(document).on('submit','form#category_edit_form',function(event){
    event.preventDefault();



    $.ajax({
        url:'work-category-update',
        method: "POST",
        data:new FormData(this),
        contentType:false,
        processData:false,
        success:function(response){
                toastr.success('Good Job!', 'Category Updated');
                 $('#editcatmodal').hide();
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
                showCategory();


        }
    });

  });



$(document).on('click','a#del_cat_id',function(e){
    e.preventDefault();

  let id = $(this).attr('del_cat_attr');  
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
        url:'work-category-delete/' + id,
        success:function(response){
             swal("Opps! This category has been deleted!", {
      icon: "success",
    });
            toastr.success('Category Deleted!', 'Oppps');
            showCategory();



        }
    })
    
  } else {
    swal("Category Not Delted");
    
  }
});


});


$(document).on('click','a#del_work_id',function(e){
    e.preventDefault();

  let work_get_id = $(this).attr('del_work_attr');  
       swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this Work!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {

    $.ajax({
        url:'work-delete/' + work_get_id,
        success:function(response){
             swal("Opps! This Work has been deleted!", {
      icon: "success",
    });
            toastr.success('Work Deleted!', 'Oppps');
            showWorks();



        }
    })
    
  } else {
    swal("Work Not Deleted");
    
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

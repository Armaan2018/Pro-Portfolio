(function($) {
    $(document).ready(function() {



$('input#blog_image').change(function(e){


let file_url = URL.createObjectURL(e.target.files[0]);
    $('img#blog_image_load').attr('src',file_url);
});


//image preview slider
$('input#sliderimage').change(function(e){


let file_url = URL.createObjectURL(e.target.files[0]);
    $('img#slider_image_load').attr('src',file_url);
});


$('input#reviewer_image').change(function(e){


let file_url = URL.createObjectURL(e.target.files[0]);
    $('img#reviewer_image_load').attr('src',file_url);
});

//blog create
 $(document).on('submit','form#blog_form',function(event){
        event.preventDefault();

        

        $.ajax({
            url:'blog-create',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                $('form#blog_form')[0].reset();
                showBlogs();
                toastr.success('HEy You Added A New Blog!', 'Good Job');
                $('#addblogmodal').hide();
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();

             


            },
            error:function(response){

                
            }
        });
    });


//slider create
 $(document).on('submit','form#slider_form',function(event){
        event.preventDefault();

        

        $.ajax({
            url:'slider-create',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                $('form#slider_form')[0].reset();
                showSliders();
                toastr.success('HEy You Added A New Slider!', 'Good Job');
                $('#addslidermodal').hide();
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
                $('img#slider_image_load').attr('src','dummy.jpg')

             


            },
            error:function(response){

                
            }
        });
    });


//slider edit

 $(document).on('click','a#slider_btn_id',function(event){
    event.preventDefault();

    let slider_edit_id = $(this).attr('slider_btn_attr');

    $.ajax({
        url:'slider-edit/' + slider_edit_id,
        success:function(response){
            $('#slider_edit_modal input[name="title"]').val(response.title);
            $('#slider_edit_modal input[name="sliderlink"]').val(response.sliderlink);
            $('#slider_edit_modal input[name="get_slider_id"]').val(response.get_slider_id);
            $('#slider_edit_modal input[id="old_slider"]').val(response.old_slider);
            $('#slider_edit_modal img#slider_image_load').attr('src','public/media/work'+'/'+response.sliderimage);
           
        }
    });

  });


  //Review edit

 $(document).on('click','a#rev_edit_btn',function(event){
    event.preventDefault();

    let review_edit_id = $(this).attr('rev_edit_attr');

    $.ajax({
        url:'review-edit/' + review_edit_id,
        success:function(response){
            $('#editreviewmodal input[name="name"]').val(response.name);
            $('#editreviewmodal textarea[name="review"]').val(response.review);
            $('#editreviewmodal input[name="get_id_review"]').val(response.id);
            $('#editreviewmodal input[name="role"]').val(response.role);
            $('#editreviewmodal input[id="old_reviewer_img"]').val(response.image);
            $('#editreviewmodal img#reviewer_image_load').attr('src','public/media/work'+'/'+response.image);
           
        }
    });

  });



  //blog edit

 $(document).on('click','a#blog_edit_btn',function(event){
    event.preventDefault();

    let blog_edit_attr = $(this).attr('blog_edit_attr');

    $.ajax({
        url:'blog-edit/' + blog_edit_attr,
        success:function(response){
            $('#editblogmodal     input[name="title"]').val(response.title);
            $('#editblogmodal     input[name="old_blog_image"]').val(response.image);
            $('#editblogmodal     textarea[name="content"]').val(response.content);
            $('#editblogmodal     input[name="blog_id"]').val(response.id);
            $('#editblogmodal     img#blog_image_load').attr('src','public/media/work'+'/'+response.image);
           
        }
    });

  });



 //slider update
  $(document).on('submit','form#slider_form_edit',function(event){
        event.preventDefault();

        

        $.ajax({
            url:'slider-update',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                showSliders();
                toastr.success('Yaap Your Slider Updated!', 'Great');
                $('#slider_edit_modal').hide();
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



    //Blog update
  $(document).on('submit','form#blog_edit_form',function(event){
        event.preventDefault();

        

        $.ajax({
            url:'blog-update',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                showBlogs();
                toastr.success('Yaap Your Blog Updated!', 'Great');
                $('#editblogmodal').hide();
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



    //Blog update
  $(document).on('submit','form#review_form_edit',function(event){
        event.preventDefault();

        

        $.ajax({
            url:'review-update',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                showReviews();
                toastr.success('Yaap Your Review Updated!', 'Great');
                $('#editreviewmodal').hide();
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

//experience create
$(document).on('submit','form#experience_form',function(event){
        event.preventDefault();

        

        $.ajax({
            url:'experience-create',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                $('form#experience_form')[0].reset();
                showExperience();
                toastr.success('Experience added!', 'Good Job');
                $('#addexpmodal').hide();
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();

             


            },
            error:function(response){

                
            }
        });
    });
//education create
$(document).on('submit','form#education_form',function(event){
        event.preventDefault();

        

        $.ajax({
            url:'education-create',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                $('form#education_form')[0].reset();
                showEducation();
                toastr.success('Education Added!', 'Good Job');
                $('#addedumodal').hide();
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();

             


            },
            error:function(response){

                
            }
        });
    });


//education edit

 $(document).on('click','a#edu_edit_btn',function(event){
    event.preventDefault();

    let edu_edit_attr = $(this).attr('edu_edit_attr');

    $.ajax({
        url:'education-edit/' + edu_edit_attr,
        success:function(response){
            $('#edueditmodal     input[name="passedfrom"]').val(response.passedfrom);
            $('#edueditmodal     input[name="educlass"]').val(response.educlass);
            $('#edueditmodal     input[name="years"]').val(response.years);
            $('#edueditmodal     textarea[name="description"]').val(response.description);
            $('#edueditmodal     input[name="get_id_edu"]').val(response.id);
            
           
        }
    });

  });


 //education update
  $(document).on('submit','form#education_edit_form',function(event){
        event.preventDefault();

        

        $.ajax({
            url:'education-update',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                showEducation();
                toastr.success('Education Updated!', 'Great');
                $('#edueditmodal').hide();
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


  //experience edit

 $(document).on('click','a#exp_edit_btn',function(event){
    event.preventDefault();

    let exp_edit_attr = $(this).attr('exp_edit_attr');

    $.ajax({
        url:'exp-edit/' + exp_edit_attr,
        success:function(response){
            $('#editexpmodal     input[name="role"]').val(response.role);
            $('#editexpmodal     input[name="years"]').val(response.years);
            $('#editexpmodal     textarea[name="description"]').val(response.description);
            $('#editexpmodal     input[name="get_id_exp"]').val(response.id);
            
           
        }
    });

  });


 $(document).on('submit','form#experience_edit_form',function(event){
        event.preventDefault();

        

        $.ajax({
            url:'exp-update',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                showExperience();
                toastr.success('experience Updated!', 'Great');
                $('#editexpmodal').hide()
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

///review create
 $(document).on('submit','form#review_form',function(event){
        event.preventDefault();

        

        $.ajax({
            url:'review-create',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                $('form#review_form')[0].reset();
                showReviews();
                toastr.success('HEy You Added A New Reviewer!', 'Good Job');
                $('#addreviewmodal').hide();
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();

             


            },
            error:function(response){

                
            }
        });
    });




   function showBlogs(){
    $.ajax({

       url:'blog-show',
       success:function(response){
        $('tbody#blog_tbody').html(response);

       }



    });
  }

showBlogs();


  function showReviews(){
    $.ajax({

       url:'review-show',
       success:function(response){
        $('tbody#review_tbody').html(response);

       }



    });
  }

showReviews();



 function showSliders(){
    $.ajax({

       url:'slider-show',
       success:function(response){
        $('tbody#slider_tbody').html(response);

       }



    });
  }

showSliders();


function showEducation(){
    $.ajax({

       url:'education-show',
       success:function(response){
        $('tbody#education_tbody').html(response);

       }



    });
  }

showEducation();

function showExperience(){
    $.ajax({

       url:'experience-show',
       success:function(response){
        $('tbody#experience_tbody').html(response);

       }



    });
  }

showExperience();

//review Delete
$(document).on('click','a#del_rev_id',function(e){
    e.preventDefault();

  let rev_get_id = $(this).attr('del_rev_attr');  
       swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this review!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {

    $.ajax({
        url:'review-delete/' + rev_get_id,
        success:function(response){
             swal("Opps! This Review has been deleted!", {
      icon: "success",
    });
            toastr.success('Review Deleted!', 'Oppps');
            showReviews();



        }
    })
    
  } else {
    swal("Review Not Deleted");
    
  }
});


});



//blog Delete
$(document).on('click','a#del_blog_id',function(e){
    e.preventDefault();

  let blog_get_id = $(this).attr('del_blog_attr');  
       swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this blog!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {

    $.ajax({
        url:'blog-delete/' + blog_get_id,
        success:function(response){
             swal("Opps! This Blog has been deleted!", {
      icon: "success",
    });
            toastr.success('Blog Deleted!', 'Oppps');
            showBlogs();



        }
    })
    
  } else {
    swal("Blog Not Deleted");
    
  }
});


});

//blog Delete
$(document).on('click','a#del_slider_id',function(e){
    e.preventDefault();

  let slider_get_id = $(this).attr('del_slider_attr');  
       swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this Skider!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {

    $.ajax({
        url:'slider-delete/' + slider_get_id,
        success:function(response){
             swal("Opps! This slider has been deleted!", {
      icon: "success",
    });
            toastr.success('slider Deleted!', 'Oppps');
            showSliders();



        }
    })
    
  } else {
    slider("Blog Not Deleted");
    
  }
});


});


//education Delete
$(document).on('click','a#del_edu_id',function(e){
    e.preventDefault();

  let edu_get_id = $(this).attr('del_edu_attr');  
       swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this blog!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {

    $.ajax({
        url:'education-delete/' + edu_get_id,
        success:function(response){
             swal("Opps! This education section has been deleted!", {
      icon: "success",
    });
            toastr.warning('this education Deleted!', 'Oppps');
            showEducation();



        }
    })
    
  } else {
    swal("Education Not Deleted");
    
  }
});


});


//experience Delete
$(document).on('click','a#del_exp_id',function(e){
    e.preventDefault();

  let exp_get_id = $(this).attr('del_exp_attr');  
       swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this blog!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {

    $.ajax({
        url:'exp-delete/' + exp_get_id,
        success:function(response){
             swal("Opps! This experience section has been deleted!", {
      icon: "success",
    });
            toastr.warning('this experience Deleted!', 'Oppps');
            showExperience();



        }
    })
    
  } else {
    swal("This Experience Not Deleted");
    
  }
});


});


    });

})(jQuery)

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

             


            },
            error:function(response){

                
            }
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





    });

})(jQuery)

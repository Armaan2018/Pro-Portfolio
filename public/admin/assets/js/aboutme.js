(function($) {
    $(document).ready(function() {





          // $('div#aboutmedemo').hide();
           $('div#about_card_body').hide();
           $('div#about_card_body_edit').hide();
           $('div#header_card_body_edit').hide();
           $('div#social_card_body_edit').hide();



         $('input#profile_image').change(function(e){

         let file_url = URL.createObjectURL(e.target.files[0]);
         $('img#profile_image_load').attr('src',file_url);
         }); 
         
         //header cover image

         $('input#cover_image').change(function(e){

         let file_url = URL.createObjectURL(e.target.files[0]);
         $('img#cover_image_load').attr('src',file_url);
         });

         //social hide
         $.ajax({
          url:'hide-card-social',
          success:function(response){

            if (response > 0) {
              $('div#social_card_body').hide();
              $('div#socialdemo').show();
            
            }else{
              $('div#social_card_body').show();
              $('div#socialdemo').hide();

            }

          }
         });  

        //hide card header

          $.ajax({
          url:'hide-card-header',
          success:function(response){

            if (response > 0) {
              $('div#header_card_body').hide();
              $('div#headerdemo').show();
            
            }else{
              $('div#header_card_body').show();
              $('div#headerdemo').hide();

            }

          }
         });


          ///header create


         $(document).on('submit','form#header_form',function(event){
        event.preventDefault();

        $.ajax({
            url:'header-create',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                $('form#header_form')[0].reset();
                $('img#cover_image_load').attr('src','dummy.jpg')
                toastr.success('Successfully Added To Header Section ', 'Good Job!');
                $('div#header_card_body').hide();
                $('div#headerdemo').show();               
            
               


            },
            error:function(response){
            }
        });
    });   


    ///social create


         $(document).on('submit','form#social_form',function(event){
        event.preventDefault();

        $.ajax({
            url:'social-create',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                $('form#social_form')[0].reset();
                toastr.success('Successfully Added To Socials', 'Good Job!');
                $('div#social_card_body').hide();
                $('div#socialdemo').show();               
            
               


            },
            error:function(response){
            }
        });
    });
      

         //about me create


         $(document).on('submit','form#about_form',function(event){
        event.preventDefault();

        $.ajax({
            url:'aboutme-create',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                $('form#about_form')[0].reset();
                $('img#profile_image_load').attr('src','dummy.jpg')
                toastr.success('Successfully Added To About Me ', 'Good Job!');
                $('div#about_card_body').hide();
                $('div#aboutmedemo').show();               
            
               


            },
            error:function(response){
            }
        });
    });


     ///aboout me show next card
         $(document).on('click','a#editaboutbtn',function(event){
          event.preventDefault();

          let edit_id = $(this).attr('edit_btn_attr_about');

           $('div#aboutmedemo').hide();
           $('div#about_card_body_edit').show();

           $.ajax({

            url: 'aboutme-edit/' + edit_id,
            success:function(response){
             $("#edit_about_form input[name='name']").val(response.name);
             $("#edit_about_form input[name='editid']").val(response.id);
             $("#edit_about_form input[name='location']").val(response.location);
             $("#edit_about_form input[name='phone']").val(response.phone);
             $("#edit_about_form input[name='email']").val(response.email);
             $("#edit_about_form textarea[name='description']").val(response.description);
             $("#edit_about_form input[id='old_image']").val(response.image);
             $('#edit_about_form img#profile_image_load').attr('src','public/media/work'+'/'+response.image);

            }


           });


         }); 



         ///Social Card Edit
         $(document).on('click','a#editbtnsocial',function(event){
          event.preventDefault();

          let social_edit_id = $(this).attr('edit_btn_attr_social');

           $('div#socialdemo').hide();
           $('div#social_card_body_edit').show();

           $.ajax({

            url: 'social-edit/' + social_edit_id,
            success:function(response){
             $("#social_form_edit input[name='logo']").val(response.logo);
             $("#social_form_edit input[name='getidsocial']").val(response.id);
             $("#social_form_edit input[name='facebook']").val(response.facebook);
             $("#social_form_edit input[name='twitter']").val(response.twitter);
             $("#social_form_edit input[name='instagram']").val(response.instagram);
             $("#social_form_edit input[name='github']").val(response.github);
             $("#social_form_edit input[name='dribble']").val(response.dribble);
             $("#social_form_edit input[name='linkdin']").val(response.linkdin);
            

            }


           });


         }); 


         //header edit card showing
         $(document).on('click','a#editbtnheader',function(event){
          event.preventDefault();

          let edit_id_header = $(this).attr('edit_btn_attr_header');

           $('div#headerdemo').hide();
           $('div#header_card_body_edit').show();

           $.ajax({

            url: 'header-edit/' + edit_id_header,
            success:function(response){
             $("#edit_header_form input[name='title']").val(response.title);
             $("#edit_header_form input[name='animrole1']").val(response.animrole1);
             $("#edit_header_form input[name='animrole2']").val(response.animrole2);
             $("#edit_header_form input[name='animrole3']").val(response.animrole3);
             $("#edit_header_form input[name='animrole4']").val(response.animrole4);
             $("#edit_header_form input[name='animrole5']").val(response.animrole5);
             $("#edit_header_form input[name='location']").val(response.location);
             $("#edit_header_form input[name='headeditid']").val(response.id);
             $("#edit_header_form input[id='old_cover_image']").val(response.cover_image);
             $('#edit_header_form img#cover_image_load').attr('src','public/media/work'+'/'+response.cover_image);

            }


           });


         });


 $(document).on('submit','form#edit_about_form',function(event){
        event.preventDefault();

        

        $.ajax({
            url:'aboutme-update',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
               
                toastr.success('Yaap Your Section Updated!', 'Great');
               
                $('div#about_card_body_edit').hide();
              window.location.href = "/aboutme";
              



            },
            // error:function(response){

            //      $('div#alert_error_id').show();
            //      $('div#alert_error_id').text(response.responseJSON.errors.title);
            //      $('div#alert_error_id').text(response.responseJSON.errors.description);
            //      $('div#alert_error_id').text(response.responseJSON.errors.servicelink);
            // }
        });
    });


///update form Header
 $(document).on('submit','form#edit_header_form',function(event){
        event.preventDefault();

        

        $.ajax({
            url:'header-update',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
               
                toastr.success('Yaap Header Section Updated!', 'Great');
                
                $('div#header_card_body_edit').hide();
              window.location.href = "/home-part";
              $('div#headerdemo').show();
              



            },
            // error:function(response){

            //      $('div#alert_error_id').show();
            //      $('div#alert_error_id').text(response.responseJSON.errors.title);
            //      $('div#alert_error_id').text(response.responseJSON.errors.description);
            //      $('div#alert_error_id').text(response.responseJSON.errors.servicelink);
            // }
        });
    });


    ///update form social
 $(document).on('submit','form#social_form_edit',function(event){
        event.preventDefault();

        

        $.ajax({
            url:'social-update',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
               
                toastr.success('Yaap Social Section Updated!', 'Great');
                
                $('div#social_form_edit').hide();
              window.location.href = "/social";
              
              



            },
            // error:function(response){

            //      $('div#alert_error_id').show();
            //      $('div#alert_error_id').text(response.responseJSON.errors.title);
            //      $('div#alert_error_id').text(response.responseJSON.errors.description);
            //      $('div#alert_error_id').text(response.responseJSON.errors.servicelink);
            // }
        });
    });



 $(document).on('submit','form#skill_form',function(event){
        event.preventDefault();
$('div#error_skill').text();
        $.ajax({
            url:'skill-create',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                $('form#skill_form')[0].reset();
                skillAll();
                toastr.success('Successfully Added To Skill ', 'Good Job!');
                $('div#error_skill').hide();

                             
            
               


            },
            error:function(response){

                 $('div#error_skill').show();
                 $('div#error_skill').text(response.responseJSON.errors.skillname);
                 $('div#error_skill').text(response.responseJSON.errors.skillparcentage);
                 $('div#error_skill').text(response.responseJSON.errors.orderno);
                 
            }
        });
    });

 function skillAll(){
    $.ajax({
        url:'skill-show',
        success:function(response){
            $('tbody#skill_tbody').html(response);

        }
    });
 }

 skillAll();

    });

})(jQuery)

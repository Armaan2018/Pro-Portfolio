@extends('admin.layouts.app')

@section('main-content')
<div class="row">  


<div class="col-lg-12 col-md-12">
                       <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">About Me</h4>
                            </div>
                            <div class="card-body" id="about_card_body">
                                <div class="basic-form">
                                    <form id="about_form" action="{{ route('aboutme.create') }}" method="POST" enctype="multipart/form-data">
                                      @csrf

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Your Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="1234 Main St">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Phone</label>
                                                <input type="text" name="phone" class="form-control" placeholder="+880 ">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Age</label>
                                                <input type="text" name="age" class="form-control" placeholder="24">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label>Location</label>
                                                <input type="text" name="location" class="form-control" placeholder="121 lane 1,Nardapara">
                                            </div>

                                               <div class="form-group col-md-4">
                                             
                                                <div class="card" style="width: 18rem;">
                                              <img class="card-img-top" id="profile_image_load" src="dummy.jpg" alt="Card image cap" style="width: 18rem;">
                                              <div class="card-body">
                                                <p class="card-text">Upload Your Profile Image</p>
                                                <input type="file" name="image" id="profile_image">
                                              </div> 

                                              </div>
                                            </div>
                                            
                                            
                                                
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label>Description</label>
                                                <textarea class="form-control" name="description" rows="6">
                                                  
                                                </textarea>
                                            </div> 
                                         
                                        </div>
                                       
                                        <button  type="submit" class="btn btn-primary pull-middle" id="btnsub">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>


     
     
       
</div>


      
   
  <div id="aboutmedemo">

    @foreach ($latest as $element)
     
    <div class="row">
   <div class="col-md-6">
      <div class="card" style="width: 24rem;">
         <img width="250px" class="card-img-top" src="{{URL::to('')}}/public/media/work/{{ $element -> image}}" alt="Card image cap">
         <div class="card-body">
            <p class="card-text">Profile Picture</p>
         </div>
      </div>
   </div>
   <div class="col-md-6">
      <div class="card">
         <div class="card-header">
            Featured
         </div>
         <div class="card-body">
            <div class="about-left">
               <h2>Hi There! I'm {{ $element -> name}}</h2>
               <p>{{ $element -> description}}</p>
               <ul>
                  <li class="pb-3">
                     <span><i class="fa fa-map-marker"></i> Location </span>
                     : {{ $element -> location}}.
                  </li>
                  <li class="pb-3">
                     <span><i class="fa fa-calendar"></i> age </span>
                     : {{ $element -> age}}
                  </li>
                  <li class="pb-3">
                     <span><i class="fa fa-phone"></i> Phone </span>
                     : {{ $element -> phone}}
                  </li>
                  <li class="pb-3">
                     <span><i class="fa fa-envelope"></i> Email </span>
                     : {{ $element -> email}}
                  </li>
               </ul>
               <div class="about_btns">
                 {{--  <a href="#" class="fabon-btn">Download CV</a> --}}
               </div>
            </div>
            <a href="#" class="btn btn-primary" id="editaboutbtn" edit_btn_attr_about ="{{ $element -> id}}" >Edit </a>
         </div>
      </div>
   </div>
   </div>
   @endforeach
</div>
               
             




{{-- <div class="row">
    <div class="col-lg-12">
        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Services</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Service Title</th>
                                                <th>Icon</th>
                                                <th>Description</th>
                                                <th>Service Link</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="service_tbody">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
    </div>
</div> --}}



  <div class="card-body" id="about_card_body_edit">
                                <div class="basic-form">
                                    <form id="edit_about_form" action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
                                      @csrf

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Your Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="1234 Main St">
                                                <input type="hidden" name="editid" class="form-control" placeholder="1234 Main St">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Phone</label>
                                                <input type="text" name="phone" class="form-control" placeholder="+880 ">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Age</label>
                                                <input type="text" name="age" class="form-control" placeholder="24">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label>Location</label>
                                                <input type="text" name="location" class="form-control" placeholder="121 lane 1,Nardapara">
                                            </div>

                                               <div class="form-group col-md-4">
                                             
                                                <div class="card" style="width: 18rem;">
                                              <img class="card-img-top" id="profile_image_load" src="dummy.jpg" alt="Card image cap" style="width: 18rem;">
                                              <div class="card-body">
                                                <p class="card-text">Upload Your Profile Image</p>
                                                <input type="file" name="image" id="profile_image">
                                                 <input type="hidden" name="oldimage" id="old_image">
                                              </div>
                                            </div>
                                            
                                            
                                                
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label>Description</label>
                                                <textarea class="form-control" name="description" rows="6">
                                                  
                                                </textarea>
                                            </div> 
                                         
                                        </div>
                                       
                                        <button  type="submit" class="btn btn-primary pull-middle">Submit</button>
                                    </form>
                                </div>
                            </div>


<!-- Modal -->
{{-- <div class="modal fade" id="service_edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Horizontal Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Your Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="1234 Main St">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Phone</label>
                                                <input type="text" name="phone" class="form-control" placeholder="+880 ">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Age</label>
                                                <input type="text" name="age" class="form-control" placeholder="24">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label>Location</label>
                                                <input type="text" name="location" class="form-control" placeholder="121 lane 1,Nardapara">
                                            </div>

                                               <div class="form-group col-md-4">
                                             
                                                <div class="card" style="width: 18rem;">
                                              <img class="card-img-top" id="feature_image_load" src="dummy.jpg" alt="Card image cap" style="width: 18rem;">
                                              <div class="card-body">
                                                <p class="card-text">Upload Your Profile Image</p>
                                                <input type="file" name="profile_image" id="profile_input_img">
                                              </div>
                                            </div>
                                            
                                            
                                                
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label>Description</label>
                                                <textarea class="form-control" name="description" rows="6">
                                                  
                                                </textarea>
                                            </div> 
                                         
                                        </div>
                                       
                                        <button  type="submit" class="btn btn-primary pull-middle">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
      </div>
     
    </div>
  </div>
</div> --}}

@endsection
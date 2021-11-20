@extends('admin.layouts.app')

@section('main-content')
<div class="row">  

<div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add New Service</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="service_form" action="{{ route('service.store') }}" method="POST">
                                        @csrf

                                        <div class="alert alert-warning" role="alert" id="alert_error_id">
  
</div>
                                        <div class="form-group row">
                                       
                                         <label for="iconselecet">Select Icon</label>
                                            <select class="form-control" id="iconselecet" name="icon">
                                              <option value="fa fa-laptop">Laptop</option>
                                              <option value="fa fa-mobile">Mobile</option>
                                              <option value="fa fa-gears">Gears</option>
                                              <option value="fa fa-pencil">Pencil(Design)</option>
                                              <option value="fa fa-support">Support</option>
                                              <option value="fa fa-rocket">Rocket</option>
                                            </select>
  
  
                                        </div>
                                        <div class="form-group row" id="serve_title_div">
                                            <label>Sercive Title</label>
                                           
                                                <input type="text" id="title_id" name="title" class="form-control">
                                           
                                        </div> 

                                        <div class="form-group row">
                                            <label>Service Link</label>
                                           
                                                <input type="text"  name="servicelink" class="form-control">
                                           
                                        </div> 
                                        <div class="form-group row">
                                            <label>Sercive Description</label>
                                            
                                                <textarea id="service_desc" class="form-control" rows="6" name="description"></textarea>
                                           
                                        </div>
                                      
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Add To Service</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


       {{-- <div class="col-lg-2"></div> --}}
        <div class="col-lg-6">
            <div class="card">
  <h5 class="card-header">Service Layout(Demo)</h5>
  <div class="card-body">
     <div class="card">
                
                  <div class="single-service text-center" style="padding: 70px; margin: 15px;" >
                     <div class="service-icon" id="service_icon_div">
                        <i id="icon_id" class="fa fa-laptop" style="font-size: 50px;"></i>
                     </div>
                     <h4 id="title_id" class="text-dark p-3">Web Design</h4>
                     <p id="service_desc">Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
                     <div class="service-hover">
                        <a href="#">
                        <i class="fa fa-arrow-right"></i>
                        </a>
                     </div>
                  </div>
            </div>
    
  </div>
</div>






           
        </div>
       
</div>




<div class="row">
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
</div>






<!-- Modal -->
<div class="modal fade" id="service_edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <h4 class="card-title">Update Service</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="service_form_update" action="{{ route('service.update') }}" method="POST">
                                        @csrf
                                          
                                        <div class="alert alert-warning" role="alert" id="alert_error_id">
  
</div>
                                        <div class="form-group row">
                                       
                                         <label for="iconselecet">Select Icon</label>
                                            <select class="form-control" id="iconselecet" name="icon">
                                              {{-- <option id="select_op" selected="" disabled="">Choose Icont</option> --}}
                                              <option id="opt_id" value="fa fa-laptop">Laptop</option>
                                              <option id="opt_id" value="fa fa-mobile">Mobile</option>
                                              <option id="opt_id" value="fa fa-gears">Gears</option>
                                              <option id="opt_id" value="fa fa-pencil">Pencil(Design)</option>
                                              <option id="opt_id" value="fa fa-support">Support</option>
                                              <option id="opt_id" value="fa fa-rocket">Rocket</option>
                                            </select>
  
  
                                        </div>
                                        <div class="form-group row" id="serve_title_div">
                                            <label>Sercive Title</label>
                                           
                                                <input type="text" id="title_id" name="title" class="form-control">
                                           
                                        </div> 

                                        <div class="form-group row">
                                            <label>Service Link</label>
                                           
                                                <input type="text"  name="servicelink" class="form-control">

                                                <input type="hidden" name="hiddenid" >
                                           
                                        </div> 
                                        <div class="form-group row">
                                            <label>Sercive Description</label>
                                            
                                                <textarea id="service_desc" class="form-control" rows="6" name="description"></textarea>
                                           
                                        </div>
                                      
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Add To Service</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
      </div>
     
    </div>
  </div>
</div>

@endsection
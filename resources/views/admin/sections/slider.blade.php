@extends('admin.layouts.app')

@section('main-content')





<div class="row">
   <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Blogs</h4>
                                <button class="btn btn-dark pull-right" data-toggle="modal" data-target="#addslidermodal">Add New Slider</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Slider Title</th>
                                                 <th>Slider Image</th>
                                                <th>Slider Link</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="slider_tbody">
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    
</div>




<!-- Button trigger modal -->





<!-- Modal -->
<div class="modal fade" id="addslidermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New slider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider Fields</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="slider_form" action="{{ route('slider.create') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Slider Title</label>
                                            <div class="col-sm-9">
                                                <input type="title" class="form-control" placeholder="title" name="title">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Slider Link</label>
                                            <div class="col-sm-9">
                                                <input type="title" class="form-control" placeholder="title" name="sliderlink">
                                            </div>
                                        </div>
                                       
                            


                                        <div class="card" style="width: 14rem;">
                                              <img class="card-img-top" id="slider_image_load" src="dummy.jpg" alt="Card image cap" style="width: 14rem;">
                                              <div class="card-body">
                                                <p class="card-text">Uploaded Slider</p>
                                              </div>
                                            </div>


                                        <div class="form-group row">
                                        
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="sliderimage" name="sliderimage">
                                            </div>
                                        </div> 

                                      

                                        
                                       
                    
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Add Slider</button>
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


<div class="modal fade" id="slider_edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit slider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider Fields</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="slider_form_edit" action="{{ route('slider.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Slider Title</label>
                                            <div class="col-sm-9">
                                                <input type="title" class="form-control" placeholder="title" name="title">
                                                <input type="hidden" class="form-control" placeholder="title" name="get_slider_id">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Slider Link</label>
                                            <div class="col-sm-9">
                                                <input type="title" class="form-control" placeholder="title" name="sliderlink">
                                            </div>
                                        </div>
                                       
                            


                                        <div class="card" style="width: 14rem;">
                                              <img class="card-img-top" id="slider_image_load" src="dummy.jpg" alt="Card image cap" style="width: 14rem;">
                                              <div class="card-body">
                                                <p class="card-text">Uploaded Slider</p>
                                              </div>
                                            </div>


                                        <div class="form-group row">
                                        
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="sliderimage" name="sliderimage">
                                                <input type="hidden" class="form-control" id="old_slider" name="old_slider">
                                            </div>
                                        </div> 

                                      

                                        
                                       
                    
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Save</button>
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
@extends('admin.layouts.app')

@section('main-content')


<div class="row">

    <div class="col-md-8">
           <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Categories</h4>
                                <button class="btn btn-dark pull-right" data-toggle="modal" data-target="#addcatmodal">Add New Category</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category</th>
                                                <th>slug</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="category_tbody">
                                          
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card p-3 bg-primary">
        <h3 class="text-white text-center">Work Section</h3>
        </div>
    </div>
</div>
<div class="row">
   <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Works</h4>
                                <button class="btn btn-dark pull-right" data-toggle="modal" data-target="#addworkmodal">Add New Work</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Work Title</th>
                                                <th>Image</th>
                                                <th>Category</th>
                                                <th>work link</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="work_tbody">
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    
</div>




<!-- Button trigger modal -->


<!-- Modal category -->
<div class="modal fade" id="addcatmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
            <div class="card-body">
                
            <form  id="category_form" action="{{ route('work.category.add') }}" method="POST" class="form-group">
                @csrf
               <div class="pb-3">
                     <label>Category Name</label>
                <input class="form-control" type="text" name="category_name">
                </div>
                <button class="btn btn-info" type="submit">Submit</button>
            </form>
            </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="editcatmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
            <div class="card-body">
                
            <form  id="category_edit_form" action="{{ route('work.category.update') }}" method="POST" class="form-group">
                @csrf
               <div class="pb-3">
                     <label>Category Name</label>
                <input class="form-control" type="text" name="category_name">
                <input class="form-control" type="hidden" name="category_id">
                </div>
                <button class="btn btn-info" type="submit">Submit</button>
            </form>
            </div>
        </div>
      </div>
      
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="addworkmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Work</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add New Work Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="work_form" action="{{ route('work.add') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Work Title</label>
                                            <div class="col-sm-9">
                                                <input type="title" class="form-control" placeholder="title" name="title">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Work Link</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="link" name="work_link">
                                            </div>
                                        </div> 
                            


                                        <div class="card" style="width: 14rem;">
                                              <img class="card-img-top" id="feature_image_load" src="dummy.jpg" alt="Card image cap" style="width: 14rem;">
                                              <div class="card-body">
                                                <p class="card-text">Uploaded Image</p>
                                              </div>
                                            </div>


                                        <div class="form-group row">
                                        
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="feature_image" name="image">
                                            </div>
                                        </div>

                                         <div class="form-group row" id="category">
                                
                              <select class="" id="wor_category" name="category">
                                <option selected="" disabled="">Choose Category</option>
                                @foreach ($category as $cat)
                                    <option value="{{ $cat -> id}}">{{ $cat -> category_name}}</option>
                                @endforeach
                               

                              </select>
                              
                                </div>
                                       
                    
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Add to works</button>
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

<div class="modal fade" id="editworkmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Work</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Work Form Edit</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="edit_work_form" action="{{ route('work.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Work Title</label>
                                            <div class="col-sm-9">
                                                <input type="title" class="form-control" placeholder="title" name="title">

                                                <input type="hidden" class="form-control" placeholder="title" name="work_id">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Work Link</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="link" name="work_link">
                                            </div>
                                        </div> 
                            


                                        <div class="card" style="width: 14rem;">
                                              <img class="card-img-top" id="feature_image_load" src="dummy.jpg" alt="Card image cap" style="width: 14rem;">
                                              <div class="card-body">
                                                <p class="card-text">Uploaded Image</p>
                                              </div>
                                            </div>


                                        <div class="form-group row">
                                        
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="feature_image" name="image">

                                                <input type="hidden" class="form-control" id="old_work_image" name="old_work_image">
                                            </div>
                                        </div>

                                         <div class="form-group row" id="category">
                                
                              <select class="" id="work_category_select" name="category">
                               
                                @foreach ($category as $cat)
                                    <option id="opt_id"  value="{{ $cat -> id}}">{{ $cat -> category_name}}</option>
                                @endforeach
                               

                              </select>
                              
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
@extends('admin.layouts.app')

@section('main-content')





<div class="row">
   <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Experience</h4>
                                <button class="btn btn-dark pull-right" data-toggle="modal" data-target="#addexpmodal">Add Experience</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Role</th>
                                                <th>Years Active</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="experience_tbody">
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    
</div>




<!-- Button trigger modal -->





<!-- Modal -->
<div class="modal fade" id="addexpmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Blog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Experience Field</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="experience_form" action="{{ route('experience.create') }}" method="POST">
                                        @csrf

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Role</label>
                                            <div class="col-sm-9">
                                                <input type="title" class="form-control" placeholder="UI/UX-Desginer" name="role">
                                            </div>
                                        </div> 

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Years Active</label>
                                            <div class="col-sm-9">
                                                <input type="title" class="form-control" placeholder="2014-2016" name="years">
                                            </div>
                                        </div> 

                                        <div class="form-group row">
                                        
                                            <div class="col-sm-9">
                                               <textarea class="form-control" rows="4" name="description" placeholder="Your Experience Goes There"></textarea>
                                            </div>
                                        </div>

                                        
                                       
                    
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit Experience</button>
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

<div class="modal fade" id="editexpmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Experience</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Experience Field</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="experience_edit_form" action="{{ route('exp.update') }}" method="POST">
                                        @csrf

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Role</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="UI/UX-Desginer" name="role">
                                                <input type="hidden" class="form-control" placeholder="UI/UX-Desginer" name="get_id_exp">
                                            </div>
                                        </div> 

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Years Active</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="2014-2016" name="years">
                                            </div>
                                        </div> 

                                        <div class="form-group row">
                                        
                                            <div class="col-sm-9">
                                               <textarea class="form-control" rows="4" name="description" placeholder="Your Experience Goes There"></textarea>
                                            </div>
                                        </div>

                                        
                                       
                    
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Save Experience</button>
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
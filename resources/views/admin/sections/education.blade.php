@extends('admin.layouts.app')

@section('main-content')





<div class="row">
   <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Educations</h4>
                                <button class="btn btn-dark pull-right" data-toggle="modal" data-target="#addedumodal">Add Degree/Education</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Education Class</th>
                                                <th>Passed From</th>
                                                <th>Years</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="education_tbody">
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    
</div>




<!-- Button trigger modal -->





<!-- Modal -->
<div class="modal fade" id="addedumodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Education</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Education Fields</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="education_form" action="{{ route('education.create') }}" method="POST">
                                        @csrf

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Class</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Class" name="educlass">
                                            </div>
                                        </div> 

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Passed From</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Dhaka University" name="passedfrom">
                                            </div>
                                        </div> 

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Passing Years</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="2015-2019" name="years">
                                            </div>
                                        </div>
                                       
                            




                                      

                                        <div class="form-group row">
                                        
                                            <div class="col-sm-9">
                                               <textarea class="form-control" rows="4" name="description" placeholder="Your Education Summerise Goes There"></textarea>
                                            </div>
                                        </div>

                                        
                                       
                    
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Save Education</button>
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


<div class="modal fade" id="edueditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Education Fields</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="education_edit_form" action="{{ route('education.update') }}" method="POST">
                                        @csrf

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Class</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Class" name="educlass">
                                            </div>
                                        </div> 

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Passed From</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Dhaka University" name="passedfrom">
                                                <input type="hidden" class="form-control" placeholder="Dhaka University" name="get_id_edu">
                                            </div>
                                        </div> 

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Passing Years</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="2015-2019" name="years">
                                            </div>
                                        </div>
                                       
                            




                                      

                                        <div class="form-group row">
                                        
                                            <div class="col-sm-9">
                                               <textarea class="form-control" rows="4" name="description" placeholder="Your Education Summerise Goes There"></textarea>
                                            </div>
                                        </div>

                                        
                                       
                    
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit Education</button>
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
@extends('admin.layouts.app')

@section('main-content')
<div class="row">  

<div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add New Skill</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="skill_form" action="{{ route('skill.store') }}" method="POST">
                                        @csrf

                                        <div class="alert alert-warning" role="alert" id="error_skill">
  
                                          </div>

                                        <div class="form-group row">
                                            <label>Skill Name</label>
                                           
                                                <input type="text"  name="skillname" class="form-control">
                                           
                                        </div> 
                                        <div class="form-group row">
                                            <label>Skill Percentage</label>
                                            
                                                 <input type="text"  name="skillparcentage" class="form-control">
                                           
                                        </div>

                                        <div class="form-group row">
                                            <label>Order</label>
                                            
                                                 <input type="text"  name="orderno" class="form-control">
                                           
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
        <div class="col-lg-8">
         <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Skills</h4>
                              
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Skill Name</th>
                                                <th>Skill</th>
                                                <th>Order No</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="skill_tbody">      
                                       
                                            
             
                                            
      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>






           
        </div>
       
</div>


<div class="modal fade" id="skillmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Skill</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Skill Edit</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="skill_form_edit" action="{{ route('skill.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Skill Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="title" name="skillname">
                                                <input type="hidden" class="form-control" placeholder="skill" name="get_skill_id">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Skill Percentage</label>
                                            <div class="col-sm-9">
                                                <input type="title" class="form-control" placeholder="percentage" name="skillparcentage">
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
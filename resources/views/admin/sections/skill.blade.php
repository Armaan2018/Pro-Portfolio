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














@endsection
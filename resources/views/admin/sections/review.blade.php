@extends('admin.layouts.app')

@section('main-content')





<div class="row">
   <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Reviews</h4>
                                <button class="btn btn-dark pull-right" data-toggle="modal" data-target="#addreviewmodal">Add New Review</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Reviewer Name</th>
                                                <th>Reviewer Role</th>
                                                <th>Reviewer Image</th>
                                                <th>Review</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="review_tbody">
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    
</div>




<!-- Button trigger modal -->





<!-- Modal -->
<div class="modal fade" id="addreviewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Review Fields</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="review_form" action="{{ route('review.create') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Reviewer Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Reviewer Name" name="name">
                                            </div>
                                        </div> 

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Reviewer Role</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Reviewer role" name="role">
                                            </div>
                                        </div>
                                       
                            


                                        <div class="card" style="width: 14rem;">
                                              <img class="card-img-top" id="reviewer_image_load" src="dummy.jpg" alt="Card image cap" style="width: 14rem;">
                                              <div class="card-body">
                                                <p class="card-text">Reviewer Image</p>
                                              </div>
                                            </div>


                                        <div class="form-group row">
                                        
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="reviewer_image" name="reviewer_image">
                                            </div>
                                        </div> 

                                        <div class="form-group row">
                                        
                                            <div class="col-sm-9">
                                               <textarea class="form-control" rows="4" name="review" placeholder="Your Content Goes There"></textarea>
                                            </div>
                                        </div>

                                        
                                       
                    
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit Review</button>
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



<!-- Modal -->
<div class="modal fade" id="editreviewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Review Fields</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="review_form_edit" action="{{ route('review.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Reviewer Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Reviewer Name" name="name">
                                                <input type="hidden" class="form-control" placeholder="Reviewer Name" name="get_id_review">
                                            </div>
                                        </div> 

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Reviewer Role</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Reviewer role" name="role">
                                            </div>
                                        </div>
                                       
                            


                                        <div class="card" style="width: 14rem;">
                                              <img class="card-img-top" id="reviewer_image_load" src="dummy.jpg" alt="Card image cap" style="width: 14rem;">
                                              <div class="card-body">
                                                <p class="card-text">Reviewer Image</p>
                                              </div>
                                            </div>


                                        <div class="form-group row">
                                        
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="reviewer_image" name="reviewer_image">
                                                <input type="hidden" class="form-control" id="old_reviewer_img" name="old_reviewer_img">
                                            </div>
                                        </div> 

                                        <div class="form-group row">
                                        
                                            <div class="col-sm-9">
                                               <textarea class="form-control" rows="4" name="review" placeholder="Your Content Goes There"></textarea>
                                            </div>
                                        </div>

                                        
                                       
                    
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit Review</button>
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
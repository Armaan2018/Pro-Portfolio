@extends('admin.layouts.app')

@section('main-content')





<div class="row">
   <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Blogs</h4>
                                <button class="btn btn-dark pull-right" data-toggle="modal" data-target="#addblogmodal">Add New Blog</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Blog Title</th>
                                                <th>Image</th>
                                                <th>Content</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="blog_tbody">
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    
</div>




<!-- Button trigger modal -->





<!-- Modal -->
<div class="modal fade" id="addblogmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <h4 class="card-title">Blog Fields</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="blog_form" action="{{ route('blog.create') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Blog Title</label>
                                            <div class="col-sm-9">
                                                <input type="title" class="form-control" placeholder="title" name="title">
                                            </div>
                                        </div>
                                       
                            


                                        <div class="card" style="width: 14rem;">
                                              <img class="card-img-top" id="blog_image_load" src="dummy.jpg" alt="Card image cap" style="width: 14rem;">
                                              <div class="card-body">
                                                <p class="card-text">Uploaded Image</p>
                                              </div>
                                            </div>


                                        <div class="form-group row">
                                        
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="blog_image" name="image">
                                            </div>
                                        </div> 

                                        <div class="form-group row">
                                        
                                            <div class="col-sm-9">
                                               <textarea class="form-control" rows="4" name="content" placeholder="Your Content Goes There"></textarea>
                                            </div>
                                        </div>

                                        
                                       
                    
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit Blog</button>
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
@extends('admin.layouts.app')

@section('main-content')
<div class="row">
  <div class="col-md-12">
   <div class="row">
     <div class="col-md-3"></div>
     <div class="col-md-6">
        <div class="h2 text-center m-4"><span class="badge badge-primary text-white text-bold">Customize Blocks</span></div>
     </div>
     <div class="col-md-3"></div>
   </div>
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-3">
               <div class="card">
                 <div class="card-header text-center bg-dark text-white text-bold" style="font-size: 14px;">About Me</div>
                 <div class="card-body bg-white">
                   <span class="badge badge-info"><a href="{{ route('aboutme') }}" target="" class="text-white">Customize</a></span>
                 </div>
               </div>
            </div> <div class="col-md-3">
               <div class="card">
                 <div class="card-header text-center bg-dark text-white text-bold">skill</div>
                 <div class="card-body bg-white">
                   <span class="badge badge-info"><a href="{{ route('skill') }}" target="" class="text-white">Customize</a></span>
                 </div>
               </div>
            </div> <div class="col-md-3">
               <div class="card">
                 <div class="card-header text-center bg-dark text-white text-bold">Service</div>
                 <div class="card-body bg-white">
                   <span class="badge badge-info"><a href="{{ route('service') }}" target="" class="text-white">Customize</a></span>
                 </div>
               </div>
            </div> <div class="col-md-3">
               <div class="card">
                 <div class="card-header text-center bg-dark text-white text-bold">Work</div>
                 <div class="card-body bg-white">
                   <span class="badge badge-info"><a href="{{ route('work') }}" target="" class="text-white">Customize</a></span>
                 </div>
               </div>
            </div>
        </div>
      
    </div>

     <div class="col-md-6">
        <div class="row">
          <div class="col-md-3">
               <div class="card">
                 <div class="card-header text-center bg-dark text-white text-bold">Header</div>
                 <div class="card-body bg-white">
                   <span class="badge badge-info"><a href="{{ route('homeheader') }}" target="" class="text-white">Customize</a></span>
                 </div>
               </div>
            </div> <div class="col-md-3">
               <div class="card">
                 <div class="card-header text-center bg-dark text-white text-bold">Slider</div>
                 <div class="card-body bg-white">
                   <span class="badge badge-info"><a href="{{ route('slider') }}"  target="" class="text-white">Customize</a></span>
                 </div>
               </div>
            </div> <div class="col-md-3">
               <div class="card">
                 <div class="card-header text-center bg-dark text-white text-bold">Blog</div>
                 <div class="card-body bg-white">
                   <span class="badge badge-info"><a href="{{ route('blog') }}" target="" class="text-white">Customize</a></span>
                 </div>
               </div>
            </div> <div class="col-md-3">
               <div class="card">
                 <div class="card-header text-center bg-dark text-white text-bold">Review</div>
                 <div class="card-body bg-white">
                   <span class="badge badge-info"><a href="{{ route('review') }}"  target="" class="text-white">Customize</a></span>
                 </div>
               </div>
            </div>
        </div>
      </div>
  </div>

<div class="row">
	<div class="col-md-12">
    <div class="row">
     <div class="col-md-3"></div>
     <div class="col-md-6">
        <div class="h2 text-center m-4"><span class="badge badge-info text-white text-bold">All Messages</span></div>
     </div>
     <div class="col-md-3"></div>
   </div>
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Enail</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach ($sender as $sender)
    
    <tr>
    <th scope="row">{{ $loop -> count }}</th>
      <td>{{$sender -> name}}</td>
      <td>{{$sender -> email}}</td>
      <td>{{$sender -> msg}}</td>
      <td><button class="btn sm-btn btn-success" id="sendingmail">Send Mail</button></td>
     </tr> 
   @endforeach
      
    
   
  </tbody>
</table>
	</div>
</div>



 
   
 
</div>
 
@endsection
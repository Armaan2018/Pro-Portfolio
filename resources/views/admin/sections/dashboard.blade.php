@extends('admin.layouts.app')

@section('main-content')

<div class="row">
	<div class="col-md-12">
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
 
@endsection
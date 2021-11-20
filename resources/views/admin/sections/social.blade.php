@extends('admin.layouts.app')

@section('main-content')
<div class="row">  


<div class="col-lg-12 col-md-12">
                       <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Social & Miscellaneous</h4>
                            </div>
                            <div class="card-body" id="social_card_body">
                                <div class="basic-form">
                                    <form id="social_form" action="{{ route('social.create') }}" method="POST">
                                      @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Your Title Logo</label>
                                                <input type="text" name="logo" class="form-control" placeholder="Armaan">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Facebook</label>
                                                <input type="text" name="facebook" class="form-control" placeholder="Your Facebook Profile Link">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Twitter</label>
                                                <input type="text" name="twitter" class="form-control" placeholder="Your Twitter Profile Link">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Instagram</label>
                                                <input type="text" name="instagram" class="form-control" placeholder="Your Instagram Profile Link">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Github</label>
                                                <input type="text" name="github" class="form-control" placeholder="Your Github Profile Link">
                                            </div> 

                                            <div class="form-group col-md-4">
                                                <label>Dribble</label>
                                                <input type="text" name="dribble" class="form-control" placeholder="Your Dribble Profile Link">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label>Linkdin</label>
                                                <input type="text" name="linkdin" class="form-control" placeholder="Your Linkdin Profile Link">
                                            </div>       
                                            </div>
                                        </div>
                                        <button  type="submit" class="btn btn-primary pull-middle" id="btnsub">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>


     
     
       
</div>

{{-- wi --}}
<div id="socialdemo">
        @foreach ($social as $element)


        @php
          $get_items = $element -> social;
          $items     = json_decode($get_items);

        @endphp
     
    <div class="row">
   <div class="col-md-6">
      <div class="card" style="width: 30rem;">
          <div class="card-header"><h3>Your Brand/Logo</h3></div>
         <div class="card-body">
            <h2 class="display-3 p-3">{{ $element -> logo}}</p>
         </div>
      </div>
   </div>
   <div class="col-md-6">
      <div class="card">
         <div class="card-header">
            Social Links
         </div>
         <div class="card-body">
            <div class="about-left">
                   <h1 class="text-primary p-3">Your Social Links</h1>
               <ul>
               
                  <li class="pb-3">
                     <span class="text-dark text-bold"><i style="font-size: 25px;" class="fa fa-facebook"></i></span>
                     : {{ $items -> facebook}}
                  </li>
                  <li class="pb-3">
                     <span class="text-dark text-bold"><i style="font-size: 25px;" class="fa fa-twitter"></i></span>
                     : {{ $items -> twitter}}
                  </li>
                  <li class="pb-3">
                     <span class="text-dark text-bold"><i style="font-size: 25px;" class="fa fa-instagram"></i></span>
                     : {{ $items -> instagram}}
                  </li>
                  <li class="pb-3">
                    <span class="text-dark text-bold"><i style="font-size: 25px;" class="fa fa-github"></i></span>
                     : {{ $items -> github}}
                  </li>  

                  <li class="pb-3">
                    <span class="text-dark text-bold"><i style="font-size: 25px;" class="fa fa-dribbble"></i></span>
                     : {{ $items -> dribble}}
                  </li>
                  <li class="pb-3">
                    <span class="text-dark text-bold"><i style="font-size: 25px;" class="fa fa-linkedin-square"></i></span>
                     : {{ $items -> linkdin}}
                  </li>
               </ul>
             
            </div>
            <a href="#" class="btn btn-primary" id="editbtnsocial" edit_btn_attr_social ="{{ $element -> id}}" >Edit </a>
         </div>
      </div>
   </div>
   </div>
   @endforeach
   
 </div>


 <div class="card-body" id="social_card_body_edit">
        <div class="basic-form">
                                    <form id="social_form_edit" action="{{ route('social.update') }}" method="POST">
                                      @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Your Title Logo</label>
                                                <input type="text" name="logo" class="form-control" placeholder="Armaan">
                                                <input type="hidden" name="getidsocial">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Facebook</label>
                                                <input type="text" name="facebook" class="form-control" placeholder="Your Facebook Profile Link">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Twitter</label>
                                                <input type="text" name="twitter" class="form-control" placeholder="Your Twitter Profile Link">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Instagram</label>
                                                <input type="text" name="instagram" class="form-control" placeholder="Your Instagram Profile Link">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Github</label>
                                                <input type="text" name="github" class="form-control" placeholder="Your Github Profile Link">
                                            </div> 

                                            <div class="form-group col-md-4">
                                                <label>Dribble</label>
                                                <input type="text" name="dribble" class="form-control" placeholder="Your Dribble Profile Link">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label>Linkdin</label>
                                                <input type="text" name="linkdin" class="form-control" placeholder="Your Linkdin Profile Link">
                                            </div>       
                                            </div>
                                        </div>
                                        <button  type="submit" class="btn btn-primary pull-middle" id="btnsub">Submit</button>
                                    </form>
                                </div>                        
                            </div> 

@endsection
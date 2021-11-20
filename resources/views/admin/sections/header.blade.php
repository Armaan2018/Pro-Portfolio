@extends('admin.layouts.app')

@section('main-content')
<div class="row">  


<div class="col-lg-12 col-md-12">
                       <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Header</h4>
                            </div>
                            <div class="card-body" id="header_card_body">
                                <div class="basic-form">
                                    <form id="header_form" action="{{ route('header.create') }}" method="POST" enctype="multipart/form-data">
                                      @csrf

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Your Title</label>
                                                <input type="text" name="title" class="form-control" placeholder="Hi This is Armaan">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Animated Role 1</label>
                                                <input type="text" name="animrole1" class="form-control" placeholder="Web Designer">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Animated Role 2</label>
                                                <input type="text" name="animrole2" class="form-control" placeholder="Web Developer">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Animated Role 3</label>
                                                <input type="text" name="animrole3" class="form-control" placeholder="App Developer">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Animated Role 4</label>
                                                <input type="text" name="animrole4" class="form-control" placeholder="Graphics Designer">
                                            </div> 

                                            <div class="form-group col-md-4">
                                                <label>Animated Role 5</label>
                                                <input type="text" name="animrole5" class="form-control" placeholder="Seo Expart">
                                            </div>

                                               <div class="form-group col-md-8">
                                             
                                                <div class="card" style="width: 18rem;">
                                              <img class="card-img-top" id="cover_image_load" src="dummy.jpg" alt="Card image cap" style="width: 18rem;">
                                              <div class="card-body">
                                                <p class="card-text">Upload Your Cover Image</p>
                                                <span>Recommanded Ration 4:3</span>
                                                <input type="file" name="cover_image" id="cover_image">
                                              </div> 

                                              </div>
                                            </div>
                                            
                                            
                                                
                                            </div>
                                        
                                         
                                        </div>
                                       
                                        <button  type="submit" class="btn btn-primary pull-middle" id="btnsub">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>


     
     
       
</div>

<div id="headerdemo">
        @foreach ($head as $element)


        @php
          $get_items = $element -> animatedtext;
          $items     = json_decode($get_items);

        @endphp
     
    <div class="row">
   <div class="col-md-6">
      <div class="card" style="width: 30rem;">
         <img width="400px" class="card-img-top" src="{{URL::to('')}}/public/media/work/{{ $element -> cover_image}}" alt="Card image cap">
         <div class="card-body">
            <p class="card-text">Cover Image</p>
         </div>
      </div>
   </div>
   <div class="col-md-6">
      <div class="card">
         <div class="card-header">
            Header Part
         </div>
         <div class="card-body">
            <div class="about-left">
               <h2 class="p-3">Tagline:  {{ $element -> title}}</h2>
                   

                   <h3 class="text-primary p-3">Your Role Texts (Animated)</h3>
               <ul>
               
                  <li class="pb-3">
                     <span class="text-dark text-bold">1</span>
                     : {{ $items -> item1}}
                  </li>
                  <li class="pb-3">
                     <span class="text-dark text-bold">2</span>
                     : {{ $items -> item2}}
                  </li>
                  <li class="pb-3">
                     <span class="text-dark text-bold">3</span>
                     : {{ $items -> item3}}
                  </li>
                  <li class="pb-3">
                    <span class="text-dark text-bold">4</span>
                     : {{ $items -> item4}}
                  </li>  

                  <li class="pb-3">
                    <span class="text-dark text-bold">5</span>
                     : {{ $items -> item5}}
                  </li>
               </ul>
               <div class="about_btns">
                 {{--  <a href="#" class="fabon-btn">Download CV</a> --}}
               </div>
            </div>
            <a href="#" class="btn btn-primary" id="editbtnheader" edit_btn_attr_header ="{{ $element -> id}}" >Edit </a>
         </div>
      </div>
   </div>
   </div>
   @endforeach
   
 </div>

<div class="card-body" id="header_card_body_edit">
                                <div class="basic-form">
                                    <form id="edit_header_form" action="{{ route('header.update') }}" method="POST" enctype="multipart/form-data">
                                      @csrf

                                       <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Your Title</label>
                                                <input type="text" name="title" class="form-control" placeholder="Hi This is Armaan">
                                                <input type="hidden" name="headeditid">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Animated Role 1</label>
                                                <input type="text" name="animrole1" class="form-control" placeholder="Web Designer">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Animated Role 2</label>
                                                <input type="text" name="animrole2" class="form-control" placeholder="Web Developer">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Animated Role 3</label>
                                                <input type="text" name="animrole3" class="form-control" placeholder="App Developer">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Animated Role 4</label>
                                                <input type="text" name="animrole4" class="form-control" placeholder="Graphics Designer">
                                            </div> 

                                            <div class="form-group col-md-4">
                                                <label>Animated Role 5</label>
                                                <input type="text" name="animrole5" class="form-control" placeholder="Seo Expart">
                                            </div>

                                               <div class="form-group col-md-8">
                                             
                                                <div class="card" style="width: 18rem;">
                                              <img class="card-img-top" id="cover_image_load" src="dummy.jpg" alt="Card image cap" style="width: 18rem;">
                                              <div class="card-body">
                                                <p class="card-text">Upload Your Cover Image</p>
                                                <span>Recommanded Ration 4:3</span>
                                                <input type="file" name="cover_image" id="cover_image">
                                                <input type="hidden" name="oldcover" id="old_cover_image">
                                              </div> 

                                              </div>
                                            </div>
                                            
                                            
                                                
                                            </div>
                                       
                                        <button  type="submit" class="btn btn-primary pull-middle">Submit</button>
                                    </form>
                                </div>
                            </div> 


@endsection
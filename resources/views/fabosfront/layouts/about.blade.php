  <section class="fabon-about-area section_100" data-scroll-index="1">
      @foreach ($about as $about)
         {{-- expr --}}
     
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="about-avatar">
                     <img style="height:200px; width: 200px;" src="{{URL::to('')}}/public/media/work/{{ $about -> image}}" alt="avatar" />
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="about-left">
                     <h2>Hi There! I'm {{ $about -> name}}</h2>
                     <p>{{ $about -> description}}</p>

                     <div class="row">
                        <div class="col-md-6 p-3"><span><i class="fa fa-map-marker"></i> Location </span>
                           : {{ $about -> location}}.</div>
                        <div class="col-md-6 pb-0"><span><i class="fa fa-calendar"></i> age </span>
                           : {{ $about -> age}}</div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 p-3"><span><i class="fa fa-phone"></i> Phone </span>
                           : {{ $about -> phone}}</div>
                        <div class="col-md-6 p-0"> <span><i class="fa fa-envelope"></i> Email </span>
                           : {{ $about -> email}}</div>
                     </div>
                     
                     {{-- <ul>
                        <li>
                           <span><i class="fa fa-map-marker"></i> Location </span>
                           : {{ $about -> location}}.
                        </li>
                        <li>
                           <span><i class="fa fa-calendar"></i> age </span>
                           : {{ $about -> age}}
                        </li>
                        <li>
                           <span><i class="fa fa-phone"></i> Phone </span>
                           : {{ $about -> phone}}
                        </li>
                        <li>
                           <span><i class="fa fa-envelope"></i> Email </span>
                           : {{ $about -> email}}
                        </li>
                     </ul> --}}
                     <div class="about_btns">
                        <a href="#" class="fabon-btn">Download CV</a>
                     </div>
                  </div>
               </div>


               <div class="col-md-6">
                  <div class="skills-prog half">

                     @foreach ($skill as $setskill)
                        
                                    
                     <h6>{{ $setskill -> skillname}}</h6>
                     <div id="bar{{$setskill -> orderno}}" class="barfiller">
                        <div class="tipWrap">
                           <span class="tip"></span>
                        </div>
                        <span class="fill" data-percentage="{{ $setskill -> skillparcentage}}"></span>
                     </div>
                     @endforeach

                   
           
                  </div>
               </div>


               
            </div>
         </div>

 @endforeach
      </section>
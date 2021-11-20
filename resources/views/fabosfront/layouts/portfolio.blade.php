  <section class="fabon-work-area section_t_100 section_b_70" data-scroll-index="3">
         <div class="container">
            <div class="col-md-12">
               <div class="site-heading">
                  <h2>Recent Work</h2>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="portfolio-filter text-center">
                     <ul>
                        <li class="current" data-filter="*">All</li>
                          @foreach ($cat as $category)
                             
                              <li data-filter=".{{ $category -> category_name }}">{{ $category -> category_name }}</li>
                          @endforeach

                        
                   
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row portfolio-items">
               <!--Portfolio Item-->
               @foreach ($work as $element)
                
              @foreach ($element -> categories as $catele)
                 {{-- expr --}}
             
               <div class="col-lg-4 col-md-6 item {{$catele -> category_name}}">
                  <div class="item-content">
                     <img width="250px" src="{{URL::to('')}}/public/media/work/{{ $element -> image}}" alt="">
                     <div class="item-img-overlay">
                        <div class="overlay-info v-middle text-center"></div>
                        <div class="cap">
                           <h6>{{$element -> title}}</h6>
                           <div class="icons">
                              <span class="zoom-img">
                              <a href="{{URL::to('')}}/public/media/work/{{ $element -> image}}">
                              <i class="fa fa-search"></i>
                              </a>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
 @endforeach
                @endforeach
             
            </div>
         </div>
      </section>
 <section class="fabon-service-area section_t_100 section_b_70" data-scroll-index="2">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2>what i do</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               @foreach ($serve as $element)
                 <div class="col-md-4">
                  <div class="single-service">
                     <div class="service-icon">
                        <i class="{{ $element -> icon}}"></i>
                     </div>
                     <h4>{{ $element -> title}}</h4>
                     <p>{{ $element -> description }}</p>
                     <div class="service-hover">
                        <a href="{{ $element -> servicelink}}">
                        <i class="fa fa-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>   
               @endforeach
               
   
            </div>
            
         </div>
      </section>

 <section class="fabon-testimonial-area section_100" data-scroll-index="5">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2>reviews</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="owl-carousel">
                     @foreach ($review as $element)
                      
                   
                     <div class="single-testimonial">
                        <img src="{{URL::to('')}}/public/media/work/{{ $element -> reviewer_image}}" alt="testimonial-img" />
                        <p>{{ $element -> review}}</p>
                        <div class="testimonial-info">
                           <h4>{{ $element -> name}}</h4>
                           <p>{{ $element -> role}}</p>
                        </div>
                     </div>
                       @endforeach
                    
                  </div>
               </div>
            </div>
         </div>
      </section>
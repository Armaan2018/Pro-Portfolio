 <section class="fabon-blog-area section_t_100 section_b_70" data-scroll-index="4">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2>recent post</h2>
                  </div>
               </div>
            </div>
            <div class="row">

               @foreach ($blog as $element)
               <div class="col-md-4">
                  <div class="single-blog">
                     <div class="blog-img">
                        <img src="{{URL::to('')}}/public/media/work/{{ $element -> image}}" alt="blog" />
                        <p class="post-date">12 <br>May</p>
                     </div>
                     <div class="blog-text">
                        <h3><a href="#">{{ $element -> title}}</h3>
                           <p>{{ $element -> content}}</p>
                     </div>
                  </div>
               </div>
                 
               @endforeach
               
               
            </div>
         </div>
      </section>
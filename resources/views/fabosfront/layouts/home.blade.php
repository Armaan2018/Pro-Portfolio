@foreach ($header as $head)
 <section id="home" class="banner" data-scroll-index="0" style="background-image: url({{URL::to('')}}/public/media/work/{{$head -> cover_image}});">
         <div class="banner-area">
            <div class="banner-caption container">
               <div class="container">
                  <div class="row">
                         


                         @php
                            $get_item = $head -> animatedtext;
                            $decoded  = json_decode($get_item);
                         @endphp
                           
                        
                     <div class="col-md-12 col-sm-12 content-home">
                        <div class="banner-welcome">
                           <h3>{{ $head -> title}}</h3>
                           <div class="caption-inner">
                              <div class="ah-headline">
                                 <span class="typed-static">A Professional </span>
                                 <span class="ah-words-wrapper">
                                  
                                  @if ($decoded -> item1 != '')
                                      <b class="is-visible">{{ $decoded -> item1 }}</b>
                                  @endif 
                                   @if ($decoded -> item2 != '')
                                      <b>{{ $decoded -> item2 }}</b>
                                  @endif 
                                   @if ($decoded -> item3 != '')
                                     <b>{{ $decoded -> item3 }}</b>
                                  @endif 
                                   @if ($decoded -> item4 != '')
                                     <b>{{ $decoded -> item4 }}</b>
                                  @endif  
                                  @if ($decoded -> item5 != '')
                                    <b>{{ $decoded -> item5 }}</b>
                                  @endif
                                

                                 <b> Web Developer</b>

                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
 @endforeach

                  </div>
               </div>
               <a href="#" data-scroll-nav="1" class="mouse-icon hidden-sm"><span class="wheel"></span></a>
            </div>
         </div>
      </section>
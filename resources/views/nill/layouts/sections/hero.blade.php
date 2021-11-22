  <section class="section pp-scrollable hero hero-02 full-screen p-0 bg-dark" id="hero" data-navigation-color="#fff" data-navigation-tooltip="HOME">
            <div class="container-fluid">
                <div class="title-small">
                    <p class="text-dark">Home</p>
                </div>
                <div class="row justify-content-center" id="hero-slider">
                    <div class="owl-carousel owl-theme">
                        <!--  Item1 -->
                        @foreach ($slider as $sliderss)
                            
           {{--  .hero-02 .hero-item3 {
    background: url("../img/slider-3.jpg") no-repeat center;
} --}}
                        <div class="hero-slide hero-item1 full-screen" style="background: url('{{URL::to('')}}/public/media/work/{{$sliderss -> sliderimage}}') no-repeat center;"></div>

                          @endforeach
                      
                    </div>
                </div>
                <div class="text-center hero-content">
                    <div class="col-lg-12">
                        <div class="hero-content text-center">

                            @foreach ($about as $aboutme)
                              
                           
                            <img style="width: 400px;" src="{{URL::to('')}}/public/media/work/{{$aboutme -> image}}" alt="" class="rounded-circle img-thumbnail">
                            <h3 class="text-dark mb-0 mt-3">I'M {{$aboutme -> name}}</h3>

                              @endforeach
                            <h1 class="text-dark text-capitalize mb-3"><span class="base-color">A  </span> <span class="element" 


                                data-elements="@foreach ($header as $anim)
                                   @php
                                       $anim_text = $anim -> animatedtext;
                                       $new_get = json_decode($anim_text);
                                   @endphp

                                    @if ($new_get -> item1 != '')
                                     {{ $new_get -> item1 }}
                                  @endif 
                                   ,
                                   @if ($new_get -> item2 != '')
                                     {{ $new_get -> item2 }}
                                  @endif 
                                  , 

                                  @if ($new_get -> item3 != '')
                                     {{ $new_get -> item3 }}
                                  @endif 
                                   ,
                                   @if ($new_get -> item4 != '')
                                     {{ $new_get -> item4 }}
                                  @endif ,
                                   @if ($new_get -> item5 != '')
                                     {{ $new_get -> item5 }}
                                  @endif 
                                @endforeach">
                                    



                                </span></h1>
                            <div>
                                <ul class="list-inline social-icon mt-2">


                                    <li class="list-inline-item"><a href="nill/javascript:void(0);"><i class="lni-facebook-filled text-dark"></i></a></li>
                                    <li class="list-inline-item"><a href="nill/javascript:void(0);"><i class="lni-twitter-filled text-dark"></i></a></li>
                                    <li class="list-inline-item"><a href="nill/javascript:void(0);"><i class="lni-github-original text-dark"></i></a></li>
                                    <li class="list-inline-item"><a href="nill/javascript:void(0);"><i class="lni-linkedin-original text-dark"></i></a></li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-icon">
                    <a href="nill/#about">
                        <i class="lni-arrow-down text-dark size-sm"></i>
                    </a>
                </div>
            </div>
        </section>
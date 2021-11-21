  <section id="portfolio" class="section pp-scrollable portfolio bg-dark" data-navigation-color="#fff" data-navigation-tooltip="PORTFOLIO">
            <div class="display-table">
                <div class="display-content">


                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Portfolio</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-left">
                                    <h2 class="text-dark">Creative <span class="base-color">Works</span></h2>
                                    <p class="text-muted mx-auto section-subtitle mt-3">Meet My Awesome Works and Enjoy</p>
                                </div>
                            </div>
                        </div>



                        <div class="row mt-4">
                            <!--   Portfolio Filters   -->
                            <ul id="portfolio-filter" class="list-unstyled list-inline mb-0 col-lg-12 text-left portfolio-filter">
                                <li class="list-inline-item">


                                    <a href="nill/#" data-filter="*" class="active my-1">All</a>
                                </li>

                                @foreach ($cat as $element)
                                   
                              
                                <li class="list-inline-item">
                                    <a href="nill/#" data-filter=".{{$element -> category_name}}" class="my-1">{{ $element -> category_name}}</a>
                                </li>
                                 @endforeach
                            </ul>
                        </div>
                        <div class="portfolio-items mt-4 row">

                                @foreach ($work as $work)
                                  
                               @foreach ($work -> categories as $catelement)
                                
                               
                            <!-- Item 01 -->
                            <div class="col-lg-4 portfolio-item my-3 {{$catelement -> category_name}}">
                                <div class="portfolio-item-content rounded">
                                    <img src="{{URL::to('')}}/public/media/work/{{$work -> image}}" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-toggle="modal" data-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="{{URL::to('')}}/public/media/work/{{$work -> image}}" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">{{$work -> title}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
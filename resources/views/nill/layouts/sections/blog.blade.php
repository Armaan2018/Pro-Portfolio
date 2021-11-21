<section id="blog" class="section pp-scrollable blog bg-dark" data-navigation-color="#fff" data-navigation-tooltip="BLOG">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Blog</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-left">
                                    <h2 class="text-dark">Latest <span class="base-color">News</span></h2>
                                    <p class="text-muted mt-1">Check Out My Latest Blog Posts</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">

                            @foreach ($blog as $blog)
                                
                           
                            <!-- Item-01 -->
                            <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="image-blog">
                                        <img src="{{URL::to('')}}/public/media/work/{{$blog -> image}}" alt="/" class="img-fluid rounded-top">
                                    </div>
                                    <div class="blog-content rounded-bottom text-left p-3">
                                        <h5 class="mb-0 mt-3"><a href="nill/javascript:void(0)" data-toggle="modal" data-target="#blog-single" class="text-dark font-weight-light">{{$blog -> title}}</a></h5>
                                        <ul class="list-inline mt-3">
                                            <li class="list-inline-item">
                                                <a href="nill/#">
                                                    <i class="base-color font-weight-bold">by</i>
                                                    <span class="text-dark font-italic">Armaan</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="text-muted mt-3">{{ Str::of($blog -> content)->words(25) }}</p>
                                        <div class="blog-link pb-3">
                                            <button type="button" class="base-color" data-toggle="modal" data-target="#blog-single">Read More...</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
 <section id="testimonial" class="section pp-scrollable testimonial text-center bg-dark" data-navigation-color="#fff" data-navigation-tooltip="CLIENT">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Testimonial</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-left">
                                    <h2 class="text-dark">My  <span class="base-color">Clients</span></h2>
                                    <p class="text-muted mt-1">What my clients say about me</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="owl-carousel">


                                     @foreach ($review as $review)
                                         
                                    
                                    <div class="testimonial-item text-left">
                                        <p class="mb-2 text-muted">{{$review -> review}}</p>
                                        <div class="float-left mt-4 mr-3 mr-sm-4">
                                            <img src="{{URL::to('')}}/public/media/work/{{$review -> reviewer_image}}" alt="/" class="rounded-circle">
                                        </div>
                                        <h4 class="float-left mt-5">-{{$review -> name}}, <span class="font-weight-bold">{{$review -> role}}</span></h4>
                                    </div>

                                     @endforeach
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
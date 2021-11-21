<section id="services" class="section pp-scrollable services bg-dark" data-navigation-color="#fff" data-navigation-tooltip="SERVICES">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">My Services</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-left">
                                    <h2 class="text-dark mb-3">My <span class="base-color">Services</span></h2>
                                    <p class="text-muted">Services I Offer To My Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">

                            @foreach ($serve as $element)
                                
                           
                            <!-- Item 01 -->
                            <div class="col-lg-4 text-left">
                                <div class="services-item">
                                    <div class="float-left mt-lg-1 d-inline-block services-icon">
                                        <i class="{{ $element -> icon}} size-md base-color"></i>
                                    </div>
                                    <div class="services-content">
                                        <h5 class="mb-3">{{ $element -> title}}</h5>
                                        <p class="text-muted mb-0">{{ $element -> description}}</p>
                                    </div>
                                </div>
                            </div>

                             @endforeach



                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
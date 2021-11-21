<section id="about" class="section pp-scrollable about text-dark bg-dark" data-navigation-color="#fff" data-navigation-tooltip="ABOUT ME">
            <div class="display-table">

               @foreach ($about as $element)
                   
               
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">About me</p>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <img src="{{URL::to('')}}/public/media/work/{{$element -> image}}" alt="/" class="rounded img-thumbnail w-100">
                            </div>
                            <div class="col-lg-6 personal-item  mb-4 mb-lg-0">
                                <h2 class="text-dark mb-2">About <span class="base-color">Me</span></h2>
                                <h5 class="text-dark mb-3">Hello I'M {{$element -> name}}</h5>
                                <div class="row">
                                    <div class="col-lg-5 col-sm-6 personal-info">
                                        <p class="text-dark">Birthday : <span class="text-gray"> 16 January 1997</span></p>
                                        <p class="text-dark">Website : <span class="text-gray">www.webarmaan.com</span></p>
                                        <p class="text-dark">Phone : <span class="text-gray">{{$element -> phone}}</span></p>
                                        <p class="text-dark">City : <span class="text-gray"> {{$element -> location}}</span></p>
                                    </div>
                                    <div class="col-lg-5 col-sm-6 personal-info">
                                        <p class="text-dark">Age : <span class="text-gray">{{$element -> age}}</span></p>
                                        <p class="text-dark">Degree : <span class="text-gray">Master</span></p>
                                        <p class="text-dark">Mail : <span class="text-gray">{{-- <a href="nill/https://retrina.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7617141536181f1a1a5815191b">[email&#160;protected]</a>
                                         --}} {{$element -> email}}</span></p>
                                        <p class="text-dark">Freelance : <span class="text-gray">Available</span></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="#" class="pill-button mt-3 mb-lg-0 mr-4">Download Cv</a>
                                        <a href="#" class="pill-button mt-3 mb-lg-0">Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                       {{-- <div class="row mt-4">
                           <div class="card">
                               <p class="text-dark">
                                   {{ $element -> description}}
                               </p>
                           </div>
                       </div> --}}

                        <div id="count-up" class="text-center">
                            <div class="container">
                                <div class="row mt-4">
                                    <!-- Item-01 -->
                                    <div class="col-6 col-md-3 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-download size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="286" data-speed="5000">286</span>
                                        </div>
                                        <p class="mb-0 ">Files Download</p>
                                    </div>
                                    <!-- Item-02 -->
                                    <div class="col-6 col-md-3 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-pencil-alt size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="6549" data-speed="5000">6549</span>
                                        </div>
                                        <p class="mb-0">Project Done</p>
                                    </div>
                                    <!-- Item-03 -->
                                    <div class="col-6 col-md-3 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-medall size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="793" data-speed="5000">793</span>
                                        </div>
                                        <p class="mb-0">Get Award</p>
                                    </div>
                                    <!-- Item-04 -->
                                    <div class="col-6 col-md-3 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-emoji-smile size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="286" data-speed="5000">286</span>
                                        </div>
                                        <p class="mb-0">Happy Client</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </section>
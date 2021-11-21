 <section id="contact" class="section pp-scrollable contact bg-dark" data-navigation-color="#fff" data-navigation-tooltip="CONTACT">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Get in Touch</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-left">
                                    <h2 class="text-dark">Get <span class="base-color">In Touch</span></h2>
                                    <p class="text-muted mx-auto section-subtitle mt-3">Feel Free To Contact Me Any Time</p>
                                </div>
                            </div>
                        </div>
                      
                        @foreach ($about as $element)
                          
                       
                        <div class="row mt-5">
                            <div class="col-lg-6 text-left">
                                <div class="contact-form">
                                    <h6 class="font-weight-semibold">Let’s Get Work With Me </h6>
                                    <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    <div class="mt-4">
                                        <p class="mt-2 font-weight-bold"> Address : <span class="text-muted"> {{$element -> location}}</span></p>
                                        <p class="mt-2 font-weight-bold"> Phone : <span class="text-muted"> {{$element -> phone}}/span></p>
                                        <p class="mt-2 font-weight-bold"> Mail : <span class="text-muted"><span class="text-bold">{{ $element -> email}}</span> </span></p>
                                        <p class="mt-2 font-weight-bold"> Web : <span class="text-muted">www.webarmaan.com</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-left">
                                <h6 class="font-weight-semibold">How can I help you ? </h6>
                                <form id="contact_form_subs" class="form mt-3" action="{{ route('send.contact') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 form-item">
                                            <div class="form-group">
                                                <input name="name"  type="text" class="form-control" placeholder="name" >
                                            </div>
                                        </div>
                                        <div class="col-lg-12 form-item">
                                            <div class="form-group">
                                                <input name="email"  type="email" class="form-control" placeholder="email" required >
                                            </div>
                                        </div>
                                        <div class="col-12 form-item">
                                            <div class="form-group">
                                                <textarea name="msg" rows="2" class="form-control h-auto" placeholder="Your message..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt-1 text-left">
                                            <button type="submit" class="pill-button" id="submit-btn">Send Message</button>
                                            {{-- <div id="message" class="toast text-white shadow-none border-0" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000" >
                                                <div class="toast-body d-inline-block"></div>
                                                <button type="button" class="pr-3 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true" class="lni-close size-xs text-white"></span>
                                                </button>
                                            </div> --}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                      @endforeach
                    </div>
                </div>
            </div>
        </section>
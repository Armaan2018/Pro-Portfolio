<section id="resume" class="section pp-scrollable resume bg-dark" data-navigation-color="#fff" data-navigation-tooltip="RESUME">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Resume</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-left">
                                    <h2 class="text-dark mb-3">My <span class="base-color">Resume</span></h2>
                                    <p class="text-muted">I Am Available For Freelance Projects.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <h3 class="text-dark mb-2"><i class="lni-graduation base-color"></i>Education</h3>
                                <ul class="timeline">
                                    @foreach ($education as $education)
                                       
                                  
                                    <li>
                                        <h5 class="base-color mb-0">{{ $education -> educlass}}</h5>
                                        <h6>{{ $education -> passedfrom}}</h6>
                                        <small class="text-muted ">{{ $education -> years}}</small>
                                        <p class="text-dark py-3">{{ $education -> description}}</p>
                                    </li>
                                     @endforeach
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="text-dark mb-2 mt-5 mt-lg-0"><i class="lni-pencil base-color"></i>Experience</h3>
                                <ul class="timeline">
                                   @foreach ($experience as $experience)
                                       
                                   
                                    <li>
                                        <h6 class="base-color mb-0">{{ $experience -> role}}</h6>
                                        <small class="text-muted ">{{ $experience -> years}}</small>
                                        <p class="text-dark py-3">{{ $experience -> description}}</p>
                                    </li>

                                     @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="row pt-6">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="skill-box pt-4 pt-lg-0 mt-4 mt-lg-0">
                                    @foreach ($skill as $skill)
                                        
                                  
                                    <div class="skillbar clearfix" data-percent="{{ $skill -> skillparcentage}}%">
                                        <div class="skillbar-title"><span>{{ $skill -> skillname}}</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">{{ $skill -> skillparcentage}}%</div>
                                    </div>

                                      @endforeach
                                  
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                          {{--   <div class="col-lg-6">
                                <div class="skill-box pt-4 pt-lg-0 mt-4 mt-lg-0">
                                    <div class="skillbar clearfix" data-percent="95%">
                                        <div class="skillbar-title"><span>angular js</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">95%</div>
                                    </div>
                                    <div class="skillbar clearfix " data-percent="85%">
                                        <div class="skillbar-title"><span>javascript</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">85%</div>
                                    </div>
                                    <div class="skillbar clearfix" data-percent="75%">
                                        <div class="skillbar-title"><span>wordpress</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">75%</div>
                                    </div>
                                    <div class="skillbar clearfix" data-percent="80%">
                                        <div class="skillbar-title"><span>Photoshop</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">80%</div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
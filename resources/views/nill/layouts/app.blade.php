  @include('nill.layouts.sections.head')


  {{-- css style --}}
  @include('nill.layouts.partials.css')

   

    <!--  Pre Loader  -->
    {{-- <div id="overlayer">
        <span class="spinner-grow spinner-grow-lg loader" role="status" aria-hidden="true"></span>
    </div> --}}


        <!-- Blog Single Modal -->
        @include('nill.layouts.sections.blogmodal')

        <!-- Portfolio Single Modal -->
         @include('nill.layouts.sections.portfoliomodal')

    <!--  Page Pilling  Strat  -->
    <div id="pagepiling" class="pagepiling">

        <!--   Header Start -->
        @include('nill.layouts.sections.header')
        <!--   Header End   -->

        <!--    Hero Start    -->
       @include('nill.layouts.sections.hero')
        <!--    Hero End    -->

        <!--   About Start   -->
         @include('nill.layouts.sections.about')
        <!--    About End    -->

        <!--   Resume Start   -->
         @include('nill.layouts.sections.resume')
        <!--   Resume End   -->

        <!--   Services Start   -->
         @include('nill.layouts.sections.service')
        <!--   Services End   -->

        <!--  Portfolio Start  -->
       @include('nill.layouts.sections.portfolio')
        <!--   Portfolio End   -->

        <!-- Testimonial Start -->
        @include('nill.layouts.sections.testimonial')
        <!--  Testimonial End  -->

        <!--   Blog Start   -->
         @include('nill.layouts.sections.blog')
        <!--   Blog End   -->

        <!--   Contact Start   -->
        @include('nill.layouts.sections.contact')
        <!--   Contact End   -->

        <!--   Footer Start   -->
         @include('nill.layouts.sections.footer')
        <!--   Footer End   -->

        <!--   Color Scheme  -->
       {{--  <a class="color-scheme text-white bg-base-color d-inline-block" href="#"><i class="lni-sun"></i></a> --}}

    </div>
    <!--  Page Pilling  End -->



{{-- js scripts --}}
@include('nill.layouts.partials.js')
 <!------->

    </body>

</html>
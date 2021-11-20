  <section class="fabon-contact-area section_100" data-scroll-index="6">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2>Get In Touch</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <!-- Contact Form -->
                  <form id="contact_form_id" action="{{ route('send.contact') }}" method="POST">
                     <div class="row">
                        <div class="col-md-6 form-group">
                           <!--name-->
                           <input type="text" id="contact-name" class="form-control" placeholder="Name" name="sender_name">
                        </div>
                        <div class="col-md-6 form-group">
                           <!--email-->
                           <input type="email" id="contact-email"  class="form-control" placeholder="Email" name="sender_email">
                        </div>
                        <div class="col-md-12 form-group">
                           <!--message box-->
                           <textarea id="contact-message" name="sender_msg" class="form-control" placeholder="How can we help you?" rows=6 ></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                           <!--contact button-->
                           <button id="contact-submit" type="submit">
                           Send Message
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>

      
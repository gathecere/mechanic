 <main>
        <!-- Home Banner -->
        <section class="parallax page-heading" style="background-image: url(static/img/home-banner-1.jpg);">
            <div class="mask bg-black opacity-7"></div>
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h1 class="h2 text-white m-0"><?php if($name){ echo $name; }  ?></h1>
                    </div>
                    <div class="col-lg-4">
                        
                    </div>
                </div>
            </div>
        </section>     
    
      <section class="section bg-gray-100">
           <div class="container kevvy">
         

          
        <div class="row">
          <div class="col-md-6 offset-md-3">
             <div class="card">
                 <div class="card-body">


           
                    <p class="subsection-description">Drop us a line and we will contact you as soon as possible.</p>

                           <?php
                                 if(isset($message)){
                                  ?>
                                    <div class="alert alert-success">

                                       <?php echo $message; ?>
                                      
                                    </div>
                             <?php    } ?>


                              <?php
                                 if(isset($fail)){
                                  ?>
                                    <div class="alert alert-warning">

                                       <?php echo $fail; ?>
                                      
                                    </div>
                             <?php    } ?>
        
        <!--=== Contact Form ===-->

          <form id="loginform" class="" action="<?php echo base_url() ?>home/contactus_process" method="post">
            
            <div class="form-group">
              <label class="control-label" for="contact-name">Name</label>
              <div class="controls">
              <input id="contact-name" name="fname" placeholder="Your name" class="form-control requiredField label_better" data-new-placeholder="Your name" type="text" data-error-empty="Please enter your name">
             
              </div>
            </div><!-- End name input -->
            
            <div class="form-group">
              <label class="control-label" for="contact-mail">Email</label>
              <div class=" controls">
              <input id="contact-mail" name="email" placeholder="Your email" class="form-control requiredField label_better" data-new-placeholder="Your email" type="email" data-error-empty="Please enter your email" data-error-invalid="Invalid email address">
             
              </div>
            </div><!-- End email input -->

            <div class="form-group">
              <label class="control-label" for="contact-mail">Subect</label>
              <div class=" controls">
              <input id="contact-mail" name="subject" placeholder="subject" class="form-control requiredField label_better" data-new-placeholder="Your email" type="text">
             
              </div>
            </div><!-- End email input -->
            
            <div class="form-group">
              <label class="control-label" for="contact-message">Message</label>
              <div class="controls">
                <textarea id="contact-message" name="message"  placeholder="Your message" class="form-control requiredField label_better" data-new-placeholder="Your message" rows="6" data-error-empty="Please enter your message"></textarea>
                
              </div>
            </div><!-- End textarea -->
            <div class="form-group">
                                                         <div class="g-recaptcha" data-sitekey="6LdVpcgZAAAAAKXFlnZb259PNT4YoZpAHACYgRLu"></div>
            </div>
            
            <p><button  type="submit" class="btn btn-primary"><i class="fa fa-location-arrow"></i>Send Message</button></p>
           
            
          </form><!-- End contact-form -->



               </div>
             </div>
          </div>
        </section>
  </div>

<!doctype html><html lang="zxx">
 <script src='https://www.google.com/recaptcha/api.js' async defer></script>

<head><!-- metas --><meta charset="utf-8"><meta name="author" content="pxdraft"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"><meta name="keywords" content="Crizo - Multipurpose Responsive Template"><meta name="description" content="Crizo - Multipurpose Responsive Template"><!-- title --><title>EssayLoop SignUp</title><!-- Favicon --><link rel="shortcut icon" href="https://www.pxdraft.com/wrap/crizo/assets/img/favicon.ico"><!-- CSS Template --><link href="<?php echo base_url('asset/css/theme.css'); ?>" rel="stylesheet"></head><body><!-- Skippy & Prload --><!-- skippy --> <a id="skippy" class="skippy visually-hidden-focusable overflow-hidden" href="#content"><div class="container"><span class="u-skiplink-text">Skip to main content</span></div></a><!-- End skippy --><!-- Preload --><div id="loading" class="loading-preloader"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>

<div class="wrapper">
   <section class="bg-dark effect-section">
      <div class="svg-style-top-right">
         <svg version="1.1" x="0px" y="0px" viewBox="0 0 361.1 384.8" xml:space="preserve" class="injected-svg svg_img text-primary">
            <path d="M53.1,266.7C19.3,178-41,79.1,41.6,50.1S287.7-59.6,293.8,77.5c6.1,137.1,137.8,238,15.6,288.9 S86.8,355.4,53.1,266.7z"></path>
         </svg>
      </div>
      <div class="svg-style-bottom-left">
         <svg version="1.1" x="0px" y="0px" viewBox="0 0 361.1 384.8" xml:space="preserve" class="injected-svg svg_img text-primary">
            <path d="M53.1,266.7C19.3,178-41,79.1,41.6,50.1S287.7-59.6,293.8,77.5c6.1,137.1,137.8,238,15.6,288.9 S86.8,355.4,53.1,266.7z"></path>
         </svg>
      </div>
      <div class="container position-relative">
         <div class="row align-items-center justify-content-center min-vh-100">
            <div class="col-md-6 col-lg-5 col-xl-4 py-5">
               <div class="text-center mb-6">
                  <a href="<?= base_url(); ?>">
                  <img height="40" src="<?= base_url('static/img/looplight.png'); ?>" title="" alt=""></a>
               </div>
               <div class="card">
                  <div class="card-body p-5">
                     <div class="pb-4 text-center">
                        <h3 class="mb-2">Create your account</h3>
                        
                     </div>
                     <form id="signupform" method="post" action="<?php echo base_url('client/add_user') ?>">
                                         <br>
                        <div class="form-group mb-3">
                           <label class="form-label">First Name</label> 
                           <input type="text" name="user_fname" class="form-control" placeholder="First Name">
                        </div>

                        <div class="form-group mb-3">
                           <label class="form-label">Surname</label> 
                           <input type="text" name="user_lname" class="form-control" placeholder="Surname(optional)">
                        </div>

                        <div class="form-group mb-3">
                           <label class="form-label">Email address</label> 
                           <input type="email" name="user_email" class="form-control" placeholder="name@example.com">
                        </div>

                        <div class="form-group mb-3">
                           <label class="form-label">Password</label> 
                           <input type="password" class="form-control" name="password" id="new_password" placeholder="***********">
                        </div>

                        <div class="form-group mb-3">
                           <label class="form-label">Confirm Password</label> 
                           <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="***********">
                        </div>

                        <div class="form-group col-md-12">
                                                 <div class="g-recaptcha" data-sitekey="6LdVpcgZAAAAAKXFlnZb259PNT4YoZpAHACYgRLu"></div>
                                                </div>

                        <div class="form-group mb-3">
                           <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault">I agree to the <a target="_blank" href="<?php echo base_url('terms'); ?>">terms and conditions</a></label></div>
                        </div>

                        <div class="py-2"><button class="btn btn-primary w-100">Create account</button></div>
                        

                        <div class="mt-3 text-center"><small>Already have an acocunt?</small> <a href="<?php echo base_url('client_account_login'); ?>" class="small font-weight-bold">Login</a></div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<script src="<?php echo base_url('asset/js/jquery-3.5.1.min.js'); ?>">

<script src="<?= base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script><!-- headroom JS -->
<script src="<?php echo base_url('asset/vendor/headroom/headroom.min.js'); ?>"></script><!-- swiper JS -->
<script src="<?php echo base_url('asset/vendor/swiper/swiper-bundle.min.js'); ?>"></script><!-- purecounter JS -->
<script src="<?php echo base_url('asset/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/theme.js'); ?>"></script>
  
</script>
<script src="<?php echo base_url('asset/vendor/magnific/jquery.magnific-popup.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/vendor/isotope/isotope.pkgd.min.js') ?>"></script>
<script src="<?php echo base_url('asset/js/theme-jquery.js'); ?>"></script><!-- End script start -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <script type="text/javascript">
    //change password script don't get it twisted
           jQuery().ready(function() {

            // validate form on keyup and submit
            
            var v = jQuery("#signupform, #msform, #zoney").validate({
              rules: {
                 new_password: {
                    required: true,
                    
                },
                confirm_password: {
                    required: true,
                   
                    equalTo: "#new_password"
                }
              },
              
              messages: {
                    
                    confirm_password: {
                        equalTo: "Passwords must match",
                    }
                   
                },
              errorElement: "span",
              errorClass: "help-block",
            });

           

           

          });
</script> 

</body>
 <style>
   .help-block{
  color: orange !important;
}

</style>
</html>


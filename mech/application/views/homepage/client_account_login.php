<!doctype html><html lang="zxx">

<head><!-- metas --><meta charset="utf-8"><meta name="author" content="pxdraft"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"><meta name="keywords" content="Crizo - Multipurpose Responsive Template"><meta name="description" content="Crizo - Multipurpose Responsive Template"><!-- title --><title>EssayLoop Login</title><!-- Favicon --><link rel="shortcut icon" href="https://www.pxdraft.com/wrap/crizo/assets/img/favicon.ico"><!-- CSS Template --><link href="<?php echo base_url('asset/css/theme.css'); ?>" rel="stylesheet"></head><body><!-- Skippy & Prload --><!-- skippy --> <a id="skippy" class="skippy visually-hidden-focusable overflow-hidden" href="#content"><div class="container"><span class="u-skiplink-text">Skip to main content</span></div></a><!-- End skippy --><!-- Preload --><div id="loading" class="loading-preloader"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>


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
               <div class="text-center mb-6"><a href="<?= base_url(); ?>">
                  <img height="40" src="<?= base_url('static/img/looplight.png'); ?>" title="" alt=""></a></div>
               <div class="card">
                  <div class="card-body p-5">
                     <div class="pb-4 text-center">
                        <h3 class="mb-2">Login</h3>


                         <?php 
                                        if(isset($error_message)){ ?>
                                        <div class="alert alert-warning">
                                          <?php 

                                            echo $error_message;
                                          ?>
                                         </div>
                                    <?php
                                        }


                                    ?>

                                     <?php 
                                        if(isset($success_message)){ ?>
                                        <div class="alert alert-success">
                                          <?php 

                                            echo $success_message;
                                          ?>
                                         </div>
                                    <?php
                                        }


                                    ?>

                                     <?php
                                           if($this->session->flashdata('warning')){
                                            ?>
                                            
                                              <div class="alert alert-warning">

                                                 <?php echo $this->session->flashdata('warning'); ?>
                                                
                                              </div>
                                       <?php    }


                                         ?>
                        <p>Sign in to your account to continue.</p>
                     </div>
                     <form method="post"  id="loginform" action="<?php echo base_url() ?>login_user">
                        <div class="form-group mb-3">
                           <label class="form-label">Email address</label> 
                           <input type="email" name="email" class="form-control" placeholder="name@example.com">
                        </div>
                        <div class="form-group mb-3">
                           <label class="form-label">Password</label> 
                           <input  name="password" type="password" class="form-control" placeholder="***********">
                        </div>

                        <div class="pt-2"><button class="btn btn-primary w-100">Sign in</button></div>
                        
                        
                        <div class="mt-3 text-center"><small>Not registered?</small> <a href="<?php echo base_url('client'); ?>" class="small font-weight-bold">Create account</a></div>
                        <div class="mt-3 text-center"><small>Forgot password?</small> <a data-target="#myModal" data-bs-toggle="modal" href="#myModal" class="small font-weight-bold">Recover password</a></div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>

<script src="<?= base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script><!-- headroom JS -->
<script src="<?php echo base_url('asset/vendor/headroom/headroom.min.js'); ?>"></script><!-- swiper JS -->
<script src="<?php echo base_url('asset/vendor/swiper/swiper-bundle.min.js'); ?>"></script><!-- purecounter JS -->
<script src="<?php echo base_url('asset/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/theme.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/jquery-3.5.1.min.js'); ?>">
  
</script>
<script src="<?php echo base_url('asset/vendor/magnific/jquery.magnific-popup.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/vendor/isotope/isotope.pkgd.min.js') ?>"></script>
<script src="<?php echo base_url('asset/js/theme-jquery.js'); ?>"></script><!-- End script start -->

    <div class="modal fade" id="myModal" role="dialog" style="z-index: 100000">
                                              <div class="modal-dialog">
                                                <div class="modal-content">

                                                  <!-- Modal Header -->
                                                  <div class="modal-header">
                                                    <h4 class="modal-title">Recover your password</h4>
                                                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                                                  </div>

                                                  <!-- Modal body -->
                                                  <div class="modal-body">
                                                      <form class="contactform" id="signupform" method="post" action="<?php echo base_url('client/recover_password')?>">
                                                                            <div class="row">
                                                                               
                                                                                 <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <input id="email" type="email" placeholder="Your email" name="email" class="form-control" required>
                                                                                    </div>
                                                                                </div>

                                                                                  <div class="col-md-12">
                                                                                    <div class="form-action">
                                                                                       <br>
                                                                                        <button class="btn btn-success" type="submit" name="send">Recover</button>
                                                                                    </div>
                                                                                </div>
                                                          </div>
                                                        </form>
                                                    </div>

                                                  <!-- Modal footer -->
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                  </div>

                                                </div>
                                              </div>
                                            </div>
</body>



</html>



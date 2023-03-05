<!DOCTYPE html>
<html lang="en">



<head>
    <!-- Title -->
    <title><?php if (isset($title)) {echo $title;} ?></title>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="<?php if(isset($description)){ echo $description;  } ?>">
    <link rel="canonical" href="<?= current_url(); ?>" />

    <!-- Favicon -->

        <link rel="shortcut icon" href="<?php echo base_url('assets/images/loopfav.png'); ?>">

    <!-- CSS Template -->
    <link href="<?php echo base_url('static/css/style.css'); ?>" rel="stylesheet">
 <link href="<?php echo base_url('assets/css/mystyle.css'); ?>" rel="stylesheet">

 <link href="<?php echo base_url('assets/css/dropzone.min.css'); ?>" rel="stylesheet" />

 <link rel="stylesheet prefetch" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 <script src='https://www.google.com/recaptcha/api.js' async defer></script>

 <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" integrity="sha512-f0tzWhCwVFS3WeYaofoLWkTP62ObhewQ1EZn65oSYDZUg1+CyywGKkWzm8BxaJj5HGKI72PnMH9jYyIFz+GH7g==" crossorigin="anonymous" />

 <link rel="stylesheet prefetch" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">

 <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "13099921394", // WhatsApp number
                facebook: "104539011870686",
                call_to_action: "Talk to us", // Call to action
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
</script>

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f54e9a2f0e7167d000dd873/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

</head>

<body onload="get_tols()">

<body>
    <!-- Skippy -->
    <a id="skippy" class="sr-only sr-only-focusable u-skippy" href="#content">
        <div class="container">
            <span class="u-skiplink-text">Skip to main content</span>
        </div>
    </a>
    <!-- End Skippy -->
    <!-- Preload -->
    <div id="loading" class="preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- End Preload -->
    <!-- Header -->
    <header class="header-main header-dark fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="<?= base_url(); ?>">
                    <img class="logo-dark" src="<?= base_url('static/img/loopdark.png'); ?>" title="" alt="essayloop logo">
                    <img class="logo-light" src="<?= base_url('static/img/looplight.png'); ?>" title="" alt="">
                </a>
                <!-- Logo -->
                <!-- Mobile Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- End Mobile Toggle -->
                <!-- Menu -->
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto one-page-nav">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>" class="nav-link">Home</a>
                            
                            
                        </li>

                         <li class=" nav-item">
                            <a href="<?php echo base_url('reviews'); ?>" class="nav-link">Reviews</a>
                            
                            
                        </li>
                       
                            
                      

                        <li class=" nav-item">
                            <a href="<?php echo base_url('how_it_works'); ?>" class="nav-link">How It Works</a>
                            
                            
                        </li>

                        <li class=" nav-item">
                            <a href="<?php echo base_url('pricing'); ?>" class="nav-link">Pricing</a>
                            
                            
                        </li>
                        
                        
                        
                        
                    </ul>
                    <div class="extra-menu d-lg-block ps-4">
                       <?php if($this->session->userdata('userData')){ ?>
                      

                         <a href="<?php echo base_url('client/index'); ?>" class="btn btn-warning">
                            Dashboard
                        </a>
                      <?php }else{ ?>

                          <a href="<?php echo base_url('order_now'); ?>" class="btn btn-warning">
                            Order Now
                        </a>
                        <a href="<?php echo base_url('client_account_login'); ?>" class="btn btn-info">
                            Account
                        </a>




                      <?php } ?>
                    </div>
                </div>
                <!-- End Menu -->
            </div>
        </nav>
    </header>
    <!-- Header End -->



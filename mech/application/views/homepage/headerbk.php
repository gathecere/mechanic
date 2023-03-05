<!DOCTYPE html>
<html lang="zxx">



<head>
    <!-- Title -->
    <title><?php if(isset($title)){ echo $title; } ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="<?php if(isset($description)){ echo $description; } ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/loopfav.png'); ?>">
    <!-- CSS Template -->
    <link href="<?php echo base_url('static/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/mystyle.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/dropzone.min.css'); ?>" rel="stylesheet" />
    

    <link rel='stylesheet prefetch' href='https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css'>
    <link rel='stylesheet prefetch' href='https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" integrity="sha512-f0tzWhCwVFS3WeYaofoLWkTP62ObhewQ1EZn65oSYDZUg1+CyywGKkWzm8BxaJj5HGKI72PnMH9jYyIFz+GH7g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">


    <script   src='https://www.google.com/recaptcha/api.js' async defer></script>


</head>

<body onload="get_tols();">
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
   
   
    <div class="header-height-bar"></div>
    <header class="header-main header-light fixed-top header-fluid header-height bg-white">        
        <div class="header-top header-border-bottom small">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Left -->
                    <div class="d-flex align-items-center justify-content-center d-none d-lg-block">
                        <ul class="nav">
                            <li class="nav-item me-3">
                                <span>
                                    <i class="far fa-envelope me-2"></i>
                                    support@essayloop.com
                                </span>
                            </li>
                            <li class="nav-item">
                                <a href="https://wa.me/13099921394" class="navbar-link text-reset">
                                    <i class="fab fa-whatsapp"></i>

                                    +1 (309) 992-1394
                                    
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                   
                </div>
            </div>
        </div>
        <!-- End Top Header -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="<?= base_url(); ?>">
                    <img src="<?php echo base_url('static/img/essayloopnew.png'); ?>" title="" alt="" class="img-fluid">
                </a>
                <!-- Logo -->
                <!-- Mobile Toggle -->
                <button class="navbar-toggler ms-auto me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- End Mobile Toggle -->
                <!-- Menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>" class="nav-link <?php if($this->uri->segment(1)== NULL){ echo 'active'; } ?>">
                                Home
                            </a>
                        </li>
                         <li class="nav-item">
                            <a href="<?= base_url('pricing'); ?>" class="nav-link <?php if($this->uri->segment(1)=='pricing'){ echo 'active'; } ?>">
                                Pricing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('how_it_works'); ?>" class="nav-link <?php if($this->uri->segment(1)=='how_it_works'){ echo 'active'; } ?>">
                                How It Works
                            </a>
                        </li>
                     

                    </ul>
                </div>
                <!-- End Menu -->
                <div class="nav flex-nowrap align-items-center">
                    <!-- Nav Search-->

                   <div class="nav-item  d-xl-block">
                        <a href="<?php echo base_url('order_now'); ?>" class="btn btn-sm btn-warning mb-0 mx-2 text-nowrap">Order Now</a>
                    </div>
                 
                    <div class="nav-item  d-xl-block">
                        <a href="<?php echo base_url('client'); ?>" class="btn btn-sm btn-primary mb-0 mx-2 text-nowrap">Account</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- GetButton.io widget -->
<!-- GetButton.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "13099921394", // WhatsApp number
                facebook: "116183703518278",
                call_to_action: "Message us", // Call to action
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>

    <!--Start of Tawk.to Script-->
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
<!--End of Tawk.to Script-->
<!-- /GetButton.io widget -->
<!-- /GetButton.io widget -->
    </header>
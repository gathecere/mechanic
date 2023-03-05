 <div class="modal fade" id="leadbanner" role="dialog">
                                              <div class="modal-dialog">
                                                <div class="modal-content" id="lizz" >

                                                  <!-- Modal Header -->
                                                  <div class="modal-header">
                                                    <h3 class="modal-title text-center modal-title white">Claim your 20% Discount</h3>
                                                  
                                                  </div>

                                                  <!-- Modal body -->
                                                  <div class="modal-body">
                                                      <p class="white"><b>Welcome, get your discount offer by providing your email below.</b></p>
                                                      <form class="contactform" id="signupform" method="post" action="<?php echo base_url('home/lead')?>">
                                                                            <div class="row">
                                                                               
                                                                                 <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <input id="email" type="email" placeholder="Your email" name="email" class="form-control" required>
                                                                                    </div>
                                                                                </div>

                                                                                  <div class="col-md-12">
                                                                                    <div class="form-action">
                                                                                        <button id="kuni" class="btn btn-warning" type="submit" name="send">Claim your discount</button>
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
 <footer class="footer border-top bg-dark">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="row">
                           <?php
                              foreach($help->result() as $row){  ?>
                            <div class="col-md-4 my-3">
                                <ul class="list-unstyled white-link footer-links">

                                    <li>
                                        <a href="<?php echo base_url() ?>blog/<?php echo $row->post_name; ?>"><?php echo $row->post_title; ?></a>
                                    </li>
                                   
                                </ul>
                            </div>

                        <?php } ?>
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom footer-border light py-3">
            <div class="container">
                <div class="text-center">
                     <a href="<?php echo base_url() ?>"> Home </a> |
                     <a href="<?php echo base_url('order_now') ?>"> Order Now </a> |     
                     <a href="<?php echo base_url('pricing') ?>"> Pricing </a> |      
                     <a href="<?php echo base_url('how_it_works') ?>"> How It Works </a> |   
                     <a href="<?php echo base_url('contactus') ?>"> Contact Us </a>   

                </div>

                <p class="m-0 text-center">© <?= date("Y"); ?> copyright <a href="<?= base_url(); ?>" class="text-reset">EssayLoop</a></p>
            </div>
        </div>

        <div class="alert text-center cookiealert" role="alert">
              <b>We are GDPR compliant</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="<?php echo base_url() ?>home/privacy" target="_blank">Learn more</a>

              <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
                  I agree
              </button>
        </div>

    </footer>
    <!-- End Footer -->
    <!-- jquery -->
    <script src="<?php echo base_url('static/js/jquery-3.5.1.min.js'); ?>"></script>
    <!-- appear -->
    <script src="<?php echo base_url('static/vendor/appear/jquery.appear.js'); ?>"></script>
    <!--bootstrap-->
    <script src="<?php echo base_url('static/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- countTo -->
    <script src="<?php echo base_url('static/vendor/counter/jquery.countTo.js'); ?>"></script>
    <!-- typed -->
    <script src="<?php echo base_url('static/vendor/typed/typed.js'); ?>"></script>
    <!-- owl-carousel -->
    <script src="<?php echo base_url('static/vendor/owl-carousel/js/owl.carousel.min.js'); ?>"></script>
    <!-- magnific -->
    <script src="<?php echo base_url('static/vendor/magnific/jquery.magnific-popup.min.js'); ?>"></script>
    <!-- isotope -->
    <script src="<?php echo base_url('static/vendor/isotope/isotope.pkgd.min.js'); ?>"></script>
    <!-- svg-injector -->
    <script src="<?php echo base_url('static/vendor/svginjector/svg-injector.min.js'); ?>"></script>
    <!-- jarallax -->
    <script src="<?php echo base_url('static/vendor/jarallax/jarallax-all.js'); ?>"></script>
    <!-- count-down -->
    <script src="<?php echo base_url('static/vendor/count-down/jquery.countdown.min.js'); ?>"></script>
    <!-- working form -->
    <script src="<?php echo base_url('static/vendor/mail/js/form.min.js'); ?>"></script>
    <script src="<?php echo base_url('static/vendor/mail/js/script.js'); ?>"></script>
    <!-- Theme Js -->
    <script src="<?php echo base_url('static/js/custom.js'); ?>"></script>

    <script src="<?= base_url('assets/js/dropzone.min.js'); ?>"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js" defer></script>


        <script type="text/javascript">
          //clear forms
           $("form :input").attr("autocomplete", "off");           
        </script>




     <script type="text/javascript">
  $(document).ready(function () {
    //if cookie hasn't been set...
    if (document.cookie.indexOf("ModalShown=true")<0) {

         setTimeout(function(){
            $("#leadbanner").modal("show");
          }, 4000);


       // $("#leadbanner").modal("show");
        //Modal has been shown, now set a cookie so it never comes back
        $("#myModalClose").click(function () {
            $("#leadbanner").modal("hide");
        });
        document.cookie = "ModalShown=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
    }
});
</script>

    <script type="text/javascript">
            
        $(document).ready(function() {
          $(".testimonial-carousel").slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            arrows: true,
            speed: 300,
            dots:true,
            prevArrow: $(".testimonial-carousel-controls .prev"),
            nextArrow: $(".testimonial-carousel-controls .next")
            
          });
        });

        //highlight menu on click

       

        // $("#navbarSupportedContent a").click(function() {
        //         $('a').removeClass("active");
        //         $(this).addClass("active");
        //  });

       




      


       </script>


       

     <script type="text/javascript">

            
      
        function get_words(){

          var pages=$("#pages").val();
          var words=pages*275;
          $("#words").val(words+" words");


        }

      
 


      function get_other() {
            
              
                  
                  // get the value of the select statement
                   var id =  $("#discipline").val();
                   console.log(id);
                  
                    if (id == 69) {
                        $('#other').show(500);
                        $("#thatinput").prop('required',true);
                    } else {    

                        $('#other').hide(500);
                    }


               
           
         
        }
 
   
                           
        function get_tols(){


                    var timezone=Intl.DateTimeFormat().resolvedOptions().timeZone;
                    $("#tz").val(timezone);
                    var pages=$("#pages").val();
                    var level=$("#level").val();
                    var deadline=$("#deadline").val();
                    var coupon=$("#coupon").val();
                    var service=$('input[name=service]:checked').val();
                    var user_id=999999;

                    if(deadline)
                    {
                      deadline=deadline;
                    }
                    else
                    {
                       deadline="2040/7/7 11:11"
                    }
                   

                    
                    

                    
                
                    $.ajax({
                            url:'<?php echo base_url() ?>home/get_price',
                            type:'POST',
                            data:{ deadline:deadline, level : level,coupon : coupon,pages:pages,service:service,timezone:timezone,user_id:user_id },
                              beforeSend: function(){
                                 $("#submit-all").attr("disabled", true);
                               },
                               complete: function(){
                                
                                  $("#submit-all").removeAttr("disabled");
                               },
                            success:function(result){

                             // console.log('pages'+pages);
                              //console.log('result'+result);
                                
                              var tot=parseFloat(result).toFixed(2);

                              // alert(result);

                               if(tot>0){
                                  
                               $("#total").val((tot));
                              // $("#total").css('border','2px solid #74a125');


                               }
                               else
                               {
                                 $("#total").val(8.5);
                                 //("#total").css('border','2px solid #c8c9c9');
                               }


                                  
                            }

                    });
                // });
            }





         //plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
              $('.btn-number').click(function(e){
                  e.preventDefault();
                  
                  fieldName = $(this).attr('data-field');
                  type      = $(this).attr('data-type');
                  var input = $("input[name='"+fieldName+"']");
                  var currentVal = parseInt(input.val());
                  if (!isNaN(currentVal)) {
                      if(type == 'minus') {
                          
                          if(currentVal > input.attr('min')) {
                              input.val(currentVal - 1).change();
                          } 
                          if(parseInt(input.val()) == input.attr('min')) {
                              $(this).attr('disabled', true);
                          }

                      } else if(type == 'plus') {

                          if(currentVal < input.attr('max')) {
                              input.val(currentVal + 1).change();
                          }
                          if(parseInt(input.val()) == input.attr('max')) {
                              $(this).attr('disabled', true);
                          }

                      }
                  } else {
                      input.val(0);
                  }
              });
              $('.input-number').focusin(function(){
                 $(this).data('oldValue', $(this).val());
              });
              $('.input-number').change(function() {
                  
                  minValue =  parseInt($(this).attr('min'));
                  maxValue =  parseInt($(this).attr('max'));
                  valueCurrent = parseInt($(this).val());
                  
                  name = $(this).attr('name');
                  if(valueCurrent >= minValue) {
                      $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
                  } else {
                      alert('Sorry, the minimum value was reached');
                      $(this).val($(this).data('oldValue'));
                  }
                  if(valueCurrent <= maxValue) {
                      $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
                  } else {
                      alert('Sorry, the maximum value was reached');
                      $(this).val($(this).data('oldValue'));
                  }
                  
                  
              });
              $(".input-number").keydown(function (e) {
                      // Allow: backspace, delete, tab, escape, enter and .
                      if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                           // Allow: Ctrl+A
                          (e.keyCode == 65 && e.ctrlKey === true) || 
                           // Allow: home, end, left, right
                          (e.keyCode >= 35 && e.keyCode <= 39)) {
                               // let it happen, don't do anything
                               return;
                      }
                      // Ensure that it is a number and stop the keypress
                      if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                          e.preventDefault();
                      }
                  });

                  </script>

    
                   <script>


                    $('#deadline').datetimepicker({
                    inline:false,
                   // minDate: -0,
                    validateOnBlur : true,
                   
                    minDateTime: true,
                    });

                  </script>

                  <script type="text/javascript">
                        
                        Dropzone.options.myDropzone= {
                              url: '<?php echo base_url() ?>client/process_order_first',
                              autoProcessQueue: false,
                              uploadMultiple: true,
                              parallelUploads: 5,
                              maxFiles: 7,
                              maxFilesize: 90000,
                              acceptedFiles: '.jpg,.jpeg,.png,.gif,.pdf,.docx,.xml,.xlsx,.csv,.doc,.xls,.ppt,.pptx,.pub',
                              addRemoveLinks: true,
                              init: function() {
                                  dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

                                  // for Dropzone to process the queue (instead of default form behavior):
                                  document.getElementById("submit-all").addEventListener("click", function(e) {
                                      // Make sure that the form isn't actually being sent.
                                      e.preventDefault();
                                      e.stopPropagation();
                                      // dzClosure.processQueue();

                                     if($("#msform").valid()){
                                          

                                            $(this).prop("disabled", true);
                                            // add spinner to button
                                            $(this).html(
                                              `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...`
                                            );

                                        }
                                        else
                                        {
                                              return false;
                                               
                                        }
                                       if (dzClosure.files.length) {
                                          
                                            dzClosure.processQueue(); // upload files and submit the form
                                        } else {
                                            $('#msform').submit(); // just submit the form
                                        }



                                      
    
                                     // 

                                  });

                                  //send all the form data along with the files:
                                  this.on("sendingmultiple", function(data, xhr, formData) {
                                      formData.append("service", jQuery(".stv-radio-button").val());
                                      formData.append("order_title", jQuery("#order_title").val());
                                      formData.append("order_description", jQuery("#order_description").val());
                                      formData.append("order_discipline_id", jQuery("#discipline").val());
                                      formData.append("other", jQuery("#other").val());
                                      formData.append("order_sources", jQuery("#order_sources").val());
                                      formData.append("order_pages", jQuery("#pages").val());
                                      formData.append("affiliate", jQuery("#affiliate").val());
                                      formData.append("order_format_id", jQuery("#order_format_id").val());
                                      formData.append("order_level_id", jQuery("#level").val());
                                      formData.append("order_deadline_id", jQuery("#deadline").val());
                                      formData.append("coupon", jQuery("#coupon").val());
                                      formData.append("order_amount", jQuery("#total").val());
                                      formData.append("order_tz", jQuery("#tz").val());
                                      formData.append("g-recaptcha-response", jQuery("#g-recaptcha-response").val());
                                      formData.append("user_fname", jQuery("#user_fname").val());
                                      formData.append("user_lname", jQuery("#user_lname").val());
                                      formData.append("user_phone", jQuery("#user_phone").val());
                                      formData.append("user_email", jQuery("#user_email").val());
                                      formData.append("password", jQuery("#confirm_password").val());
                                  });

                               


                                  this.on("success", function(file, responseText) {

                                       if(responseText=='registered'){

                                          window.location.href = '<?php echo base_url('client/registered')?>';

                                       }
                                       else
                                       {

                                        var res = $.parseJSON(responseText);


                                        
                                        var order_id=res.order_id;
                                        var amount=res.amount;
                                        window.location.href = '<?php echo base_url('client/paypal/')?>'+order_id+'/'+amount;


                                      }

                                    });

                              }
                          }
    </script>


     <script type="text/javascript">
                        
                        Dropzone.options.myDropzonespecial= {
                              url: '<?php echo base_url() ?>client/special_first',
                              autoProcessQueue: false,
                              uploadMultiple: true,
                              parallelUploads: 5,
                              maxFiles: 7,
                              maxFilesize: 90000,
                              acceptedFiles: '.jpg,.jpeg,.png,.gif,.pdf,.docx,.xml,.xlsx,.csv,.doc,.xls,.ppt,.pptx,.pub',
                              addRemoveLinks: true,
                              init: function() {
                                  dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

                                  // for Dropzone to process the queue (instead of default form behavior):
                                  document.getElementById("submit-all").addEventListener("click", function(e) {
                                      // Make sure that the form isn't actually being sent.
                                      e.preventDefault();
                                      e.stopPropagation();
                                      // dzClosure.processQueue();

                                         if($("#zoney").valid()){
                                          

                                            $(this).prop("disabled", true);
                                            // add spinner to button
                                            $(this).html(
                                              `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...`
                                            );

                                        }
                                        else
                                        {
                                              return false;
                                               
                                        }

                                       if (dzClosure.files.length) {
                                            dzClosure.processQueue(); // upload files and submit the form
                                        } else {
                                            $('#zoney').submit(); // just submit the form
                                        }



                                      
    
                                     // 

                                  });

                                  //send all the form data along with the files:
                                  this.on("sendingmultiple", function(data, xhr, formData) {
                                      formData.append("order_title", jQuery("#order_title").val());
                                      formData.append("order_description", jQuery("#order_description").val());
                                      formData.append("g-recaptcha-response", jQuery("#g-recaptcha-response").val());
                                      formData.append("user_fname", jQuery("#user_fname").val());
                                      formData.append("affiliate", jQuery("#affiliate").val());
                                      formData.append("user_lname", jQuery("#user_lname").val());
                                      formData.append("user_phone", jQuery("#user_phone").val());
                                      formData.append("user_email", jQuery("#user_email").val());
                                      formData.append("password", jQuery("#confirm_password").val());
                                     
                                  });

                                  this.on("success", function(file, responseText) {
                                         if(responseText=='registered'){

                                          window.location.href = '<?php echo base_url('client/registered')?>';

                                       }
                                       else
                                       {
                                     
                                        window.location.href = '<?php echo base_url('client/get_technical')?>';

                                      }

                                    });
                              }
                          }
    </script>


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



    <script type="text/javascript">

      
        //validate form

         jQuery().ready(function() {

            // validate form on keyup and submit
            
            var v = jQuery("#zombie").validate({
              rules: {
                 order_title: {
                    required: true,
                    
                },
                order_format_id: {
                    required: true,
                },
                deadline:{
                   required: true, 
                },
              
              },
              
              messages: {
                    
                    order_title: {
                        required: "Order title is required",
                    },
                    order_format_id: {
                        required: "Specify your paper format",
                    },
                     deadline: {
                        required: "Specify your deadline",
                    },
                   
                },
              errorElement: "span",
              errorClass: "help-block",
            });

           

           

          });




    </script>

</body>
<!-- end body -->


</html>
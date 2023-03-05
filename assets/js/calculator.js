<script type="text/javascript">
          //prevents backdating
          $(".readonly").keydown(function(e){
              e.preventDefault();
          });

          //calculates the number of words based on pages
        
        function get_words(){

            var pages=$("#pages").val();
            var words=pages*275;
            $("#words").val(words+" words");


          }

        //gets other disciplines
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

          //gets amount                  
          function get_tols(){


                      var timezone=Intl.DateTimeFormat().resolvedOptions().timeZone;
                      $("#tz").val(timezone);
                      var pages=$("#pages").val();
                      var level=$("#level").val();
                      var deadline=$("#deadline").val();
                      var coupon=$("#coupon").val();
                      var service=$('input[name=service]:checked').val();


                        if(deadline)
                        {
                          deadline=deadline;
                        }
                        else
                        {
                           deadline="2040/7/7 11:11"
                        }
                   
                     

                      
                      

                       var deady=$(".chui").val();

                       if(deady==8)
                       {

                        deadline=eval(deadline)+eval(3);
                        console.log("Simba:"+deadline);
                       // deadline=5;

                       }
                       else
                       {
                          deadline=deadline;
                          console.log("chui:"+deadline);

                       }

                      // if(deadline==8){
                      //   get_custom();
                      // }

                      
                  
                      $.ajax({
                              url:'<?php echo base_url() ?>home/get_price',
                              type:'POST',
                              data:{ deadline:deadline, level : level,coupon : coupon,pages:pages,service:service,timezone:timezone },
                              success:function(result){

                               // console.log('pages'+pages);
                                //console.log('result'+result);
                                  
                                var tot=parseFloat(result).toFixed(2);

                                // alert(result);

                                 if(tot>0){
                                    
                                 $("#total").val((tot));
                                 $("#total").css('border','2px solid #74a125');


                                 }
                                 else
                                 {
                                   $("#total").val(8.5);
                                   ("#total").css('border','2px solid #c8c9c9');
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
    
      
       
    
      //validation plugin
           jQuery().ready(function() {

            // validate form on keyup and submit
            
            var v = jQuery("#signupform").validate({
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

          //timepicker initialization

          $('#deadline').datetimepicker({
          inline:false,
         // minDate: -0,
          validateOnBlur : true,
         
          minDateTime: true,
          });

</script>
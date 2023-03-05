<div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
          <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2022. EssayLoop All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->
    <!--start switcher-->
     <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
            </div>
            <hr/>
            <h6 class="mb-0">Theme Styles</h6>
            <hr/>
            <div class="d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input class="form-check-input" value="1" onclick="get_val()" type="radio" name="flexRadioDefault" id="lightmode" <?php if($mode_name=="light-theme"){  echo "checked"; } ?>>
                    <label class="form-check-label" for="lightmode">Light</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="3" onclick="get_val()" type="radio" name="flexRadioDefault" id="darkmode" <?php if($mode_name=="dark-theme"){  echo "checked"; } ?>>
                    <label class="form-check-label" for="darkmode">Dark</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="2" onclick="get_val()" type="radio" name="flexRadioDefault" id="semidark"  <?php if($mode_name=="semi-dark"){  echo "checked"; } ?>>
                    <label class="form-check-label" for="semidark">Semi Dark</label>
                </div>
            </div>
            <hr/>
            
            
           
            
        </div>
    </div>
  
    


    <script src="<?php echo base_url('adminassets/js/bootstrap.bundle.min.js'); ?>"></script>
    <!--plugins-->
    <script src="<?php echo base_url('adminassets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('adminassets/plugins/simplebar/js/simplebar.min.js'); ?>"></script>
    <script src="<?php echo base_url('adminassets/plugins/metismenu/js/metisMenu.min.js'); ?>"></script>
    <script src="<?php echo base_url('adminassets/plugins/perfect-scrollbar/js/perfect-scrollbar.js'); ?>"></script>
    <script src="<?php echo base_url('adminassets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js'); ?>"></script>
    <script src="<?php echo base_url('adminassets/plugins/vectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
    <script src="<?php echo base_url('adminassets/plugins/chartjs/js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('adminassets/plugins/chartjs/js/Chart.extension.js'); ?>"></script>
    <script src="<?php echo base_url('adminassets/js/index.js'); ?>"></script>

   
    <!--app JS-->
    <script src="<?php echo base_url('adminassets/js/app.js'); ?>"></script>
    <script src="<?php echo base_url('adminassets/plugins/datatable/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('adminassets/plugins/datatable/js/dataTables.bootstrap5.min.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {

               $('#example').DataTable({"order": [[ 0, "desc" ]]});

          } );
    </script>

     <script type="text/javascript">
           function get_val(){


                  
                    var mode=$('input[name=flexRadioDefault]:checked').val();
                   
                    $.ajax({
                            url:'<?php echo base_url() ?>admin/change_mode',
                            type:'POST',
                            data:{ mode:mode },
                            success:function(result){

                            


                                  
                            }

                    });
                // });
            }

    </script>





    <script type="text/javascript">
         $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });
       </script>

  



</body>



</html>
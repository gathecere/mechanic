<!doctype html>
<html lang="en">



<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="<?= base_url('adminassets/plugins/simplebar/css/simplebar.css'); ?>" rel="stylesheet" />
  <link href="<?= base_url('adminassets/plugins/perfect-scrollbar/css/perfect-scrollbar.css'); ?>" rel="stylesheet" />
  <link href="<?= base_url('adminassets/plugins/metismenu/css/metisMenu.min.css'); ?>" rel="stylesheet" />
  <!-- loader-->
  <link href="<?= base_url('adminassets/css/pace.min.css'); ?>" rel="stylesheet" />
  <script src="<?= base_url('adminassets/js/pace.min.js'); ?>"></script>
  <!-- Bootstrap CSS -->
  <link href="<?= base_url('adminassets/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('adminassets/css/bootstrap-extended.css'); ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
  <link href="<?= base_url('adminassets/css/app.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('adminassets/css/icons.css'); ?>" rel="stylesheet">
  <title>Manager</title>
</head>

<body class="bg-login">
  <!--wrapper-->
  <div class="wrapper">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
      <div class="container-fluid">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
          <div class="col mx-auto">
            <div class="mb-4 text-center">
              <img src="assets/images/logo-img.png" width="180" alt="" />
            </div>
            <div class="card">
              <div class="card-body">
                <div class="border p-4 rounded">
                  <div class="text-center">
                    <h3 class="">Sign in</h3>

                  </div>
                  <div class="d-grid">
                     <?php if(isset($message_display)){
                                 ?>
                                 <div class="alert alert-success">
                                 <?php echo $message_display; ?>
                                 </div>
                             <?php
                               } 

                              if(isset($error_message)) { ?>
                             <div class="alert alert-warning">
                                <?php echo $error_message;  ?>
                                 
                             </div>
                            <?php
                             }

                       ?>
                   
                  </div>
                    
                  <div class="form-body">
                    <form class="row g-3" action="<?php echo base_url('manager/user_login_process') ?>" method="post">
                      <div class="col-12">
                        <label for="inputEmailAddress" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="inputEmailAddress" name="manager_email" placeholder="Email Address">
                      </div>
                     
                      <div class="col-12">
                        <label for="inputChoosePassword" class="form-label">Enter Password</label>
                        <div class="input-group" id="show_hide_password">
                          <input type="password" class="form-control border-end-0" name="manager_password" id="inputChoosePassword"  placeholder="Enter Password" class="input-group-text bg-transparent"></a>
                        </div>
                      </div>
                     
                      <div class="col-12">
                        <div class="d-grid">
                          <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end row-->
      </div>
    </div>
  </div>
  <!--end wrapper-->
  <!-- Bootstrap JS -->
  <script src="<?= base_url('adminassets/js/bootstrap.bundle.min.js'); ?>"></script>
  <!--plugins-->
  <script src="<?= base_url('adminassets/js/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('adminassets/plugins/simplebar/js/simplebar.min.js'); ?>"></script>
  <script src="<?= base_url('adminassets/plugins/metismenu/js/metisMenu.min.js'); ?>"></script>
  <script src="<?= base_url('adminassets/plugins/perfect-scrollbar/js/perfect-scrollbar.js'); ?>"></script>
  <!--Password show & hide js -->
 
  <!--app JS-->
  <script src="<?= base_url('adminassets/js/app.js'); ?>"></script>
</body>



</html>
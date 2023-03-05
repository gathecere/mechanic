<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />

    <link href="<?php echo base_url('adminassets/plugins/vectormap/jquery-jvectormap-2.0.2.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('adminassets/plugins/simplebar/css/simplebar.css" rel="stylesheet'); ?>" />
    <link href="<?php echo base_url('adminassets/plugins/perfect-scrollbar/css/perfect-scrollbar.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('adminassets/plugins/metismenu/css/metisMenu.min.css'); ?>" rel="stylesheet" />

    <link href="<?php echo base_url('adminassets/plugins/datatable/css/dataTables.bootstrap5.min.css'); ?>" rel="stylesheet" />
    <!-- loader-->
    <link href="<?php echo base_url('adminassets/css/pace.min.css'); ?>" rel="stylesheet" />
    <script src="<?php echo base_url('adminassets/js/pace.min.js'); ?>"></script>

    <link href="<?php echo base_url('adminassets/css/mystyle.css'); ?>" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url('adminassets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('adminassets/css/bootstrap-extended.css'); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="<?php echo base_url('adminassets/css/app.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('adminassets/css/icons.css'); ?>" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('adminassets/css/dark-theme.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('adminassets/css/semi-dark.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('adminassets/css/header-colors.css'); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--plugins-->
   
    <title>Manager</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img style="width: 60%;" src="<?= base_url('static/img/essayloopnew.png'); ?>" class="logo-icon" alt="logo icon">
                </div>
                <!-- <div>
                    <h4 class="logo-text">EssayLoop</h4>
                </div> -->
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">

                    <li>
                        <a href="<?= base_url('manager/dashboard'); ?>">
                            <div class="parent-icon"><i class="bx bx-home"></i>
                            </div>
                            <div class="menu-title">Dashboard</div>
                        </a>
                    </li>

                  
              
                   
                
                <li class="menu-label">ORDERS</li>
               
                        <li> 
                            <a href="<?php echo base_url('manager/pending')?>"><i class="bx bx-loader"></i>In Progress
                                &nbsp;&nbsp;&nbsp;<span class="badge bg-success" style="float: right;"><?php if(isset($pending_count)){ echo $pending_count;  } else { echo "0"; } ?></span>
                            </a>
                        </li>
                        <li> 
                            <a href="<?php echo base_url('manager/revision')?>"><i class="bx bx-undo"></i>Revision
                                &nbsp;&nbsp;&nbsp;<span class="badge bg-success" style="float: right;"><?php if(isset($revision_count)){ echo $revision_count;  } else { echo "0"; } ?></span>
                            </a>

                        </li>
                        <li> 
                            <a href="<?php echo base_url('manager/complete')?>"><i class="bx bx-check"></i>Completed
                               &nbsp;&nbsp;&nbsp;<span class="badge bg-success" style="float: right;"><?php if(isset($completed_count)){ echo $completed_count;  } else { echo "0"; } ?></span>
                            </a>
                        </li>
                      
                        <li> 
                            <a href="<?php echo base_url('manager/cancelled_orders')?>"><i class="bx bx-x"></i>Cancelled Orders
                            &nbsp;&nbsp;&nbsp;<span class="badge bg-success" style="float: right;"><?php if(isset($cancelled_orders_count)){ echo $cancelled_orders_count;  } else { echo "0"; } ?></span>
                            </a>
                        </li>
                        
                    
               

                                         
                                </ul>
                            </li>
              
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                   
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">

                       
                          
                         
                          
                           
                           
                           
                            <li class="nav-item dropdown dropdown-large">
                             
                            </li>

                        </ul>
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           <i class="bx bx-user"></i>
                            <div class="user-info ps-3">
                                <p class="user-name mb-0"><?php if(isset($user_fname)){  echo $user_fname; } ?></p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            
                           
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li><a class="dropdown-item" href="<?php  echo base_url('manager/logout');                                          
                                        ?>"><i class='bx bx-log-out-circle'></i><span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

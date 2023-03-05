<!doctype html>
<html lang="en" class="<?php if(!empty($mode_name)){ echo $mode_name; } else { echo 'light-theme';} ?>">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="<?php echo base_url('adminassets/plugins/vectormap/jquery-jvectormap-2.0.2.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('adminassets/plugins/simplebar/css/simplebar.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('adminassets/plugins/perfect-scrollbar/css/perfect-scrollbar.css'); ?>" rel="stylesheet" />

    <link href="<?php echo base_url('assets/css/dropzone.min.css'); ?>" rel="stylesheet" />

    <link href="<?php echo base_url('adminassets/plugins/select2/css/select2.min.css'); ?>" rel="stylesheet" />

    <link href="<?php echo base_url('adminassets/plugins/metismenu/css/metisMenu.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('adminassets/plugins/datatable/css/dataTables.bootstrap5.min.css'); ?>" rel="stylesheet" />

    <!-- loader-->
    <link href="<?php echo base_url('adminassets/css/pace.min.css'); ?>" rel="stylesheet" />
    
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url('adminassets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('adminassets/css/mystyle.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('adminassets/css/bootstrap-extended.css'); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="<?php echo base_url('adminassets/css/app.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('adminassets/css/icons.css'); ?>" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('adminassets/css/dark-theme.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('adminassets/css/semi-dark.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('adminassets/css/header-colors.css'); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" integrity="sha512-f0tzWhCwVFS3WeYaofoLWkTP62ObhewQ1EZn65oSYDZUg1+CyywGKkWzm8BxaJj5HGKI72PnMH9jYyIFz+GH7g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin</title>
</head>

<body onload="get_tols()">
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
               
                <div>
                    <h4 class="logo-text">Admin</h4>
                </div> 
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">

                  
               
                <li>
                    <a href="<?= base_url('admin/index'); ?>">
                      
                        <div class="menu-title">Repairs</div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/stops'); ?>">
                      
                        <div class="menu-title">Stops</div>
                    </a>
                </li>
                 <li>
                    <a href="<?= base_url('admin/inventory'); ?>">
                      
                        <div class="menu-title">Inventory</div>
                    </a>
                </li>

                <li class="menu-label">Reports</li>
                  <li>
                    <a href="<?= base_url('admin/stop_performance'); ?>">
                      
                        <div class="menu-title">Stop Performance</div>
                    </a>
                </li>
                 <li>
                    <a href="<?= base_url('admin/technical_performance'); ?>">
                      
                        <div class="menu-title">Technical Performance</div>
                    </a>
                </li>
                 <li>
                    <a href="<?= base_url('admin/stock_report'); ?>">
                      
                        <div class="menu-title">Stock Report</div>
                    </a>
                </li>
               
                
                
              
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                
            </div>
        </header>

<?php  ?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/admin_assets/images/favmatenrou.png'); ?>">
    <title>Halaman <?php echo $data['judul']; ?></title>
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/admin_assets/css/float-chart.css'); ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/admin_assets/css/style.min.css'); ?>" rel="stylesheet">
</head>

<body>
    
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
     -->
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
					<a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-8">
                            <img src="<?= base_url('assets/admin_assets/images/matenrou-icon.png'); ?>" alt="homepage" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="<?= base_url('assets/admin_assets/images/akasuna-adm.png'); ?>" alt="homepage" class="light-logo" />
                        </span>
                    </a>
                   
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
					
                        <li class="nav-item"> <a class="nav-link waves-effect waves-dark sidebar-link" href="<?= base_url('application/views/user/index'); ?>"><i class="mdi mdi-monitor"></i><span class="hide-menu"> Halaman User </span></a></li>
                    </ul>
                        
                </div>
            </nav>
        </header>
        

        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                    	<!-- akun -->
                        <li class="sidebar-item"><img class="rounded-circle hide-menu" style="width: 150px;height: 150px;margin-left: 30px" src="<?= base_url('assets/admin_assets/images/users/doppo1.jpg'); ?>"><a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-circle"></i><span class="hide-menu"> Kannonzaka Doppo </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?= base_url('application/views/admin/sidebar/akun'); ?>" class="sidebar-link"><i class="mdi mdi-settings"></i><span class="hide-menu"> Akun </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('application/views/admin/sidebar/logout'); ?>" class="sidebar-link"><i class="mdi mdi-power"></i><span class="hide-menu"> Logout </span></a></li>
                            </ul>
                        </li>

                        <hr style="line-height: 20px;background-color: white">

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('application/views/'); ?>admin/sidebar/" aria-expanded="false"><i class="mdi mdi-speedometer"></i><span class="hide-menu"> Dashboard </span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('application/views/'); ?>admin/sidebar/pelanggan" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu"> Pelanggan </span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Transaksi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?= base_url('application/views/'); ?>admin/sidebar/selesai" class="sidebar-link"><i class="mdi mdi-check"></i><span class="hide-menu"> Selesai </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('application/views/'); ?>admin/sidebar/proses" class="sidebar-link"><i class="mdi mdi-truck"></i><span class="hide-menu"> Dalam Proses </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('application/views/'); ?>admin/sidebar/barang" aria-expanded="false"><i class="mdi mdi-cart"></i><span class="hide-menu"> Barang </span></a></li>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">
            
             <div class="page-breadcrumb">
                
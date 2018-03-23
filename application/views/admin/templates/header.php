<!DOCTYPE html>
<html lang="en">
<head>
    <title>Success Valley</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="http://html.phoenixcoded.net/mega-able/files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->     
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/files/assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <!--<link rel="stylesheet" type="text/css" href="<?php //echo base_url();?>assets/files/assets/icon/font-awesome/css/font-awesome.min.css">-->
    <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/files/assets/pages/j-pro/css/demo.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/files/assets/pages/j-pro/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/files/assets/pages/j-pro/css/j-pro-modern.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/files/assets/css/jquery.mCustomScrollbar.css">
      <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
      <!-- Date-time picker css -->
     <!--  <link rel="stylesheet" type="text/css" href="<?php //echo base_url();?>assets/files/assets/pages/advance-elements/css/bootstrap-datetimepicker.css"> -->
      <!-- Date-range picker css  -->
     <!--  <link rel="stylesheet" type="text/css" href="<?php //echo base_url();?>assets/files/bower_components/bootstrap-daterangepicker/css/daterangepicker.css" /> -->
      <!-- Date-Dropper css -->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/files/bower_components/datedropper/css/datedropper.min.css" /> 
      <!-- Select 2 css -->
     <link rel="stylesheet" href="<?php echo base_url();?>assets/files/bower_components/select2/css/select2.min.css" />
    
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/files/bower_components/multiselect/css/multi-select.css" />
    <link href="<?php echo base_url();?>assets/css/bootstrap-timepicker.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/bootstrap-switch.css" rel="stylesheet" />  
</head>
<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
              <!----header start------->
           <!-- <?php //require_once('includes/header.php');?> -->
            <!--header ending-->
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                  <!--start left sidebar-->
                  <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="<?php echo base_url();?>assets/files/assets/images/moinu.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details">Dr:Moinu</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="footer-email" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                    </div>
                                </form>
                            </div>
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="index.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Default</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="dashboard-ecommerce.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Ecommerce</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="dashboard-crm.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">CRM</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dashboard-analytics.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Analytics</span>
                                                <span class="pcoded-badge label label-info ">NEW</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dashboard-project.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Project</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                 <li class="">
                                    <a href="<?php echo base_url();?>admin/home/about" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                        <span class="pcoded-mtext">About</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="<?php echo base_url();?>admin/home/slider" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                        <span class="pcoded-mtext">Slider</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                   <li class="">
                                    <a href="<?php echo base_url();?>admin/home/category" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                        <span class="pcoded-mtext">Event Category</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                     <li class="">
                                    <a href="<?php echo base_url();?>admin/home/events" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                        <span class="pcoded-mtext">Events</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                     <li class="">
                                    <a href="<?php echo base_url();?>admin/home/blog" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                        <span class="pcoded-mtext">Blogs</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                    <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Testimonials</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="<?php echo base_url();?>admin/home/testimonial" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Text Testimonials</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo base_url();?>admin/home/vdo_testimonial" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Video Testimonials</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                
                       
                                    </ul>
                                                     <li class="">
                                    <a href="<?php echo base_url();?>admin/home/faq" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                        <span class="pcoded-mtext">Faq</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                    <li class="">
                                   <a href="<?php echo base_url();?>admin/home/instructor_profile" class="waves-effect waves-dark">
                                       <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                       <span class="pcoded-mtext">Instructor Profile</span>
                                       <span class="pcoded-mcaret"></span>
                                   </a>
                               </li>
                                <li class="">
                                   <a href="<?php echo base_url();?>admin/home/package" class="waves-effect waves-dark">
                                       <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                       <span class="pcoded-mtext">Package</span>
                                       <span class="pcoded-mcaret"></span>
                                   </a>
                               </li>
                               <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Manage course</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="<?php echo base_url();?>admin/home/course" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Course</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo base_url();?>admin/home/course_module" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Add Module</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                
                       
                                    </ul>
                                <!--<li class="">
                                   <a href="<?php echo base_url();?>admin/home/course" class="waves-effect waves-dark">
                                       <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                       <span class="pcoded-mtext">Course</span>
                                       <span class="pcoded-mcaret"></span>
                                   </a>
                               </li>-->
                                             <li class="">
                                    <a href="<?php echo base_url();?>admin/home/enquiry" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                        <span class="pcoded-mtext">Enquiry</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                </li>
                            </ul>
                      
            
                   
                 
                        </div>
                    </nav>
                    <!---left side bar---->
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Course Module</h5>
                                            <p class="m-b-0" style="opacity:0">Lorem Ipsum is simply dummy text of the printing</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!--<ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Ready To Use</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Job Application Form</a>
                                            </li>
                                        </ul>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
<!--         <title>Startup HTML-5 Template </title> -->
       
		

		
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href=" <?php bloginfo('template_directory'); ?>/assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href=" <?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href=" <?php bloginfo('template_directory'); ?>/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href=" <?php bloginfo('template_directory'); ?>/assets/css/slicknav.css">
            <link rel="stylesheet" href=" <?php bloginfo('template_directory'); ?>/assets/css/flaticon.css">
            <link rel="stylesheet" href=" <?php bloginfo('template_directory'); ?>/assets/css/animate.min.css">
            <link rel="stylesheet" href=" <?php bloginfo('template_directory'); ?>/assets/css/magnific-popup.css">
            <link rel="stylesheet" href=" <?php bloginfo('template_directory'); ?>/assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href=" <?php bloginfo('template_directory'); ?>/assets/css/themify-icons.css">
            <link rel="stylesheet" href=" <?php bloginfo('template_directory'); ?>/assets/css/slick.css">
            <link rel="stylesheet" href=" <?php bloginfo('template_directory'); ?>/assets/css/nice-select.css">
            <link rel="stylesheet" href=" <?php bloginfo('template_directory'); ?>/assets/css/style.css">

            <?php wp_head(); ?>
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src=" <?php bloginfo('template_directory'); ?>/assets/img/logo/loder.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header_area header-transparent">
            <div class="main-header">
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                  <a href="<?= site_url(''); ?>"><img src=" <?php bloginfo('template_directory'); ?>/assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="<?= site_url(''); ?>">Home</a></li>
                                            <li><a href="<?= site_url('/about/'); ?>">About</a></li>
                                            <li><a href="<?= site_url('/services/'); ?>">Services</a></li>
                                            <li><a href="<?= site_url('/work/'); ?>">Works</a></li>
                                            <li><a href="<?= site_url('/blog/'); ?>">Blogs</a>
                                                
                                            </li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="<?= site_url('/contact/'); ?>">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>             
                            <div class="col-xl-2 col-lg-3 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="#" class="btn header-btn">Contact Now</a>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
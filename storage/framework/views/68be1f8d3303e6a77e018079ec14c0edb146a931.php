<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Emerged Visa Consultancy offers VISA Services">
    <title><?php echo e(config('app.name')); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/emerged/logo.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/swiper.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/fontawesome-5.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/unicons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <style type="text/css">
        .footer-subtitle {
            color: var(--color-primary-3);
            font-weight: 700;
            font-size: 1.5rem;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            margin-bottom: 0px;
        }

        .possibilities-and-beyond {
            height: 80%;
        }

        .colored-title {
            color: var(--color-primary-3);
            font-weight: 700;
            font-size: 1.5rem;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            margin-bottom: 0px;
        }

        .jcd-img-fluid {
            max-height: 310px;
        }

        .jcd-img-fluid img {
            transition: var(--transition);
        }

        .jcd-img-fluid img:hover {
            transform: scale(1.1) translateY(-10px);
        }
    </style>
</head>

<body class="home-yellow onepage three">

    <header class="header-three header--sticky">
        <div class="container">
            <div class="row header-top-three">
                <div class="col-lg-5">
                    <p class="top-left">Become one of the students abroad? <a href="<?php echo e(url('contact_us')); ?>">Contact Us <i class="far fa-arrow-right"></i></a></p>
                </div>
                <div class="col-lg-7 right-h-three">
                    <div class="header-top-right">
                        <div class="single-right email">
                            <i class="fas fa-envelope"></i>
                            <a href="#">official@emergedconsultancy.com</a>
                        </div>
                        <div class="single-right call">
                            <i class="far fa-phone-volume"></i>
                            <span>Hotline:</span>
                            <a href="#">(+63) 977 093 0417</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row main-header main-header-three">
                <div class="col-lg-2 col-md-4 col-sm-5 col-5">
                    <a class="jcd-header_logo" href="<?php echo e(url('home')); ?>" class="thumbnail-logo">
                        <img src="<?php echo e(asset('assets/images/emerged/logo2.png')); ?>" alt="Emerged Visa Consultancy">
                    </a>
                </div>
                <div class="col-lg-9 d-none d-xl-block">
                    <div class="text-center d-flex justify-content-center">
                        <nav class="nav-main mainmenu-nav d-none d-xl-block">
                            <ul class="mainmenu">
                                <li class="has-droupdown">
                                    <a class="nav-link" href="<?php echo e(url('home')); ?>">Home</a>
                                    <ul class="submenu">
                                        <li><a href="<?php echo e((Request::segment(1) =='home') ? '#updates' : url('home').'#updates'); ?>">Our Latest Updates</a></li>
                                        <li><a href="<?php echo e((Request::segment(1) =='home') ? '#services' : url('home').'#services'); ?>">Our Services</a></li>
                                        <li><a href="<?php echo e((Request::segment(1) =='home') ? '#testimonials' : url('home').'#testimonials'); ?>">Testimonials</a></li>
                                    </ul>
                                </li>
                                <li class="has-droupdown">
                                    <a class="nav-link" href="<?php echo e(url('about_us')); ?>">About Us</a>
                                    <ul class="submenu menu-link3">
                                        <li><a href="<?php echo e((Request::segment(1) =='about_us') ? '#directors_message' : url('about_us').'#directors_message'); ?>">Directors Message</a></li>
                                        <li><a class="sub-menu-link" href="<?php echo e((Request::segment(1) =='about_us') ? '#our_organization' : url('about_us').'#our_organization'); ?>">Our Organization</a></li>
                                        <li><a class="sub-menu-link" href="<?php echo e((Request::segment(1) =='about_us') ? '#my_story' : url('about_us').'#my_story'); ?>">My Story, Our Story</a></li>
                                        <li><a class="sub-menu-link" href="<?php echo e((Request::segment(1) =='about_us') ? '#our_team' : url('about_us').'#our_team'); ?>">Meet The Team</a></li>
                                    </ul>
                                </li>
                                <li class="has-droupdown">
                                    <a class="nav-link" href="<?php echo e(url('services')); ?>">Services</a>
                                    <ul class="submenu menu-link3">
                                        <li><a class="sub-menu-link" href="<?php echo e((Request::segment(1) =='services') ? '#america' : url('services').'#america'); ?>">America</a></li>
                                        <li><a href="<?php echo e((Request::segment(1) =='services') ? '#australia' : url('services').'#australia'); ?>">Australia</a></li>
                                        <li><a class="sub-menu-link" href="<?php echo e((Request::segment(1) =='services') ? '#canada' : url('services').'#canada'); ?>">Canada</a></li>
                                    </ul>
                                </li>
                                <li class="has-droupdown">
                                    <a class="nav-link" href="<?php echo e(url('partners')); ?>">Partners</a>
                                    <ul class="submenu menu-link3">
                                        <li><a class="sub-menu-link" href="<?php echo e((Request::segment(1) =='partners') ? '#affiliates' : url('partners').'#affiliates'); ?>">Affiliates</a></li>
                                        <li><a class="sub-menu-link" href="<?php echo e((Request::segment(1) =='partners') ? '#sub-agency' : url('partners').'#sub-agency'); ?>">Sub-Agency</a></li>
                                        <li><a class="sub-menu-link" href="<?php echo e((Request::segment(1) =='partners') ? '#industry' : url('partners').'#industry'); ?>">Industry</a></li>
                                    </ul>
                                </li>
                                <li class="has-droupdown">
                                    <a class="nav-link" href="<?php echo e(url('developments')); ?>">Developments</a>
                                    <ul class="submenu menu-link3">
                                        <li><a href="<?php echo e((Request::segment(1) =='developments') ? '#campaigns' : url('developments').'#campaigns'); ?>">Campaigns</a></li>
                                        <li><a class="sub-menu-link" href="<?php echo e((Request::segment(1) =='developments') ? '#stakeholders' : url('developments').'#stakeholders'); ?>">Stakeholders Collaboration</a></li>
                                        <li><a class="sub-menu-link" href="<?php echo e((Request::segment(1) =='developments') ? '#students' : url('developments').'#students'); ?>">Student's On-Shore Activities</a></li>
                                    </ul>
                                </li>
                                <li><a class="nav-item" href="<?php echo e(url('contact_us')); ?>">Contact Us</a></li>
                                <li><a class="nav-item" href="https://portal.mara.gov.au/search-the-register-of-migration-agents/">MARA</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-1 col-sm-7 col-7">
                    <div class="right justify-content-end">
                        <button id="menu-btn" class="menu rts-btn btn-primary-3-menu ml--20">
                            <img class="menu-dark" src="<?php echo e(asset('assets/images/icon/menu.png')); ?>" alt="Menu-icon">
                            <img class="menu-light" src="<?php echo e(asset('assets/images/icon/menu-light.png')); ?>" alt="Menu-icon">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header><?php /**PATH /Users/gvtech-jaycee/JCD/Emerged/website/resources/views/layout/header.blade.php ENDPATH**/ ?>
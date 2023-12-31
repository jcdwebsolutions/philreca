<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Philreca">
    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/philreca/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome-5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/unicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jcd.css') }}">
</head>

<body class="home-yellow onepage three">

    <header class="header--sticky header-one ">
        <div class="header-top header-top-one bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-xl-block d-none">
                        <div class="left">
                            <div class="mail">
                                <a href="mailto:core@philreca.org"><i class="fal fa-envelope"></i> core@philreca.org</a>
                            </div>
                            <div class="working-time">
                                <p><i class="fal fa-clock"></i> Working: 8.00am - 5.00pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-xl-block d-none">
                        <div class="right">
                            <ul class="top-nav">
                                <li><a href="#">Contact Nos.: 8967-1580/0917-850-6830/0939-905-2206</a></li>
                            </ul>
                            <ul class="social-wrapper-one">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="mr--0" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main-one bg-white">
            <div class="container" style="width:100%;">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                        <div class="thumbnail">
                            <a href="{{ url('home') }}">
                                <img src="assets/images/philreca/logo.png" alt="philreca logo">
                            </a>
                        </div>
                    </div>
                    <div class=" col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                        <div class="main-header">
                            <nav class="nav-main mainmenu-nav d-none d-xl-block">
                                <ul class="mainmenu">
                                    <li><a class="" href="#">Home</a></li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#">About Us</a>
                                        <ul class="submenu menu-link3">
                                            <li><a class="" href="#">What is Philreca?</a></li>
                                            <li><a href="#">Our Team</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#">Electric Cooperatives</a>
                                        <ul class="submenu menu-link">
                                            <li class="menu-item">
                                                <a class="tag" href="#">Luzon</a>
                                                <ul>
                                                    <li><a href="#">Reca 1</a></li>
                                                    <li><a href="#">FECOREC </a></li>
                                                    <li><a href="#">NELECA</a></li>
                                                    <li><a href="#">CLECA</a></li>
                                                    <li><a href="#">ASTEC IV-A</a></li>
                                                    <li><a href="#">ASTEC IV-B</a></li>
                                                    <li><a href="#">BECA</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a class="tag" href="#">Visayas</a>
                                                <ul>
                                                    <li><a href="#">ECAR 6</a></li>
                                                    <li><a href="#">CEVECA</a></li>
                                                    <li><a href="#">FRECOR 8</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a class="tag" href="#">Mindanao</a>
                                                <ul>
                                                    <li><a href="#">RENECA</a></li>
                                                    <li><a href="#">NORMECA</a></li>
                                                    <li><a href="#">SEMECA</a></li>
                                                    <li><a href="#">CEMRECA</a></li>
                                                    <li><a href="#">ABEC</a></li>
                                                    <li><a href="#">CRECA</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#">Allied Organization</a>
                                        <ul class="submenu">
                                            <li><a href="#">AIEC</a></li>
                                            <li><a href="#">AMAPHI</a></li>
                                            <li><a href="#">AMRECO</a></li>
                                            <li><a href="#">AMRECO PSAGCOR</a></li>
                                            <li><a href="#">AVER</a></li>
                                            <li><a href="#">CLECA FLAG</a></li>
                                            <li><a href="#">ECCOWPA</a></li>
                                            <li><a href="#">FIMAP</a></li>
                                            <li><a href="#">HRECA</a></li>
                                            <li><a href="#">LEXICON</a></li>
                                            <li><a href="#">LOGICT</a></li>
                                            <li><a href="#">NAGMEC</a></li>
                                            <li><a href="#">OECNF</a></li>
                                            <li><a href="#">PECACORP</a></li>
                                            <li><a href="#">PECARES</a></li>
                                            <li><a href="#">PECASEO</a></li>
                                            <li><a href="#">PHABDREC</a></li>
                                            <li><a href="#">PHILAECIA</a></li>
                                            <li><a href="#">PHILAIM</a></li>
                                            <li><a href="#">PHILATMEC</a></li>
                                            <li><a href="#">PHILFECO</a></li>
                                            <li><a href="#">ULAT</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#">Issuances</a>
                                        <ul class="submenu menu-link3">
                                            <li><a href="#">Advisories</a></li>
                                            <li><a href="#">Communications</a></li>
                                            <li><a href="#">Philreca Calendar</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#">Resource Center</a>
                                        <ul class="submenu menu-link3">
                                            <li><a href="#">Position Paper</a></li>
                                            <li><a href="#">Data & Statistics</a></li>
                                            <li><a href="#">Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#">Publications</a>
                                        <ul class="submenu menu-link3">
                                            <li><a href="#">Press Release & Media Release</a></li>
                                            <li><a href="#">Speech and Messages</a></li>
                                            <li><a href="#">Dagitab Newsletter</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#">Events</a>
                                        <ul class="submenu menu-link3">
                                            <li><a href="#">Trainings</a></li>
                                            <li><a href="#">PHILRECA AGMM</a></li>
                                        </ul>
                                    </li>
                                    <li ><a href="#">News and Updates
                                </ul>
                            </nav>
                            <!-- <div class="button-area">
                                <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20 ml_sm--5">
                                    <img class="menu-dark" src="assets/images/icon/menu.png" alt="Menu-icon">
                                    <img class="menu-light" src="assets/images/icon/menu-light.png" alt="Menu-icon">
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header area -->
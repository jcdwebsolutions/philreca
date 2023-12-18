<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="rts-sidebar-menu-desktop">
        <a class="logo-1" href="{{url('home')}}"><img class="logo" src="{{asset('assets/images/philreca/logo.png')}}" alt="philreca"></a>
        <a class="logo-2" href="{{url('home')}}l"><img class="logo" src="{{asset('assets/images/philreca/logo.png')}}" alt="philreca"></a>
        <a class="logo-3" href="{{url('home')}}"><img class="logo" src="{{asset('assets/images/philreca/logo.png')}}" alt="philreca"></a>
        <a class="logo-4" href="{{url('home')}}"><img class="logo" src="{{asset('assets/images/philreca/logo.png')}}" alt="philreca"></a>
        <div class="body d-none d-xl-block">
            <p class="disc jcd-primary-color">
                "United We Stand, We Stand United"
            </p>
            <div class="get-in-touch">
                <!-- title -->
                <div class="h6 title">Get In Touch</div>
                <!-- title End -->
                <div class="wrapper">
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="#">8967-1580 / 0917-850-6830 / 0939-905-2206</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-envelope"></i>
                        <a href="#">core@philreca.org</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-globe"></i>
                        <a href="#">www.philreca.org</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="#">2nd Floor, PNB Building, No. 92 West Avenue, Quezon City, Philippines</a>
                    </div>
                    <!-- single ENd -->
                </div>
                <div class="social-wrapper-two menu">
                    <a href="https://www.facebook.com/PHILRECA.INC" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                </div>
            </div>
        </div>

        <div class="body-mobile d-block d-xl-none">
            <nav class="nav-main mainmenu-nav">
                <ul class="mainmenu">
                    <li><a class="" href="{{url('home')}}">Home</a></li>
                    <li class="has-droupdown">
                        <a class="nav-link" href="{{ url('about_us'); }}">About Us</a>
                        <ul class="submenu menu-link3">
                            <li><a class="" href="{{ (Request::segment(1) =='about_us') ? '#what_is_philreca' : url('about_us').'#what_is_philreca' }}">What is PHILRECA?</a></li>
                            <li><a href="{{ (Request::segment(1) =='about_us') ? '#our_team' : url('about_us').'#our_team' }}">Our Team</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a class="nav-link" href="{{ url('electric_cooperatives'); }}">Electric Cooperatives</a>
                        <ul class="submenu menu-link">
                            <li class="menu-item jcd-color-white">
                                <a class="tag" href="{{ (Request::segment(1) =='electric_cooperatives') ? '#luzon' : url('electric_cooperatives').'#luzon' }}">Luzon</a>
                                <ul>
                                    <li><a href="{{ (Request::segment(1) =='electric_cooperatives') ? '#luzon' : url('electric_cooperatives').'#luzon' }}">RECA 1</a></li>
                                    <li><a href="{{ (Request::segment(1) =='electric_cooperatives') ? '#luzon' : url('electric_cooperatives').'#luzon' }}">FECOREC </a></li>
                                    <li><a href="{{ (Request::segment(1) =='electric_cooperatives') ? '#luzon' : url('electric_cooperatives').'#luzon' }}">NELECA</a></li>
                                    <li><a href="{{ (Request::segment(1) =='electric_cooperatives') ? '#luzon' : url('electric_cooperatives').'#luzon' }}">CLECA</a></li>
                                    <li><a href="{{ (Request::segment(1) =='electric_cooperatives') ? '#luzon' : url('electric_cooperatives').'#luzon' }}">ASTEC IV-A</a></li>
                                    <li><a href="{{ (Request::segment(1) =='electric_cooperatives') ? '#luzon' : url('electric_cooperatives').'#luzon' }}">ASTEC IV-B</a></li>
                                    <li><a href="{{ (Request::segment(1) =='electric_cooperatives') ? '#luzon' : url('electric_cooperatives').'#luzon' }}">BECA</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a class="tag" href="{{ (Request::segment(1) =='electric_cooperatives') ? '#visayas' : url('electric_cooperatives').'#visayas' }}">Visayas</a>
                                <ul>
                                    <li><a href="{{ (Request::segment(1) =='electric_cooperatives') ? '#visayas' : url('electric_cooperatives').'#visayas' }}">ECAR 6</a></li>
                                    <li><a href="{{ (Request::segment(1) =='electric_cooperatives') ? '#visayas' : url('electric_cooperatives').'#visayas' }}">CEVECA</a></li>
                                    <li><a href="{{ (Request::segment(1) =='electric_cooperatives') ? '#visayas' : url('electric_cooperatives').'#visayas' }}">FRECOR 8</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a class="tag" href="{{ (Request::segment(1) =='electric_cooperatives') ? '#mindanao' : url('electric_cooperatives').'#mindanao' }}">Mindanao</a>
                                <ul>
                                    <li><a href="{{ (Request::segment(1) =='electric_cooperatives') ? '#mindanao' : url('electric_cooperatives').'#mindanao' }}">RENECA</a></li>
                                    <li><a href="{{ (Request::segment(1) =='electric_cooperatives') ? '#mindanao' : url('electric_cooperatives').'#mindanao' }}">NORMECA</a></li>
                                    <li><a href="{{ (Request::segment(1) =='electric_cooperatives') ? '#mindanao' : url('electric_cooperatives').'#mindanao' }}">SEMECA</a></li>
                                    <li><a href="{{ (Request::segment(1) =='electric_cooperatives') ? '#mindanao' : url('electric_cooperatives').'#mindanao' }}">CEMRECA</a></li>
                                    <li><a href="{{ (Request::segment(1) =='electric_cooperatives') ? '#mindanao' : url('electric_cooperatives').'#mindanao' }}">ABEC</a></li>
                                    <li><a href="{{ (Request::segment(1) =='electric_cooperatives') ? '#mindanao' : url('electric_cooperatives').'#mindanao' }}">CRECA</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a class="nav-link" href="{{ url('allied_organizations'); }}">Allied Organization</a>
                        <ul class="submenu menu-link">
                            <li class="menu-item">
                                <ul>
                                    <li><a href="#">AIEC</a></li>
                                    <li><a href="#">AMAPHI</a></li>
                                    <li><a href="#">AMRECO</a></li>
                                    <li><a href="#">AMRECO PSAGCOR</a></li>
                                    <li><a href="#">AVEC</a></li>
                                    <li><a href="#">CLECA FLAG</a></li>
                                    <li><a href="#">ECCOWPA</a></li>
                                    <li><a href="#">FIMAP</a></li>
                                    <li><a href="#">HRECA</a></li>
                                    <li><a href="#">LEXICON</a></li>
                                    <li><a href="#">LOGICT</a></li>
                                </ul>
                            <li class="menu-item">
                                <ul>
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
                                    <li><a href="#">ULAP</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a class="nav-link" href="{{ url('issuances'); }}">Issuances</a>
                        <ul class="submenu menu-link3">
                            <li><a href="{{ (Request::segment(1) =='issuances') ? '#advisories' : url('issuances').'#advisories' }}">Advisories</a></li>
                            <li><a href="{{ (Request::segment(1) =='issuances') ? '#communications' : url('issuances').'#communications' }}">Communications</a></li>
                            <li><a href="#">PHILRECA Calendar</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a class="nav-link" href="{{ url('resource_center'); }}">Resource Center</a>
                        <ul class="submenu menu-link3">
                            <li><a href="#">Position Paper</a></li>
                            <li><a href="#">Data & Statistics</a></li>
                            <li><a href="#">Research</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a class="nav-link" href="{{ url('publications'); }}">Publications</a>
                        <ul class="submenu menu-link3">
                            <li><a href="{{ (Request::segment(1) =='publications') ? '#press_release' : url('publications').'#press_release' }}">Press Release & Media Release</a></li>
                            <li><a href="{{ (Request::segment(1) =='publications') ? '#speech' : url('publications').'#speech' }}">Speech and Messages</a></li>
                            <li><a href="{{ (Request::segment(1) =='publications') ? '#dagitab' : url('publications').'#dagitab' }}">Dagitab Newsletter</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a class="nav-link" href="{{ url('events'); }}">News and Updates</a>
                        <ul class="submenu menu-link3">
                            <li><a href="{{ url('news_and_updates'); }}">News and Updates
                            <li><a href="#">Trainings</a></li>
                            <li><a href="#">PHILRECA AGMM</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- inner menu area desktop End -->
</div>
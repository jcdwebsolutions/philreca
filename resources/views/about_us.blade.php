@extends('layout.layout')

@section('content')

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">About Us</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{url('home')}}">Home</a>
                    <span> / </span>
                    <a href="{{url('about_us')}}" class="active">About Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

<div class="rts-about-area rts-section-gap jcd-bg" id="what_is_philreca">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- about left -->
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                <div class="rts-title-area">
                    <h2 class="title jcd-text-uppercase">What is PHILRECA?</h2>
                </div>
                <div class="about-inner">
                    <p class="disc jcd-text-justify">
                        The Philippine Rural Electric Cooperatives Association, Inc. or PHILRECA is the national organization of all the Electric Cooperatives and EC Allied Organizations in the country. For over four decades, we have advocated to empower the Electric Cooperatives as they continue their pursuit towards rural electrification while ensuring the quality, reliability, and global competitiveness of the Electric Cooperatives.
                    </p>
                    <p class="disc jcd-text-justify">
                        The Association is committed to providing support and assistance to its members by spearheading policy developments on the EC sector, representation to the government and other energy government agencies, facilitating capacity-building trainings, webinars, and conventions, and strengthening relations with energy stakeholders.
                    </p>
                    <p class="disc jcd-text-justify">
                        With the new industry developments and challenges, PHILRECA endeavors to continue protecting the rights and interests of its member-Electric Cooperatives, their member-consumer-owners, and EC Allied Organizations.
                    </p>



                </div>
            </div>
            <!-- about right -->

            <!-- about-right Start-->
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-md-1 order-sm-1 order-1">
                <div class="about-image-v-inner">
                    <div class="image-area">
                        <img src="assets/images/philreca/home/philreca.gif" alt="philreca">
                    </div>
                </div>
            </div>
            <!-- about-right end -->
        </div>
    </div>
</div>

<div class="rts-section-gap rts-faq-bg jcd-bg-dark">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="faq-two-inner">
                    <div class="title-area-faq">
                        <h2 class="title">Our History
                            <br>
                            <span class="sub">THE NEED TO FEDERATE (1979-1990)</span>

                        </h2>
                    </div>
                </div>
                <div class="about-inner">
                    <p class="disc jcd-text-justify jcd-color-white">
                        With the beginning of the Rural Electrification Program in the late 1960s and the need for an organization that can extend the necessary assistance to the Electric Cooperatives similar to that of the National Rural Electric Cooperative Association (NRECA) in the U.S.A., the National Electrification Administration (NEA) strongly advised the cooperative leaders “to federate, face the challenges and fight for the co-ops’ survival and development as private organizations.”
                    </p>
                    <p class="disc jcd-text-justify jcd-color-white">
                        In 1979, the Federation of Electric Cooperatives of the Philippines (FECOPHIL now PHILRECA) was formally organized to serve as the representative voice of the country’s Electric Cooperatives. It was also the watchdog of the implementors of the rural electrification program and the consumer-members they serve.

                    </p>
                    <p class="disc jcd-text-justify jcd-color-white">
                        Aside from the representations made in the legislative hearings, conferences, and other functions, FECOPHIL also assisted the co-ops in their technical and institutional development. It continuously conducted training programs, seminars, and other activities consistent with its mandate of ensuring ECs’ capacity building.
                    </p>
                    <p class="disc jcd-text-justify jcd-color-white">
                        FECOPHIL’s activities were not limited to facing domestic problems. It also strengthened its ties with the NRECA, paving the way for the local co-op officials to observe the rural electrification program in the U.S.A. and to allow them to attend the NRECA annual conventions. As associate member of the Volunteers Cooperative Association (VOCA), FECOPHIL availed itself, for some time, of the free services of American consultants who helped in setting long-range programs designed to benefit the co-ops and their member-consumers.
                    </p>
                    <p class="disc jcd-text-justify jcd-color-white">
                        FECOPHIL’s presence took out most of the fire in the enemies’ continuing destabilization drive to gain control of the power industry.
                    </p>
                </div>
            </div>
            <div class="rts-service-area pb--50">
                <div class="container">
                    <div class="row g-5 service padding-controler">
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail 1979"><img src="assets/images/philreca/about_us/history/1979.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail two"><img src="assets/images/philreca/about_us/history/1981.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail three"><img src="assets/images/philreca/about_us/history/1984.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail four"><img src="assets/images/philreca/about_us/history/1988.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail five"><img src="assets/images/philreca/about_us/history/1989.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="faq-two-inner">
                    <div class="title-area-faq">
                        <h2 class="title">
                            <br>
                            <span class="sub">THE CROSS-OVER (1990-PRESENT)</span>

                        </h2>
                    </div>
                </div>
                <div class="about-inner">
                    <p class="disc jcd-text-justify jcd-color-white">
                        The year 1990 marked a significant transformation and emergence of a new image for the national organization that officially represents the Electric Cooperatives operating in the country. After eleven years of existence, FECOPHIL adopted a new corporate name and henceforth came to be known as the Philippine Rural Electric Cooperatives Association, Inc. (PHILRECA). The cross-over required a redirecting or reformatting of the thrusts and objectives of the Association as PHILRECA began the process of establishing a fresh identity.
                    </p>
                    <p class="disc jcd-text-justify jcd-color-white">
                        Motivated by its paramount concern to render developmental assistance in the form of concrete and beneficial services to its member-electric cooperatives, PHILRECA embarked on integrated programs designed to adequately respond to the varied needs and often critical demands of the ECs in their continuing effort to achieve institutional viability and optimum service efficiency. To realize this, the Association closely collaborated with the NEA, the ECs’ external funding source which exercised supervision and control over their operations. On August 7, 1990, a Memorandum of Cooperation was reached which spelled out specific programs of assistance to the ECs such as Policy Research and Promotion Program, Organization and Management Development Program, Joint Venture Program, and Information, Education and Communication Development Program.

                    </p>
                    <p class="disc jcd-text-justify jcd-color-white">
                        Among developing countries worldwide, the successful implementation of an extensive rural electrification program had been a major concern in the promotion of agriculture and the dispersal of industries that would sustain growing economies. In the Philippines, rural electrification fueled economic activities resulting to improved standards of living in the rural areas. Rural electrification also helped address the increasing energy demands of growing population. In the course of program implementation, various systems and technologies had been developed that enhanced existing know-how and capabilities in the management and operation of rural power distribution utilities. It was in this context that the 1992 International Convention on Rural Electrification was conceived. It was focused on the developmental aspect of rural electrification using the Philippine experience as model. Said convention was jointly conducted by PHILRECA and NEA at the Westin Philippine Plaza with the theme: “Rural Electrification in the 90s: A Catalyst for International Cooperation and Development.” A turn-out of 174 foreign delegates from 36 countries reflects the success of such activity.
                    </p>
                </div>
            </div>
            <div class="rts-service-area">
                <div class="container">
                    <div class="row g-5 service padding-controler">
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail six"><img src="assets/images/philreca/about_us/history/1991_2.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail seven"><img src="assets/images/philreca/about_us/history/1993.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail eight"><img src="assets/images/philreca/about_us/history/1994.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail nine"><img src="assets/images/philreca/about_us/history/1995.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail ten"><img src="assets/images/philreca/about_us/history/1996.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail eleven"><img src="assets/images/philreca/about_us/history/1998.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail twelve"><img src="assets/images/philreca/about_us/history/1999.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail thirteen"><img src="assets/images/philreca/about_us/history/2000.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail fourteen"><img src="assets/images/philreca/about_us/history/2001.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail fifteen"><img src="assets/images/philreca/about_us/history/2002.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail sixteen"><img src="assets/images/philreca/about_us/history/2003.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail seventeen"><img src="assets/images/philreca/about_us/history/2004.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail eighteen"><img src="assets/images/philreca/about_us/history/2005.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail nineteen"><img src="assets/images/philreca/about_us/history/2006.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail twenty"><img src="assets/images/philreca/about_us/history/2007.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail twentyone"><img src="assets/images/philreca/about_us/history/2008.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail twentytwo"><img src="assets/images/philreca/about_us/history/2009.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail twentythree"><img src="assets/images/philreca/about_us/history/2010.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail twentyfour"><img src="assets/images/philreca/about_us/history/2011.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail twentyfive"><img src="assets/images/philreca/about_us/history/2012.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail twentysix"><img src="assets/images/philreca/about_us/history/2013.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail twentyseven"><img src="assets/images/philreca/about_us/history/2014.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail twentyeight"><img src="assets/images/philreca/about_us/history/2015.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail twentynine"><img src="assets/images/philreca/about_us/history/2016.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail thirty"><img src="assets/images/philreca/about_us/history/2017.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail thirtyone"><img src="assets/images/philreca/about_us/history/2018.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail thirtytwo"><img src="assets/images/philreca/about_us/history/2019.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail thirtythree"><img src="assets/images/philreca/about_us/history/2020.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail thirtyfour"><img src="assets/images/philreca/about_us/history/2021.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail thirtyfive"><img src="assets/images/philreca/about_us/history/2022.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb_md--100">
                            <div class="service-two-inner">
                                <a href="#" class="thumbnail thirtysix"><img src="assets/images/philreca/about_us/history/2023.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6">
                <div class="thumbnail-faq-four">
                    <img src="assets/images/faq/02.png" alt="">
                </div>
            </div> -->
        </div>
    </div>
</div>

<div class="rts-about-area rts-section-gap jcd-bg" id="">
    <div class="container">
        <div class="row g-5">
            <!-- about left -->
            <div class="col-lg-8 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                <div class="rts-title-area">
                    <h2 class="title">Mision </h2>
                </div>
                <div class="about-success-wrapper">
                    <p class="disc jcd-text-justify single">
                        <i class="far fa-check"></i> To empower member-electric cooperatives and allied organizations through the advancement of policy advocacy;
                    </p>
                    <p class="disc jcd-text-justify single">
                        <i class="far fa-check"></i> To accelerate the improvement and development of each member-ECs institutional capacity;
                    </p>
                    <p class="disc jcd-text-justify single">
                        <i class="far fa-check"></i> To ensure harmonious relationship between and among electric cooperatives, allied organizations, government regulatory agencies, and other stakeholders; and
                    </p>
                    <p class="disc jcd-text-justify single">
                        <i class="far fa-check"></i> To be a leading provider of energy- and electrification-related data for public and private consumption.
                    </p>
                </div>

                <div class="rts-title-area pt--50">
                    <h2 class="title">Vision </h2>
                </div>
                <div class="about-inner">
                    <p class="disc jcd-text-justify">
                        A pro-active, dynamic, and resilient PHILRECA that is an advocate of the rural electrification program and sustainable development through united allied organizations, globally competitive Electric Cooperatives, and empowered member-consumer-owners.
                    </p>
                </div>
                <div class="rts-title-area">
                    <h2 class="title">7-point Agenda </h2>
                </div>
                <div class="about-success-wrapper">
                    <p class="disc jcd-text-justify single">
                        <i class="far fa-check"></i> Rural Electrification as Key to Sustainable Rural Development
                    </p>
                    <p class="disc jcd-text-justify single">
                        <i class="far fa-check"></i> Empowering the Member-Consumer-Owners of Electric Cooperatives
                    </p>
                    <p class="disc jcd-text-justify single">
                        <i class="far fa-check"></i> Vanguard and Defender of Electric Cooperatives’ Sustainability and Existence
                    </p>
                    <p class="disc jcd-text-justify single">
                        <i class="far fa-check"></i> Frontliners in Policy Advocacies for Rural Electrification
                    </p>
                    <p class="disc jcd-text-justify single">
                        <i class="far fa-check"></i> Institutionalize the Networking and Linkages between the EC-MCO Movement and Pertinent Government and Non-Government Organizations/Agencies
                    </p>
                    <p class="disc jcd-text-justify single">
                        <i class="far fa-check"></i> Ensure that MCOs are Properly Informed of Issues that Matter to Them
                    </p>
                    <p class="disc jcd-text-justify single">
                        <i class="far fa-check"></i> Ensure that PHILRECA will be a Powerful and a Force to Reckon as a Movement of Electric Consumers in General, and Rural Energy Consumers in Particular
                    </p>
                </div>
            </div>
            <!-- about right -->

            <!-- about-right Start-->
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                <div class="rts-single-wized Categories">
                    <div class="wized-header">
                        <h5 class="title">
                            Core Values
                        </h5>
                    </div>
                    <div class="wized-body">

                        <ul class="single-categories">
                            <li><a href="#">C - ommitment </a></li>
                        </ul>

                        <ul class="single-categories">
                            <li><a href="#">I - ntegrity</a></li>
                        </ul>

                        <ul class="single-categories">
                            <li><a href="#">R - esponsibility </a></li>
                        </ul>

                        <ul class="single-categories">
                            <li><a href="#">C - redibility </a></li>
                        </ul>

                        <ul class="single-categories">
                            <li><a href="#">U - nity</a></li>
                        </ul>
                        <ul class="single-categories">
                            <li><a href="#">I - ndustry</a></li>
                        </ul>
                        <ul class="single-categories">
                            <li><a href="#">T - ransaparency</a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <!-- about-right end -->
        </div>
    </div>
</div>

<div class="rts-team-area style-3 rts-section-gap jcd-bg-dark" id="our_team">
    <div class="container">
        <div class="row ">
            <div class="faq-two-inner">
                <div class="title-area-faq">
                    <h2 class="title">Our Team
                    </h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="team-inner-two inner">
                    <div class="thumbnail">
                        <a href="#"><img src="assets/images/philreca/about_us/ourteam/janeene_depay-colingan.jpg" alt=""></a>
                    </div>
                    <!-- Acquaintance area -->
                    <div class="inner-content">
                        <div class="header">
                            <h5 class="title">Atty. Janeene Depay-Colingan</h5>
                            <span>Executive Director/General Manager</span>
                        </div>
                    </div>
                    <!-- Acquaintance area -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="team-inner-two inner">
                    <div class="thumbnail">
                        <a href="#"><img src="assets/images/philreca/about_us/ourteam/nercie_g_corpuz.jpg" alt=""></a>
                    </div>
                    <!-- Acquaintance area -->
                    <div class="inner-content">
                        <div class="header">
                            <h5 class="title">Nercie G. Corpuz</h5>
                            <span>Administrative Associate</span>
                        </div>
                    </div>
                    <!-- Acquaintance area -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="team-inner-two inner">
                    <div class="thumbnail">
                        <a href="#"><img src="assets/images/philreca/about_us/ourteam/caren_joy_reyes.jpg" alt=""></a>
                    </div>
                    <!-- Acquaintance area -->
                    <div class="inner-content">
                        <div class="header">
                            <h5 class="title">Caren Joy B. Reyes</h5>
                            <span>Chief Finance Officer</span>
                        </div>
                    </div>
                    <!-- Acquaintance area -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="team-inner-two inner">
                    <div class="thumbnail">
                        <a href="#"><img src="assets/images/philreca/about_us/ourteam/ramsey_m_dela_vina.jpg" alt=""></a>
                    </div>
                    <!-- Acquaintance area -->
                    <div class="inner-content">
                        <div class="header">
                            <h5 class="title">Ramsey Dela Viña</h5>
                            <span>Accounting Associate</span>
                        </div>
                    </div>
                    <!-- Acquaintance area -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="team-inner-two inner">
                    <div class="thumbnail">
                        <a href="#"><img src="assets/images/philreca/about_us/ourteam/kathleen_b_cayat.jpg" alt=""></a>
                    </div>
                    <!-- Acquaintance area -->
                    <div class="inner-content">
                        <div class="header">
                            <h5 class="title">Kathleen B. Cayat</h5>
                            <span>Corporate Affairs Manager</span>
                        </div>
                    </div>
                    <!-- Acquaintance area -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="team-inner-two inner">
                    <div class="thumbnail">
                        <a href="#"><img src="assets/images/philreca/about_us/ourteam/judy_bello.png" alt=""></a>
                    </div>
                    <!-- Acquaintance area -->
                    <div class="inner-content">
                        <div class="header">
                            <h5 class="title">Judy S. Bello</h5>
                            <span>Driver/Mechanic</span>
                        </div>
                    </div>
                    <!-- Acquaintance area -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="team-inner-two inner">
                    <div class="thumbnail">
                        <a href="#"><img src="assets/images/philreca/about_us/ourteam/edgardo_s_mayor.jpg" alt=""></a>
                    </div>
                    <!-- Acquaintance area -->
                    <div class="inner-content">
                        <div class="header">
                            <h5 class="title">Edgardo S. Mayor</h5>
                            <span>General Services Officer</span>
                        </div>
                    </div>
                    <!-- Acquaintance area -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="team-inner-two inner">
                    <div class="thumbnail">
                        <a href="#"><img src="assets/images/philreca/about_us/ourteam/amor_j_castillo.jpg" alt=""></a>
                    </div>
                    <!-- Acquaintance area -->
                    <div class="inner-content">
                        <div class="header">
                            <h5 class="title">Amor Castillo</h5>
                            <span>General Services Associate</span>
                        </div>
                    </div>
                    <!-- Acquaintance area -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="team-inner-two inner">
                    <div class="thumbnail">
                        <a href="#"><img src="assets/images/philreca/about_us/ourteam/irish_marie_layas.png" alt=""></a>
                    </div>
                    <!-- Acquaintance area -->
                    <div class="inner-content">
                        <div class="header">
                            <h5 class="title">Irish Marie M. Layas</h5>
                            <span>Multimedia Artist</span>
                        </div>
                    </div>
                    <!-- Acquaintance area -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="team-inner-two inner">
                    <div class="thumbnail">
                        <a href="#"><img src="assets/images/philreca/about_us/ourteam/clarisse_r_santos.jpg" alt=""></a>
                    </div>
                    <!-- Acquaintance area -->
                    <div class="inner-content">
                        <div class="header">
                            <h5 class="title">Clarisse R. Santos</h5>
                            <span>Research & Development Manager</span>
                        </div>
                    </div>
                    <!-- Acquaintance area -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="team-inner-two inner">
                    <div class="thumbnail">
                        <a href="#"><img src="assets/images/philreca/about_us/ourteam/kenjie_p_fagyan.jpg" alt=""></a>
                    </div>
                    <!-- Acquaintance area -->
                    <div class="inner-content">
                        <div class="header">
                            <h5 class="title">Kenjie P. Fagyan</h5>
                            <span>Regulatory Compliance Officer</span>
                        </div>
                    </div>
                    <!-- Acquaintance area -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="team-inner-two inner">
                    <div class="thumbnail">
                        <a href="#"><img src="assets/images/philreca/about_us/ourteam/arlence_c_tan.jpg" alt=""></a>
                    </div>
                    <!-- Acquaintance area -->
                    <div class="inner-content">
                        <div class="header">
                            <h5 class="title">Arlene C. Tan</h5>
                            <span>NAGMEC Secretary</span>
                        </div>
                    </div>
                    <!-- Acquaintance area -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
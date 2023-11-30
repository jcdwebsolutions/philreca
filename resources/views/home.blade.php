@extends('layout.layout')

@section('content')
<div class="search-input-area">
    <div class="container">
        <div class="search-input-inner">
            <div class="input-div">
                <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                <button><i class="far fa-search"></i></button>
            </div>
        </div>
    </div>
    <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
</div>

<div id="anywhere-home">
</div>
<!-- ENd Header Area -->

<!-- banner blank space area -->
<div class="rts-banner-area rts-banner-one">
    <div class="swiper mySwiper banner-one">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div style="clear:both;height:450px;"></div>
            </div>
            <div class="swiper-slide two">
                <div style="clear:both;height:450px;"></div>
            </div>
            <div class="swiper-slide three">
                <div style="clear:both;height:450px;"></div>
            </div>
            <div class="swiper-slide four">
                <div style="clear:both;height:450px;"></div>
            </div>
            <div class="swiper-slide five">
                <div style="clear:both;height:450px;"></div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- <div class="animation-img">
        <img class="shape-img two" src="assets/images/banner/shape/02.png" alt="banner_business">
        <img class="shape-img three" src="assets/images/banner/shape/03.png" alt="banner_business">
    </div> -->
</div>
<!-- banner blank space area end -->

<!-- rts about us section start -->
<div class="rts-about-area rts-section-gap jcd-bg">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- about left -->
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                <div class="rts-title-area">
                    <h2 class="title jcd-text-uppercase">What is Philreca?</h2>
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
<!-- rts about us section end -->

<!-- rts-counter up area start -->
<div class="rts-counter-up-area rts-section-gap counter-bg">
    <div class="container">
        <div class="row">
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter">
                    <img src="assets/images/counterup/icon/01.svg" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title jcd-ec"><span class="counter animated fadeInDownBig">121</span></h2>
                        <p class="disc">Electric Cooperatives <br></p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter justify-content-center two pl--30">
                    <img src="assets/images/counterup/icon/02.svg" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title jcd-ao"><span class="counter animated fadeInDownBig">22</span></h2>
                        <p class="disc">Allied Organizations</p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter  justify-content-end four">
                    <img src="assets/images/counterup/icon/04.svg" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title jcd-mco"><span class="counter animated fadeInDownBig">13</span></h2>
                        <p class="disc">Member-Consumer-Owners</p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter justify-content-center three">
                    <img src="assets/images/counterup/icon/03.svg" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title jcd-experts"><span class="counter animated fadeInDownBig">10</span></h2>
                        <p class="disc">Our Experts <br></p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
        </div>
    </div>
</div>
<!-- rts-counter up area end -->

<!-- rts blog list area -->
<div class="rts-blog-list-area rts-section-gap jcd-bg">
    <div class="container">

        <div class="row g-5">
            <!-- rts blog post area -->
            <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <!-- Press Release -->
                <div class="row">
                    <div class="col-12">
                        <div class="title-area ">
                            <h2 class="title text-animate">Latest Press Release</h2>
                        </div>
                    </div>
                </div>
                <div class="blog-single-post-listing">
                    <div class="thumbnail">
                        <img src="assets/images/philreca/home/press_release/1.jpg" alt="Business-Blog">
                    </div>
                    <div class="blog-listing-content">
                        <div class="user-info">
                            <!-- single info -->
                            <div class="single">
                                <i class="far fa-clock"></i>
                                <span>15 Sept, 2023</span>
                            </div>
                            <!-- single infoe end -->
                        </div>
                        <a class="blog-title" href="blog-details.html">
                            <h3 class="title">PHILRECA supports bill seeking to grant lineworkers mandatory insurance coverage</h3>
                        </a>
                        <a class="rts-btn btn-primary" target="_blank" href="#">Read details</a>
                    </div>
                </div>

                <!-- Latest News -->
                <div class="row">
                    <div class="col-12">
                        <div class="title-area ">
                            <h2 class="title">Latest News</h2>
                        </div>
                    </div>
                </div>
                <!-- single post -->
                <div class="blog-single-post-listing">
                    <div class="thumbnail">
                        <img src="assets/images/blog/blog-lg-1.jpg" alt="Business-Blog">
                    </div>
                    <div class="blog-listing-content">
                        <div class="user-info">
                            <!-- single info -->
                            <div class="single">
                                <i class="far fa-clock"></i>
                                <span>04 Oct, 2023</span>
                            </div>
                            <!-- single infoe end -->
                        </div>
                        <a class="blog-title" href="blog-details.html">
                            <h3 class="title">DOE receives 25 bids for next RE auction</h3>
                        </a>
                        <a class="rts-btn btn-primary" target="_blank" href="https://business.inquirer.net/424661/doe-receives-25-bids-for-next-re-auction#ixzz8F7hhp6gd">Read details</a>
                    </div>
                </div>
                <div class="blog-single-post-listing">
                    <div class="thumbnail">
                        <img src="assets/images/blog/blog-lg-1.jpg" alt="Business-Blog">
                    </div>
                    <div class="blog-listing-content">
                        <div class="user-info">
                            <!-- single info -->
                            <div class="single">
                                <i class="far fa-clock"></i>
                                <span>04 Oct, 2023</span>
                            </div>
                            <!-- single infoe end -->
                        </div>
                        <a class="blog-title" href="blog-details.html">
                            <h3 class="title">E. Samar gov to DILG: Help address high power rates</h3>
                        </a>
                        <a class="rts-btn btn-primary" target="_blank" href="https://newsinfo.inquirer.net/1840434/e-samar-gov-to-dilg-help-address-high-power-rates#ixzz8F7hltAG4">Read details</a>
                    </div>
                </div>
                <div class="blog-single-post-listing">
                    <div class="thumbnail">
                        <img src="assets/images/blog/blog-lg-1.jpg" alt="Business-Blog">
                    </div>
                    <div class="blog-listing-content">
                        <div class="user-info">
                            <!-- single info -->
                            <div class="single">
                                <i class="far fa-clock"></i>
                                <span>04 Oct, 2023</span>
                            </div>
                            <!-- single infoe end -->
                        </div>
                        <a class="blog-title" href="blog-details.html">
                            <h3 class="title">DOE eyes 9 ports for wind energy dev’t</h3>
                        </a>
                        <a class="rts-btn btn-primary" target="_blank" href="https://business.inquirer.net/424670/doe-eyes-9-ports-for-wind-energy-devt#ixzz8F7hpQjCV">Read details</a>
                    </div>
                </div>
                <!-- single post End-->

            </div>

            <!-- rts-blog post end area -->
            <!--rts blog wized area -->
            <div class="col-xl-5 col-md-12 col-sm-12 col-12 mt_lg--60">
                <!-- Upcoming Events -->
                <div class="rts-single-wized Recent-post">
                    <div class="wized-header">
                        <h5 class="title">
                            Upcoming Events
                        </h5>
                    </div>
                    <div class="wized-body">
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="#"><img src="assets/images/blog/details/recent-post/01.png" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>13 Oct, 2023</span>
                                </div>
                                <a class="post-title" href="#">
                                    <h6 class="title">9AM -12NN – TAKE IT EASY, MGA KASAMA SA EC</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="#"><img src="assets/images/blog/details/recent-post/01.png" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>27 Oct, 2023</span>
                                </div>
                                <a class="post-title" href="#">
                                    <h6 class="title">POWER RUN! (NATIONWIDE EC-MCOs SOLIDATRITY RUN)</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="#"><img src="assets/images/blog/details/recent-post/01.png" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>Oct, 2023</span>
                                </div>
                                <a class="post-title" href="#">
                                    <h6 class="title">NATIONAL COOPERATIVE MONTH</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="#"><img src="assets/images/blog/details/recent-post/01.png" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>Oct, 2023</span>
                                </div>
                                <a class="post-title" href="#">
                                    <h6 class="title">MENTAL HEALTH AWARENESS MONTH</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                    </div>
                </div>


                <!-- Advisories -->
                <div class="rts-single-wized Recent-post">
                    <div class="wized-header">
                        <h5 class="title">
                            Latest Advisories
                        </h5>
                    </div>
                    <div class="wized-body">
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="#"><img src="assets/images/blog/details/recent-post/01.png" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>Nov, 2023</span>
                                </div>
                                <a class="post-title" href="#">
                                    <h6 class="title">NO ADVISORIES</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single wized start -->
                <div class="rts-single-wized contact">
                    <h5 class="jcd-color-white">Facebook Page Updates</h5>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPHILRECA.INC&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1038819552825368" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
                <!-- single wized End -->
            </div>
            <!-- rts- blog wized end area -->
        </div>
    </div>
</div>

<!-- start client area -->
<div class="rts-client-area ptb--100 bg-footer-one">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area blog-three text-center">
                    <h2 class="jcd-color-white">Energy Agencies</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="client-wrapper-one">
                    <a target="_blank" href="https://www.erc.gov.ph/"><img src="assets/images/philreca/home/energy_agencies/ERC.png" alt="Philreca"></a>
                    <a target="_blank" href="http://www.napocor.gov.ph/"><img src="assets/images/philreca/home/energy_agencies/NPC.png" alt="Philreca"></a>
                    <a target="_blank" href="https://www.pnoc.com.ph/"><img src="assets/images/philreca/home/energy_agencies/PNOC.png" alt="Philreca"></a>
                    <a target="_blank" href="https://www.psalm.gov.ph/"><img src="assets/images/philreca/home/energy_agencies/PSALM.jpg" alt="Philreca"></a>
                </div>
                <div class="client-wrapper-one">
                    <a target="_blank" href="https://www.doe.gov.ph/"><img src="assets/images/philreca/home/energy_agencies/DOE.png" alt="Philreca"></a>
                    <a target="_blank" href="https://www.wesm.ph/"><img src="assets/images/philreca/home/energy_agencies/WESM.png" alt="Philreca"></a>
                    <a target="_blank" href=""><img src="assets/images/philreca/home/energy_agencies/TRANSCO.png" alt="Philreca"></a>
                    <a target="_blank" href="https://www.ngcp.ph/"><img src="assets/images/philreca/home/energy_agencies/NGCP.png" alt="Philreca"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start client area End -->




@endsection
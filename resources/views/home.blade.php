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
<div class="rts-about-area rts-section-gap bg-about-sm-shape">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- about left -->
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                <div class="rts-title-area">
                    <p class="pre-title">
                        What is
                    </p>
                    <h2 class="title">Philreca?</h2>
                </div>
                <div class="about-inner">
                    <p class="disc">
                        The Philippine Rural Electric Cooperatives Association, Inc. or PHILRECA is the national organization of all the Electric Cooperatives and EC Allied Organizations in the country. For over four decades, we have advocated to empower the Electric Cooperatives as they continue their pursuit towards rural electrification while ensuring the quality, reliability, and global competitiveness of the Electric Cooperatives.
                    </p>
                    <p class="disc">
                    The Association is committed to providing support and assistance to its members by spearheading policy developments on the EC sector, representation to the government and other energy government agencies, facilitating capacity-building trainings, webinars, and conventions, and strengthening relations with energy stakeholders.
                    </p>
                    


                </div>
            </div>
            <!-- about right -->

            <!-- about-right Start-->
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-md-1 order-sm-1 order-1">
                <div class="about-one-thumbnail">
                    <img src="assets/images/philreca/home/ec_philreca_logo.png" alt="Philreca">
                    <img class="small-img" src="assets/images/philreca/logo.png" alt="Philreca">

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
                        <h2 class="title"><span class="counter animated fadeInDownBig">16</span></h2>
                        <p class="disc">Electric Cooperatives</p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter pl--10 justify-content-center two pl--30">
                    <img src="assets/images/counterup/icon/02.svg" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title"><span class="counter animated fadeInDownBig">22</span></h2>
                        <p class="disc">Allied Organizations</p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter pl--10 justify-content-center three pl--50">
                    <img src="assets/images/counterup/icon/03.svg" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title"><span class="counter animated fadeInDownBig">567</span></h2>
                        <p class="disc">Experts</p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter pl--10 justify-content-end four">
                    <img src="assets/images/counterup/icon/04.svg" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title happy"><span class="counter animated fadeInDownBig">30</span></h2>
                        <p class="disc">Clients</p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
        </div>
    </div>
</div>
<!-- rts-counter up area end -->

<!-- rts blog list area -->
<div class="rts-blog-list-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area ">
                    <h2 class="title">Latest News</h2>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <!-- rts blog post area -->
            <div class="col-xl-8 col-md-12 col-sm-12 col-12">
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
            <div class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60">
                <!-- single wized start -->
                <div class="rts-single-wized Categories">
                    <div class="wized-header">
                        <h5 class="title">
                            Categories
                        </h5>
                    </div>
                    <div class="wized-body">
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="#">Business Solution <i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="#">Solution Model<i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="#">More Business <i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="#">Finbiz Solution <i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="#">Consulting Busiuness<i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                    </div>
                </div>
                <!-- single wized End -->
                <!-- single wized start -->
                <div class="rts-single-wized Recent-post">
                    <div class="wized-header">
                        <h5 class="title">
                            Recent Posts
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
                                    <span>15 Jan, 2023</span>
                                </div>
                                <a class="post-title" href="#">
                                    <h6 class="title">We would love to share a similar experience</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="#"><img src="assets/images/blog/details/recent-post/02.png" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <a class="post-title" href="#">
                                    <h6 class="title">We would love to share a similar experience</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="#"><img src="assets/images/blog/details/recent-post/03.png" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <a class="post-title" href="#">
                                    <h6 class="title">We would love to share a similar experience</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="#"><img src="assets/images/blog/details/recent-post/04.png" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <a class="post-title" href="#">
                                    <h6 class="title">We would love to share a similar experience</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                    </div>
                </div>
                <!-- single wized End -->
                <!-- single wized start -->
                <div class="rts-single-wized Recent-post">
                    <div class="wized-header">
                        <h5 class="title">
                            Recent Posts
                        </h5>
                    </div>
                    <div class="wized-body">
                        <div class="gallery-inner">
                            <div class="row-1 single-row">
                                <a href="#"><img src="assets/images/blog/details/gallery/01.png" alt="Gallery"></a>
                                <a href="#"><img src="assets/images/blog/details/gallery/02.png" alt="Gallery"></a>
                                <a href="#"><img src="assets/images/blog/details/gallery/03.png" alt="Gallery"></a>
                            </div>
                            <div class="row-2 single-row">
                                <a href="#"><img src="assets/images/blog/details/gallery/04.png" alt="Gallery"></a>
                                <a href="#"><img src="assets/images/blog/details/gallery/05.png" alt="Gallery"></a>
                                <a href="#"><img src="assets/images/blog/details/gallery/06.png" alt="Gallery"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single wized End -->
                <!-- single wized start -->
                <div class="rts-single-wized">
                    <div class="wized-header">
                        <h5 class="title">
                            Popular Tags
                        </h5>
                    </div>
                    <div class="wized-body">
                        <div class="tags-wrapper">
                            <a href="#">Services</a>
                            <a href="#">Business</a>
                            <a href="#">Growth</a>
                            <a href="#">Finance</a>
                            <a href="#">UI/UX Design</a>
                            <a href="#">Solution</a>
                            <a href="#">Speed</a>
                            <a href="#">Strategy</a>
                            <a href="#">Technology</a>
                        </div>
                    </div>
                </div>
                <!-- single wized End -->
                <!-- single wized start -->
                <div class="rts-single-wized contact">
                    <div class="wized-header">
                        <a href="#"><img src="assets/images/logo/logo-2.svg" alt="Business_logo"></a>
                    </div>
                    <div class="wized-body">
                        <h5 class="title">Need Help? We Are Here
                            To Help You</h5>
                        <a class="rts-btn btn-primary" href="contactus.html">Contact Us</a>
                    </div>
                </div>
                <!-- single wized End -->
            </div>
            <!-- rts- blog wized end area -->
        </div>
    </div>
</div>
<!-- rts blog list area End -->

<!-- start client area -->
<div class="rts-client-area ptb--100 client-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area blog-three text-center">
                    <h2 class="title">Energy Agencies</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="client-two-wrapper">
                    <img src="assets/images/client/01.png" alt="Business_client">
                    <img src="assets/images/client/02.png" alt="Business_client">
                    <img src="assets/images/client/03.png" alt="Business_client">
                    <img src="assets/images/client/04.png" alt="Business_client">
                    <img src="assets/images/client/05.png" alt="Business_client">
                    <img src="assets/images/client/06.png" alt="Business_client">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start client area End -->




@endsection
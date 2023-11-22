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
                    <h2 class="title">What is Philreca?</h2>
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
                    <div class="image-area jcd-video">
                        <video width="100%" height="100%" controls autoplay loop>
                            <source src="assets/images/philreca/home/PHILRECA.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
            <!-- about-right end -->
        </div>
    </div>
</div>

<div class="rts-section-gap rts-faq-bg counter-bg">
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



                </div>
            </div>
            <div class="rts-service-area rts-section-gapTop pb--200">
                <div class="container">
                    <div class="row g-5 service padding-controler">
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
                            <div class="service-two-inner">
                                <a href="service-details.html" class="thumbnail"><img src="assets/images/philreca/about_us/history/1979.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
                            <div class="service-two-inner">
                                <a href="service-details.html" class="thumbnail two"><img src="assets/images/philreca/about_us/history/1981.jpg" alt="Philreca"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
                            <div class="service-two-inner">
                                <a href="service-details.html" class="thumbnail"><img src="assets/images/philreca/about_us/history/1979.jpg" alt="Philreca"></a>
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

@endsection
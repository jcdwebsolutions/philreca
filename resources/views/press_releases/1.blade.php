@extends('layout.layout')

@section('content')

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Press Release</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{url('home')}}">Home</a>
                    <span> / </span>
                    <a href="{{url('publications')}}" class="active">Press Release</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

<div class="rts-section-gap rts-faq-bg counter-bg">
    <div class="container">
        <div class="row align-items-center">
        <div class="rts-blog-list-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <!-- rts blo post area -->
                <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                    <!-- single post -->
                    <div class="blog-single-post-listing details mb--0">
                        <div class="thumbnail">
                            <img src="{{asset('assets/images/philreca/home/press_release/1.jpg')}}" alt="Business-Blog">
                        </div>
                        <div class="blog-listing-content jcd-bg-white">
                            <div class="user-info">
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span>15 September 2023</span>
                                </div>
                                <!-- single infoe end -->
                            </div>
                            <h3 class="title">PHILRECA supports bill seeking to grant lineworkers mandatory insurance coverage</h3>
                            <p class="disc">
                                The Philippine Rural Electric Cooperatives Association (PHILRECA) supports the filing of a bill that seeks to provide mandatory insurance coverage and benefits to lineworkers in the power sector.
                            </p>
                            <p class="disc">
                            PHILRECA Executive Director and General Manager Atty. Janeene Depay-Colingan thanked Senator Francis "Chiz" Escudero for recognizing the invaluable contribution of the lineworkers to our society by filing Senate Bill 2303.
                            </p>
                            <p class="disc">
                            "This bill marks a significant milestone for our Warriors of Light and the electric cooperative - member-consumer-owner (EC-MCO) movement, and we hope it will be approved by the Senate," Colingan said.
                            </p>
                            <p class="disc">
                            The PHILRECA executive added, "Our lineworkers risk their lives every day to ensure that our homes and businesses have a steady supply of electricity, so it is our moral obligation to provide them all the necessary assistance and benefits they deserve."
                            </p>
                            <p class="disc">
                            Under Senate Bill 2303, private distribution utilities, electric cooperatives and transmission or grid operators will be mandated to provide insurance coverage to their respective lineworkers.
                            </p>
                            <p class="disc">
                            The bill also requires employers of lineworkers to grant additional benefits, such as retirement and disability benefits, death and burial assistance, and medical expense reimbursements, among others.
                            </p>
                            <p class="disc">
                            A similar measure — House Bill No. 7561 or the “Line Workers Insurance and Benefits Act" — has already been approved by the House of Representatives on its third and final reading.
                            </p>
                            <p class="disc">
                            Among the authors of the said bill are APEC Party-list Representative Sergio Dagooc and PHILRECA Party-list Representative Presley De Jesus.
                            </p>
                            <p class="disc">
                            At present, ECs extend certain benefits to their lineworkers, while the One EC Network Foundation, PHILRECA'S corporate social responsibility arm, offers emergency assistance to lineworkers. -30-
                            </p>
                        </div>
                    </div>
                    <!-- single post End-->
                </div>
                <!-- rts-blog post end area -->

                @include('layout.blog_sidebar')
            </div>
        </div>
    </div>
        </div>
    </div>
</div>

@endsection

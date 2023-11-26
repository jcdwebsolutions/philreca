@extends('layout.layout')

@section('content')

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Electric Cooperatives</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{url('home')}}">Home</a>
                    <span> / </span>
                    <a href="{{url('electric_cooperatives')}}" class="active">Electric Cooperatives</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

<div class="rts-project-area rts-section-gap jcd-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rts-title-area">
                    <h2 class="title">Luzon</h2>
                </div>
                <div class="tab-button-area-one">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="reca1-tab" data-bs-toggle="tab" data-bs-target="#reca1" type="button" role="tab" aria-controls="reca1" aria-selected="true">RECA I</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fecorec-tab" data-bs-toggle="tab" data-bs-target="#fecorec" type="button" role="tab" aria-controls="fecorec" aria-selected="true">FECOREC</button>
                        </li>
                    </ul>

                </div>
                <div class="tab-content-area mt--50 mt_sm--30">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active spotlight-group" id="reca1" role="tabpanel" aria-labelledby="reca1-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/reca1/cenpelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/reca1/cenpelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">CENPELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/reca1/inec.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/reca1/inec.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">INEC</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
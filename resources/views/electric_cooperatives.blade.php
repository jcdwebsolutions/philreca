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

<div class="rts-project-area rts-section-gap jcd-bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rts-title-area">
                    <h2 class="title jcd-color-white">Luzon</h2>
                </div>
                <div class="tab-button-area-one">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="reca1-tab" data-bs-toggle="tab" data-bs-target="#reca1" type="button" role="tab" aria-controls="reca1" aria-selected="true">RECA I</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fecorec-tab" data-bs-toggle="tab" data-bs-target="#fecorec" type="button" role="tab" aria-controls="fecorec" aria-selected="true">FECOREC</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="neleca-tab" data-bs-toggle="tab" data-bs-target="#neleca" type="button" role="tab" aria-controls="neleca" aria-selected="true">NELECA</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="cleca-tab" data-bs-toggle="tab" data-bs-target="#cleca" type="button" role="tab" aria-controls="cleca" aria-selected="true">CLECA</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="astec-4a-tab" data-bs-toggle="tab" data-bs-target="#astec-4a" type="button" role="tab" aria-controls="astec-4a" aria-selected="true">ASTEC IV-A</button>
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
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/reca1/iseco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/reca1/iseco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">ISECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/reca1/luelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/reca1/luelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">LUELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/reca1/panelco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/reca1/panelco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">PANELCO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/reca1/panelco_3.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/reca1/panelco_3.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">PANELCO III</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="fecorec" role="tabpanel" aria-labelledby="fecorec-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/fecorec/abreco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/fecorec/abreco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">ABRECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/fecorec/beneco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/fecorec/beneco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">BENECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/fecorec/ifelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/fecorec/ifelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">IFELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/fecorec/kaelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/fecorec/kaelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">KAELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/fecorec/mopreco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/fecorec/mopreco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">MOPRECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="neleca" role="tabpanel" aria-labelledby="neleca-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/neleca/batanelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/neleca/batanelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">BATANELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/neleca/cagelco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/neleca/cagelco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">CAGELCO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/neleca/cagelco_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/neleca/cagelco_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">CAGELCO II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/neleca/iselco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/neleca/iselco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">ISELCO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/neleca/iselco_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/neleca/iselco_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">ISELCO II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/neleca/nuvelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/neleca/nuvelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">NUVELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/neleca/quirelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/neleca/quirelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">QUIRELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="cleca" role="tabpanel" aria-labelledby="cleca-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/cleca/aurelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/cleca/aurelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">AURELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/cleca/neeco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/cleca/neeco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">NEECO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/cleca/neeco_2_area_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/cleca/neeco_2_area_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">NEECO II - AREA 1</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/cleca/neeco_2_area_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/cleca/neeco_2_area_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">NEECO II - AREA 2</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/cleca/pelco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/cleca/pelco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">PELCO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/cleca/pelco_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/cleca/pelco_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">PELCO II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/cleca/pelco_3.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/cleca/pelco_3.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">PELCO III</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/cleca/penelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/cleca/penelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">PENELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/cleca/presco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/cleca/presco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">PRESCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/cleca/sajelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/cleca/sajelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">SAJELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/cleca/tarelco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/cleca/tarelco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">TARELCO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/cleca/tarelco_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/cleca/tarelco_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">TARELCO II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/cleca/zameco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/cleca/zameco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">ZAMECO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/cleca/zameco_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/cleca/zameco_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">ZAMECO II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="astec-4a" role="tabpanel" aria-labelledby="astec-4a-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/astec_iv_a/batelec_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/astec_iv_a/batelec_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">BATELEC I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/astec_iv_a/batelec_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/astec_iv_a/batelec_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">BATELEC II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/astec_iv_a/fleco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/astec_iv_a/batelec_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">BATELEC I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/astec_iv_a/batelec_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/astec_iv_a/batelec_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">BATELEC I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/astec_iv_a/batelec_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/astec_iv_a/batelec_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">BATELEC I</h5>
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
</div>
</div>

@endsection
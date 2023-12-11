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

<div class="rts-project-area rts-section-gap jcd-bg-dark" id="luzon">
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
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="astec-4b-tab" data-bs-toggle="tab" data-bs-target="#astec-4b" type="button" role="tab" aria-controls="astec-4b" aria-selected="true">ASTEC IV-B</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="beca-tab" data-bs-toggle="tab" data-bs-target="#beca" type="button" role="tab" aria-controls="beca" aria-selected="true">BECA</button>
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
                                            <a href="http://www.cenpelco.com/" target="_blank">
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
                                            <a href="https://inec-ec.com/" target="_blank">
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
                                            <a href="http://www.iseco.org/" target="_blank">
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
                                            <a href="http://luelco.com.ph/" target="_blank">
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
                                            <a href="https://panelcoi.com/" target="_blank">
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
                                            <a href="https://www.panelco3.com.ph/" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
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
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">BATELEC II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/astec_iv_a/fleco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/astec_iv_a/fleco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">FLECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/astec_iv_a/quezelco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/astec_iv_a/quezelco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">QUEZELCO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/astec_iv_a/quezelco_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/astec_iv_a/quezelco_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">QUEZELCO II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="astec-4b" role="tabpanel" aria-labelledby="astec-4b-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/astec_iv_b/biselco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/astec_iv_b/biselco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">BISELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/astec_iv_b/lubelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/astec_iv_b/lubelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">LUBELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/astec_iv_b/marelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/astec_iv_b/marelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">MARELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/astec_iv_b/omeco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/astec_iv_b/omeco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">OMECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/astec_iv_b/ormeco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/astec_iv_b/ormeco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">ORMECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/astec_iv_b/paleco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/astec_iv_b/paleco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">PALECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/astec_iv_b/romelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/astec_iv_b/romelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">ROMELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/astec_iv_b/tielco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/astec_iv_b/tielco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">TIELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="beca" role="tabpanel" aria-labelledby="beca-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/beca/aleco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/beca/aleco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">ALECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/beca/canoreco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/beca/canoreco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">CANORECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/beca/casureco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/beca/casureco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">CASURECO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/beca/casureco_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/beca/casureco_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">CASURECO II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/beca/casureco_3.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/beca/casureco_3.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">CASURECO III</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/beca/casureco_4.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/beca/casureco_4.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">CASURECO IV</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/beca/ficelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/beca/ficelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">FICELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/beca/maselco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/beca/maselco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">MASELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/beca/soreco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/beca/soreco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">SORECO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/beca/soreco_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/beca/soreco_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">SORECO II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/luzon/beca/tiselco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/luzon/beca/tiselco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">TISELCO</h5>
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

<div class="rts-project-area rts-section-gap jcd-bg" id="visayas">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rts-title-area">
                    <h2 class="title">Visayas</h2>
                </div>
                <div class="tab-button-area-one">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="ecar6-tab" data-bs-toggle="tab" data-bs-target="#ecar6" type="button" role="tab" aria-controls="ecar6" aria-selected="true">ECAR 6</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="ceveca-tab" data-bs-toggle="tab" data-bs-target="#ceveca" type="button" role="tab" aria-controls="ceveca" aria-selected="true">CEVECA</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="frecor_8-tab" data-bs-toggle="tab" data-bs-target="#frecor_8" type="button" role="tab" aria-controls="frecor_8" aria-selected="true">FRECOR 8</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content-area mt--50 mt_sm--30">
                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active spotlight-group" id="ecar6" role="tabpanel" aria-labelledby="ecar6-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ecar_vi/akelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ecar_vi/akelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">AKELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ecar_vi/anteco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ecar_vi/anteco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">ANTECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ecar_vi/capelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ecar_vi/capelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">CAPELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ecar_vi/ceneco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ecar_vi/ceneco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">CENECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ecar_vi/guimelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ecar_vi/guimelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">GUIMELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ecar_vi/ileco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ecar_vi/ileco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">ILECO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ecar_vi/ileco_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ecar_vi/ileco_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">ILECO II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ecar_vi/ileco_3.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ecar_vi/ileco_3.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">ILECO III</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ecar_vi/noceco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ecar_vi/noceco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">NOCECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ecar_vi/noneco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ecar_vi/noneco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">NONECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="ceveca" role="tabpanel" aria-labelledby="ceveca-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ceveca/banelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ceveca/banelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">BANELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ceveca/boheco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ceveca/boheco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">BOHECO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ceveca/boheco_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ceveca/boheco_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">BOHECO II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ceveca/cebeco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ceveca/cebeco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">CEBECO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ceveca/cebeco_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ceveca/cebeco_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">CEBECO II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ceveca/cebeco_3.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ceveca/cebeco_3.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">CEBECO III</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ceveca/celco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ceveca/celco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">CELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ceveca/noreco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ceveca/noreco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">NORECO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ceveca/noreco_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ceveca/noreco_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">NORECO II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/ceveca/prosielco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/ceveca/prosielco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">PROSIELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="frecor_8" role="tabpanel" aria-labelledby="frecor_8-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/frecor_viii/bileco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/frecor_viii/bileco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">BILECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/frecor_viii/dorelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/frecor_viii/dorelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">DORELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/frecor_viii/esamelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/frecor_viii/esamelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">ESAMELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/frecor_viii/leyeco_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/frecor_viii/leyeco_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">LEYECO II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/frecor_viii/leyeco_3.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/frecor_viii/leyeco_3.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">LEYECO III</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/frecor_viii/leyeco_4.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/frecor_viii/leyeco_4.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">LEYECO IV</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/frecor_viii/leyeco_5.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/frecor_viii/leyeco_5.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">LEYECO V</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/frecor_viii/norsamelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/frecor_viii/norsamelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">NORSAMELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/frecor_viii/samelco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/frecor_viii/samelco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">SAMELCO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/frecor_viii/samelco_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/frecor_viii/samelco_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">SAMELCO II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/visayas/frecor_viii/soleco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/visayas/frecor_viii/soleco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">SOLECO</h5>
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

<div class="rts-project-area rts-section-gap jcd-bg-dark" id="mindanao">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rts-title-area">
                    <h2 class="title jcd-color-white">Mindanao</h2>
                </div>
                <div class="tab-button-area-one">
                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="reneca-tab" data-bs-toggle="tab" data-bs-target="#reneca" type="button" role="tab" aria-controls="reneca" aria-selected="true">RENECA</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="normeca-tab" data-bs-toggle="tab" data-bs-target="#normeca" type="button" role="tab" aria-controls="normeca" aria-selected="true">NORMECA</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="semeca-tab" data-bs-toggle="tab" data-bs-target="#semeca" type="button" role="tab" aria-controls="semeca" aria-selected="true">SEMECA</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="cemreca-tab" data-bs-toggle="tab" data-bs-target="#cemreca" type="button" role="tab" aria-controls="cemreca" aria-selected="true">CEMRECA</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="abec-tab" data-bs-toggle="tab" data-bs-target="#abec" type="button" role="tab" aria-controls="abec" aria-selected="true">ABEC</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="creca-tab" data-bs-toggle="tab" data-bs-target="#creca" type="button" role="tab" aria-controls="creca" aria-selected="true">CRECA</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content-area mt--50 mt_sm--30">
                    <div class="tab-content" id="myTabContent3">
                        <div class="tab-pane fade show active spotlight-group" id="reneca" role="tabpanel" aria-labelledby="reneca-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/reneca/zamceleco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/reneca/zamceleco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">ZAMCELECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/reneca/zamsureco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/reneca/zamsureco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">ZAMSURECO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/reneca/zamsureco_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/reneca/zamsureco_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">ZAMSURECO II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/reneca/zaneco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/reneca/zaneco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">ZANECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="normeca" role="tabpanel" aria-labelledby="normeca-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/normeca/buseco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/normeca/buseco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">BUSECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/normeca/camelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/normeca/camelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">CAMELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/normeca/fibeco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/normeca/fibeco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">FIBECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/normeca/buseco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/normeca/buseco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">BUSECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/normeca/laneco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/normeca/laneco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">LANECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/normeca/moelci_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/normeca/moelci_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">MOELCI I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/normeca/moelci_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/normeca/moelci_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">MOELCI II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/normeca/moresco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/normeca/moresco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">MORESCO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/normeca/moresco_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/normeca/moresco_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">MORESCO II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="semeca" role="tabpanel" aria-labelledby="semeca-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/semeca/dasureco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/semeca/dasureco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">DASURECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/semeca/doreco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/semeca/doreco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">DORECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/semeca/nordeco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/semeca/nordeco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">NORDECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="cemreca" role="tabpanel" aria-labelledby="cemreca-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/cemreca/cotelco_ppalma.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/cemreca/cotelco_ppalma.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">COTELCO - PPALMA</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/cemreca/cotelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/cemreca/cotelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">COTELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/cemreca/socoteco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/cemreca/socoteco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">SOCOTECO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/cemreca/socoteco_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/cemreca/socoteco_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">SOCOTECO II</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/cemreca/sukelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/cemreca/sukelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">SUKELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="abec" role="tabpanel" aria-labelledby="abec-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/abec/baselco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/abec/baselco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">BASELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/abec/caselco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/abec/caselco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">CASELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/abec/lasureco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/abec/lasureco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">LASURECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/abec/magelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/abec/magelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">MAGELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/abec/siaselco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/abec/siaselco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">SIASELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/abec/suleco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/abec/suleco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">SULECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/abec/tawelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/abec/tawelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">TAWELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="creca" role="tabpanel" aria-labelledby="creca-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/creca/aneco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/creca/aneco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">ANECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/creca/aselco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/creca/aselco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">ASELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/creca/dielco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/creca/dielco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">DIELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/creca/siarelco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/creca/siarelco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">SIARELCO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/creca/surneco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/creca/surneco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">SURNECO</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/creca/surseco_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/creca/surseco_1.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">SURSECO I</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ec/mindanao/creca/surseco_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ec/mindanao/creca/surseco_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <a href="#" target="_blank">
                                                <h5 class="title jcd-primary-color">SURSECO II</h5>
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
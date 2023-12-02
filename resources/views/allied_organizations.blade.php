@extends('layout.layout')

@section('content')

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Allied Organizations</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{url('home')}}">Home</a>
                    <span> / </span>
                    <a href="{{url('allied_organizations')}}" class="active">Allied Organizations</a>
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
                    <h2 class="title jcd-color-white">Allied Organizations</h2>
                </div>
                <div class="tab-content-area mt--50 mt_sm--30">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active spotlight-group" id="line1" role="tabpanel" aria-labelledby="reca1-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ao/aiec.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ao/aiec.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> ENGR. RENE M. FAJILAGUTAN</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">Assoiation of Isolated ECs</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ao/amaphi.jpg" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ao/amaphi.jpg"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> MS. MARY ANN MORALES</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">Area Managers Assoiation of the Philippines</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/no_image.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/no_image.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> MR. JOSE RAUL A. SANIEL</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">Assocation of Mindanao Rural Electric Cooperatives</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/no_image.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/no_image.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> ENGR. EMMANUEL B. GALARSE</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">Assocation of Mindanao Rural Electric Cooperatives Power Supply Aggregation Group Corporation</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/no_image.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/no_image.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> MR. VIRGILIO FORTICH, JR.</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">Association of Visayas Electrc Cooperatives</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ao/cleca.jpg" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ao/cleca.jpg"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> MR. REYNALDO V. VILLANUEVA</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">Central Luzon Electric Cooperatives Association - First Luzon Aggregate Group</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ao/eccowpa.jpg" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ao/eccowpa.jpg"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> MR. DARWIN RAMOS</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">Electric Cooperatives Consumer Welfare Officers Philippine Association</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ao/ec_fimap.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ao/ec_fimap.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> MS. MARINCHIE Y. OLARTE</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">Electric Cooperatives Finance Managers Association of the Philippines</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ao/hreca.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ao/hreca.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> ATTY. TYRON JAN G. ALBAO</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">Human Resource in Electric Cooperatives Association</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ao/lexicon.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ao/lexicon.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> MR. JONATHAN LEYSA</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">League of Electric Cooperatives Information and Communications</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ao/logict.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ao/logict.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> MR. JEFFREY DE JESUS</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">League of Goal-Oriented Information Communication Technologists</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ao/nagmec.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ao/nagmec.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> MR. ALLAN L. LANIBA</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">National Association of General Managers Electric Cooperatives</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/no_image.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/no_image.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> MR. VIRGILIO FORTICH, JR.</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">One EC Network Foundation</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/no_image.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/no_image.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> ENGR. FRANK T. WY</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">Philippine Electric Cooperatives Association of Corporate Planners</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ao/pecares.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ao/pecares.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> MS. AMINA LEE GUMAPAC</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">Philippine EC Association of Resilient Secretaries</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/no_image.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/no_image.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> MR. HENRY PAVON</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">Philippine Electric Cooperatives Association of Safety and Environment Officers</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ao/phabdrec.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ao/phabdrec.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> MR. AL D. CASTILLON</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">Philippine Association of Board of Directors of Electric Cooperatives</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ao/philaecia.jpg" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ao/philaecia.jpg"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> MR. JOHN PAUL HISPANO</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">Philippine Association of Electric Cooperatives Internal Auditors</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ao/philaim.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ao/philaim.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> MR. CHRISTOPHER A. GARCIA</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">Philippine Association of ISD (Institutional Services Department) Manager</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ao/philatmec.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ao/philatmec.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> ENGR. GREGORIO P. MAPPATAO JR.</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">Philippine Association of Technical Managers of Electric Cooperatives</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ao/philfeco.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ao/philfeco.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> MS. ROSELLE TEODOSIO</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">Philippine Federation of Electric Cooperatives</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-white">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/ao/ulap.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/ao/ulap.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                        <div class="product-contact-wrapper">
                                            <span><b>President:</b> MR. ALEX BALDISCO</span>
                                            <a href="#">
                                                <h5 class="title jcd-primary-color">United Linemen Association of the Philippines</h5>
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
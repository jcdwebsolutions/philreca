@extends('layout.layout')

@section('content')

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Publications</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{url('home')}}">Home</a>
                    <span> / </span>
                    <a href="{{url('publications')}}" class="active">Publications</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

<div class="rts-project-area rts-section-gap jcd-bg-dark" id="press_release">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rts-title-area">
                    <h2 class="title jcd-color-white">Press and Media Release</h2>
                </div>
            </div>
        </div>
        <div class="blog-single-post-listing">
            <div class="thumbnail">
                <img src="assets/images/philreca/home/press_release/1.jpg" alt="Business-Blog">
            </div>
            <div class="blog-listing-content jcd-bg-white">
                <div class="user-info">

                    <div class="single">
                        <i class="far fa-clock"></i>
                        <span>15 Sept, 2023</span>
                    </div>

                </div>
                <a class="blog-title" href="#">
                    <h3 class="title">PHILRECA supports bill seeking to grant lineworkers mandatory insurance coverage</h3>
                </a>
                <a class="rts-btn btn-primary" target="_blank" href="{{url('pages/press_release/1')}}">Read details</a>
            </div>
        </div>
    </div>
</div>

<div class="rts-project-area rts-section-gap jcd-bg" id="speech">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rts-title-area">
                    <h2 class="title">Speech and Messages </h2>
                </div>
                <div class="tab-button-area-one">
                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                        <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="january-tab" data-bs-toggle="tab" data-bs-target="#january" type="button" role="tab" aria-controls="january" aria-selected="true">JANUARY</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="february-tab" data-bs-toggle="tab" data-bs-target="#normfebruaryeca" type="button" role="tab" aria-controls="february" aria-selected="true">FEBRUARY</button>
                        </li> -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="march-tab" data-bs-toggle="tab" data-bs-target="#march" type="button" role="tab" aria-controls="march" aria-selected="true">MARCH</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="april-tab" data-bs-toggle="tab" data-bs-target="#april" type="button" role="tab" aria-controls="april" aria-selected="true">APRIL</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="may-tab" data-bs-toggle="tab" data-bs-target="#may" type="button" role="tab" aria-controls="may" aria-selected="true">MAY</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="june-tab" data-bs-toggle="tab" data-bs-target="#june" type="button" role="tab" aria-controls="june" aria-selected="true">JUNE</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="july-tab" data-bs-toggle="tab" data-bs-target="#july" type="button" role="tab" aria-controls="july" aria-selected="true">JULY</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="august-tab" data-bs-toggle="tab" data-bs-target="#august" type="button" role="tab" aria-controls="august" aria-selected="true">AUGUST</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="september-tab" data-bs-toggle="tab" data-bs-target="#september" type="button" role="tab" aria-controls="september" aria-selected="true">SEPTEMBER</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="october-tab" data-bs-toggle="tab" data-bs-target="#october" type="button" role="tab" aria-controls="october" aria-selected="true">OCTOBER</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="november-tab" data-bs-toggle="tab" data-bs-target="#november" type="button" role="tab" aria-controls="november" aria-selected="true">NOVEMBER</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="december-tab" data-bs-toggle="tab" data-bs-target="#december" type="button" role="tab" aria-controls="december" aria-selected="true">DECEMBER</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content-area mt--50 mt_sm--30">
                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade spotlight-group" id="march" role="tabpanel" aria-labelledby="march-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/03_MARCH_JPY.jpg" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/03_MARCH_JPY.jpg"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/03_MARCH_JDC.jpg" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/03_MARCH_JDC.jpg"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="april" role="tabpanel" aria-labelledby="april-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/04_APRIL_JPY.jpg" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/04_APRIL_JPY.jpg"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/04_APRIL_JDC.jpg" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/04_APRIL_JDC.jpg"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="may" role="tabpanel" aria-labelledby="may-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/05_MAY_JPY.jpg" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/05_MAY_JPY.jpg"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/05_MAY_JDC.jpg" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/05_MAY_JDC.jpg"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="june" role="tabpanel" aria-labelledby="june-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/06_JUNE_JPY.jpg" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/06_JUNE_JPY.jpg"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/06_JUNE_JDC.jpg" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/06_JUNE_JDC.jpg"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="july" role="tabpanel" aria-labelledby="july-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/07_JULY_JPY.jpg" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/07_JULY_JPY.jpg"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/07_JULY_JDC.jpg" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/07_JULY_JDC.jpg"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="august" role="tabpanel" aria-labelledby="august-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/08_JDC.jpg" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/08_JDC.jpg"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/08_AUGUST_JPY.jpg" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/08_AUGUST_JPY.jpg"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="september" role="tabpanel" aria-labelledby="september-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/09_SEPTEMBER.jpg" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/09_SEPTEMBER.jpg"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/09_SEPTEMBER_2.jpg" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/09_SEPTEMBER_2.jpg"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="october" role="tabpanel" aria-labelledby="october-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/10_OCTOBER_JPY.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/10_OCTOBER_JPY.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/10_OCTOBER_JDC.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/10_OCTOBER_JDC.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade spotlight-group" id="november" role="tabpanel" aria-labelledby="november-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/11_NOVEMBER_JPY.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/11_NOVEMBER_JPY.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/11_NOVEMBER_JDC.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/11_NOVEMBER_JDC.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active spotlight-group" id="december" role="tabpanel" aria-labelledby="december-tab">
                            <div class="row g-5">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/YEAR_END_MESSAGE.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/YEAR_END_MESSAGE.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/12_DECEMBER_2.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/12_DECEMBER_2.png"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rts-product-one jcd-bg-dark">
                                        <div class="thumbnail-area">
                                            <img src="assets/images/philreca/publications/speech/12_DECEMBER_1.png" alt="Philreca">
                                            <a class="rts-btn btn-primary rounded spotlight" href="assets/images/philreca/publications/speech/12_DECEMBER_1.png"><i class="far fa-arrow-right"></i></a>
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

<div class="rts-project-area rts-section-gap jcd-bg-dark" id="dagitab">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rts-title-area">
                    <h2 class="title jcd-color-white">Dagitab News Letter</h2>
                </div>
                <iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe" src="https://heyzine.com/flip-book/e8569747e7.html" style="border: 1px solid lightgray; width: 100%; height: 800px;"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection

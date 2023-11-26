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

<div class="rts-about-area rts-section-gap jcd-bg">
    <div class="container">
        <div class="row g-5 align-items-center">
            
        </div>
    </div>
</div>

<div class="rts-section-gap rts-faq-bg counter-bg">
    <div class="container">
        <div class="row align-items-center">
            
        </div>
    </div>
</div>

@endsection
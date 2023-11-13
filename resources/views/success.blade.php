@extends('layout.layout')

@section('content')

<!-- rts- 404 area start -->
<div class="rts-404-area rts-section-gap jcd-bg-color-1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="404wrapper text-center">
                        <div class="thumbnail">
                            
                        </div>
                        <h2 class="title mt--40">
                            Form Submitted Successfully!
                        </h2>
                        <p class="disc">Thank you for contacting us. We will contact you shortly.</p>
                        <a class="rts-btn btn-primary" href="{{ url('home') }}">Back To Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts- 404 area end -->

@endsection
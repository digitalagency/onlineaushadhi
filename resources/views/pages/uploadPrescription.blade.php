@extends('layout')

@section('content')
    <main class="company-primary" role="main">

        <div class="home">

            @include('partials.content-search')

            <div class="breadcrumb-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="breadcrumb list-inline list-unstyled">
                                <li><a href="/">Home</a> </li>
                                <li>Upload Prescription</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container">
                    <div class="content__gutter-up-down">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>
                                    Upload your prescription
                                    <br>
                                </h5>
                                <hr class="m-b-35">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 steps-wrap">

                                    <div class="text-center">
                                        <ul class="step m-b-45">
                                            <li>
                                                <span class="step-circle step-circle__active first"></span> <span class="text-block hidden-xs">Upload Prescription</span>
                                            </li>
                                            <li>
                                                <span class="step-circle step-circle__passive second"></span> <span class="text-block hidden-xs">Login/Register</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <section class="step-1-wrap">
                                        <div class="title title--sm m-b-25">Upload Your Prescription (click below to select a file to upload) .</div>
                                        <hr class="m-b-35">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="row m-b-25">
                                                    <div class="col-lg-12">
                                                        <div id="multipleupload">Upload</div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row m-b-35">
                                                    <div class="col-lg-12">
                                                        <input type="hidden" name="request" value="{{ time() }}" />
                                                        @if (Auth::check())
                                                            <button class="btn btn-danger btn-md" id="savePrescription">Upload Prescription</button>
                                                        @else
                                                            <button class="btn btn-danger btn-md" id="stepOne">Proceed</button>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <span class="title title--md">Instructions</span>
                                                <ol class="more-gutter">
                                                    <li>Ensure that the picture or scan is such that the entire prescription
                                                        is visible (including the doctor/clinic’s letterhead).</li>
                                                    <li>Ensure that the picture is taken in a way that the handwriting/type
                                                        is visible clearly.</li>
                                                    <li>The file size should not exceed 10 MB.</li>
                                                    <li>Ensure that the prescription is valid. Your family member or a caregiver
                                                        can place order for prescription medicines on your behalf.</li>
                                                    <li>You can upload a total of 4 prescriptions per order.</li>
                                                    <li>Please be sure to also upload the back-side image of your prescription,
                                                        if present.</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="step-2-wrap hidden">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="row connection">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <section class="login">
                                                            @include('forms.login')
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <span class="title title--md">Register</span>
                                                @include('forms.register')
                                            </div>
                                        </div>
                                    </section>

                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-12 text-muted">
                                            <span class="title title--sm">Note:</span>
                                            <ul class="more-gutter">
                                                <li>Alternatively, you can send us a picture or scan of your prescription
                                                    by email <a href="mailto:info@onlineaushadhi.com">info@onlineaushadhi.com</a>  or viber us 9841568568 or message us at our facebook Page http://facebook.com/healthtips.onineaushadhi
                                                </li>
                                                <li>Once you have uploaded your prescription, we will call you on your registered contact number to confirm the order.</li>
                                            </ul>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
    <!-- /.Main Content -->

    <section id="push"></section>
    <!--For Sticky Footer-->
@endsection

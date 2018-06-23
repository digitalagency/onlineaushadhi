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
                                <li>Home</li>
                                <li><a href="/about">About</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content__gutter-up-down content__gutter-left-right">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5 class="text-uppercase">About us</h5>
                                        <blockquote class="no-margin"><strong>Online Aushadhi</strong> is a loacally owned, independent and licensed online pharmacy system which aims to provide high quality medical care within Ringroad, kathmandu. Our main goal to provide safe prescription drugs at the most competetive price and to provide quick and efficient customer service. We provide services like any other retail pharmacy near your home, the only difference is, you do not have to come to us, rather we dispense your medications at your doorstep.</blockquote>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <br>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="thumbnail thumbnail--no-border">
                                            <img src="{{ asset('img/001.jpg') }}" alt="Img Title" class="img-responsiveÎ">
                                            <div class="caption">
                                                <span class="title title--sm m-b-15 text-uppercase">Ordering with Online Aushadhi</span>
                                                <p>Buying prescription drugs online is easy, safe and secure at Online Aushadhi. We offer convenient ordering online
                                                    as well as through telephone. Every prescription drug order is reviewed by our licensed pharmacist before being
                                                    dispensed. We treat our product safety with greatest care, our main concern being the safety of our customers,
                                                    which we take very seriously. To ensure this to our customers, <strong>we procure all our supplies directly from only
                                                        the authorized distributors of the country</strong>.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="thumbnail thumbnail--no-border">
                                            <img src="{{ asset('img/002.jpg') }}" alt="Img Title" class="img-responsiveÎ">
                                            <div class="caption">
                                                <span class="title title--sm m-b-15 text-uppercase">Customer Support Team</span>
                                                <p>Our Customer Support Team is accessible Sunday to Friday from 9am to 6pm through email and by phone. If you
                                                    encounter any issues, questions, concerns regarding your desired medicine availability, its delivery or you
                                                    just want to obtain more information regarding our company and the services provided by it, please feel free
                                                    to get in touch with our customer support team. <strong>Your satisfaction is our success, and we work hard to achieve
                                                        it!</strong>
                                                </p>
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

    </main>
    <!-- /.Main Content -->

    <section id="push"></section>
    <!--For Sticky Footer-->
@endsection

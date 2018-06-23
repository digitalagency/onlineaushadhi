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
                                <li><a href="/">Home</a></li>
                                <li>Content Page</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content__gutter-up-down">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5 class="text-uppercase m-b-5">OUR PRODUCTS</h5>
                                        <p>Our main product comes in a form of service for the prescribed medicines.  Besides that we  provide a number of products like first-aid kit, surgical tools like wheel chairs, glucometer - test your sugar level at your convenient time at home, weighting machine and many more (almost everything and anything related to health).</p>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <br>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="thumbnail thumbnail--no-border">
                                            <img src="{{ asset('img/011.jpg') }}" alt="Img Title" class="img-responsiveÎ">
                                            <div class="caption">
                                                <span class="title title--sm m-b-15 text-uppercase">Prescription Medicines</span>
                                                <p>You just need to send us the scanned copy or photo of your prescription via Facebook, viber or website and be safe because we will do the rest for you.</p>
                                                    <ul>
                                                        <li>We record your prescription with us for future reference.</li>
                                                        <li>Provide free home delivery of your regular medicines.</li>
                                                        <li>Stock up your medicines for at least 3 months to prevent shortage</li>
                                                        <li>Give you refill alert call few days prior to re-deliver your medicines when needed.</li>
                                                        <li>Provide consultation via phone call about your medical needs.</li>
                                                    </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="thumbnail thumbnail--no-border">
                                            <img src="{{ asset('img/012.jpg') }}" alt="Img Title" class="img-responsiveÎ">
                                            <div class="caption">
                                                <span class="title title--sm m-b-15 text-uppercase">First Aid Kit</span>
                                                <p>We have three kinds of first aid kits for home, school and workplace safety. Specially designed for cases of sudden injuries and illness, our first is kit is important whether you are in office, home, school or travelling somewhere far!</p>

                                                <p>A small investment to preserve life…!.</p>

                                                <p><a href="/first-aid-kit" class="btn btn-danger">View More</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="thumbnail thumbnail--no-border">
                                            <img src="{{ asset('img/013.jpg') }}" alt="Img Title" class="img-responsiveÎ">
                                            <div class="caption">
                                                <span class="title title--sm m-b-15 text-uppercase">Health/Surgical instruments</span>
                                                <p>We can deliver all kinds of health devices like blood pressure machine, suger test devices and strips, nebulizers, oxygen concentrator and surgical instruments like crutches(Baisakhi), wheel chairs, orthopedic belts and many more..</strong>
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
@endsection

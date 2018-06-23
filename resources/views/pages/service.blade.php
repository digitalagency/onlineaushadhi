@extends('layout')

@section('content')
    <main class="company-primary" role="main">

        <div class="home">

            @include('partials.content-search')

            </div>

            <div class="breadcrumb-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="breadcrumb list-inline list-unstyled">
                                <li>Home</li>
                                <li><a href="#">Content Page</a></li>
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
                                        <h5>
                                            Our Services
                                            <br>
                                        </h5>
                                        <hr class="m-b-35">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-9 col-md-8 col-sm-8">

                                        <div class="row m-b-35">
                                            <div class="col-lg-12 service-wrap-inner">
                                                
                                                <div class="media">
                                                    <div class="media-left p-r-35">
                                                        <figure>
												            <i class="oa-alarm"></i>
											            </figure>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="title title--md">Prescription medicines</span>
                                                        <p>You don’t have the time or you’re having problems getting to your regular pharmacy? Get your prescription drugs delivered to your home for free and just relax. We provide fast and free cash on delivery service within Ringroad, kathmandu.*</p>
                                                        <p>*Certain restrictions and conditions are applied in the process of delivery so please check the FAQ section for more details.</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="media">
                                                    <div class="media-left p-r-35">
                                                        <figure>
												            <i class="oa-checkbox"></i>
											            </figure>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="title title--md">Trustworthy</span>
                                                        <p>Your well-being is our priority so we can assure you that, when you choose online aushadhi you are choosing only high quality medicines from the authorized companies and distributors of the country. Your privacy is of our utmost concern. All your personal data, including your email address and any other information supplied will never be misused. With us, confidential information will remain confidential for the safety of our customers.</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="media">
                                                    <div class="media-left p-r-35">
                                                        <figure>
												            <i class="oa-flask"></i>
											            </figure>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="title title--md">Refill service</span>
                                                        <p>Once you have registered in our website and uploaded your prescription we keep track of every client’s regular medicine needs and give them a refill reminder call when needed without any hassels of resending the same prescription again. Since we take care of the work for you, there’s no need to worry about whether you will run out of the medications you need or whether you remembered to refill your prescription.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    @include('partials.sidebar')
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

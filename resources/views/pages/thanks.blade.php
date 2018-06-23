@extends('layout')

@section('content')
    <main class="company-primary" role="main">

        <div class="home">

            <div class="breadcrumb-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="breadcrumb list-inline list-unstyled">
                                <li><a href="/">Home</a></li>
                                <li>Order Complete</li>
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
                                        <h5 class="text-uppercase m-b-5">Thank you for your order!</h5>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-lg-9 col-md-8 col-sm-8">
                                        <p>Order completed successfully. <br/> One of our customer representatives will contact you shortly.</p>

                                        <p>If you have any questions or concerns, please email us at <a href="info@onlineaushadhi.com">info@onlineaushadhi.com</a>  or call us at 9814568568</p>
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

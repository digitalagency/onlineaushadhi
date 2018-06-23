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
                                <li>Checkout</li>
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
                                    Checkout
                                    <br>
                                </h5>
                                <hr class="m-b-35">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 steps-wrap">
                                <section class="step-2-wrap">
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

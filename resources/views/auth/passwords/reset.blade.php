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
                                <li>Reset Password</li>
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
                                    Reset Password
                                    <br>
                                </h5>
                                <hr class="m-b-35">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 steps-wrap">
                                @include('forms.reset')

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

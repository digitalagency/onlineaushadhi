@extends('layout')

@section('content')

    <main class="company-primary" role="main" xmlns="http://www.w3.org/1999/html">

        <div class="home">

            <div class="breadcrumb-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="breadcrumb list-inline list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li>Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="content__gutter-up-down content__gutter-left-right">
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <h5 class="text-uppercase">Create a New Account</h5>
                                    <div class="panel panel-default">

                                        <div class="panel-body">
                                            @include('forms.register')
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
    <section id="push"></section>
    <!--For Sticky Footer-->

@endsection

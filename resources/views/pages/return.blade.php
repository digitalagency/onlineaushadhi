@extends('layout')

@section('content')
    <main class="company-primary" role="main">

        <div class="home">

            <div class="breadcrumb-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="breadcrumb list-inline list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li>Return Policies</li>
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
                                        <h5 class="text-uppercase m-b-5">Return Policies</h5>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-lg-9 col-md-8 col-sm-8">
                                        <div class="thumbnail thumbnail--no-border">
                                            <div class="caption">
                                                <p>You can return your order within 20 days from the date of purchase. We assure you to refund your full amount but the following conditions are applied:
                                                </p>
                                                <ul class="policies more-gutter">
                                                    <li>If any discounts or other offers were given, that amount will be deducted while refunding your purchase.</li>
                                                    <li>We take returns only if the products are in good/new condition. Tempered products like torn packets, blurred labels etc. will not be accepted. </li>
                                                    <li>If box packed product like syrups, ointments etc. needs to be returned, it should be in its proper box packed form. </li>
                                                    <li>If you want to return tablets and capsules, we only take back full stripes. Half stripes and broken stripes are not feasible for return.</li>
                                                    <li>For syrups and liquid products the seal should not be broken.</li>
                                                    <li>Injection products which should be stored in refrigerators will not be taken back because we cannot assure about how you have stored it therefore, we cannot take the risk to reuse such products.</li>
                                                </ul>

                                                <p></p>

                                                <div class="regards">
                                                    <p>For any further information or querries please contact us on 9841568568 or mail us at care.onlineaushadhi@gmail.com</p>
                                                    <p>Yours Faithfully<br><span>Online Aushadhi Team</span></p>
                                                    <p>Last Updated on 12th August, 2015</p>
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

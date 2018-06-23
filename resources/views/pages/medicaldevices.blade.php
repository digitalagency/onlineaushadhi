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
                                <li><a href="/products">Products</a></li>
                                <li>Medical Devices</li>
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
                                        <h5 class="text-uppercase m-b-5">Medical Devices</h5>
                                        <p>This section contains any instrument, apparatus, machine or appliance. </p>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <div class="row products">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="thumbnail thumbnail--no-border first-aid-box">
                                            <header class="text-center">
                                                <h6>
                                                    <span class="text-uppercase">Deluxe Stethoscope</span>
                                                    <!-- <small class="text-info">Suitable for offices and schools</small>
                                                    <small class="text-size">Size: 12 X 6.5 inches</small> -->
                                                </h6>
                                            </header>
                                            <figure>
                                                <div class="price-tag"><img src="{{ asset('img/price-bg.png') }}" alt=""></div>
                                                <div class="price">
                                                    <span class="market-price">Rs. 2500</span>
                                                    <span class="offered-price">Rs. 2250</span>
                                                </div>
                                                <img src="http://admin.onlineaushadhi.com/images/medicine/deluxe-stethoscope.jpg" alt="Deluxe Stethoscope" class="img-responsive">
                                            </figure>
                                            <div class="caption">
                                                <form action="/cart" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="16213">
                                                    <input type="hidden" name="name" value="Deluxe Stethoscope">
                                                    <input type="hidden" name="price" value="2250">
                                                    <input type="submit" class="btn btn-md btn-danger" value="Add To Cart">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="thumbnail thumbnail--no-border first-aid-box">
                                            <header class="text-center">
                                                <h6>
                                                    <span class="text-uppercase">Deluxe Stethoscope</span>
                                                    <!-- <small class="text-info">Suitable for offices and schools</small>
                                                    <small class="text-size">Size: 12 X 6.5 inches</small> -->
                                                </h6>
                                            </header>
                                            <figure>
                                                <div class="price-tag"><img src="{{ asset('img/price-bg.png') }}" alt=""></div>
                                                <div class="price">
                                                    <span class="market-price">Rs. 2500</span>
                                                    <span class="offered-price">Rs. 2250</span>
                                                </div>
                                                <img src="http://admin.onlineaushadhi.com/images/medicine/deluxe-stethoscope.jpg" alt="Deluxe Stethoscope" class="img-responsive">
                                            </figure>
                                            <div class="caption">
                                                <form action="/cart" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="16213">
                                                    <input type="hidden" name="name" value="Deluxe Stethoscope">
                                                    <input type="hidden" name="price" value="2250">
                                                    <input type="submit" class="btn btn-md btn-danger" value="Add To Cart">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="thumbnail thumbnail--no-border first-aid-box">
                                            <header class="text-center">
                                                <h6>
                                                    <span class="text-uppercase">Deluxe Stethoscope</span>
                                                    <!-- <small class="text-info">Suitable for offices and schools</small>
                                                    <small class="text-size">Size: 12 X 6.5 inches</small> -->
                                                </h6>
                                            </header>
                                            <figure>
                                                <div class="price-tag"><img src="{{ asset('img/price-bg.png') }}" alt=""></div>
                                                <div class="price">
                                                    <span class="market-price">Rs. 2500</span>
                                                    <span class="offered-price">Rs. 2250</span>
                                                </div>
                                                <img src="http://admin.onlineaushadhi.com/images/medicine/deluxe-stethoscope.jpg" alt="Deluxe Stethoscope" class="img-responsive">
                                            </figure>
                                            <div class="caption">
                                                <form action="/cart" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="16213">
                                                    <input type="hidden" name="name" value="Deluxe Stethoscope">
                                                    <input type="hidden" name="price" value="2250">
                                                    <input type="submit" class="btn btn-md btn-danger" value="Add To Cart">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="thumbnail thumbnail--no-border first-aid-box">
                                            <header class="text-center">
                                                <h6>
                                                    <span class="text-uppercase">Deluxe Stethoscope</span>
                                                    <!-- <small class="text-info">Suitable for offices and schools</small>
                                                    <small class="text-size">Size: 12 X 6.5 inches</small> -->
                                                </h6>
                                            </header>
                                            <figure>
                                                <div class="price-tag"><img src="{{ asset('img/price-bg.png') }}" alt=""></div>
                                                <div class="price">
                                                    <span class="market-price">Rs. 2500</span>
                                                    <span class="offered-price">Rs. 2250</span>
                                                </div>
                                                <img src="http://admin.onlineaushadhi.com/images/medicine/deluxe-stethoscope.jpg" alt="Deluxe Stethoscope" class="img-responsive">
                                            </figure>
                                            <div class="caption">
                                                <form action="/cart" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="16213">
                                                    <input type="hidden" name="name" value="Deluxe Stethoscope">
                                                    <input type="hidden" name="price" value="2250">
                                                    <input type="submit" class="btn btn-md btn-danger" value="Add To Cart">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="thumbnail thumbnail--no-border first-aid-box">
                                            <header class="text-center">
                                                <h6>
                                                    <span class="text-uppercase">Deluxe Stethoscope</span>
                                                    <!-- <small class="text-info">Suitable for offices and schools</small>
                                                    <small class="text-size">Size: 12 X 6.5 inches</small> -->
                                                </h6>
                                            </header>
                                            <figure>
                                                <div class="price-tag"><img src="{{ asset('img/price-bg.png') }}" alt=""></div>
                                                <div class="price">
                                                    <span class="market-price">Rs. 2500</span>
                                                    <span class="offered-price">Rs. 2250</span>
                                                </div>
                                                <img src="http://admin.onlineaushadhi.com/images/medicine/deluxe-stethoscope.jpg" alt="Deluxe Stethoscope" class="img-responsive">
                                            </figure>
                                            <div class="caption">
                                                <form action="/cart" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="16213">
                                                    <input type="hidden" name="name" value="Deluxe Stethoscope">
                                                    <input type="hidden" name="price" value="2250">
                                                    <input type="submit" class="btn btn-md btn-danger" value="Add To Cart">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="thumbnail thumbnail--no-border first-aid-box">
                                            <header class="text-center">
                                                <h6>
                                                    <span class="text-uppercase">Deluxe Stethoscope</span>
                                                    <!-- <small class="text-info">Suitable for offices and schools</small>
                                                    <small class="text-size">Size: 12 X 6.5 inches</small> -->
                                                </h6>
                                            </header>
                                            <figure>
                                                <div class="price-tag"><img src="{{ asset('img/price-bg.png') }}" alt=""></div>
                                                <div class="price">
                                                    <span class="market-price">Rs. 2500</span>
                                                    <span class="offered-price">Rs. 2250</span>
                                                </div>
                                                <img src="http://admin.onlineaushadhi.com/images/medicine/deluxe-stethoscope.jpg" alt="Deluxe Stethoscope" class="img-responsive">
                                            </figure>
                                            <div class="caption">
                                                <form action="/cart" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="16213">
                                                    <input type="hidden" name="name" value="Deluxe Stethoscope">
                                                    <input type="hidden" name="price" value="2250">
                                                    <input type="submit" class="btn btn-md btn-danger" value="Add To Cart">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="thumbnail thumbnail--no-border first-aid-box">
                                            <header class="text-center">
                                                <h6>
                                                    <span class="text-uppercase">Deluxe Stethoscope</span>
                                                    <!-- <small class="text-info">Suitable for offices and schools</small>
                                                    <small class="text-size">Size: 12 X 6.5 inches</small> -->
                                                </h6>
                                            </header>
                                            <figure>
                                                <div class="price-tag"><img src="{{ asset('img/price-bg.png') }}" alt=""></div>
                                                <div class="price">
                                                    <span class="market-price">Rs. 2500</span>
                                                    <span class="offered-price">Rs. 2250</span>
                                                </div>
                                                <img src="http://admin.onlineaushadhi.com/images/medicine/deluxe-stethoscope.jpg" alt="Deluxe Stethoscope" class="img-responsive">
                                            </figure>
                                            <div class="caption">
                                                <form action="/cart" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="16213">
                                                    <input type="hidden" name="name" value="Deluxe Stethoscope">
                                                    <input type="hidden" name="price" value="2250">
                                                    <input type="submit" class="btn btn-md btn-danger" value="Add To Cart">
                                                </form>
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
@endsection

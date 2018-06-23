@extends('layout')

@section('content')
    <main class="company-primary" role="main">
        <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <section class="search-wrap">
                    <form class="form-inline" action="/products/search">
                        <div class="form-group m-r-5">
                            <div class="input-group">
                                <input type="text" name="searchBox" class="search-input searchBox" id="searchBox"
                                       placeholder="Search for Medicines & OTC Products" style="font-size: 16px;"> 
                                <div class="input-group-addon">
                                    <button class="btn"><i class="oa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-r-5">
                            <div class="input-group text-center">
                                <strong>OR</strong> 
                            </div>
                        </div>
                        <div class="form-group m-r-5">
                            <div class="input-group">
                        <a href="/upload-prescription" type="file" class="file-upload btn btn-danger"><i
                                    class="oa-upload m-r-5"></i>Upload your Prescription</a>
                            </div>
                        </div>
                        <div class="form-group m-r-5">
                            <div class="input-group text-center">
                                <strong>OR</strong> 
                            </div>
                        </div>
                        <div class="form-group m-r-5">
                            <div class="input-group">
                            <a href="https://goo.gl/2TCNW6" type="file" class="file-upload btn btn-danger" target="_blank"><i
                                    class="oa-facebook m-r-5"></i>Send via Facebook</a>
                            </div>
                        </div>
                         
                        <div class="form-group m-r-5">
                            <div class="input-group text-center">
                                <strong>OR</strong> 
                            </div>
                        </div>
                        <div class="form-group m-r-5">
                            <div class="input-group">
                            <a href="mailto:pharmacist@onlineaushadhi.com?subject=Request%20for%20Medicines&body=Please%20find%20my%20prescription%20attached%20herewith.%0A%0ARegards%20" type="file" class="file-upload btn btn-danger"><i class="oa-mail m-r-5"></i>Email</a>
                            </div>
                        </div>

                    </form>
                </section>
                <!-- /.search-wrap -->
            </div>
        </div>
        </div>
        <section id="banner">
            <div class="img-1"><img src="{{ asset('img/bg-ktm.png') }}" alt=""></div>
            <!-- Carousel
                ================================================== -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="container">
                            <div class="carousel-caption">
                                <h5>
                                    Why go to the store?<br>When medicines can come to your door
                                </h5>
                                <p> Get prescription medicines at your doorsteps:<br> Upload your prescription, Confirm
                                    your drugs & its quantities
                                    and Take delivery with full satisfaction
                                </p>
                                <p><a class="btn btn-xs btn-info" href="/register" role="button">Learn More <i
                                                class="oa-next"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="carousel-caption">
                                <h5>
                                    We offer <br>you a better way to shop for health
                                </h5>
                                <p> We provide: <br/> Free home delivery, Quality assured products, Cash on delivery and
                                    20 days return policy
                                </p>
                                <p><a class="btn btn-xs btn-info" href="/faq" role="button">Learn More <i
                                                class="oa-next m-l-10"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="carousel-caption">
                                <h5>
                                    Don't waste your time<br/>
                                    Get your medicines online

                                </h5>
                                <p> Register now and enjoy our services
                                </p>
                                <p><a class="btn btn-xs btn-info" href="/register" role="button">Learn More <i
                                                class="oa-next m-l-10"></i></a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.carousel -->
        </section>
        <!-- Banner Ends -->

        <div class="home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-7 hidden-xs">
                        <section class="search-wrap">
                            <form class="form-inline" action="/products/search">
                                <div class="form-group m-r-5">
                                    <div class="input-group">
                                        <input type="text" name="searchBox" class="search-input searchBox" id="searchBox"
                                               placeholder="Search for Medicines & OTC Products">
                                        <div class="input-group-addon">
                                            <button class="btn"><i class="oa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <a href="/upload-prescription" type="file" class="file-upload btn btn-danger"><i
                                            class="oa-upload m-r-5"></i>Upload your Prescription</a>
                            </form>
                        </section>
                        <!-- /.search-wrap -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-5">
                        <section class="how-to-order how-to-order--position">
                            <div class="how-to-order__wrap">
                                <div class="how-to-order__wrap__gutter">
                                    <span class="title title--sm text-center text-uppercase">How to Order</span>
                                    <ul class="list-unstyled">
                                        <li>Send your Prescription via <strong><a href="https://m.me/healthtips.onlineaushadhi" target="_blank">Facebook</a></strong> or
                                            <strong>Viber</strong> or <strong><a href="/upload-prescription">Upload your Prescription</a></strong></li>
                                        <li><strong>Confirm delivery time & Place</strong><br>After our medicines have
                                            been packed, we will call you to confirm
                                            your feasible delivery time and location.
                                        </li>
                                        <li><strong>Get your Medicines</strong><br>Your medicines will be delivered with
                                            full satisfaction.
                                        </li>
                                    </ul>
                                </div>
                                <a href="/upload-prescription" class="btn btn-primary form-control">Order Now!!</a>
                            </div>
                        </section>
                        <!-- /.how-to-order -->
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-7 visible-xs">
                        <section class="search-wrap">
                            <form class="form-inline">
                                <div class="form-group m-r-5">
                                    <div class="input-group">
                                        <input type="text" name="searchBox" class="search-input searchBox" id="searchBox"
                                               placeholder="Search Your Medicine & OTC Products">
                                        <div class="input-group-addon">
                                            <button class="btn"><i class="oa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <a href="/upload-prescription" type="file" class="file-upload btn btn-danger"><i
                                            class="oa-upload m-r-5"></i>Upload your Prescription</a>
                            </form>
                        </section>
                        <!-- /.search-wrap -->
                    </div>
                </div>

                <!-- <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="stats-wrap text-center">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <span class="stats-numbers">{{ $registeredThisWeek }}</span>
                                    <small>Registered This Week</small>
                                </li>
                                <li>
                                    <span class="stats-numbers">{{ $happyClients }}</span>
                                    <small>Happy Regular Clients</small>
                                </li>
                                <li>
                                    <span class="stats-numbers">{{ $gaVisitors }}k</span>
                                    <small>Monthly Website Visitors</small>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
                <hr> -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="content__gutter-up-down">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="text-uppercase m-b-5">Featured Products</h5>
                                </div>
                            </div>
                            <hr>
                            <br>
                            <div class="row products">
                                @if(isset($featured))
                                @foreach($featured as $key=>$feature)
                                @if($key<8)
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="thumbnail thumbnail--no-border first-aid-box">
                                        <header class="text-center">
                                            <h6>
                                                <span style="font-size: 13px;">{{ucwords(strtolower(substr($feature->medicine_name,0,34)))}}</span>
                                                <!-- <small class="text-info">Suitable for offices and schools</small>
                                                <small class="text-size">Size: 12 X 6.5 inches</small> -->
                                            </h6>
                                        </header>
                                        <figure>
                                            <div class="price-tag"><img src="http://live.onlineaushadhi.com/img/price-bg.png" alt=""></div>
                                            <div class="price">
                                                @if($feature->market_price>0)
                                                <span class="market-price">Rs. {{$feature->market_price}}</span>
                                                @endif
                                                <span class="offered-price">Rs. {{$feature->sp_per_piece}}</span>
                                            </div>
                                            <img src="{{$feature->img}}" alt="{{$feature->medicine_name}}" class="img-responsive" style="min-height: 175px;">
                                        </figure>
                                        <div class="caption">
                                            <a href="/products/{{$feature->slug}}" class="btn btn-md btn-danger">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="content__gutter-up-down">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="text-uppercase m-b-5">TOP SELLING PRODUCTS</h5>
                                </div>
                            </div>
                            <hr>
                            <br>                            
                            <div class="row products">
                                @if(isset($topselling))
                                @foreach($topselling as $key=>$top)
                                @if($key<8)
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="thumbnail thumbnail--no-border first-aid-box">
                                        <header class="text-center">
                                            <h6>
                                                <span class="text-uppercase" style="font-size: 12px;">{{substr($top->medicine_name,0,32)}}</span>
                                                <!-- <small class="text-info">Suitable for offices and schools</small>
                                                <small class="text-size">Size: 12 X 6.5 inches</small> -->
                                            </h6>
                                        </header>
                                        <figure>
                                            <div class="price-tag"><img src="http://live.onlineaushadhi.com/img/price-bg.png" alt=""></div>
                                            <div class="price">
                                                @if($top->market_price>0)
                                                <span class="market-price">Rs. {{$top->market_price}}</span>
                                                @endif
                                                <span class="offered-price">Rs. {{$top->sp_per_piece}}</span>
                                            </div>
                                            <img src="{{$top->img}}" alt="{{$feature->medicine_name}}" class="img-responsive" style="min-height: 175px;">
                                        </figure>
                                        <div class="caption">
                                            <a href="/products/{{$top->slug}}" class="btn btn-md btn-danger">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="content__gutter-up-down">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="text-uppercase m-b-5">DIABETES &amp; HYPERTENSION MANAGEMENT PRODUCTS</h5>
                                </div>
                            </div>
                            <hr>
                            <br>
                            <div class="row products">
                                @if(isset($diabetes_hypertension))
                                @foreach($diabetes_hypertension as $key=>$diahyp)
                                @if($key<8)
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="thumbnail thumbnail--no-border first-aid-box">
                                        <header class="text-center">
                                            <h6>
                                                <span class="text-uppercase">{{substr($diahyp->medicine_name,0,32)}}</span>
                                                <!-- <small class="text-info">Suitable for offices and schools</small>
                                                <small class="text-size">Size: 12 X 6.5 inches</small> -->
                                            </h6>
                                        </header>
                                        <figure>
                                            <div class="price-tag"><img src="http://live.onlineaushadhi.com/img/price-bg.png" alt=""></div>
                                            <div class="price">
                                                @if($diahyp->market_price>0)
                                                <span class="market-price">Rs. {{$diahyp->market_price}}</span>
                                                @endif
                                                <span class="offered-price">Rs. {{$diahyp->sp_per_piece}}</span>
                                            </div>
                                            <img src="{{$diahyp->img}}" alt="{{$feature->medicine_name}}" class="img-responsive" style="min-height: 175px;">
                                        </figure>
                                        <div class="caption">
                                            <a href="/products/{{$diahyp->slug}}" class="btn btn-md btn-danger">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <?php if(isset($_GET['partners'])){?>
                <hr>

                <div class="row">
                    <div class="col-lg-12">
                        <section class="service-wrap text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="text-uppercase">Associate Partners</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="thumbnail">
                                        <figure>
                                            <a href=""><img src="{{ asset('img/dac_logo.png') }}" alt="" ></a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="thumbnail">
                                        <figure>
                                            <i class="oa-checkbox"></i>
                                        </figure>
                                        <div class="caption">
                                            <span class="title title--sm">Trustworthy</span>
                                            <p>Your well-being is our priority so we can assure you that, when you
                                                choose online aushadhi you are choosing only high quality medicines from
                                                the authorized companies...</p>
                                            <a href="/services" class="btn btn-xs btn-primary">Read more &raquo;</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                </div>
                            </div>
                        </section>
                        <!-- Service Wrap Ends -->
                    </div>
                </div>
                <hr>
                <?php } ?>

                <div class="row">
                    <div class="col-lg-12">
                        <section class="service-wrap text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="text-uppercase">Why Choose Our Services</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="thumbnail">
                                        <figure>
                                            <i class="oa-alarm"></i>
                                        </figure>
                                        <div class="caption">
                                            <span class="title title--sm">Save Time</span>
                                            <p>You don’t have the time or you’re having problems getting to your regular
                                                pharmacy? Get your prescription drugs delivered to your home for free
                                                and just relax...</p>
                                            <a href="/services" class="btn btn-xs btn-primary">Read more &raquo;</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="thumbnail">
                                        <figure>
                                            <i class="oa-checkbox"></i>
                                        </figure>
                                        <div class="caption">
                                            <span class="title title--sm">Trustworthy</span>
                                            <p>Your well-being is our priority so we can assure you that, when you
                                                choose online aushadhi you are choosing only high quality medicines from
                                                the authorized companies...</p>
                                            <a href="/services" class="btn btn-xs btn-primary">Read more &raquo;</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="thumbnail">
                                        <figure>
                                            <i class="oa-flask"></i>
                                        </figure>
                                        <div class="caption">
                                            <span class="title title--sm">Refill Service</span>
                                            <p>Once you have registered in our website and uploaded your prescription we
                                                keep track of every client’s regular medicine needs and give them a
                                                refill reminder call...</p>
                                            <a href="/services" class="btn btn-xs btn-primary">Read more &raquo;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Service Wrap Ends -->
                    </div>
                </div>

            </div>

        </div>

    </main>
    <!-- /.Main Content -->

    <section id="push"></section>
    <!--For Sticky Footer-->
@endsection

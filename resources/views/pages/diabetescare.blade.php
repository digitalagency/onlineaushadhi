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
                                <li>Diabetes Care</li>
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
                                        <h5 class="text-uppercase m-b-5">Diabetes Care</h5>
                                        <p>Diabetes mellitus is a group of metabolic diseases characterized by hyperglycemia resulting from defects in insulin secretion, insulin action, or both. Type 2 diabetes, the most prevalent form of the disease, is often asymptomatic in its early stages and can remain undiagnosed for many years.</p>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <div class="row products">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="thumbnail thumbnail--no-border first-aid-box">
                                            <header class="text-center">
                                                <h6>
                                                    <span class="text-uppercase">First Aid Kit - Large</span>
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
                                                <img src="{{ asset('img/first-aid-box-large.jpg') }}" alt="Img Title" class="img-responsive">
                                            </figure>
                                            <div class="caption">
                                                <form action="/cart" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="16213">
                                                    <input type="hidden" name="name" value="FIRST AID BOX (L)">
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
                                                    <span class="text-uppercase">First Aid Kit - Small</span>
                                                    <small class="text-info">Suitable for home, small offices and montessori</small>
                                                    <small class="text-size">Size: 7.5 X 4.5 inches</small>
                                                </h6>
                                            </header>
                                            <figure>
                                                <div class="price-tag"><img src="{{ asset('img/price-bg.png') }}" alt=""></div>
                                                <div class="price">
                                                    <span class="market-price">Rs. 1500</span>
                                                    <span class="offered-price">Rs. 1350</span>
                                                </div>
                                                <img src="{{ asset('img/first-aid-kit-small.jpg') }}" alt="Img Title" class="img-responsive">
                                            </figure>
                                            <div class="caption">
                                                <span class="title title--sm m-b-15">This Box Contains:</span>
                                                <ul class="list-unstyled list-medicines m-b-25">
                                                    <li> 1 digital Thermometer</li>
                                                    <li> 1 tweezers </li>
                                                    <li> 1 Scissors </li>
                                                    <li> 1 Glucose Tablet packet of 9 tablets</li>
                                                    <li> 5 Band aids </li>
                                                    <li> 1 cotton roll </li>
                                                    <li> 1 Gauge pad</li>
                                                    <li> 1 adhesive cloth tape </li>
                                                    <li> 1 antibiotic ointment </li>
                                                    <li> 1 roller bandage</li>
                                                    <li> 1 Antiseptic Disinfectant (Dettol)</li>
                                                    <li> 1 strip Antacid (Digene)</li>
                                                    <li> 1 strip Paracetamol</li>
                                                    <li> 1 Strip antidiarrheal tablets </li>
                                                    <li> 1 Vicks vapour rub small</li>
                                                    <li> 1 Crepe Roller Bandage</li>
                                                    <li> 1 pain relieveing massage cream</li>
                                                    <li> 1 ORS Solution (Jeevan Jal)</li>
                                                    <li> 1 Small notepad and pen to write important numbers like ambulance, hospital, doctors etc.</li>
                                                </ul>
                                                <p>
                                                    <form action="/cart" method="POST">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="id" value="15963">
                                                        <input type="hidden" name="name" value="FIRST AID BOX (M)">
                                                        <input type="hidden" name="price" value="1350">
                                                        <input type="submit" class="btn btn-md btn-danger" value="Add To Cart">
                                                    </form>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="thumbnail thumbnail--no-border first-aid-box">
                                            <header class="text-center">
                                                <h6>
                                                    <span class="text-uppercase">First Aid Kit - Travel Bag</span>
                                                    <small class="text-info">Suitable for carrying while traveling</small>
                                                    <small class="text-size">Size: 8 X 6 inches with pokets and pouches</small>
                                                </h6>
                                            </header>
                                            <figure>
                                                <div class="price-tag"><img src="{{ asset('img/price-bg.png') }}" alt=""></div>
                                                <div class="price">
                                                    <span class="market-price">Rs. 1200</span>
                                                    <span class="offered-price">Rs. 1000</span>
                                                </div>
                                                <img src="{{ asset('img/first-aid-travel-bag.jpg') }}" alt="Img Title" class="img-responsive">
                                            </figure>
                                            <div class="caption">
                                                <span class="title title--sm m-b-15">This Box Contains:</span>
                                                <ul class="list-unstyled list-medicines m-b-25">
                                                    <li> 1 digital Thermometer </li>
                                                    <li> 1 Scissors </li>
                                                    <li> 1 Glucose packet of 9 tablets</li>
                                                    <li> 1 Disposable Masks</li>
                                                    <li> 5 Band aids </li>
                                                    <li> 1 cotton roll </li>
                                                    <li> 1 adhesive cloth tape </li>
                                                    <li> 1 antibiotic ointment </li>
                                                    <li> 1 roller bandage </li>
                                                    <li> 1 strip Antacid (Digene)</li>
                                                    <li> 1 strip Paracetamol</li>
                                                    <li> 1 strip antidiarrhearal tablets</li>
                                                    <li> 1 vick vapor rub small</li>
                                                    <li> 1 pain relieveing massage cream</li>
                                                    <li> 1 crepe roller bandage</li>
                                                    <li> 2 ORS Solution (Jeevan Jal)</li>
                                                    <li> 1 Small notepad and pen to write important numbers like ambulance, hospital, doctors etc.</li>
                                                </ul>
                                                <p>
                                                <form action="/cart" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="15964">
                                                    <input type="hidden" name="name" value="FIRST AID BOX (S)">
                                                    <input type="hidden" name="price" value="1000">
                                                    <input type="submit" class="btn btn-md btn-danger" value="Add To Cart">
                                                </form>
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

    <section id="push"></section>
@endsection

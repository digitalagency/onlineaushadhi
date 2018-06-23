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
                                <li>Search</li>
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
                                    Your Cart
                                    <br>
                                </h5>
                                <hr class="m-b-35">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">

                                    <div class="product-list product-list__border m-b-30">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                @if (session()->has('success_message'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('success_message') }}
                                                    </div>
                                                @endif

                                                @if (session()->has('error_message'))
                                                    <div class="alert alert-danger">
                                                        {{ session()->get('error_message') }}
                                                    </div>
                                                @endif

                                                @if (sizeof(Cart::content()) > 0)

                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-7 col-sm-6">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th class="table-image"></th>
                                                                    <th>Product</th>
                                                                    <th>Quantity</th>
                                                                    <th style="text-align: right">Rate</th>
                                                                    <th style="text-align: right">Total</th>
                                                                    <th></th>
                                                                </tr>
                                                                </thead>

                                                                <tbody>
                                                                @foreach (Cart::content() as $item)
                                                                    <tr>
                                                                        <td class="table-image">
                                                                            <span class="product-img">
                                                                                @if ($item->img)
                                                                                    <img src="{{ $item->model->img }}" alt="{{ $item->name }}" />
                                                                                @else
                                                                                    <img src="{{ asset('img/no-med.png') }}" alt="{{ $item->name }}" class="no-med" />
                                                                                @endif
                                                                                {{--<a href="{{ url('shop', [$item->model->slug]) }}"><img src="{{ asset('img/' . $item->model->image) }}" alt="product" class="img-responsive cart-image"></a>--}}
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            {{ $item->name }}
                                                                        </td>
                                                                        <td>
                                                                            <select class="quantity" data-id="{{ $item->rowId }}">
                                                                                <option {{ $item->qty == 1 ? 'selected' : '' }}>1</option>
                                                                                <option {{ $item->qty == 2 ? 'selected' : '' }}>2</option>
                                                                                <option {{ $item->qty == 3 ? 'selected' : '' }}>3</option>
                                                                                <option {{ $item->qty == 4 ? 'selected' : '' }}>4</option>
                                                                                <option {{ $item->qty == 5 ? 'selected' : '' }}>5</option>
                                                                                <option {{ $item->qty == 6 ? 'selected' : '' }}>6</option>
                                                                                <option {{ $item->qty == 7 ? 'selected' : '' }}>7</option>
                                                                                <option {{ $item->qty == 8 ? 'selected' : '' }}>8</option>
                                                                                <option {{ $item->qty == 9 ? 'selected' : '' }}>9</option>
                                                                                <option {{ $item->qty == 10 ? 'selected' : '' }}>10</option>
                                                                                <option {{ $item->qty == 11 ? 'selected' : '' }}>11</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="text-align: right">
                                                                            @if ($item->price >0)
                                                                            {{ $item->price }}
                                                                            @else
                                                                              N/A
                                                                            @endif
                                                                        </td>
                                                                        <td style="text-align: right">
                                                                            @if ($item->price > 0)
                                                                            {{ $item->price*$item->qty }}
                                                                            @else
                                                                              N/A
                                                                            @endif
                                                                        </td>
                                                                        <!-- <td>${{ $item->subtotal }}</td> -->
                                                                        <td>
                                                                            <form action="{{ url('cart', [$item->rowId]) }}" method="POST" class="side-by-side text-right">
                                                                                {!! csrf_field() !!}
                                                                                <input type="hidden" name="_method" value="DELETE">
                                                                                <button class="btn btn-danger btn-del" type="submit"><i class="oa-trash"></i></button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>

                                                                @endforeach
                                                                <tr>
                                                                    <td class="table-image"></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td class="small-caps table-bg" style="text-align: right">Subtotal</td>
                                                                    <td style="text-align: right">Nrs. {{ Cart::instance('default')->subtotal() }}</td>
                                                                    <td></td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td class="table-image"></td>
                                                                    <td></td>
                                                                    <td class="small-caps table-bg" style="text-align: right">Tax</td>
                                                                    <td>${{ Cart::instance('default')->tax() }}</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr> -->

                                                                <!-- <tr class="border-bottom">
                                                                    <td class="table-image"></td>
                                                                    <td style="padding: 40px;"></td>
                                                                    <td class="small-caps table-bg" style="text-align: right">Your Total</td>
                                                                    <td class="table-bg">${{ Cart::total() }}</td>
                                                                    <td class="column-spacer"></td>
                                                                    <td></td>
                                                                </tr> -->

                                                                </tbody>
                                                            </table>
                                                            <hr>
                                                            <form action="{{ url('/emptyCart') }}" method="POST" class="pull-left m-r-5">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <input type="submit" class="btn btn-danger btn-md" value="Empty Cart">
                                                            </form>
                                                            <a href="{{ url('/order') }}" class="btn btn-success btn-md">Order Now</a>
                                                        </div>
                                                        <div class="col-lg-5 col-md-6 col-sm-6">
                                                            <span class="title title--md">Note:</span>
                                                            <ol class="more-gutter">
                                                                <li>Once you placed the order our Pharmacist will contact you as soon as possible.</li>
                                                                <li>Prices are subjected to be changed based on manufacturers policies.</li>
                                                                <li>Click here to know the <a href="/return">Return Policies.</a></li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>


                                                @else

                                                    <h3>You have no items in your shopping cart.</h3>
                                                    <a href="{{ url('/products') }}" class="btn btn-primary btn-lg">Continue Shopping</a>

                                                @endif

                                                <div class="spacer"></div>
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

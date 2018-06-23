@extends('layout')

@section('content')
<main class="company-primary" role="main">
  <div class="home"> @include('partials.content-search') </div>
  <div class="breadcrumb-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="breadcrumb list-inline list-unstyled">
            <li><a href="/">Home</a> </li>
            <li>Item</li>
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
            <h5> Item Details <br>
            </h5>
            <hr class="m-b-35">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12"> @if (session()->has('error_message'))
            <div class="alert alert-danger"> {{ session()->get('error_message') }} </div>
            @endif
            <div class="product-list product-list__border m-b-30">
              <div class="row">
                <div class="col-lg-3">
                  <figure> @if ($product->img) <img src="{{ $product->img }}" alt="{{ $product->medicine_name }}" /> @else <img src="{{ asset('img/no-med.png') }}" alt="{{ $product->medicine_name }}" /> @endif </figure>
                </div>
                <form action="/cart" method="POST">
                  <div class="col-lg-7">
                    <h1 class="title title--sm">{{ $product->medicine_name }}</h1>
                    <p class="m-b-5"> @if ($product->composition) <br/>
                      <b>Composition:</b> {{ $product->composition }}
                      @endif
                      @if ($product->indications) <br/>
                      <b>Indications:</b> {{ $product->indications }}
                      @endif </p>
                    <p> @if ($product->min_stock > 0) <span class="label label-success">Available</span> @endif
                      
                      @if ($product->min_stock == 0) <span class="label label-danger">Out of Stock</span> @endif </p>
                    @if ($product->company)
                    <p><span class="text-muted">Manufactured By: {{ $product->company->fullname }}</span></p>
                    @endif
                    
                    @if (!empty($product->item_description))
                    {!! $product->item_description !!}
                    @endif
                    <p> {{ csrf_field() }}
                      <input type="hidden" name="id" value="{{ $product->id }}">
                      <input type="hidden" name="name" value="{{ $product->medicine_name }}">
                      @if (!empty($product->sp_per_piece))
                      <input type="hidden" name="price" value="{{ $product->sp_per_piece }}">
                      @else
                      <input type="hidden" name="price" value="0">
                      @endif
                      
                      @if (!empty($product->slug))
                      <input type="hidden" name="slug" value="{{ $product->slug }}">
                      @endif <span class="price" style="font-size: 19px; margin-bottom:5px;"> @if (!empty($product->market_price))
                      Offer Price: 
                      @else
                      Price: 
                      @endif 
                      @if (!empty($product->sp_per_piece))
                      Nrs. {{$product->sp_per_piece}} Only
                      @else
                      N/A
                      @endif </span>
                      <input type="number" name="quantity" value="1" min="1" style="width:50px;text-align: center;"/>
                      <input type="submit" class="btn btn-danger" value="Add to Cart">
                    </p>
                  </div>
                </form>
                <div class="col-lg-2"> @if (!empty($product->market_price)) <span class="price" style="font-size: 19px; text-decoration: line-through;">Price: Nrs. {{$product->market_price}} </span> @endif <span class="price" style="font-size: 19px;"> @if (!empty($product->market_price))
                  Offer:
                  @else
                  Price:
                  @endif
                  
                  @if (!empty($product->sp_per_piece))
                  Nrs. {{$product->sp_per_piece}}
                  @else
                  N/A
                  @endif </span> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 m-b-35"> <span class="text-info"><b>Note:</b> Prices are subjected to change at the time of delivery according to manufacturer's policy.</span> </div>
        </div>
        @if ($relatedProducts->count())
        <div class="row">
          <div class="col-lg-12">
            <h5 class="title title--sm"> Available Substitutes <br>
            </h5>
            <hr class="m-b-35">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="masonary blog relatedProducts"> @foreach ($relatedProducts as $prod)
              <div class="masonary__grid m-b-30">
                <div class="thumbnail thumbnail--no-border thumbnail__products text-center">
                  <figure> @if ($prod->img) <img src="{{ $prod->img }}" alt="{{ $prod->medicine_name }}" /> @else <img src="{{ asset('img/no-med.png') }}" alt="Default" /> @endif </figure>
                  <div class="caption">
                    <h3 class="title title--md m-b-5">{{ $prod->medicine_name }}</h3>
                    @if ($product->company) <span class="text-muted box-block"><small>Manufactured by: {{ $product->company->fullname }}</small></span> @endif
                    
                    
                    {{--
                    <p><span class="price">Price: N/A</span></p>
                    --}}
                    <p>
                    <form action="/cart" method="POST">
                      {{ csrf_field() }}
                      <input type="hidden" name="id" value="{{ $product->id }}">
                      <input type="hidden" name="name" value="{{ $product->medicine_name }}">
                      <input type="hidden" name="price" value="{{ $product->cost_per_piece }}">
                      <input type="submit" class="btn btn-danger" value="Add to Cart">
                      <span class="price" style="font-size: 19px;">Price: 
                      @if (!empty($product->sp_per_piece))
                      Nrs. {{$product->sp_per_piece}}
                      @else
                      N/A
                      @endif </span>
                    </form>
                    </p>
                  </div>
                </div>
              </div>
              @endforeach </section>
          </div>
        </div>
        @endif </div>
    </div>
  </div>
  </div>
</main>
<section id="push"></section>
@endsection 
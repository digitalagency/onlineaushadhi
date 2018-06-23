<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $relatedProducts = Product::relatedProducts($product);

        return view('pages.search', compact('product', 'relatedProducts'));
    }

    public function showBySlug($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $relatedProducts = Product::relatedProducts($product);

        return view('pages.search', compact('product', 'relatedProducts'));
    }

    public function search(Request $request)
    {
        $keyword = $request->get('searchBox', '');

        $maxIdProduct = Cart::content()->max();
        $productId = $maxIdProduct && ($maxIdProduct->id >= 99999999) ? ($maxIdProduct->id + 1) : 99999999;

        if($productId=="99999999")
            $productId=rand(10000000,99999999);        

        $product = (object)[
            'id' => $productId,
            'img' => '',
            'medicine_name' => $keyword,
            'medicine_description' => '',
            'composition' => '',
            'indications' => '',
            'min_stock' => 0,
            'cost_per_piece' => 0,
            'company' => ''
        ];

        $relatedProducts = collect([]);

        session()->flash('error_message', '﻿Requested medicine is currently unavailable in our record. But you can proceed adding it in your cart. We will check with our suppliers and contact you as soon as possible with availability status.');
        return view('pages.search', compact('product', 'relatedProducts'));
    }

    public function autocompleteSearch(Request $request)
    {
        $keyword = $request->get('term', '');
        $products = Product::autocompleteSearch($keyword);

        return response()->json($products);
    }
}

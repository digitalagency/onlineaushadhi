<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemaps = Product::createSitemap();
        //print_r($sitemaps);
        return view('sitemap.index', compact('sitemaps'));
    }
}

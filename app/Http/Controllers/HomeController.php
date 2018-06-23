<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Sale;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('prescriptions')) {
            return redirect(route('prescriptions.save'));
        }

        if (Cart::count() > 0) {
            return redirect(route('order'));
        }

        $user = $request->user();

        $sales = [];
        //dd($user);
        //if ($user->find(1)->has('sales')) {
            $sales = $user->sales()->orderBy('id','desc')->get();
        //}

        $prescriptions = [];
        //if ($user->has('prescriptions')) {
            $prescriptions = $user->prescriptions()->orderBy('id','desc')->get();
        //}

        return view('pages.home', compact('user', 'sales', 'prescriptions'));
    }

    public function show(Sale $sale)
    {
        $orders = $sale->find($sale->id)->orders()->get();

        return view('ajax.salesDetail', compact('orders', 'sale'));
    }

    
}

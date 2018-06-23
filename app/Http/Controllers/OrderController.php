<?php

namespace App\Http\Controllers;

use App\Mail\OrderReceived;
use App\OrderReview;
use App\Sale;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function store()
    {
        $cartItems = Cart::content();

        $sale = new Sale();

        $sale->client_id = Auth::id();
        $sale->date = Carbon::now()->format('Y-m-d');
        $sale->time = Carbon::now();
        $sale->total_amount = Cart::total('2', '', '');


        if ($cartItems->isEmpty()) {
            return redirect(route('cart'));
        }

        $insert_id = $sale->create([
            'client_id' => Auth::id(),
            'date' => Carbon::now()->format('Y-m-d'),
            'time' => Carbon::now(),
            'total_amount' => Cart::total('2', '', '')
        ])->id;

        if (!$insert_id) {
            return redirect(route('cart')) ;
        }

        $dataSet = [];
        foreach ($cartItems as $orderItem) {
            $dataSet[] = [
                'sales_id' => $insert_id,
                'medicine_id' => $orderItem->id >= 99999999 ? 0 : $orderItem->id,
                'quantity' => $orderItem->qty,
                'medicine_name' => $orderItem->name
            ];
        }

        if (!OrderReview::insert($dataSet)) {
            return redirect(route('cart')) ;
        }

        // send email
        Mail::to(env('MAIL_COMPANY_ADDRESS', 'pharmacist@onlineaushadhi.com'))
            ->send(new OrderReceived($dataSet));

        Cart::destroy();

        return redirect(route('pages.thanks'));
    }
}

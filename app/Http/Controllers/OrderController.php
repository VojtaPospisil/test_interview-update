<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
    }

    public function buy_product(Request $request) {

        $user = Auth::User()->id;
        $order = new Order;
        $order->product_id = $request->product_id;
        $order->user_id = $user;
        $order->status = 'ordered';

        $order->save();
        Session::flash('item_added', 'Produkt byl přidán do košíku');

        return redirect()->action('Customers\ProductsController@index');
    }

    public function order_review() {

        $user = $user = Auth::User()->id;
        $items_ordered = Order::where('user_id', $user  and 'status', 'ordered')->get();
        $prices = Order::leftJoin('Products','Orders.product_id' , '=', 'Products.id')->where('user_id', $user)->pluck('price');
        $total_value = 0;

        foreach($prices as $price) {
            $total_value += $price;
        }

        return view('customer.order_review',compact('items_ordered','total_value'));
    }

    public function basket_delete($id) {

        $delete = Order::where('id', $id)->first();
        $delete->delete();

        return redirect()->action('OrderController@order_review');
    }
}

<?php

namespace App\Http\Controllers\Customers;

use App\Product;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
    }

    public function index() {

        $products = Product::all();

        $user = Auth::User()->id;
        $items_ordered = Order::where('user_id', $user  and 'status', 'ordered')->count();

        return view ('customer.product',['products' => $products], ['items_ordered' => $items_ordered]);
    }
}

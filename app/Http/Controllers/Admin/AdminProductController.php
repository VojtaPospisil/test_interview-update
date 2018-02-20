<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use App\Order;

class AdminProductController extends Controller
{
    public function __construct() {

        $this->middleware('auth:admin');
    }

    public function index() {

        $products = Product::all();

        return view ('admin.main',['products' => $products]);
    }

    public function add_product(Request $request) {

        $request->validate([

            'nazev'     =>  'required',
            'popis'      =>  'required',
            'cena'     =>  'required',
        ]);

        $product = new Product;
        $product -> title       = $request['nazev'];
        $product -> description = $request['popis'];
        $product -> price       = $request['cena'];

        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);

            $product->image_path = $filename;
        }

        $product -> save();
        Session::flash('succes', 'Nový produkt byl přidán');
        return redirect()->action('Admin\AdminProductController@index');
    }


    public function update_product(Request $request) {

        $product = Product::find($request->id);
        $product -> title       = $request['title'];
        $product -> description = $request['desc'];
        $product -> price       = $request['price'];

        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);

            $product->image_path = $filename;
        }

        $product->save();
        Session::flash('updated', 'Tento produkt byl aktualizován');

        return redirect()->action('Admin\AdminProductController@index');
    }

    public function delete_product(Request $request) {

        $product = Product::find($request->id);
        $product->delete();
        Session::flash('deleted', 'Produkt byl smazán');

        return redirect()->action('Admin\AdminProductController@index');

    }

    public function get_orders() {

        $orders = Order::all();

        return view ('admin.orders', ['orders' => $orders]);
    }
}

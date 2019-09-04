<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use Illuminate\Http\Request;

class shoppingController extends Controller
{
    public function add_to_cart()
    {
        $pdt = Product::find(request()->pdt_id);

        $cart = Cart::add([
          'id' => $pdt->id,
          'name' => $pdt->name,
          'qty' => request()->qty,
          'price' => $pdt->price,
        ]);

        return redirect()->route('cart');
    }

    public function cart()
    {
        return view('cart');
    }

    public function cart_delete($id)
    {
        Cart::remove($id);

        return redirect()->back();
    }
}

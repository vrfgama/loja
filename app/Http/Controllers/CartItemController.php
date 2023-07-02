<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    public function cartAdd($id, Request $request)
    {
        $product= Product::find($id);

        CartItem::create([
            'price'=> $product->price,
            'amount'=> 1,
            'user_id'=> 1,
            'product_id'=> $product->id
        ]);

        return redirect()->back()->with('erro', 'Login ou senha inválidos');
    }
}

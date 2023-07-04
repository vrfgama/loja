<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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

    public function list()
    {
        $list= DB::table('cart_itens as ci')
                   ->select('p.name as name', 'ci.amount as amount', 'ci.price as price')
                   ->join('products as p', 'ci.product_id', '=', 'p.id')
                   ->get(); 


        $tt_price= 0;
        $tt_itens= 0;

        foreach($list as $item){
            $tt_price+= $item->price;
            $tt_itens+= $item->amount;
        }


        return view('cart_list', ['list'=> $list, 'tt_price'=>$tt_price, 'tt_amount'=> $tt_itens]);
    }
}

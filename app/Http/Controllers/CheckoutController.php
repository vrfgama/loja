<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function address(Request $request)
    {
        $price= $request->session()->get('tt_price');
        $amount= $request->session()->get('tt_amount');

        //***
        $user= User::find(1);
        $request->session()->put(['user'=>$user]);
        $user2= $request->session()->get('user');
        //***

        $address= Address::find($user2->id);
        
        return view('checkout-address',['address'=>$address]);
    }


    public function payment()
    {
        

    }
}

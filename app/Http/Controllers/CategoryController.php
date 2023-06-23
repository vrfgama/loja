<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    
    public function listCategoriesAndProducts()
    {
                
        $select= DB::table('categories as c')
                    ->select('c.id as c_id', 'c.name as c_name', 'p.id as p_id', 'p.name as p_name', 'p.ean as p_ean', 'p.description as p_description', 'p.price as p_price', 'p.stock as p_stock')
                    ->join('products as p', 'p.category_id', '=', 'c.id')
                    ->get();

        $list = $select->groupBy('c_name');
        

        return view('catalog', ['list'=>$list]);
    }


}

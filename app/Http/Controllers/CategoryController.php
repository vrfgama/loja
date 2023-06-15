<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;



class CategoryController extends Controller
{
    
    public function listCategoriesAndProducts()
    {

        $categories= Category::all();
        $list= array();

        foreach($categories as $categories){
            $products= Product::where('category_id', $categories->id)->limit(5)->get();
            $list[$categories->name] = $products;
        }                

        return view('catalog', ['list'=>$list]);

    }
}

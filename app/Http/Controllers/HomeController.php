<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $total_food = Product::where
        ('category_id', 1)->count();
        $total_drink = Product::where
        ('category_id', 2)->count();
        // dd($products);
        $foods = product::where('category_id',1)->get();
        $drinks = product::where('category_id',2)->get();



        return view(
            'welcome',
            compact('total_food',  'total_drink', 'foods','drinks')
        );
    }
}


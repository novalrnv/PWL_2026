<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodbeverage(){
        return view('products.category.food-beverage');
    }

    public function beautyhealth(){
        return view('products.category.beauty-health');
    }

    public function homecare(){
        return view('products.category.home-care');
    }

    public function babykid(){
        return view('products.category.baby-kid');
    }
}

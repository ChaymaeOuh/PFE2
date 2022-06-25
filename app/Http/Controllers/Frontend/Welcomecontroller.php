<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class Welcomecontroller extends Controller
{
    //
    public function index()
    {
        $featured_products = Product::where('public', '1')->take(15)->get();
        return view('Welcome', compact('featured_products'));
    }
}

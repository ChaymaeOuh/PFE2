<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
 {
      public function index()
      {
         return view('Wishlist');
      }

//      public function category($nomCat)
//     {
//         if(Category::where('nomCat', $nomCat)->exists()){
//             $category = Category::where('nomCat',$nomCat)->first();
//             $products = Product::where('id_cat', $category->id_cat)->get();
//             return view('Category', compact('category','products'));
//         }
//         else{
//             return redirect('/')->with('status','Categorie n’existe pas');
//         }

//     }
//     public function productdetails($nomCat, $nom_prod)
//     {
//         if(Category::where('nomCat', $nomCat)->exists()){
//             if(Product::where('nom_prod', $nom_prod)->exists()){
//                 $featured_products = Product::where('public', '1')->take(12)->get();
//                 $products = Product::where('nom_prod', $nom_prod)->first();
//                 return view('Product', compact('products','featured_products'));
//             }
//             else{
//                 return redirect('/')->with('status','Produit introuvable');
//             }
//         }
//         else{
//             return redirect('/')->with('status','Categorie n’existe pas');
//         }
//     }
 }

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Category;

class Welcomecontroller extends Controller
{

    public function index()
    {
        $featured_products = Product::where('public', '1')->take(12)->get();
        return view('Welcome', compact('featured_products'));
    }
    public function category($nomCat)
    {
        if(Category::where('nomCat', $nomCat)->exists()){
            $category = Category::where('nomCat',$nomCat)->first();
            $products = Product::where('id_cat', $category->id_cat)->get();
            return view('Category', compact('category','products'));
        }
        else{
            return redirect('/')->with('status','Categorie n’existe pas');
        }

    }
    public function productdetails($nomCat, $nom_prod)
    {
        if(Category::where('nomCat', $nomCat)->exists()){
            if(Product::where('nom_prod', $nom_prod)->exists()){
                $category = Category::where('nomCat',$nomCat)->first();
                $products = Product::where('nom_prod', $nom_prod)->first();
                return view('Product', compact('category','products'));
            }
            else{
                return redirect('/')->with('status','Produit introuvable');
            }
        }
        else{
            return redirect('/')->with('status','Categorie n’existe pas');
        }
    }

    public function detailsProduct($nom_prod){
             $products = Product::where('nom_prod', $nom_prod)->first();
             $category = Category::where('id_cat',$products->id_cat)->first();
             return view('Product', compact('category','products'));

     }

     public function wish(){
        return view('/Wishlist');
     }

}

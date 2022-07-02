<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');
        
        if(Auth::check())
        {
            $prod_check = Product::where('id_prod',$product_id)->firstOrFail();

            if($prod_check)
            {
                if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
                {
                    return response()->json(['status' => $prod_check->name."Deja Ajoute au panier"]);

                }
                else
                {
                $cartItem = new Cart();
                $cartItem->prod_id = $product_id;
                $cartItem->user_id = Auth::id();
                $cartItem->prod_qty = $product_qty;
                $cartItem->save();
                return response()->json(['status' => $prod_check->name."Ajoute au panier"]);
                }

            }
        }
        else
        {
            return response()->json(['status' => "Connectez-vous pour continuer"]);
        }

    }

    public function viewcart()
    {
        $cartitems = Cart::where('user_id', Auth::id())->get();
        return view('frontend.cart', compact('cartitems'));
    }

    public function deleteproduct(Request $request)
    {
        if(Auth::check())
        {
            $prod_id = $request->input('prod_id');
            if(Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists())
            {
                $cartItems = Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
                $cartItems->delete();
                return response()->json(['status' => "Produit supprime avec succes"]);

            }
        }
        else
        {
            return response()->json(['status' => "Connectez-vous pour continuer"]);
        }
    }

    public function updatecart(Request $request)
    {
        $prod_id = $request->input('prod_id');
        $prod_qty = $request->input('prod_qty');

        if(Auth::check())
        {
            if(Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists())
            {
                $cart = Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
                $cart->prod_qty = $prod_qty;
                $cart->update();
                return response()->json(['status'=>"Quantite a ete change "]);
            }

        }

    }
}

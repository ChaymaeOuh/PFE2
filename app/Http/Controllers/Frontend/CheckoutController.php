<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;


class CheckoutController extends Controller
{
   public function index()
   {
       $cartitems = Cart::where('user_id',Auth::id())->get();
       return view('frontend.checkout', compact('cartitems'));
   }

   public function placeorder(Request $request)
   {

    $order = new Order();
    
    $order->id_cli = Auth::id();
    
         //calcul total

    $totals = 0;
    $cartitems_total = Cart::where('user_id', Auth::id())->get();
    foreach( $cartitems_total as $prod )
    { 
        $totals += $prod->products->prix_prod * $prod->prd_qty;

    }

    $order->total = $totals;
    $order->num_suivi = 'admin'.rand(1111,999);
    $order->save();

    $order->id_commande;

    

    $cartitems = Cart::where('user_id',Auth::id())->get();
    foreach($cartitems as $item)
    {
        OrderItem::create([
            'id_commande'=>$order->id_commande,
            'id_prod'=>$item->prod_id,
            'quantite'=>$item->prod_qty,
            'prix'=>$item->products->prix_prod,
        ]);

         $prod = Product::where('id_prod', $item->prod_id)->first();
         $prod->quantite_prod = $prod->quantite_prod - $item->prod_qty;
         $prod->update();
    }

    if(Auth::user()->prenom == NULL)
    {
        $user = User::where('id',Auth::id())->first();
    
        $user->prenom = $request->input('prenom');
        $user->telCli = $request->input('tel');
        $user->adresseCli = $request->input('adresse');
        $user->update();

        
   }
   $cartitems = Cart::where('user_id',Auth::id())->get();
   Cart::destroy($cartitems);

   return redirect('/home')->with('status',"commande passée avec succès");
 }

}

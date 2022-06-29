<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

use Illuminate\Support\Facades\Auth;



class MyOrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('id_cli',Auth::id())->get();
        return view('frontend.orders.index', compact('orders'));
    }

    public function view($id_commande)
    {
        $orders = Order::where('id_commande',$id_commande )->where('id_cli', Auth::id())->first();
        return view('frontend.orders.view',compact('orders'));
    }
    
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $commande = Order::where('etat','0')->get();
        return view('admin.orders.index',compact('commande'));
    }

    public function view($id_commande)
    {
        $commande = Order::where('id_commande',$id_commande)->first();
        return view('admin.orders.view', compact('commande'));
    }

    public function add()
    {
        $user = User::all();
        return view('admin.orders.view', compact('user'));
    }
}

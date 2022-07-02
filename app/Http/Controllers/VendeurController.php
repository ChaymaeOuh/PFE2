<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendeurController extends Controller
{
    //
    public function index()
   {
       return view('vendre');
   }
   public function etrevendeur()
   {
    return view('dashbordVendeur');
   }
}


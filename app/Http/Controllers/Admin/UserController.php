<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Supprt\Facades\Auth;

class UserController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function viewuser($id)
    {
        $users = User::find($id);
        return view('admin.users.view', compact('users'));
 
    }

    public function destroy($id)
    {
        $users = User::find($id);
         $users->delete();
         return redirect('users')->with('status',"Client supprimé avec succès");

    }
}

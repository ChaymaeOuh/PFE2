<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $produits = Product::all();
        return view('admin.produits.index', compact('produits'));
    }

    public function add()
    {
        $categories = Category::all();
        return view('admin.produits.add', compact('categories'));
    }

    public function insert(Request $request)
    {
        $produits = new Product();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientoriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/images/'.$filename);
            $produits->image = $filename;
        }
        $produits->id_cat = $request->input('cate_id');
        $produits->nom_prod = $request->input('name');
        $produits->description_prod = $request->input('description');
        $produits->descriptions_prod = $request->input('descriptions');
        $produits->prix_prod = $request->input('price');
        $produits->quantite_prod = $request->input('quantite');
        $produits->save();
          return redirect('produits')->with('status',"Produit ajouté avec succès");

    }

    public function edit($id_prod)
    {
        $produits = Product::find($id_prod);
        return view('admin.produits.edit', compact('produits'));
    }

    public function modifier(Request $request, $id_prod)
    {
        $produits = Product::find($id_prod);
        if($request->hasFile('image'))
        {
        $path = 'assets/uploads/produits/'.$produits->image;
        if(File::exists($path))
         {
            File::delete($path);
         }

            $file = $request->file('image');
            $ext = $file->getClientoriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/produits'.$filename);
            $produits->image = $filename;
        }

        $produits->nom_prod = $request->input('name');
        $produits->description_prod = $request->input('description');
        $produits->prix_prod = $request->input('price');
        $produits->quantite_prod = $request->input('quantite');
        $produits->update();
          return redirect('produits')->with('status',"Produit modifié avec succès");
    }

    public function destroy($id_prod)
    {
        $produits = Product::find($id_prod);
        $path = 'assets/uploads/produits/'.$produits->image;
        if(File::exists($path))
         {
            File::delete($path);
         }
         $produits->delete();
         return redirect('produits')->with('status',"Produit supprimé avec succès");

    }
}

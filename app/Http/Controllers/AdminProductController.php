<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index() {
        return view("admin.admin-list", [
            'products' => Product::all(),
        ]);
    }

    public function create() {
        return view("admin.create", [
            'categories' => Category::all()
        ]);
    }

    public function destroy(Product $product)
    {   
        $product->delete();

        return redirect('/admin/produits')->with('status', 'Le produit '.$product->name.' a été supprimé.');
    }



    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|min:2|unique:products,name',
            'description' => 'required|min:10',
            'prix' => 'required|numeric',
            'image' => 'required|image|max:1024',
            'bestproduct' => 'required',
            'category' => 'exists:categories,id',
        ]);

        Product::create([
            'name' => request('name'),
            $name = request('name'),
            'description' => request('description'),
            'prix' => request('prix'),
            'slug' => request($name),
            'image' => '/storage/'.request('image')->store('covers', 'public'),
            'coup_de_coeur' => request('bestproduct'),
            'category_id' => request('category'),
        ]);

        return redirect('admin/produits')->with('status', 'Le produit a été ajouté.');
    }

    public function edit(Product $product)
    {
        return view('admin.edit', [
            'product' => $product,
        ]);
    }

    public function update(Request $request, Product $product)
    {
        // Vérifier les erreurs
        request()->validate([
            'name' => 'required|min:3',
        ]);

        // On modifie la catégorie dans la BDD
        $product->update([
            'name' => request('name'),
        ]);

        return redirect('/admin/produits')->with('status', 'Le produit '.$product->name.' a été modifié.');
    }


    public function delete() {
        return view("admin.delete");
    }
}

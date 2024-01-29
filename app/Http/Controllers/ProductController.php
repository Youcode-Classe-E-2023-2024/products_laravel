<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    //
      function index() {
        $products = product::All();
        return view("products", compact("products"));
      }
        
    public function remove($id){
        $product = product::find($id);
        $product->delete();
        return redirect('/')->with('status',"data deleted successfully");
    }
      
    public function update(product $post) {
        $validated = request()->validate([
            'name' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:200',
            'quantite' => 'required|min:3|max:200',
            'price' => 'required|min:3|max:200'            
        ]);

        $post->update($validated);

        return redirect()->route('products', $post->id);
    }

}


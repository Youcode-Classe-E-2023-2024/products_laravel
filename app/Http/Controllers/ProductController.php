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
}

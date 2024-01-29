<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function remove($id){
        $product = product::find($id);
        $product->delete();
        return redirect('/')->with('status',"data deleted successfully");
    }
}

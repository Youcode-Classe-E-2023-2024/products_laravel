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
}

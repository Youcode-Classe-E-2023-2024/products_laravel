<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.show');
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'quantite' => 'nullable', // Adjust the validation rules as needed
            'price' => 'nullable',
        ]);

        Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'quantite' => $request->input('quantite'),
            'price' => $request->input('price'),
        ]);

        return $this->index();
    }

}

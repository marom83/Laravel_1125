<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function new(){
        return view('products.add');
    }

    public function store(Request $request){
        $request->validate([
           'name' => 'required',
           'price' => 'required|min(1)'
        ]);
    }
}

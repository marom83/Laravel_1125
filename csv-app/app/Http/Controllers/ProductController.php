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
           'price' => 'required|min:1'
        ]);

        Product::create($request->post());
    }

    public function importData(){
        return view('products.import');
    }

    public function import(Request $request){
        $file = $request->file('file');
        $content = file($file->getPathname());

        foreach($content as $line){
            $field = str_getcsv($line, ';');

            Product::create([
                'name' => $field[0],
                'price' => intval($field[1])
            ]);
        }
        
    }

    public function export(){
        
    }
}

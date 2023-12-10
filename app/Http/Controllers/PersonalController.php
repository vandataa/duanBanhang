<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
  
    public function index()
    {
        $category = Category::all();
        $product = Product::all();
        return view("user.shop", compact("category","product"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $id = $request->url("id");
        $category = Category::all();
        $product = Product::where("categories", $id)->first();
        return view("user.shop", compact("category","product"));
    }


    public function edit(string $id)
    {
        $product = Product::find($id);
        return view("user.detail", compact("product"));
    }


}

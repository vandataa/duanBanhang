<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function shop(){
        $category = Category::all();
        $product = Product::all();
        return view("user.shop", compact("category","product"));
    }
    public function shopsame(Request $request){
        $id = $request->id;
        $category = Category::all();
        $product = DB::table("products")->select('*')->where("categories", $id)->get();
        return view("user.shop", ["category"=> $category,"product"=> $product]);
    }

    public function detail(Request $request){
            $id = $request->id;
            $product = Product::where("id", $id)->first();
            $sameproduct = DB::table("products")->select('*')->where("categories", $product->categories)->get(4);;
        return view("user.detail",["product"=>$product,"sameproduct"=>$sameproduct]);
    }
}

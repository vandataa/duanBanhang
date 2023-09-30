<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.categories')
            ->select('products.*', 'categories.categoryName')
            ->get();
        return view('products.all', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $category = Category::all();
        return view("products.add", ["category" => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = $request->input("title");
        $description = $request->input("description");
        $thum = $request->file('thum')->getClientOriginalName();
        $request->file('thum')->storeAs('public/images', $thum);
        $gale = $request->file('gallery')->getClientOriginalName();
        $request->file('gallery')->storeAs('public/images', $gale);
        $productCode = $request->input('productCode');
        $inventory = $request->input('inventory');
        $price = $request->input('price');
        $video = $request->input('video');
        $category = $request->input('category');
        $count = $request->input('count');
        $count++;
        $data = [
            'title' => $title,
            'description' => $description,
            'thunm' => $thum,
            'galery' => $gale,
            'productCode' => $productCode,
            'inventory' => $inventory,
            'price' => $price,
            'video' => $video,
            'categories' => $category
        ];
        $product = Product::create($data);

        Category::where('id', $category)->update(["count"=> $count]);
        return redirect()->route('products.index')->with('success', 'Thêm sản phẩm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $category = Category::all();
        return view('products.edit', compact('product'), ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $title = $request->input("title");
        $description = $request->input("description");
        $productCode = $request->input('productCode');
        $inventory = $request->input('inventory');
        $price = $request->input('price');
        $video = $request->input('video');
        $category = $request->input('category');
        if ($request->file('thum') != '') {
            $thum = $request->file('thum')->getClientOriginalName();
            $request->file('thum')->storeAs('public/images', $thum);
            $product->fill([
                'title' => $title,
                'description' => $description,
                'thunm' => $thum,
                'productCode' => $productCode,
                'inventory' => $inventory,
                'price' => $price,
                'video' => $video,
                'categories' => $category
            ])->save();
        }
        if ($request->file('gallery') != '') {
            $gale = $request->file('gallery')->getClientOriginalName();
            $request->file('gallery')->storeAs('public/images', $gale);
            $product->fill([
                'title' => $title,
                'description' => $description,
                'galery' => $gale,
                'productCode' => $productCode,
                'inventory' => $inventory,
                'price' => $price,
                'video' => $video,
                'categories' => $category
            ])->save();
        }
        if ($request->file('thum') != '' && $request->file('gallery') != '') {
            $thum = $request->file('thum')->getClientOriginalName();
            $request->file('thum')->storeAs('public/images', $thum);
            $gale = $request->file('gallery')->getClientOriginalName();
            $request->file('gallery')->storeAs('public/images', $gale);
            $product->fill([
                'title' => $title,
                'description' => $description,
                'thunm' => $thum,
                'galery' => $gale,
                'productCode' => $productCode,
                'inventory' => $inventory,
                'price' => $price,
                'video' => $video,
                'categories' => $category
            ])->save();
        }
        if ($request->file('thum') == '' && $request->file('gallery') == '') {
            $product->fill([
                'title' => $title,
                'description' => $description,
                'productCode' => $productCode,
                'inventory' => $inventory,
                'price' => $price,
                'video' => $video,
                'categories' => $category
            ])->save();
        }
        return redirect()->route('products.index')->with('success', '');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'delete success');
    }


}

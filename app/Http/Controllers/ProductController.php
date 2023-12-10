<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if(Auth::user()->role == 3) {
            $products = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.categories')
            ->select('products.*', 'categories.categoryName')->orderBy('id', 'desc')
            ->get();
        }else{
            $products = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.categories')
            ->select('products.*', 'categories.categoryName')->where('id_create',Auth::user()->id)->orderBy('id', 'desc')
            ->get();
        }
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
    public function store(Request $request): RedirectResponse
    {

        $title = $request->input("title");
        $description = $request->input("description");
        $regularPrice = $request->input('regularPrice');
        $discount = $request->input('discount');
        $video = $request->input('video');
        $category = $request->input('category');
        $count = $request->input('count');
        $thum = $request->file('thumn')->getClientOriginalName();
        $request->file('thumn')->storeAs('public/images', $thum);
        $productCode = $request->input('productCode');
        $inventory = $request->input('inventory');
        $SKU = $request->input('SKU');
        $images = array();

        foreach ($request->image as $value) {
            $imageName = $value->getClientOriginalName();
            $path = $value->move('storage/images', $imageName);

            $images[] = $imageName;
        }
        $count = DB::table('products')->select('categories')->where('categories', $category)->groupBy('categories')->count();

        $data = [
            'title' => $title,
            'description' => $description,
            'thunm' => $thum,
            'galery' => json_encode($images),
            'productCode' => $productCode,
            'inventory' => $inventory,
            'regularPrice' => $regularPrice,
            'discount' => $discount,
            'SKU' => $SKU,
            'video' => $video,
            'categories' => $category,
            'id_create'=> Auth::user()->id,

        ];
        $product = Product::create($data);
        Category::where('id', $category)->update(["count" => Category::where('id', $category)->count()]);
        return redirect()->route('products.index')->with('success', 'Thêm sản phẩm thành công');
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
        $SKU = $request->input('SKU');
        $regularPrice = $request->input('regularPrice');
        $discount = $request->input('discount');
        $price = $request->input('price');
        $video = $request->input('video');
        $category = $request->input('category');
        if ($request->file('thumn') != '') {
            $thumn = $request->file('thumn')->getClientOriginalName();
            $request->file('thumn')->storeAs('public/images', $thumn);
            $product->fill([
                'title' => $title,
                'description' => $description,
                'thunm' => $thumn,
                'productCode' => $productCode,
                'inventory' => $inventory,
                'regularPrice' => $regularPrice,
                'discount' => $discount,
                'SKU' => $SKU,
                'video' => $video,
                'categories' => $category
            ])->save();
        }
        if ($request->image != null) {
            $images = array();
            foreach ($request->image as $value) {
                $imageName = $value->getClientOriginalName();
                $path = $value->storeAs('public/images', $imageName);

                $images[] = $imageName;
            }
            $product->fill([
                'galery' => json_encode($images),
                'title' => $title,
                'description' => $description,
                'productCode' => $productCode,
                'inventory' => $inventory,
                'regularPrice' => $regularPrice,
                'discount' => $discount,
                'SKU' => $SKU,
                'video' => $video,
                'categories' => $category
            ])->save();
        }
        if ($request->file('thumn') != '' && $request->file('galery') != '') {
            $thumn = $request->file('thumn')->getClientOriginalName();
            $request->file('thumn')->storeAs('public/images', $thumn);
            $images = array();
            foreach ($request->image as $value) {
                $imageName = $value->getClientOriginalName();
                $path = $value->storeAs('public/images', $imageName);

                $images[] = $imageName;
            }
            $product->fill([
                'title' => $title,
                'description' => $description,
                'thunm' => $thumn,
                'galery' => json_encode($images),
                'productCode' => $productCode,
                'inventory' => $inventory,
                'regularPrice' => $regularPrice,
                'discount' => $discount,
                'SKU' => $SKU,
                'video' => $video,
                'categories' => $category
            ])->save();
        }
        if ($request->file('thum') == '' && $request->file('galery') == '') {
            $product->fill([
                'title' => $title,
                'description' => $description,
                'productCode' => $productCode,
                'inventory' => $inventory,
                'regularPrice' => $regularPrice,
                'discount' => $discount,
                'SKU' => $SKU,
                'video' => $video,
                'categories' => $category
            ])->save();
        }
        $count = DB::table('products')->select('categories')->where('categories', $category)->groupBy('categories')->count();
        Category::where('id', $category)->update(["count" => $count]);
        return redirect()->route('products.index')->with('success', '');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Product $product)
    {
        $product->delete();
        $cate = $request->input('cate');
        $count = DB::table('products')->select('categories')->where('categories', $cate)->groupBy('categories')->count();
        Category::where('id', $cate)->update(["count" => $count]);
        return redirect()->route('products.index')->with('success', 'delete success');
    }
    public function changeImage(Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);
        return view('products.changeImage', compact('product'));
    }

    public function deleteImage(Request $request)
    {
        dd($request->input('imageDelete'));
        // $product = [];
        // array_push($product, $request->input('imageDelete'));
        // Storage::delete($product);
        // return redirect()->back();
    }
}

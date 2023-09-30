<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view("categories.categories",['category'=> $categories]);
   }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $namecat = $request->input("categoryName");
        $des = $request->input("des");
        $count = 0;
        $data = [
            'categoryName'=> $namecat,
            'description'=> $des,
            'count' => $count
        ];

        Category::create($data);
        return redirect()->route('categories.index')->with('success','created successful');
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
    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('categories.update',compact('category'),['categories'=> $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $namecat = $request->input("categoryName");
        $des = $request->input("des");
        $category->fill([
            'categoryName'=>$namecat,
            'description'=>$des
        ])->save();
        return redirect()->route("categories.index")->with("success","updated successful");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success','deleted success');
    }
}

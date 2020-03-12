<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }
 
    public function show(Category $category)
    {

        return $category;
    }
    public function websites(Category $category)
    {
        return response()->json($category->websites,200);
    }

    public function store(Request $request)
    {
        $category = Category::create($request->all());

        return response()->json($category,201);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $category = Category::find($id);
        $category->update($request->all());

        return response()->json($category,200);
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $category = Category::find($id);
        $category->delete();
        return response()->json(null,204);
    } 
}

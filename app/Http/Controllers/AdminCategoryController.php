<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;
use App\Category;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(['name','id']);
        return view('admin.categories.index')
        ->with('categories',$categories);
    }
 
    public function show(Category $category)
    {
       return response()->json(['category' => $category]);
    }

    public function create(Request $request)
    {
        $category = Category::create($request->all());
        return redirect()->action('AdminCategoryController@index');
    }

    public function update(Request $request)
    {    
        $id = $request->id;
        $category = Category::find($id);
        $category->update($request->all());
        return redirect()->action('AdminCategoryController@index');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $category = Category::find($id);
        $category->websites()->detach();
        $category->delete();
        return redirect()->action('AdminCategoryController@index');
    } 
}

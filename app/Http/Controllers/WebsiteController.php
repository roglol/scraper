<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;

class WebsiteController extends Controller
{
    public function index()
    {
        return Website::all();
    }
 
    public function show(Website $website)
    {
        return $website;
    }

    public function store(Request $request)
    {
        $website = User::create([
            'name' => $request->name,
            'domain' => $request->domain,
        ]);
        $category_id = $request->category_id;
        $website->categories()->attach($category_id);
        return response()->json($website,201);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $website = website::find($id);
        $website->update($request->all());

        return response()->json($website,200);
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $website = website::find($id);
        $website->delete();
        return response()->json(null,204);
    } 
}

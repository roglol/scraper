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

    public function categories(Website $website)
    {
        return response()->json($website->categories,200);
    }

    public function store(Request $request)
    {
        $website = Website::create([
            'name' => $request->name,
            'domain' => $request->domain,
        ]);
        $categories = $request->categories;
        $website->categories()->sync($categories);
        return response()->json($website,201);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $website = Website::find($id);
        $categories = $request->categories;
        $website->categories()->sync($categories);
        $website->update($request->all());

        return response()->json($website,200);
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $website = Website::find($id);
        $website->categories()->detach();
        $website->delete();
        return response()->json(null,204);
    } 
}

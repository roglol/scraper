<?php

namespace App\Http\Controllers;
use App\Console\Commands\TabulaScraper;
use Illuminate\Http\Request;
use Validator;
use App\Article;
use App\Website;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Article::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $scraper = new TabulaScraper;
        $tabula = $scraper->handleEconomy();
        $id = $request->id;
        $website = Website::find($id);
        $articles = [];
        foreach ($tabula as $article) {
            $validator = Validator::make($article, [
                'date' => 'required|unique:articles'
            ]);   
            if (!$validator->fails()) {
                $articles[] = new Article($article);
            }
            $website->articles()->saveMany($articles);
        }  
        return response()->json($tabula,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

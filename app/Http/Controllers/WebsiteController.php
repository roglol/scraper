<?php

namespace App\Http\Controllers;
use App\Console\Commands\ScrapeCommand;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function bbc(Request $request)
    {
        $page = $request->get('page');
        $records = $request->get('records');
        $scraper = new ScrapeCommand;
        $recordebi = $scraper->handle();
        $blocks = array_slice($recordebi,($page-1) * $records, $records);
        $res = [
            'count' => round(count($recordebi)/$records),
            'records' => $blocks
        ];
        return response($res,200);
    }
    public function tabula(Request $request)
    {
        $page = $request->get('page');
        $records = $request->get('records');
        $scraper = new ScrapeCommand;
        $recordebi = $scraper->handleTabula();
        $blocks = array_slice($recordebi,($page-1) * $records, $records);
        $res = [
            'count' => round(count($recordebi)/$records),
            'records' => $blocks
        ];
        return response($res,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

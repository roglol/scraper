<?php

namespace App\Http\Controllers;
use App\Console\Commands\TabulaScraper;
use App\Console\Commands\MarketwatchScraper;
use Validator;
use Illuminate\Http\Request;
use App\Website;
use App\Category;
use App\Article;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $websites = Website::paginate(15,['name','domain','id']);
        return view('admin.websites.index')->with('websites',$websites)->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $website = Website::create([
            'name' => $request->name,
            'domain' => $request->domain,
        ]);
        $categories = $request->categories;
        $website->categories()->sync($categories);
        return redirect()->action('AdminController@index');
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
    public function show(Website $website)
    {
        $selectedcategories = [];
        foreach($website->categories as $category){
            $selectedcategories[] = $category->id; 
        }
        return response()->json([
            'website' => $website,
            'selectedcategories' => $selectedcategories,
        ]);
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
    public function update(Request $request)
    {
        $id = $request->id;
        $website = Website::find($id);
        $categories = $request->categories;
        $website->categories()->sync($categories);
        $website->update($request->all());
        return redirect()->action('AdminController@index');
    }

    public function articles(Request $request){
        $type=true;
        if($request->fail){
            $type=false;
        }
        $websiteId = $request->website;
        $categoryId = $request->category;
        $website = Website::find($websiteId);
        $categories = $website->categories;
        $scraper = false;
        $articles;
        if($categoryId){
            $articles=$website->articles()->where('category_id',$categoryId)->orderBy('date', 'desc');
            $scraper = $categoryId;
        }else{
            $articles=$website->articles();
        }
        return view('admin.websites.articles')
        ->with('type', $type)
        ->with('websiteId', $websiteId)
        ->with('scraper', $scraper)
        ->with('categories',$categories)
        ->with('articles',$articles->paginate(15));
    }

    public function scraper(Request $request){
        $websiteId = $request->website;
        $categoryId = $request->category;
        $website = Website::find($websiteId);
        $commandName = ucfirst($website->name)."Scraper";
        $className = "App\Console\Commands\\$commandName";
        $category = Category::find($categoryId);
        $categoryName = 'handle' . ucfirst($category->name);
        $categories = $website->categories;
        $articles= [];
        if (class_exists($className)) {
           
            $scraper =  new $className;
        }
        if(method_exists($className,$categoryName)){
            $type =$scraper->$categoryName();
        }
        if(!isset($type)){
            return redirect()->action('AdminController@articles',[
                'website' => $websiteId,
                'category' => $categoryId,
                'fail' => true
            ]);
        }
        $scraper = $categoryId;
        foreach ($type as $article) {
            $validator = Validator::make($article, [
                'title' => 'required|unique:articles',
            ]);   
            if (!$validator->fails()) {
                 $articles[] = new Article($article);
            }
            $category->articles()->saveMany($articles);
            $website->articles()->saveMany($articles);
          
        }  
        return redirect()->action('AdminController@articles',[
            'website' => $websiteId,
            'category' => $categoryId,
            'fail' => false
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $website = Website::find($id);
        $website->categories()->detach();
        $website->articles()->delete();
        $website->delete();
        return redirect()->action('AdminController@index');
    }
}

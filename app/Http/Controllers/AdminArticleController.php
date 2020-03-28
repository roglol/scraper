<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use App\Website;
use DB;

class AdminArticleController extends Controller
{
    public function index(Request $request)
    {
    //    $articles = new Article;
       
    //    foreach($request->all() as $key => $value){
    //     switch ($key) {
    //         case "key":        
    //             $articles = $articles->where('title','LIKE',"%{$value}%");
    //             break;
    //         case "website":
    //             $articles = $articles->where('website_id',$value);
    //             break;
    //         case "startdate":
    //             $articles = $articles->whereDate('date','>=',$value);
    //         break;
    //         case "enddate":
    //             $articles = $articles->whereDate('date','<=',$value);
    //             break;
    //         default:
    //         $articles = DB::table('articles');
    //     }
    //    }

        $websites = Website::all();
        $articles = Article::orderBy('date', 'desc')->paginate(15);
        return view('admin.articles.index',['articles'=>$articles,'websites'=>$websites]);
    }
}

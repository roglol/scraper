<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Article;
use App\Website;
use App\Category;


class ArticleController extends Controller
{
    public function index()
    {
        $articles =  Article::orderBy('date', 'desc')->paginate(12);
        return view('welcome', ['articles' =>$articles]);
    }

}

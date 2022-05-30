<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ArticleController extends Controller
{
    //
    public function index(Request $request): \Illuminate\Contracts\View\View
    {
        $filterParam = $request->input("tag");
        $articles = Article::all();
        if ($filterParam) {
                $filteredArticles = Article::whereHas('tags', function($q) use ($filterParam) {
                    $q->where('name', '=', $filterParam);
                })->get();
            $articles = $filteredArticles;
        }
        return View::make('index')
            ->with('articles', $articles);
    }

    public function show($code)
    {
        $article = Article::all()->firstWhere('code', $code);
        return View::make('show')->with('article', $article);
    }
}

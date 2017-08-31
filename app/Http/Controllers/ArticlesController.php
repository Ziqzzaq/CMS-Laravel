<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        /*
         * Pobieramy listę artykułów
         */
        $articles = Article::latest()->get();
        return view('articles.index')->with('articles', $articles);
    }
        /*
         * Jeden artykułów
         */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show')->with('article',$article);
    }

}

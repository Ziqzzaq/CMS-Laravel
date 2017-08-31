<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\CreateArticleRequest;
use Request;

class ArticlesController extends Controller
{
        /*
        * Pobieramy listę artykułów
        */

    public function index()
    {
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

        /*
         * Wyswietla formularz dodawania artykułu
         */
    public function create()
    {
        return view('articles.create');
    }

        /*
         * Zapisuje artykuł do bazy
         */
    public function store(CreateArticleRequest $request)
    {
        Article::create($request->all());
        return redirect('articles');
    }

    /*
     * Formularz edycji artykułu
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit')->with('article',$article);
    }
}

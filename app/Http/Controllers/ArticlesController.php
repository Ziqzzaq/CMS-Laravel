<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\Support\Facades\Session;
use Request;
use Auth;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only'=>'create']);
    }

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
        $article = new Article($request->all());
        Auth::user()->articles()->save($article);
        Session::flash('article_created','Twój artykuł został dodany');
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

    /*
     * Aktualizuja artykułu
     */
    public function update($id, CreateArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles/'.$id);
    }
}
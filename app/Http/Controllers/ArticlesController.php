<?php

namespace App\Http\Controllers;

use App\Article;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Requests\ArticleRequest;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

//use Illuminate\Auth;


class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',array('only'=>'create'));
    }
    public function index()
    {


        if(isset(Auth::user()->id))
//          $articles = Article::orderBy('published_at', 'desc')->where('user_id', Auth::id())->get();
            $articles = Auth::user()->articles()->orderBy('published_at','desc')->get();
        else
            $articles = Article::orderBy('published_at', 'desc')->get();

        return view('articles.index', ['title' => 'Articles', 'articles' => $articles]);
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        $title = $article->title;

        return view('articles.show', compact('title', 'article'));
    }

    public function create()
    {
        $title = 'Create new article';
        $tags = \App\Tag::lists('name','id');

        return view('articles.create', compact('title','tags'));
    }

    public function store(ArticleRequest $request)
    {
        $input =new Article($request->all());
        dd($request->input('tags'));
        Auth::user()->articles()->save($input);

        \Session::flash('flash _msg', 'Created');

        return redirect('articles');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $title = "Edit article";

        return view('articles.edit', compact('title', 'article'));
    }

    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return redirect(url('articles'));
    }
}

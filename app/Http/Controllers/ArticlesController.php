<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use DB;
use App\Post;

class ArticlesController extends Controller
{

    public function index()
    {
      // List resourcer
      $articles = Article::latest()->get();

      return view('articles.index', ['articles' => $articles]);
    }
    public function show(Article $article) {
      // Show a single resource.
      // $article = Article::find($id);

      return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
      // Show a view to create a new resource
      return view('articles.create');
    }

    public function store()
    {
      // Persist the new resource

      // Validate user input
      // $validatedAttributes = request()->validate([
      //   'title' => 'required',
      //   'excerpt' => 'required',
      //   'body' => 'required'
      // ]);

      // return $validatedAttributes;

      // $article = new Article();

      // $article->title = request('title');
      // $article->excerpt = request('excerpt');
      // $article->body = request('body');

      // $article->save();

      Article::create($this->validateArticle());

      return redirect('/articles');
    }

    public function edit(Article $article)
    {
      // Show a view to edit an existing resource
      // $article = Article::find($id);

      return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
      // Persist the edited resource

      // Validate user input
      // request()->validate([
      //   'title' => 'required',
      //   'excerpt' => 'required',
      //   'body' => 'required'
      // ]);

      // // $article = Article::find($id);

      // $article->title = request('title');
      // $article->excerpt = request('excerpt');
      // $article->body = request('body');

      // $article->save();

      $article->update($this->validateArticle());

      return redirect('/articles/' . $article->id);
    }

    public function destroy()
    {
      // Delete the resource
    }

    protected function validateArticle()
    {
      return request()->validate([
        'title' => 'required',
        'excerpt' => 'required',
        'body' => 'required'
      ]);
    }
}

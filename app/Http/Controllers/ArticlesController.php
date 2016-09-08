<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Http\Requests;

use App\Http\Requests\ArticleRequest;

use App\Article;

use App\Category;

use App\Tag;

//use App\Image;

use Laracasts\Flash\Flash;

use Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
      // $articles = Article::search($request->title)->orderBy('id', 'ASC')->paginate(10);
      // $articles->each(function($articles){
      //   $articles->user;
      //   $articles->category;
      // });
      return view('admin.articles.index');
    }

    public function listAll(Request $request)
    {
     $articles = Article::search($request->title)->orderBy('id', 'ASC')->paginate(2);
     $articles->each(function($articles){
      $articles->user;
      $articles->category;
    });
     return view('admin.articles.listall')->with('articles', $articles);
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::orderBy('name', 'ASC')->lists('name', 'id');
      $tags = Tag::orderBy('name', 'ASC')->lists('name', 'id');

      return view('admin.articles.create')
      ->with('categories', $categories)
      ->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        // Manipulacion de imagenes
      // if($request->file('image')) 
      // {
      //   $file = $request->file('image');
      //   $name = 'blog_' . time() . '.' . $file->getClientOriginalExtension();
      //   $path = public_path() . '/images/articles';
      //   $file->move($path, $name);            
      // }

      $article = new Article($request->all());
      $article->user_id = \Auth::user()->id;
      $article->save();

      $article->tags()->sync($request->tags);

      /*$image = new Image();
      $image->name = $name;
      $image->article()->associate($article);
      $image->save();*/
      flash('El artículo ' . $article->name . ' se ha guardado con éxito');

      return redirect()->route('admin.articles.index');

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
      $article = Article::find($id);
      $article->category;
      $article->tag;
      $categories = Category::orderBy('name', 'DESC')->lists('name', 'id');
      $tags = Tag::orderBy('name', 'DESC')->lists('name', 'id');

      $my_tags = $article->tags->lists('id')->toArray();

      return view('admin.articles.edit')
      ->with('article', $article)
      ->with('categories', $categories)
      ->with('tags', $tags)
      ->with('my_tags', $my_tags);
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
      $article = Article::find($id);
      $article->fill($request->all());

      if (Input::has('status')) {
        $article->status = 1;
      } else {
        $article->status = 0;
      }
      $article->save();

      if ($request->tags === null) {
        $request->tags = [];
      }

      $article->tags()->sync($request->tags);

      flash('El artículo ' . $article->title . ' se ha actualizado correctamente');
      return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $article = Article::find($id);
      $result = $article->delete();

      if($result)
      {
        flash('El artículo ' . $article->title . ' se ha borrado correctamente', 'warning');
        return response()->json(['success' => 'true']);
      }
      else
      {
        flash('Ha habido un error al borrar el artículo', 'warning');
        return response()->json(['success' => 'false']);
      }
      // flash('El artículo ' . $article->title . ' se ha borrado correctamente', 'warning');
      // return redirect()->route('admin.articles.index');
    }
  }

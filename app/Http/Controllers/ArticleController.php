<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('redacteur');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('backoffice/article/index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = Categorie::all();
        $tag = Tag::all();

        return view('backoffice/article/create', compact('categorie', 'tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            "img" => "required",
            "title" => "required",
            "categorie_id" => "required",
            "content" => "required",
        ]);

        $store = new Article;
        $store->jour = date('d');
        $store->mois = date('Y-m');
        Storage::put('public', $request->file('img'));
        $store->img = $request->file('img')->hashName();
        $store->title = $request->title;
        $store->content = $request->content;
        $store->categorie_id = $request->categorie_id;
        $store->user_id = Auth::user()->id;
        
        $store->save();

        $store->tags()->attach($request->tag);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles = Article::find($id);

        return view('backoffice/article/show', compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Article::find($id);
        $categorie = Categorie::all();
        $tag = Tag::all();

        return view('backoffice/article/edit', compact('edit', 'categorie', 'tag'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "img" => "required",
            "title" => "required",
            "categorie_id" => "required",
            "content" => "required",
        ]);

        $update = Article::find($id);
        $update->jour = date('d');
        $update->mois = date('Y-m');
        Storage::delete("public/".$update->img);
        Storage::put('public', $request->file('img'));
        $update->img = $request->file('img')->hashName();
        $update->title = $request->title;
        $update->content = $request->content;
        $update->categorie_id = $request->categorie_id;
        $update->user_id = Auth::user()->id;
        
        $update->tags()->sync($request->tag);
        
        $update->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Article::find($id);
        Storage::delete("public/".$destroy->img);
        $destroy->delete();
        
        return redirect('article');
    }
}

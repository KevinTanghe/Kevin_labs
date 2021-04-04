<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
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
        $categorie = Categorie::all();
        
        return view('backoffice/categorie/index', compact('categorie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice/categorie/create');
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
            "categorie" => "required"
        ]);

        $store = new Categorie;
        $store->categorie = $request->categorie;
        $store->save();

        return redirect('categorieBack')->with('status', 'Votre catégorie à bien été créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Categorie::find($id);

        return view('backoffice/categorie/edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "categorie" => "required"
        ]);

        $update = Categorie::find($id);
        $update->categorie = $request->categorie;
        $update->save();

        return redirect('categorieBack')->with('status','Votre catégorie à bien été modifier');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Categorie::find($id);
        $article = Article::where('categorie_id', $id)->get();

        foreach ($article as $item) {
            $item->categorie_id = 1;
            $item->save();
        }
        $destroy->delete();
        
        return redirect('categorieBack')->with('status', 'Votre catéhorie à bien été supprimer');
    }
}

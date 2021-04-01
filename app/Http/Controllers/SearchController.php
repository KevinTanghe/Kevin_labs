<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Tag;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $articles = Article::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->paginate(3);
        
            $categorie = Categorie::all();
            $tags = Tag::all();
            $footer = Footer::all();
            $logo = Logo::all();
        // Return the search view with the resluts compacted
        return view('pages/search', compact('articles', 'categorie', 'tags', 'footer', 'logo'));
    }

    public function categorie($id){

        $articles = Article::where('categorie_id', $id)->paginate(3);
        $categorie = Categorie::all();
        $tags = Tag::all();
        $footer = Footer::all();
        $logo = Logo::all();

        return view('pages/search', compact('articles', 'categorie', 'tags', 'footer', 'logo'));
    }

    public function tag($id){
        
        $tags = Tag::find($id);
        $logo = Logo::all();
        $footer = Footer::all();
        $categorie = Categorie::all();
        $test = Tag::all();

        // dd($tags->articles);

        return view('pages/searchTag', compact('test', 'categorie', 'tags', 'footer', 'logo'));
    }
}

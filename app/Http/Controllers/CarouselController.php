<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousel = Carousel::all();

        return view('backoffice/carousel/index', compact('carousel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice/carousel/create');
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
            "img" => "required"
        ]);

        $store = new Carousel;
        Storage::put('public', $request->file('img'));
        $store->img = $request->file('img')->hashName();
        $store->save();

        return redirect('carousel')->with('status', 'Votre image à bien été enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carousel $carousel)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Carousel::find($id);

        return view('backoffice/carousel/edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Carousel::find($id);
        Storage::delete("public/".$update->img);
        Storage::put('public', $request->file('img'));
        $update->img = $request->file('img')->hashName();
        $update->save();

        return redirect('/carousel')->with('status', 'Votre Image à bien été enregistré');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Carousel::find($id);
        Storage::delete("public/".$destroy->img);
        $destroy->delete();

        return redirect('/carousel')->with('status', 'Votre Image à bien été supprimé');
    }
}

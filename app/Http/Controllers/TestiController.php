<?php

namespace App\Http\Controllers;

use App\Models\Testi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Util\Test;

class TestiController extends Controller
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
        $testi = Testi::all();

        return view('backoffice/testi/index', compact('testi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice/testi/create');
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
            'name' => 'required',
            'function' => 'required',
            'content' => 'required',
            'img' => 'required'
        ]);
        
        $store = new Testi;
        $store->name = $request->name;
        $store->content = $request->content;
        $store->function = $request->function;
        Storage::put('public', $request->file('img'));
        $store->img = $request->file('img')->hashName();
        $store->save();

        return redirect('testi')->with('status', 'Votre testiminial à bien été enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function show(Testi $testi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Testi::find($id);
        
        return view('backoffice/testi/edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "name" => "required",
            "function" => "required",
            "content" => "required",
            "img" => "required"
        ]);

        $update = Testi::find($id);
        $update->name = $request->name;
        $update->function = $request->function;
        $update->content = $request->content;
        Storage::delete("public/".$update->img);
        Storage::put('public', $request->file('img'));
        $update->img = $request->file('img')->hashname();
        $update->save();

        return redirect('testi')->with('status', 'Votre testimonial à été enregistré');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Testi::find($id);
        Storage::delete("public/".$destroy->img);
        $destroy->delete();

        return redirect('testi')->with('status', 'Votre testimonial à été supprimé');
    }
}

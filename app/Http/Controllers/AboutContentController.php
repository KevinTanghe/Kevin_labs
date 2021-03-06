<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use Illuminate\Http\Request;

class AboutContentController extends Controller
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
        $about = AboutContent::all();

        return view('backoffice/aboutcontent/index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutContent  $aboutContent
     * @return \Illuminate\Http\Response
     */
    public function show(AboutContent $aboutContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutContent  $aboutContent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = AboutContent::find($id);

        return view('backoffice/aboutcontent/edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutContent  $aboutContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "content" => "required",
        ]);
        $update = AboutContent::find($id);
        $update->content = $request->content;
        $update->save();
        
        return redirect('aboutContent')->with('status', 'Le paragraphe ?? bien ??t?? enregistr??');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutContent  $aboutContent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}

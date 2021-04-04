<?php

namespace App\Http\Controllers;

use App\Models\mailPro;
use Illuminate\Http\Request;

class MailProController extends Controller
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
        $mailPro = mailPro::all();

        return view('backoffice/mailPro/index', compact('mailPro'));
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
     * @param  \App\Models\mailPro  $mailPro
     * @return \Illuminate\Http\Response
     */
    public function show(mailPro $mailPro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mailPro  $mailPro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = mailPro::find($id);

        return view('backoffice/mailPro/edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mailPro  $mailPro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'mail' => 'required'
        ]);

        $update = mailPro::find($id);
        $update->mail = $request->mail;
        $update->save();

        return redirect('mailPro')->with('status', 'Votre mail à bien été modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mailPro  $mailPro
     * @return \Illuminate\Http\Response
     */
    public function destroy(mailPro $mailPro)
    {
        //
    }
}

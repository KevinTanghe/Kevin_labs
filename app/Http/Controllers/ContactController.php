<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Subject;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::all();
        $contact = Contact::all();
        $subject = Subject::all();
        $footer = Footer::all();
        $map = Map::all();

        return view('pages/contact', compact('logo', 'contact', 'subject', 'footer', 'map'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact = Contact::all();

        return view('backoffice/contact/index', compact('contact'));
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
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Contact::find($id);

        return view('backoffice/contact/edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'mainTitle' => 'required',
            'mainText' => 'required',
            'streetTitle' => 'required',
            'street' => 'required',
            'phone' => 'required',
            'mail' => 'required',
        ]);

        $update = Contact::find($id);
        $update->mainTitle = $request->mainTitle;
        $update->mainText = $request->mainText;
        $update->streetTitle = $request->streetTitle;
        $update->street = $request->street;
        $update->phone = $request->phone;
        $update->mail = $request->mail;
        $update->save();

        return redirect('contact/create')->with('status', 'Vos informations de contact ont bien été enregistré');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Footer;
use App\Models\icon;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Subject;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::all();
        $service = Service::paginate(9);
        $last = Service::all()->last()->id;
        $serviceLeft = Service::whereBetween('id', [($last-2), $last ])->get();
        $serviceRight = Service::whereBetween('id', [($last-5), ($last-3)])->get();
        $title = Title::all();
        $contact = Contact::all();
        $subject = Subject::all();
        $footer = Footer::all();

        return view('pages/service', compact('logo', 'service', 'title', 'contact', 'subject', 'footer', 'serviceLeft', 'serviceRight'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icon = icon::all();

        return view('backoffice/service/create', compact('icon'));
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
            'title' => 'required',
            'content' => 'required',
        ]);

        $store = new Service;
        $store->title = $request->title;
        $store->icon = $request->icon;
        $store->content = $request->content;
        $store->save();

        return redirect('serviceBack')->with('status', 'Votre service à bien été enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Service::find($id);
        $icon = icon::all();

        return view('backoffice/service/edit', compact('edit', 'icon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "title" => "required",
            "icon" => "required",
            "content" => "required",
        ]);

        $update = Service::find($id);
        $update->title = $request->title;
        $update->icon = $request->icon;
        $update->content = $request->content;
        $update->save();

        return redirect('serviceBack')->with('status', 'Votre service à bien été modifier');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Service::find($id);
        $destroy->delete();

        return redirect('serviceBack')->with('status', 'Votre service à bien été supprimer');
    }
}

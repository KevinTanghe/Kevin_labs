<?php

namespace App\Http\Controllers;

use App\Models\Fonction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('check')->only('update');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        return view('backoffice/user/index', compact('user'));  
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
        $edit = User::find($id);
        $fonction = Fonction::all();

        return view('backoffice/user/edit', compact('edit', 'fonction'));
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
        
        $validation = $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'email' => 'required',
            'fonction_id' => 'required',
            'description' => 'required',
            ]);

        $update = User::find($id);
        $update->lastname = $request->lastname;
        $update->firstname = $request->firstname;
        $update->email = $request->email;
        if ($request->file('photo')) {
            Storage::delete('public/'.$update->photo);
            Storage::put('public', $request->file('photo'));
            $update->photo = $request->file('photo')->hashName();
        }
        $update->fonction_id = $request->fonction_id;
        $update->description = $request->description;
        $update->role_id = Auth::user()->role_id;
        $update->check = Auth::user()->check;


        $update->save();

        return redirect('user')->with('status','Votre profil ?? bien ??t?? modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use App\Models\Carousel;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Testi;
use App\Models\Title;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::all();
        $carousel = Carousel::all();
        // $service = Service::take(9)->get();
        $service = Service::all();
        $service = $service->shuffle();
        $serviceHome = $service->take(9);
        $serviceIntro = $service->take(3);
        $title = Title::all();
        $aboutContent = AboutContent::all();
        $video = Video::all();
        $testi = Testi::all();


        return view('pages/welcome', compact('logo', 'carousel', 'service', 'title', 'aboutContent', 'video', 'testi', 'serviceHome' , 'serviceIntro'));
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
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

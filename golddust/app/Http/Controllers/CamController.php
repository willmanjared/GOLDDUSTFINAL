<?php

namespace App\Http\Controllers;

use App\Cam;
use Illuminate\Http\Request;

class CamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      return view('cam.index');
    }
  
    public function view()
    {
      return view('cam.view');
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
     * @param  \App\Cam  $cam
     * @return \Illuminate\Http\Response
     */
    public function show(Cam $cam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cam  $cam
     * @return \Illuminate\Http\Response
     */
    public function edit(Cam $cam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cam  $cam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cam $cam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cam  $cam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cam $cam)
    {
        //
    }
}

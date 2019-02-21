<?php

namespace App\Http\Controllers;

use App\Proposals;
use Illuminate\Http\Request;
use App\User;

class ProposalsController extends Controller
{
  
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        Proposals::create([
          'user_id' => auth()->id(),
          'projects_id' => $request['project_id'],
          'body' => $request['body'],
          'rate' => $request['rate'],
          'resume' => $request['resume'],
          'answer_id' => $request['answer_id']
        ]);
      $pid = $request['project_id'];
      return redirect("/projects/$pid");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proposals  $proposals
     * @return \Illuminate\Http\Response
     */
    public function showf(Proposals $proposals)
    {
        //
      return view('user.view_proposal', compact('proposals'));
    }
  
    public function showb(Proposals $proposals)
    {
        //
      return view('business.view_proposal', compact('proposals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proposals  $proposals
     * @return \Illuminate\Http\Response
     */
    public function edit(Proposals $proposals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proposals  $proposals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proposals $proposals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proposals  $proposals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proposals $proposals)
    {
        //
    }
}

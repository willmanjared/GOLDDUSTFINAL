<?php

namespace App\Http\Controllers;

use App\Projects;
use App\Proposals;
use App\Deliverables;
use App\Hired;
use App\User;
use Illuminate\Http\Request;
use App\Notifications\NewProject;

class ProjectsController extends Controller
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
    public function create(Projects $projects = null)
    {
      
      if (!isset($projects)) {
        $projects = [
          'user_id' => auth()->id(),
          'status' => 'inactive',
          'title' => 'Add A Title Here...',
          'body' => 'Add A Description Here...',
          'project_length' => '0',
          'project_length_unit' => 'Time Unit',
          'payment_period' => 'Payment Type',
          'skill_level' => 'Difficulty',
          'test_id' => 0
        ];
      }
      
      return view('test.createProject', compact('projects'));
      
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
      
      //dd($request);
      
      $a = Projects::create([
        'user_id' => auth()->id(),
        'title' => $request['title'],
        'body' => $request['body'],
        'project_length' => $request['project_length'],
        'project_length_unit' => $request['project_length_unit'],
        'payment_period' => $request['payment_period'],
        'skill_level' => $request['skill_level'],
        'test_id' => $request['test_id']
      ]);
      
      $note = [
        'user_id' => auth()->id(),
        'hired_id' => null,
        'action' => 'new',
        'body' => 'You created a new project',
        'resource' => 'project',
        'teams_id' => null,
        'projects_id' => $a->id,
        'title' => $a->title,
        'created_at' => $a->created_at
      ];
      
      auth()->user()->notify(new NewProject($note));
      
      return redirect('/f/dashboard');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $projects)
    {
     
      $proposals = Proposals::where([
        'user_id' => auth()->user()->id,
        'projects_id' => $projects->id
      ])->get();
      
      return view('users.view_project', compact('projects', 'proposals'));
      
    }
  
    public function showb(Projects $projects)
    {
     
      $proposals = Proposals::where([
        'projects_id' => $projects->id
      ])->get();
      
      $deliverables = Deliverables::where([
        'projects_id' => $projects->id
      ])->get();
      
      $hireds = Hired::where([
        'projects_id' => $projects->id
      ])->get();
      
      return view('business.view_project', compact('projects', 'proposals', 'deliverables', 'hireds'));
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Projects $projects)
    {
      
      dd("CREATE A VIEW FOR THIS METHOD");
      
      
      $proposals = Proposals::where([
        'projects_id' => $projects->id
      ])->get();
      
      $deliverables = Deliverables::where([
        'projects_id' => $projects->id
      ])->get();
      
      $hireds = Hired::where([
        'projects_id' => $projects->id
      ])->get();
      
      return view('business.edit_project', compact('projects', 'proposals', 'deliverables', 'hireds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projects $projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projects $projects)
    {
        //
    }
}

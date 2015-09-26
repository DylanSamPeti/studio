<?php

namespace App\Http\Controllers;


use App\Project;
use App\Tag;
use App\Http\Requests;
use Carbon\Carbon;
use App\Http\Requests\ProjectRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;


class ProjectsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Project::latest('published_at')->published()->get();
        return view('projects.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $tags = Tag::lists('name', 'id');
        return view('projects.create')->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ProjectRequest $request)
    {
        $this->createProject($request);

        \Session::flash('flash_message', "your project has been submitted");

        return redirect('projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(ProjectRequest $project)
    {
      
      return view('projects.show')->with('project', $article);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('projects.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Project $project, ProjectRequest $request)
    {
        $project->update($request->all());
        return redirect('projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Create a new project
     *
     * @param  $request
     * @return repsponse
     * 
     */

    private function createProject(ProjectRequest $request)
    {
            
    $project = Auth::user()->projects()->create($request->all());

    return $project;

    }
}








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
        return view('projects.create', compact('tags'));
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
    public function show(Project $project)
    {
      
      return view('projects.show')->with('project', $project);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Project $project)
    {

        $tags = Tag::lists('name', 'id');

        return view('projects.edit', compact('project', 'tags'));
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

        $this->syncTags($project, $request->input('tag_list'));

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



    private function syncTags(Project $project, array $tags)
   
    {
        $project->tags()->sync($tags);

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

    $this->syncTags($project, $request->input('tag_list'));

    return $project;

    }
}








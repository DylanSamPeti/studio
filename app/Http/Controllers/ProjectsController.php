<?php

namespace App\Http\Controllers;


use App\Project;
use App\Http\Requests;
use Carbon\Carbon;
use App\Http\Requests\ProjectRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
         return view('projects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('projects.create');
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
            
    Auth::user()->projects()->create($request->all());

    return $project;

    }
}







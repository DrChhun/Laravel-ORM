<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Client;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $data = Project::all();
        $client = Client::all();
        return view('project-list', compact('data', 'client'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $client = Client::all();
        return view('project-form', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'assigned_client' => $request->assigned_client,
            'status' => $request->status,
        ]);

        $data->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {   
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $id = $project->id;
        $data = Project::where('id', $project->id)->get();

        return view('update-project', ['id' => $id], compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {   
        $content = Project::find($project->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'assigned_client' => $request->assigned_client,
            'status' => $request->status
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project, $id)
    {
        Project::where('id', $id)->delete();

        return redirect()->back();
    }
}

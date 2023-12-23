<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/Models/SmallProject;

class SmallProjects extends Controller
{
    public function index(){
        $projects = SmallProject::all();
        return view('projects.index',compact('projects'));

    }
    public function create(){
        return view('projects.create');

    }
    public function store(Request $request){
        $request->validate([
            'project_name'=>'required|max:255',
            'start_date'=>'nullable',
            'owner'=>'required',
        ]);
        SmallProject::create($request->all());
        return redirect()->route('projects.index');

    }
    public function edit(Project $project){
        return view('projects.edit', compact('project'));
    }
    public function update(Request $request, Project $project){
        $request->validate([
            'project_name'=>'required|max:255',
            'start_date'=>'nullable',
            'owner'=>'required',

        ]);
        $project->update($request->all());
        return redirect()->route('projects.index');

    }
    public function destroy(Project $project){
        $project->delete();
        return redirect()->route('projects.index');

    }
}

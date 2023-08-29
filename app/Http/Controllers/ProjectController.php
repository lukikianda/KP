<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function adminProject(Request $request){
        if($request->has('search')){
            $project=Project::where('namaproject','LIKE','%' .$request->search.'%')->simplePaginate(8);
        }else{
            $project=Project::simplePaginate(8);
        }
        return view('adminProject',compact(['project']));
    }

    public function createproject()
    {
        return view('createproject');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token']));
        Project::create($request->except(['_token']));
        return redirect('/admin/project');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('editproject',compact(['project']));
    }

    public function update($id, Request $request)
    {
        $project = Project::find($id);
        $project->update($request->except(['_token']));
        return redirect('/admin/project');
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('/admin/project');
    }
}

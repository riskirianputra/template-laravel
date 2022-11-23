<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use DB;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::all();
        return view('project.index', get_defined_vars());
    }

    public function create()
    {
        $project = Project::get();
        return view('project.create', get_defined_vars());
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'img' => 'mimes:jpeg,png,jpg,doc,docx,ppt,xls,xlsx,pdf',
        ]);

           if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $newName = $name;
            $path =  $file->move(public_path('assets/img/project'),$newName);          
        }        
            Project::create([
                'nama_project' => $request->get('nama_project'),
                'img' => $name,                                
            ]);      

        return redirect()->route('project.index');
    }


}

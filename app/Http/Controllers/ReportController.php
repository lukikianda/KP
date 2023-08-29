<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\Files;
use App\Models\Project;
use App\Models\Division;
use Response;

// UNTUK HALAMAN LAPORAN VIEW ADMIN

class ReportController extends Controller
{
    public function adminLaporan(Request $request)
    {
         // Fetch all records

        if($request->has('search')){
            $files=Files::where('name','LIKE','%' .$request->search.'%')
            ->orWhere('submitter','LIKE','%' .$request->search.'%')
            ->orWhere('projectname','LIKE','%' .$request->search.'%')
            ->orWhere('division','LIKE','%' .$request->search.'%')
            ->orWhere('status','LIKE','%' .$request->search.'%')
            ->simplePaginate(8);
        }else{
            $files=Files::simplePaginate(8);
        }
        return view('adminLaporan',compact(['files']));
    }

    public function accept_post($id){
        $files=Files::find($id);
        $files->status='Completed';
        $files->save();

        return redirect()->back();
    }

    public function reject_post($id){
        $files=Files::find($id);
        $files->status='Rejected';
        $files->save();

        return redirect()->back();
    }    

    public function filter(Request $request) {

        $start_date = $request->start_date;
        $end_date = $request->end_date;
    
        $files = Files::whereDate('created_at','>=',$start_date)
                ->whereDate('created_at','<=',$end_date)
                ->simplePaginate(8);

        return view('adminLaporan',compact(['files']));
    }

    public function adminsubmitlaporan()
    {
        $project = Project::all();
        return view('adminSubmitlaporan',compact(['project']));
    }

    public function adminsubmitform(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'submitter' => 'required',
            'division' => 'required',
            'projectname' => 'required',
            'file' => 'required|mimes:pdf,docx|max:2048',
            'keterangan' => 'required'
        ]);

        if ($validator->fails()) {
             return redirect()->Back()->withInput()->withErrors($validator);
        }else{

             if($request->file('file')) {

                   $file = $request->file('file');
                   $filename = $file->hashName();

                   // File upload location
                   $location = 'uploads';

                   // Upload file
                   $file->move($location,$filename);

                   // File path
                   $filepath = url('uploads/'.$filename);

                   // Insert record
                   $insertData_arr = array(
                        'name' => $request->name,
                        'submitter' => $request->submitter,
                        'division' => $request->division,
                        'projectname' => $request->projectname,
                        'filepath' => $filepath,
                        'keterangan' => $request->keterangan,
                   );

                   Files::create($insertData_arr);

                   // Session
                   Session::flash('alert-class', 'alert-success');
                   Session::flash('message','Record inserted successfully.');

             }else{

                   // Session
                   Session::flash('alert-class', 'alert-danger');
                   Session::flash('message','Record not inserted');
             }

        }

        return redirect('admin/laporan');

    }

    public function editlaporan($id)
    {
        $files = Files::find($id);
        $project = Project::all();
        return view('editlaporan',compact(['files'],['project']));
    }

    public function update($id, Request $request)
    {
        $files = Files::find($id);
        $files->update($request->except(['_token']));
        return redirect('/admin/laporan');
    }

    function destroylaporan($id)
    {
        $files = Files::find($id);
        $files->delete();
        return redirect('admin/laporan');
    }

}

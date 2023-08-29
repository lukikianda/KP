<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\Files;
use App\Models\Project;

// UNTUK HALAMAN LAPORAN VIEW USER

class PagesController extends Controller
{
     public function laporan(Request $request){

          // Fetch all records
          if($request->has('search')){
               $files=Files::where('name','LIKE','%' .$request->search.'%')
               ->where('division',Auth::user()->division)
               ->orwhere('projectname','LIKE','%' .$request->search.'%')
               ->where('division',Auth::user()->division)
               ->orwhere('submitter','LIKE','%' .$request->search.'%')
               ->where('division',Auth::user()->division)
               ->orwhere('status','LIKE','%' .$request->search.'%')
               ->where('division',Auth::user()->division)
               ->simplePaginate(8);
          } 
          else{
               $files=Files::where('division',Auth::user()->division)->simplePaginate(8);
          }
          return view('laporan',compact(['files']));
     }

     public function filter(Request $request) {

          $start_date = $request->start_date;
          $end_date = $request->end_date;
      
          $files = Files::whereDate('created_at','>=',$start_date)
                    ->whereDate('created_at','<=',$end_date)
                    ->where('division',Auth::user()->division)
                    ->simplePaginate(8);
  
          return view('laporan',compact(['files']));
     }

     public function submitlaporan()
     {
          $project = Project::all();
          return view('submitlaporan',compact(['project']));
     }

     // Submit form
     public function submitform(Request $request){

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

         return redirect('laporan');

     }
}
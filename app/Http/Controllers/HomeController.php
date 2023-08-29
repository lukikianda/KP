<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Division;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Files;
use App\Models\User;



class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $filesCount = Files::where('submitter',Auth::user()->name)
        ->count();
        return view('home', ['files_count' => $filesCount]);
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $usersCount = Users::count();
        $divisionCount = Division::count();
        $filesCount = Files::count();
        return view('adminHome', ['users_count' => $usersCount, 'division_count' => $divisionCount, 'files_count' => $filesCount]);
    }
    
    public function adminUserlist()
    {
        return view('adminUserlist');
    }

    function show(Request $request)
    {
        if($request->has('search')){
            $data=Users::where('name','LIKE','%' .$request->search.'%')->simplePaginate(15);
        }else{
            $data=Users::simplePaginate(15);
        }
        
        return view('adminUserlist',['users'=>$data]);
    }

    function destroy($id)
    {
        $users = Users::find($id);
        $users->delete();
        return redirect('admin/userlist');
    }

    public function edit($id)
    {
        $users = Users::find($id);
        return view('edituserlist',compact(['users']));
    }

    public function update($id, Request $request)
    {
        $users = Users::find($id);
        $users->update($request->except(['_token']));
        return redirect('/admin/userlist');
    }

    public function adminRegister()
    {
        $division = Division::all();
        return view('auth.register',compact(['division']));
    }

    public function adminDivision(Request $request){
        if($request->has('search')){
            $division=Division::where('namadivisi','LIKE','%' .$request->search.'%')->simplePaginate(8);
        }else{
            $division=Division::simplePaginate(8);
        }
        return view('adminDivisi',compact(['division']));
    }

    public function createdivision()
    {
        return view('createdivision');
    }

    public function storedivision(Request $request)
    {
        // dd($request->except(['_token']));
        Division::create($request->except(['_token']));
        return redirect('/admin/division');
    }

    public function editdivision($id)
    {
        $division = Division::find($id);
        return view('editdivision',compact(['division']));
    }

    public function updatedivision($id, Request $request)
    {
        $division = Division::find($id);
        $division->update($request->except(['_token']));
        return redirect('/admin/division');
    }

    public function destroydivision($id)
    {
        $division = Division::find($id);
        $division->delete();
        return redirect('/admin/division');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('managerHome');
    }
}

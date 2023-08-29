<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReportController;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Models\User;
use App\Http\Models\Users;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/information', function(){
    return view('information');
});

Route::get('/vision', function(){
    return view('vision');
});

Route::get('/mission', function(){
    return view('mission');
});
  
Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('laporan', [PagesController::class, 'laporan']);
    Route::get('filter',[PagesController::class,'filter']);
    Route::get('submitlaporan', [PagesController::class, 'submitlaporan']);
    Route::post('submitform',[PagesController::class,'submitform'])->name('submitform');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    
    // Route home
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');


    // Route regist user
    Route::get('/admin/registeruser', [HomeController::class, 'adminRegister']);

    // Route division
    Route::get('/admin/division', [HomeController::class,'adminDivision']);
    Route::get('/admin/createdivision',[HomeController::class,'createdivision']);
    Route::post('/admin/storedivision',[HomeController::class,'storedivision']);
    Route::get('/admin/division/{id}/edit',[HomeController::class,'editdivision']);
    Route::put('/admin/division/{id}',[HomeController::class,'updatedivision']);
    Route::get('/admin/division/{id}', [HomeController::class, 'destroydivision']);

    // Route list user
    Route::get('/admin/userlist', [HomeController::class, 'adminUserlist']);
    Route::get('/admin/userlist', [HomeController::class, 'show']);
    Route::get('/admin/userlist/{id}', [HomeController::class, 'destroy']);
    Route::get('/admin/userlist/{id}/edit',[HomeController::class,'edit']);
    Route::put('/admin/userlist/{id}',[HomeController::class,'update']);

    // Route project
    Route::get('/admin/project',[ProjectController::class,'adminProject']);
    Route::get('/admin/createproject',[ProjectController::class,'createproject']);
    Route::post('/admin/store',[ProjectController::class,'store']);
    Route::get('/admin/project/{id}/edit',[ProjectController::class,'edit']);
    Route::put('/admin/project/{id}',[ProjectController::class,'update']);
    Route::get('/admin/project/{id}', [ProjectController::class, 'destroy']);

    // Route laporan
    Route::get('/admin/laporan', [ReportController::class, 'adminLaporan']);
    Route::get('/admin/filter',[ReportController::class,'filter']);
    Route::get('/admin/submitlaporan', [ReportController::class, 'adminSubmitlaporan']);
    Route::post('/admin/submitform',[ReportController::class,'adminsubmitform'])->name('adminsubmitform');
    Route::get('/admin/laporan/{id}/edit',[ReportController::class,'editlaporan']);
    Route::put('/admin/laporan/{id}',[ReportController::class,'update']);
    Route::get('/admin/laporan/{id}', [ReportController::class, 'destroylaporan']);
    Route::get('/admin/laporan/{id}/accept',[ReportController::class,'accept_post']);
    Route::get('/admin/laporan/{id}/reject',[ReportController::class,'reject_post']);
    
});
  
/*------------------------------------------
--------------------------------------------
All Manager Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});



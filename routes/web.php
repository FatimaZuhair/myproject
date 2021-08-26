<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Admin;
use App\Http\Controllers\ProjectController;
use App\Models\Project;


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
 

Route::group(['prefix'=> 'admin','middleware'=>['admin:admin']], function(){
    Route::get('/login',[AdminController::class, 'loginForm']);
    Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});




Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/Project',function(){
return view('Project');
});

Route::get('/Request',function(){
    return view('Request');
    });

    Route::namespace('BackEnd')->group(function(){

        Route::get('/addProject',[ProjectController::class,'create']);
   

    Route::post('/addProject/store',[ProjectController::class,'store'])->name('project.store');

});
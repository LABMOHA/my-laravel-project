<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Models\Listign;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PersonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// admin 
Route::get('/admin',[UserController::class,'_admin'])->name('_admin.index');

// Route::get('/admin/add',[UserController::class,'add'])->name('_admin.add');
// Route::post('/admin', [UserController::class, 'store'])->name('_admin.validate');
//_admin.connect'
Route::get('/main',[UserController::class,'login']);

//login 
Route::post('/admin', [UserController::class, 'authenticate'])->name('_admin.connect');
Route::post('/admin/logout', [UserController::class, 'logout'])->name('_admin.quiter');
// Route::get('/profile',[UserController::class,'profile'])->name('_admin.profile');
//_admin.destroy_company
Route::delete('/admin/delete/{id}', [UserController::class, 'supp'])->name('_admin.supp');
Route::get('/admin/jobs',[UserController::class,'jobs'])->name('_admin.jobs');

Route::delete('/admin/jobs/delete/{id}', [UserController::class, 'delete_job'])->name('_admin.delete_job');

Route::get('/admin/users',[UserController::class,'persons'])->name('_admin.users');

Route::delete('/admin/users/delete/{id}', [UserController::class, 'delete_person'])->name('_admin.delete_person');
// static route
Route::get('/', [PersonController::class, 'main'])->name('person.main');
Route::get('/about', [PersonController::class, 'about'])->name('person.ab');
Route::get('/contact', [PersonController::class, 'contact'])->name('person.co');
//get all
Route::get('/findjob',[PersonController::class,'index'])->name('person.index');
Route::get('/findjob/{id}', [PersonController::class, 'show'])->name('person.sehen');
//for home 
// Route::get('/ff', [StaticController::class, 'index']);

// //create data
// Route::get('/create', [JobController::class, 'create'])->name('jobs.create');
// //show Edit form
// Route::get('/{id}/edit', [JobController::class, 'edit'])->name('jobs.edit');
// //update data
// Route::put('/{id}/edit', [JobController::class, 'update'])->name('jobs.update');
// //delete data
// Route::delete('/{id}/delete', [JobController::class, 'destroy'])->name('jobs.destroy');
// //add data
// Route::post('/', [JobController::class, 'store'])->name('jobs.store');
// //show item
// Route::get('/{id}', [JobController::class, 'show'])->name('jobs.show');


//register form 
Route::get('/person/register', [PersonController::class, 'register'])->name('person.register');
Route::get('/person/login', [PersonController::class, 'login'])->name('person.login');
Route::post('/person/logout', [PersonController::class, 'logout'])->name('person.logout');
Route::post('/person/authen', [PersonController::class, 'authenticate'])->name('person.an');
Route::post('/person/login', [PersonController::class, 'str'])->name('person.str');
//add user
Route::post('/', [UserController::class, 'store']);
// Route::post('/jobs/{job}/save', 'JobController@save')->name('job.save');
// Route::delete('/jobs/{job}/unsave', 'JobController@unsave')->name('job.unsave');

//logout

// Route::post('/acc/logout', [UserController::class, 'logout'])->name('jobs.logout');
// Route::post('/users/authen', [UserController::class, 'authenticate'])->name('jobs.authen');
///


//test
///
///

//register form 
// Route::get('/acc/register', [UserController::class, 'create'])->name('person.register');
// Route::get('/acc/login', [UserController::class, 'login'])->name('person.login');

//logout

// Route::post('/acc/logout', [UserController::class, 'logout'])->name('jobs.logout');
// Route::post('/users/authen', [UserController::class, 'authenticate'])->name('jobs.authen');
//
//
//


///Company Section 

//static 
Route::get('/company/home', [CompanyController::class, 'test'])->name('company.home');
Route::get('/company/about', [CompanyController::class, 'about'])->name('company.about');
Route::get('/company/contact', [CompanyController::class, 'contact'])->name('company.contact');
    //show register form
Route::get('/company/register', [CompanyController::class, 'register'])->name('company.register');
//show login form
Route::get('/company/login', [CompanyController::class, 'login'])->name('company.login');

    // Routes accessible to company users only
    

//Route::post('/company/index', [CompanyController::class,'store_reg'])->name('company.store_reg');

//login anten
Route::get('/company/index', [CompanyController::class,'index'])->name('company.index');
Route::post('/company/authen', [CompanyController::class, 'authenticate'])->name('company.authen');
Route::post('/company/logout', [CompanyController::class, 'logout'])->name('company.logout');
//add register 


Route::post('/company/index', [CompanyController::class, 'store'])->name('company.store');

//show Edit form
Route::get('/company/index/{id}/edit', [CompanyController::class, 'edit'])->name('company.edit');
//update data
Route::put('/company/index/{id}/edit', [CompanyController::class, 'update'])->name('company.update');
//delete data
Route::delete('/company/index/{id}/delete', [CompanyController::class, 'destroy'])->name('company.destroy');
Route::post('/company/jobstore', [CompanyController::class, 'jobstore'])->name('company.jobstore');
Route::get('/company/index/{id}', [CompanyController::class, 'show'])->name('company.show');


//add post  job
// Route::post('/company/index', [CompanyController::class, 'jobstore'])->name('company.jobstore'); 
Route::get('/company/create',[CompanyController::class,'createjob'])->name('company.create');







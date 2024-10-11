<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\JobController;

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


Route::get('/', function () { return view('home'); });


Route::get('login', [LoginController::class,'showLoginForm'])->name('login');
Route::post('login', [LoginController::class,'login']);
Route::post('register', [RegisterController::class,'register']);

// Route::get('password/forget',  function () { 
// 	return view('pages.forgot-password'); 
// })->name('password.forget');
// Route::post('password/email', [ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');
// Route::get('password/reset/{token}', [ResetPasswordController::class,'showResetForm'])->name('password.reset');
// Route::post('password/reset', [ResetPasswordController::class,'reset'])->name('password.update');



// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// });

Route::group(['middleware' => 'auth'], function(){
	// logout route
	Route::get('/logout', [LoginController::class,'logout']);
	// Route::get('/clear-cache', [HomeController::class,'clearCache']);

	// dashboard route  
	Route::get('/dashboard', function () { 
		return view('dashboard'); 
	})->name('dashboard');
	Route::get('/dashboard/pelanggan', function () { 
		return view('content.pages.dashboard_pelanggan'); 
	})->name('dashboard.pelanggan');

	
	// Route::get('/customer', [CustomerController::class, 'index'])->name('customers.index');
	Route::get('/customer', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/customer/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('/customers/store', [CustomerController::class, 'store'])->name('customers.store');
    Route::post('/customer/approve/{id}', [CustomerController::class, 'approve'])->name('customers.approve');
    Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::put('/customer/update/{id}', [CustomerController::class, 'update'])->name('customers.update');
    Route::delete('/customer/delete/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');
    Route::get('/customer/show/{id}', [CustomerController::class, 'show'])->name('customers.show');

	Route::middleware(['super_admin'])->group(function () {
	//only those have manage_user permission will get access
	// Route::group(['middleware' => 'can:manage_user'], function(){
	// Route::get('/dashboard/pelanggan', [HomeController::class,'dashboard_pelanggan'])->name('dashboard-pelanggan');
	Route::get('/users', [UserController::class,'index'])->name('index-user');
	Route::get('/user/get-list', [UserController::class,'getUserList']);
		Route::get('/user/create', [UserController::class,'create']);
		Route::post('/user/create', [UserController::class,'store'])->name('create-user');
		Route::get('/user/{id}', [UserController::class,'edit']);
		Route::post('/user/update', [UserController::class,'update']);
		Route::get('/user/delete/{id}', [UserController::class,'delete']);
	// });

	// Route::group(['middleware' => 'can:manage_role|manage_user'], function(){
		Route::get('/roles', [RolesController::class,'index'])->name('index-roles');
		Route::get('/roles/create', [RolesController::class, 'create'])->name('create-roles');
		Route::get('/roles/show/{id}', [RolesController::class,'show'])->name('show.roles');
		Route::post('/roles/store', [RolesController::class,'store'])->name('store-roles');
		Route::get('/roles/edit/{id}', [RolesController::class,'edit'])->name('edit-roles');
		Route::post('/roles/update/{id}', [RolesController::class,'update'])->name('update-roles');
		Route::get('/roles/delete/{id}', [RolesController::class,'destroy'])->name('delete-roles');
	// });
	


	// Permission Management Routes (Only those with manage_permission|manage_user can access)
// Route::group(['middleware' => 'can:manage_permission|manage_user'], function(){
    Route::get('/permissions', [PermissionController::class,'index'])->name('index-permission');
    Route::get('/permission/create', [PermissionController::class,'create'])->name('create-permission');
    Route::post('/permission/store', [PermissionController::class,'store'])->name('store-permission');
    Route::get('/permission/edit/{id}', [PermissionController::class,'edit'])->name('edit-permission');
    Route::post('/permission/update/{id}', [PermissionController::class,'update'])->name('update-permission');
    Route::get('/permission/delete/{id}', [PermissionController::class,'destroy'])->name('delete-permission');
// });

	// get permissions
	Route::get('get-role-permissions-badge', [PermissionController::class,'getPermissionBadgeByRole']);



    
	


	Route::get('/job', [JobController::class, 'index'])->name('job.index');
    Route::get('/job/create', [JobController::class, 'create'])->name('job.create');
    Route::post('/job/store', [JobController::class, 'store'])->name('job.store');
    Route::post('/job/approve/{id}', [JobController::class, 'approve'])->name('job.approve');
    Route::get('/job/edit/{id}', [JobController::class, 'edit'])->name('job.edit');
    Route::put('/job/update/{id}', [JobController::class, 'update'])->name('job.update');
    Route::delete('/job/delete/{id}', [JobController::class, 'destroy'])->name('job.destroy');
    Route::get('/job/show/{id}', [JobController::class, 'show'])->name('job.show');

});
});

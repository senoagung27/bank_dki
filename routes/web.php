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

	//only those have manage_role permission will get access
	// Route::group(['middleware' => 'can:manage_role|manage_user'], function(){
		Route::get('/roles', [RolesController::class,'index'])->name('index-roles');
		Route::get('/role/get-list', [RolesController::class,'getRoleList']);
		Route::post('/role/create', [RolesController::class,'create']);
		Route::get('/role/edit/{id}', [RolesController::class,'edit']);
		Route::post('/role/update', [RolesController::class,'update']);
		Route::get('/role/delete/{id}', [RolesController::class,'delete']);
	// });


	//only those have manage_permission permission will get access
	// Route::group(['middleware' => 'can:manage_permission|manage_user'], function(){
		Route::get('/permission', [PermissionController::class,'index'])->name('index-permission');
		Route::get('/permission/get-list', [PermissionController::class,'getPermissionList']);
		Route::post('/permission/create', [PermissionController::class,'create']);
		Route::get('/permission/update', [PermissionController::class,'update']);
		Route::get('/permission/delete/{id}', [PermissionController::class,'delete']);
	// });

	// get permissions
	Route::get('get-role-permissions-badge', [PermissionController::class,'getPermissionBadgeByRole']);



	Route::get('/pelanggan', [CustomerController::class,'index'])->name('index-pelanggan');
		Route::get('/role/get-list', [CustomerController::class,'getRoleList']);
		Route::post('/role/create', [CustomerController::class,'create']);
		Route::get('/role/edit/{id}', [CustomerController::class,'edit']);
		Route::post('/role/update', [CustomerController::class,'update']);
		Route::get('/role/delete/{id}', [CustomerController::class,'delete']);
	
});

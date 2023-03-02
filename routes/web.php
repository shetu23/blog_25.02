<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\FrontEnd\frontEndController::class, 'index']);
Route::get('tutorial/{category_slug}', [App\Http\Controllers\FrontEnd\frontEndController::class, 'viewCategoryPost']);
Route::get('tutorial/{category_slug}/{post_slug}', [App\Http\Controllers\FrontEnd\frontEndController::class, 'viewPost']);


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function()
{
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);
    Route::get('/category',[App\Http\Controllers\Admin\CategoryController::class,'index']);
    Route::get('/add-category',[App\Http\Controllers\Admin\CategoryController::class,'create']);
    Route::post('/add-category',[App\Http\Controllers\Admin\CategoryController::class,'store']);
    Route::get('/edit-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class,'edit']);
    Route::put('/update-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class,'update']);
  
    Route::post('/delete-category',[App\Http\Controllers\Admin\CategoryController::class,'destroy']);    
  
  
    Route::get('posts',[App\Http\Controllers\Admin\PostController::class,'index']);
    Route::get('/add-post',[App\Http\Controllers\Admin\PostController::class,'create']);
    Route::post('/add-post',[App\Http\Controllers\Admin\PostController::class,'store']);
    Route::get('/post/{post_id}',[App\Http\Controllers\Admin\PostController::class,'edit']);
    Route::put('/update-post/{post_id}',[App\Http\Controllers\Admin\PostController::class,'update']);
    Route::get('delete-post/{post_id}',[App\Http\Controllers\Admin\PostController::class,'destroy']);

});
Route::prefix('super_admin')->middleware(['auth','isSuperAdmin'])->group(function()
{
    Route::get('/super_dashboard',[App\Http\Controllers\SuperAdmin\SuperDashboardController::class,'index']);

    Route::get('users',[App\Http\Controllers\SuperAdmin\UserController::class,'index']);
    Route::get('/user/{user_id}',[App\Http\Controllers\SuperAdmin\UserController::class,'edit']);
    Route::put('/update-user/{user_id}',[App\Http\Controllers\SuperAdmin\UserController::class,'update']);

    Route::get('/category',[App\Http\Controllers\SuperAdmin\CategoryController::class,'index']);
    Route::get('/add-category',[App\Http\Controllers\SuperAdmin\CategoryController::class,'create']);
    Route::post('/add-category',[App\Http\Controllers\SuperAdmin\CategoryController::class,'store']);
    Route::get('/edit-category/{category_id}',[App\Http\Controllers\SuperAdmin\CategoryController::class,'edit']);
    Route::put('/update-category/{category_id}',[App\Http\Controllers\SuperAdmin\CategoryController::class,'update']);
    Route::get('/delete-category/{category_id}',[App\Http\Controllers\SuperAdmin\CategoryController::class,'destroy']); 
    
    Route::get('posts',[App\Http\Controllers\SuperAdmin\PostController::class,'index']);
    Route::get('/add-post',[App\Http\Controllers\SuperAdmin\PostController::class,'create']);
    Route::post('/add-post',[App\Http\Controllers\SuperAdmin\PostController::class,'store']);
    Route::get('/post/{post_id}',[App\Http\Controllers\SuperAdmin\PostController::class,'edit']);
    Route::put('/update-post/{post_id}',[App\Http\Controllers\SuperAdmin\PostController::class,'update']);
    Route::get('delete-post/{post_id}',[App\Http\Controllers\SuperAdmin\PostController::class,'destroy']);
});
Route::prefix('author')->group(function(){

    Route::get('/authordashboard',[App\Http\Controllers\Author\authordashboardController::class,'index']);

    Route::get('posts',[App\Http\Controllers\Author\PostController::class,'index']);
    Route::get('/add-post',[App\Http\Controllers\Author\PostController::class,'create']);
    Route::post('/add-post',[App\Http\Controllers\Author\PostController::class,'store']);
    Route::get('/post/{post_id}',[App\Http\Controllers\Author\PostController::class,'edit']);
    Route::put('/update-post/{post_id}',[App\Http\Controllers\Author\PostController::class,'update']);
    Route::get('delete-post/{post_id}',[App\Http\Controllers\Author\PostController::class,'destroy']);

    Route::get('/category',[App\Http\Controllers\Author\CategoryController::class,'index']);
    Route::get('/add-category',[App\Http\Controllers\Author\CategoryController::class,'create']);
    Route::post('/add-category',[App\Http\Controllers\Author\CategoryController::class,'store']);
    Route::get('/edit-category/{category_id}',[App\Http\Controllers\Author\CategoryController::class,'edit']);
    Route::put('/update-category/{category_id}',[App\Http\Controllers\Author\CategoryController::class,'update']);
    Route::get('/delete-category/{category_id}',[App\Http\Controllers\Author\CategoryController::class,'destroy']); 

});
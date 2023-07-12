<?php

use App\Models\Task;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

    commomn resources routes
    1.index - show all listings
    2.show - show single listing
    3.create - show form to create new listing
    4.store - store new listing
    5.edit - show form to edit listing
    6.update - update listing
    7.destroy - delete listing
*/

// remember routes only can generate views

// show all listings
Route::get('/', [ListingController::class, 'index']);

// show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// store listing
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// return edit listing form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// to update the edit form
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// to delete a listing
Route::delete('/listings/{listing}', [ListingController::class, 'delete'])->middleware('auth');

// manage listings
Route::get('/listings/manage', [ListingController::class,'manage'])->middleware('auth')->name('manage_listings');

// return single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// show create user form
Route::get('/create', [UserController::class, 'create'])->middleware('guest');

// create new user
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

// user logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// show login form
Route::get('/login', [UserController::class, 'login'])->name('user_login')->middleware('guest');

// authenticate user
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');



// // return to tasks page with the value
// Route::get('/tasks', [TaskController::class, 'index'] );

// // return a single task
// Route::get('/task/{id}', [TaskController::class, 'show']);

// Route::get('/hello', function(){
//     return response('<h1>Hello wolff</h1>')
//     ->header('Content-type','text/plain')
//     ->header('foo','xmllmx');
// });

// Route::get('post/{id}', function($id){
//     // dd($id);
//     return response('post'.$id);
// })->where('id','[0-9]+'); 
// // we can pass the value in the header using{} called wildcards
// // using the where method we can define, which type of value we accept and which we don't 
// // in our case we only accept numbers between 0-9
// // above 'dd' is a debuging method, which will show the passed value and stop executing

// Route::get('/search', function(Request $request){
//     // dd($request);
//     return $request->name.' '. $request->city;
// });
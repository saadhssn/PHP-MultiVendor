<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){

    // Admin Login Routes 
    Route::match(['get', 'post'], 'login', 'AdminController@login');

    Route::group(['middleware'=>['admin']],function(){ 
        // Admin Dashboard Routes 
        Route::get('dashboard', 'AdminController@dashboard');

        // Admin Logout Routes 
        Route::get('logout', 'AdminController@logout');
    });
});

/*
// Admin Login Routes without admin group
Route::get('admin/login', 'App\Http\Controllers\Admin\AdminController@login');



// Admin Dashboard Routes without admin group
Route::get('admin/dashboard', 'App\Http\Controllers\Admin\AdminController@dashboard');
*/

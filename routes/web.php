<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//-- create new routing for articles_set
//-- format - /controller -/ function  (bole define terus )

//Route::get('/articles/create',function(){
// echo "test!";
//});

 Route::get('/articles', 'ArticlesController@index');

 // *link articles controller to create funciton *
 Route::get('/articles/create', 'ArticlesController@create')
 ->name('articles:create');

 /*Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        // Matches The "/admin/users" URL
//    });
});
*/


//process form -- save article - function store
Route::post('/articles/create', 'ArticlesController@store')->name('article:store');

// view all article
//Route::get('/articles', 'ArticlesController@index');

//using route naming
Route::get('/articles', 'ArticlesController@index')->name('articles:index');

Route::get('/articles/index', 'ArticlesController@index')->name('articles:index');

//edit
Route::get('/articles/edit/{article}', 'ArticlesController@edit')
->name('articles:edit');
//update
Route::post('/articles/edit/{article}', 'ArticlesController@update')
->name('articles:update');

Route::post('/articles/delete/{article}', 'ArticlesController@delete')
->name('articles:delete');

Route::get('/articles/view/{article}', 'ArticlesController@delete')
->name('articles:view');

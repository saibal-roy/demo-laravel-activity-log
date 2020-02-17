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
    /*
    |---------------------------------------------
    |After adding the CausesActivity trait in the Users table
    |it logs the causer in the activity log table.
    |For the other models that needs to be logged use the LogsActivity table
    */
    auth()->loginUsingId(1);
    $article = \App\Article::find(1);
    $article->title = "test" . time();
    $article->save();

    /**
     * Added logsActivity for the logged in user changes to itself.
     */
    auth()->user()->name = "test" . time();
    auth()->user()->save();


    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

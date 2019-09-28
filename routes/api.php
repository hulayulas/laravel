<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/person',function(){
//     $person =[
//         'fist_name' => 'Dayana',
//         'last_name' => 'Athira',
//     ];

//     return $person;
// });


//List articles
Route::get('articles','ArticleController@index');

//List single article
Route::get('article/{id}','ArticleController@show');

//create new article
Route::post('article','ArticleController@store');

//update article
Route::put('article','ArticleController@store');

//delete article
Route::delete('article/{id}','ArticleController@destroy');


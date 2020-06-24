<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::get('/plans', 'Api\\PlanController@index');
//Route::get('/plans/{plan}','Api\\PlanController@show');
//Route::post('/plans','Api\\Plancontroller@store');
//Route::put('plans/{plan}', 'Api\\PlanController@update');
//Route::delete('plans/{plan}', 'Api\\PlanController@destroy');

//Route::resource('plans','Api\\PlanController');

Route::resource('plans', 'Api\\PlanController')->except(['create','edit',]);
Route::resource('groups', 'Api\\GroupController')->except(['create','edit',]);
Route::resource('companies', 'Api\\CompanyController')->except(['create','edit',]);







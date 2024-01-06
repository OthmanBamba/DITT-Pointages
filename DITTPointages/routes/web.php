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
    return view('ben');
});

Route::get('/sous-directions', function () {
    return view('sous-directions.list');
});



Route::get('/agents', function () {
    return view('agents.list');
});

Route::get('/pointages', function () {
    return view('pointages.list');
});


Route::get('/services', function () {
    return view('services.list');
});


Route::get('/utilisateurs', function () {
    return view('utilisateurs.list');
});


Route::get('/sous-directions','SousDirectionController@liste');
Route::get('/formulaire','SousDirectionController@form');
Route::post('/formulaire','SousDirectionController@store');
Route::get('sous-directions/{id}/edit','sousDirectionController@edit');
Route::get('sous-directions/update','sousDirectionController@update');


Route::get('/servicesG','servicesController@liste');
Route::get('/formulaire3','servicesController@form');



Route::get('/agents','AgentsController@liste');
Route::get('/pointages','pointagesController@liste');
Route::get('/teste','testController@greets');
Route::get('/user','UtilaisateurController@liste');



Route::get('/formulaire5','AgentsController@form');
Route::get('/formulaire4','PointagesController@form');
Route::get('/formulaire6', 'UtilaisateurController@form');



Route::get('/moov', function () {
    return view('moov');
});

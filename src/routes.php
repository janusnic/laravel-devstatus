<?php

/*
|--------------------------------------------------------------------------
| Package Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.dfdf
|
*/

Route::get('devstatus', 'Janusnic\DevStatus\DevStatusController@home');
Route::get('devstatus/{username}', 'Janusnic\DevStatus\DevStatusController@index');

Route::get('/test', function(){
    echo Test::doIt();
});
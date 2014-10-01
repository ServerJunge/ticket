<?php

// app/routes.php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Bind route parameters.
Route::model('ticket', 'Ticket');

// Show pages.
Route::get('/', 'TicketsController@index');
Route::get('/create', 'TicketsController@create');
Route::get('/edit/{ticket}', 'TicketsController@edit');
Route::get('/delete/{ticket}', 'TicketsController@delete');

// Handle form submissions.
Route::post('/create', 'TicketsController@handleCreate');
Route::post('/edit', 'TicketsController@handleEdit');
Route::post('/delete', 'TicketsController@handleDelete');
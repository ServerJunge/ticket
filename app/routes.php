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

// Bind route parameters for Ticket.
Route::model('ticket', 'Ticket');

// Bind route parameters for User.
Route::model('user', 'User');

// Show pages User.
Route::get('/users/', 'UsersController@index');
Route::get('/users/create', 'UsersController@create');
Route::get('/users/edit/{user}', 'UsersController@edit');
Route::get('/users/delete/{user}', 'UsersController@delete');

// Handle form submissions User.
Route::post('/users/create', 'UsersController@handleCreate');
Route::post('/users/edit', 'UsersController@handleEdit');
Route::post('/users/delete', 'UsersController@handleDelete');

// Show pages Ticket.
Route::get('/tickets/', 'TicketsController@index');
Route::get('/tickets/create', 'TicketsController@create');
Route::get('/tickets/edit/{ticket}', 'TicketsController@edit');
Route::get('/tickets/delete/{ticket}', 'TicketsController@delete');

// Handle form submissions Ticket.
Route::post('/tickets/create', 'TicketsController@handleCreate');
Route::post('/tickets/edit', 'TicketsController@handleEdit');
Route::post('/tickets/delete', 'TicketsController@handleDelete');

// Test Routes for User with relation Tasks
Route::get('{username}', function($username)
{
	$user = User::with('tickets')->whereUsername($username)->first();
	return $user->tickets;
});
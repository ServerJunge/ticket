<?php

// app/controllers/TicketsController.php

class TicketsController extends BaseController
{
    public function index()
    {
        // Show a listing of tickets.
        $tickets = Ticket::with('user')->get();
        // Count the number of tickets
        $counter = count($tickets);

        return View::make('tickets/index', compact('tickets', 'counter'));
    }

    public function create()
    {
        // Create Dropdown-List with Users.
        $users = User::lists('username', 'id');
        // Show the create ticket form.
        return View::make('tickets/create', compact('users'));
    }

    public function handleCreate()
    {
        // Handle create form submission.
        $user = Input::get('username');


        $ticket = new Ticket;
        $ticket->title = Input::get('title');
        $ticket->description = Input::get('description');
        $ticket->user()->associate($user);
        $ticket->save();

        return Redirect::action('TicketsController@index');
    }

    public function edit(Ticket $ticket)
    {
        // Show the edit ticket form.
        return View::make('tickets/edit', compact('ticket'));
    }

    public function handleEdit()
    {
        // Handle edit form submission.
        $ticket = Ticket::findOrFail(Input::get('id'));
        $ticket->title = Input::get('title');
        $ticket->description = Input::get('description');
        $ticket->save();

        return Redirect::action('TicketsController@index');
    }

    public function delete(Ticket $ticket)
    {
        // Show delete confirmation page.
        return View::make('tickets/delete', compact('ticket'));
    }

    public function handleDelete()
    {
        // Handle the delete confirmation.
        $id = Input::get('ticket');
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return Redirect::action('TicketsController@index');
    }
}
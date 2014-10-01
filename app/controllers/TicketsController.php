<?php

// app/controllers/TicketsController.php

class TicketsController extends BaseController
{
    public function index()
    {
        // Show a listing of tickets.
        $tickets = Ticket::all();

        return View::make('index', compact('tickets'));
    }

    public function create()
    {
        // Show the create ticket form.
        return View::make('create');
    }

    public function handleCreate()
    {
        // Handle create form submission.
        $ticket = new Ticket;
        $ticket->title        = Input::get('title');
        $ticket->description   = Input::get('description');
        $ticket->save();

        return Redirect::action('TicketsController@index');
    }

    public function edit(Ticket $ticket)
    {
        // Show the edit ticket form.
        return View::make('edit', compact('ticket'));
    }

    public function handleEdit()
    {
        // Handle edit form submission.
        $ticket = Ticket::findOrFail(Input::get('id'));
        $ticket->title        = Input::get('title');
        $ticket->description   = Input::get('description');
        $ticket->save();

        return Redirect::action('TicketsController@index');
    }

    public function delete(Ticket $ticket)
    {
        // Show delete confirmation page.
        return View::make('delete', compact('ticket'));
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
@extends('layout')

@section('content')
    <div class="page-header">
        <h1>All Tickets <small>Total Number of Tickes - {{ $counter }} </small></h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('TicketsController@create') }}" class="btn btn-primary">Create Ticket</a>
        </div>
    </div>

    @if ($tickets->isEmpty())
        <p>There are no tickets! :(</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Last Update</th>
                    <th>User</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->title }}</td>
                    <td>{{ $ticket->description }}</td>
                    <td>{{ $ticket->created_at }}</td>
                    <td>{{ $ticket->updated_at }}</td>
                    <td>{{ $ticket->user->username }}</td>
                    <td>
                        <a href="{{ action('TicketsController@edit', $ticket->id) }}" class="btn btn-default btn-sm">Edit</a>
                        <a href="{{ action('TicketsController@delete', $ticket->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop
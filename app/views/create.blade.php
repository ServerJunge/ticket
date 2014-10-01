@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Create Ticket <small>and someday finish it!</small></h1>
    </div>

    <form action="{{ action('TicketsController@handleCreate') }}" method="post" role="form">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" />
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" />
        </div>
        <input type="submit" value="Create" class="btn btn-primary" />
        <a href="{{ action('TicketsController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop
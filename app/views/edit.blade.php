@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Edit ticket <small>Go on and find a solution!</small></h1>
    </div>

    <form action="{{ action('TicketsController@handleEdit') }}" method="post" role="form">
        <input type="hidden" name="id" value="{{ $ticket->id }}">

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $ticket->title }}" />
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="publisher" value="{{ $ticket->description }}" />
        </div>
        <input type="submit" value="Save" class="btn btn-primary" />
        <a href="{{ action('TicketsController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop
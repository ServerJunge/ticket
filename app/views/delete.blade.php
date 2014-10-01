@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Delete {{ $ticket->title }} <small>Are you sure?</small></h1>
    </div>
    <form action="{{ action('TicketsController@handleDelete') }}" method="post" role="form">
        <input type="hidden" name="ticket" value="{{ $ticket->id }}" />
        <input type="submit" class="btn btn-danger" value="Yes" />
        <a href="{{ action('TicketsController@index') }}" class="btn btn-default">No way!</a>
    </form>
@stop
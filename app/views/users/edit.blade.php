@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Edit user <small>Change user properties</small></h1>
    </div>

    <form action="{{ action('UsersController@handleEdit') }}" method="post" role="form">
        <input type="hidden" name="id" value="{{ $user->id }}">

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" value="{{ $user->username }}" />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $user->email }}" />
        </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" name="password" value="{{ $user->password }}" />
        </div>
        <input type="submit" value="Save" class="btn btn-primary" />
        <a href="{{ action('UsersController@index') }}" class="btn btn-danger">Cancel</a>
    </form>
@stop
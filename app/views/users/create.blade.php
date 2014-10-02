@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Create User <small>A new User for our app!</small></h1>
    </div>

    <form action="{{ action('UsersController@handleCreate') }}" method="post" role="form">
        <div class="form-group">
            <label for="title">Username</label>
            <input type="text" class="form-control" name="username" />
        </div>
        <div class="form-group">
            <label for="description">Email</label>
            <input type="text" class="form-control" name="email" />
        </div>
        <div class="form-group">
            <label for="description">Password</label>
            <input type="text" class="form-control" name="password" />
        </div>
        <input type="submit" value="Create" class="btn btn-primary" />
        <a href="{{ action('UsersController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop
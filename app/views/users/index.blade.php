@extends('layout')

@section('content')
    <div class="page-header">
        <h1>All Users <small>Gotta catch 'em all!</small></h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('UsersController@create') }}" class="btn btn-primary">Create User</a>
        </div>
    </div>

    @if ($users->isEmpty())
        <p>There are no users! :(</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>
                        <a href="{{ action('UsersController@edit', $user->id) }}" class="btn btn-default btn-sm">Edit</a>
                        <a href="{{ action('UsersController@delete', $user->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop
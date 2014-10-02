<?php

// app/controllers/UsersController.php

class UsersController extends BaseController
{
    public function index()
    {
        // Show a listing of users.
        $users = User::all();

        return View::make('users/index', compact('users'));
    }

    public function create()
    {
        // Show the create user form.
        return View::make('users/create');
    }

    public function handleCreate()
    {
        // Handle create form submission.
        $user = new User;
        $user->username = Input::get('username');
        $user->email= Input::get('email');
        $user->password = Input::get('password');
        $user->save();

        return Redirect::action('UsersController@index');
    }

    public function edit(User $user)
    {
        // Show the edit user form.
        return View::make('users/edit', compact('user'));
    }

    public function handleEdit()
    {
        // Handle edit form submission.
        $user = User::findOrFail(Input::get('id'));
        $user->username = Input::get('username');
        $user->email = Input::get('email');
        $user->password = Input::get('password');
        $user->save();

        return Redirect::action('UsersController@index');
    }

    public function delete(User $user)
    {
        // Show delete confirmation page.
        return View::make('users/delete', compact('user'));
    }

    public function handleDelete()
    {
        // Handle the delete confirmation.
        $id = Input::get('user');
        $user = User::findOrFail($id);
        $user->delete();

        return Redirect::action('UserController@index');
    }
}
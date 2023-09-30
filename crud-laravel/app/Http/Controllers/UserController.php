<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public readonly User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $users = $this->user->all();
        return view('users', ['users' => $users]);
    }

    public function create()
    {
        return view('users_create');
    }

    public function store(Request $request)
    {
        $created = $this->user->create([
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'dateBirth' => $request->input('dateBirth'),
            'email' => $request->input('email'),
            'password' => password_hash($request->input('password'), PASSWORD_DEFAULT),
        ]);
        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        return view('users_show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('users_edit', ['user' => $user]);
    }

    public function update(Request $request, string $id)
    {
        $updated = $this->user->where('id', $id)->update($request->except((['_token', '_method'])));
    }

    public function destroy(Request $request)
    {
        $this->user->where('id', $request->user)->delete();
        return redirect()->route('users.index');
    }
}

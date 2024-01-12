<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class UsersController extends Controller
{
    public function index()
    {
        $users = users::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $users = users::all();
        return view('users.create', compact('users'));
    }

    public function store(Request $request)
    {
        users::create($request->all());
        return redirect()->route('users.index');
    }

    public function edit(users $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, users $user)
    {
        $data = $request->except(['_token', '_method']);
        $user->update($data);
        return redirect()->route('users.index');
    }

    public function destroy(users $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}

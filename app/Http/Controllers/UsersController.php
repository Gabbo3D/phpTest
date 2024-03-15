<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'Email' => 'required|email|unique:users',
                'Password' => 'required|min:6',
                'Name' => 'required',
                'Reset' => 'boolean',
                'Confirm' => 'boolean',
                'Token' => 'max:64',
            ]);
            User::create($request->all());
            return redirect()->route('users.index')->with('success', 'Successfully created user');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->validator->errors())->withInput();
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'An error occurred while saving the user']);
        }
    }
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        try {
            $user = User::find($id);
            $request->validate([
                'Email' => 'required|email|unique:users,Email,'.$id.',IdUser',
                'Password' => 'required|min:6',
                'Name' => 'required',
                'Reset' => 'boolean',
                'Confirm' => 'boolean',
                'Token' => 'max:64',
            ]);
            $user->update($request->all());
            return redirect()->route('users.index')->with('success', 'Successfully updated user');
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred while updating the user');
        }
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);        
        $user->delete();// Delete from DDBB
        return redirect()->route('users.index')->with('success', 'User successfully deleted.');
    }
}

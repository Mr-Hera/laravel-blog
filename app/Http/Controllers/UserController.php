<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // show registration form
    public function create() {
        return view('users.register');
    }

    // create new user
    public function store(Request $request) {
        $formData = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => 'required|confirmed|min:6',
        ]);

        // hash password
        $formData['password'] = bcrypt($formData['password']);

        // create user
        $user = User::create($formData);

        // login user
        auth()->login($user);

        return redirect('/')->with('message', 'User Created & Logged in Successfully!');
    }
}

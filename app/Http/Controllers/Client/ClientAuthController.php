<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ClientAuthController extends Controller
{
    // Show combined login/register form for clients
    public function showAuthForm()
    {
        return view('client.auth.client_auth'); // create this blade file
    }

    // Handle client login
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('email', 'password');

        // Check role = 'client' or whatever you assign for normal users
        if (Auth::attempt(array_merge($credentials, ['role' => 'client']))) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');  // your client dashboard route
        }

        return back()->withErrors([
            'login' => 'Invalid credentials or not a client account.',
        ])->withInput($request->only('email'));
    }

    // Handle client registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','min:6','confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'client',  // assign client role
        ]);

        Auth::login($user);
        return redirect()->route('dashboard');  // client dashboard
    }

    // Logout client
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('client.login'); // create route for client login page
    }
}

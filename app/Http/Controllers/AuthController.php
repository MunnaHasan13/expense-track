<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
//use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        //dd($validated);

        try {
            $user = User::create($validated);
            Auth::login($user);

            event(new Registered($user));

            //return redirect()->route('expense.index');
            return view('dashboards.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Registration failed. Please try again.']);
        }
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($validated))
        {
            $request->session()->regenerate();

            //return redirect()->route('expense.index');
            return view('dashboards.index');
        }

        throw ValidationException::withMessages([
            'credentials' => 'Sorry! incorrect credentials'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('welcome');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\AuthLoginRequest;
use App\Http\Requests\Auth\AuthRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function signpage()
    {
        return view('pages.login-register');
    }

    public function register(AuthRegisterRequest $request)
    {
        $user = User::create($request->validated());
        Auth::login($user);
        return redirect()->route('home');
    }

    public function login(AuthLoginRequest $request)
    {
        if(Auth::attempt($request->validated()))
        {
            $user = User::findOrFail(Auth::user()->getAuthIdentifier());

            return view('pages.index', ['user' => $user]);
        }

        return redirect()->back()->with('status', 'неверный логин или пароль');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    public function check()
    {
        if (Auth::check())
        {
            $authUser = User::findOrFail(Auth::user()->getAuthIdentifier());
            return view('pages.profile', ['user' => $authUser]);
        }
        return redirect()->back();
    }
}

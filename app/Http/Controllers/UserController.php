<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    const ADMINISTRATOR = 'Администратор';
    const REGISTERED = 'Зарегистрированный';

    public function loginForm()
    {
        return view('frontend.user.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'name' => $request->name,
            'password' => $request->password,
        ], $remember = true)){
            $request->session()->flash('success', 'Вы успешно авторизовались');
            //return redirect()->route('home');
            /*if (Auth::user()->hasRole(self::ADMINISTRATOR)){
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('home');
            }*/
        }
        return redirect()->back()->with('error', 'Неправильный Логин или Пароль');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.create');
    }

}

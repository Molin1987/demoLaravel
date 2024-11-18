<?php 

namespace App\Http\Controllers; 

use App\Models\User; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash; 

class AuthController extends Controller 
{ 
    public function showRegForm() 
    { 
        return view('layouts.index'); 
    } 

    public function Reg(Request $request) 
    { 
        $request->validate([ 
            'fullname' => 'required|string|max:255', 
            'phone' => 'required|string|max:20|min:10', 
            'email' => 'required|string|email|max:255|unique:users', 
            'login' => 'required|string|max:255|unique:users', 
            'password' => 'required|string|min:8', 
        ]); 

        User::create([ 
            'fullname' => $request->fullname, 
            'phone' => $request->phone, 
            'email' => $request->email, 
            'login' => $request->login, 
            'password' => Hash::make($request->password), 
        ]); 

        return redirect()->route('log')->with('success', 'Успешная регистрация!'); 
    } 

    public function showLoginForm() 
    { 
        return view('auth.login'); 
    } 

    public function Log(Request $request) 
    { 
        $request->validate([ 
            'login' => 'required|string|max:255', 
            'password' => 'required|string|min:8', 
        ]); 

        if (Auth::attempt(['login' => $request->login, 'password' => $request->password])) { 
            return redirect('/')->with('success', 'Успешный вход!'); 
        } 

        return back()->withErrors(['login' => 'Неверный логин или пароль']); 
    } 

    public function logout() 
    { 
        Auth::logout(); 
        return redirect('/')->with('success', 'Успешный выход!'); 
    } 
}

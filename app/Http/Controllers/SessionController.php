<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if(!Auth::guest()) return redirect('/');
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserLoginRequest $request)
    {
        //
        if(!Auth::attempt($request->only('email','password'))){
           
           throw ValidationException::withMessages([
            'password'=> 'User creedential is invalid'
           ]);
        }
        $request->session()->regenerate();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
     public function destroy()
    {
        //
     
        Auth::logout();
        return redirect('/login');
    }
}

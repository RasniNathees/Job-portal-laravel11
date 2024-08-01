<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterdController extends Controller
{
  
    public function create()
    {
        //
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        //
       $user = User::create($request->all());
     
        Auth::login($user);
        return redirect('/');

    }
}

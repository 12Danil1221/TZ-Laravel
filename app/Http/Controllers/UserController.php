<?php

namespace App\Http\Controllers;

use App\Models\CreateUser;
use App\Models\Tovar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tovars = Tovar::all();
        return view('index', compact('tovars'));
    }
        public function registration_create()
    {
        return view('registration-create');
    }
    public function registration(Request $request)
    {
        $user = $request->validate([
            'email'=>'required',
            'password'=>'required',
            'gender'=>'required',
        ]);
        $user = CreateUser::create($user);

        $cookie = Cookie::make('user_id', $user->id, 43200);
        
        return redirect()->route('welcome')->withCookie($cookie);
    }
    public function profile(Request $request)
    {
        $user_id = $request->cookie('user_id');

        $user = CreateUser::find($user_id);

        return view('profile', compact('user'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Удаляем куку 'user_id'
        $cookie = Cookie::forget('user_id');

        return redirect()->route('welcome')->withCookie($cookie);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
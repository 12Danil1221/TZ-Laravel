<?php

namespace App\Http\Controllers;

use App\Models\CreateUser;
use App\Models\Tovar;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;
use InvalidArgumentException;

use function Laravel\Prompts\alert;
use function Pest\Laravel\json;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Tovar $tovar)
    {
        $tovars = Tovar::all();
        return view('welcome', compact('tovars', 'tovar'));
    }
        public function registration_create()
    {
        return view('registration-create');
    }
    public function registration(Request $request)
    {
        $user = $request->validate([
            'image'=>'required|image',
            'name'=>'required',
            'fullname'=>'required',
            'age'=>'required',
            'email'=>'required',
            'password'=>'required',
            'gender'=>'required',
        ]);
        
        $user['image'] = Storage::disk('public')->put('images', $user['image']);
        
        CreateUser::create($user);

        
        return redirect()->route('login');
    }
        public function login_view(CreateUser $user)
    {
        return view('login', compact('user'));
    }
    public function authorization(Request $request, CreateUser $user)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $user = CreateUser::firstWhere('email',$request->email);

        if ($user == null) {
            abort(403, 'Такого пользователя не существует!');
        }

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
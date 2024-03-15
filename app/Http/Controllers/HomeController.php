<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        dd(Auth::user());

        $users = User::select("id", "name", "email", "status")
        // ->where('status', '!=', '0')
        ->where('status', '<>', '0')
        ->get();

        dd($users);
 
    }
    
    public function notification()
    {
        return view('notification');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        // $user contains user details obtained from Google

        // auth()->login($user);

        dd($user);
    
        // You can now create or authenticate the user in your application
    }


    

}

<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Login the admin.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    // public function login(Request $request)
    // {
    //     $this->validator($request);
    //      if(Auth::attempt($request->only('email','password'), $request->filled('remember'))){

    //         // ->hasRoleId(2)
    //         if(Auth::user()->hasRoleId(2)){
    //             // dd(Auth::user());
    //             return redirect(route('customer.home'))->with('status', 'You are Logged in as Customer!');

    //         }
    //          else {
    //             //Authentication passed...
    //             return redirect(route('admin.home'))->with('status', 'You are Logged in as Admin!');
    //         }

    //     }

    //     // Authentication failed
    //     return $this->loginFailed();
    // }
}

<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use Auth;
use App\User;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback()
    {
        $data = Socialite::with('github')->user();
        $user = User::where('email', $data->email)->first();
        if (!is_null($user)) {
            Auth::login($user);
            $user->name = $data->user['name'];
            $user->provider_id = $data->user['id'];
            $user->save();
        } else {
            $user = User::where('provider_id', $data->user['id'])->first();
            if (is_null($user)) {
                // Create a new user
                $user = new User();
                $user->name = $data->user['name'];
                $user->email = $data->email;
                $user->provider_id = $data->user['id'];
                $user->avatar = $data->avatar;
                
                $user->save();
            }
            Auth::login($user);
        }
        Session::flash('success', 'Succes Loggin, call admin to change permissions');
        
        return redirect()->route('home');
    

        // $user->token;

    }
}

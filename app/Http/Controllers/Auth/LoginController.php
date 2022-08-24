<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    // protected $redirectTo = RouteServiceProvider::HOME;
   protected function authenticated(Request $request, $user)
   {
       if($user->hasRole('superadministrator')){
        return redirect('admin/dashboard');
       }
       if($user->hasRole('user')){
        return redirect('user/dashboard');
       }
   }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function redirectToProvider($social)
    {
        return Socialite::driver($social)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($social)
    {
        $usersocial = Socialite::driver($social)->user();
        // dd($user);
        $user = User::where([
            'name'=>$usersocial->getName(),
            'email'=>$usersocial->getEmail(),
            'avatar'=>$usersocial->getAvatar(),
            'provider_id'=>$usersocial->getId(),
           
        ])->first();
        if($user){
            Auth::Login($user,true);
            return redirect()->action('UserController@index');
        }else{
            return redirect()->route('register');
        }

      
        // $user->token;
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    use RedirectsUsers;
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
    public function redirectPath(){
        if(Auth::check()){
            if(auth::user()->status == 'active'){
                $role = Auth::user()->role;
                if( $role =='admin' ){
                    return '/admin/profil';
                }elseif($role == 'user'){
                    return '/user/dashboard';
                }
            }elseif(auth::user()->status == 'banned'){
                Auth::logout();
            }else{
                Auth::logout();
            }
        }
    }
}

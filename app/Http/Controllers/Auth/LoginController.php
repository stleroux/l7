<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
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
	* Login username to be used by the controller.
	*
	* @var string
	*/
	protected $username;

	/**
	* Create a new controller instance.
	*
	* @return void
	*/
	public function __construct()
	{
		$this->middleware('guest')->except('logout');
		$this->username = $this->findUsername();
	}

	/**
	* Get the login username to be used by the controller.
	*
	* @return string
	*/
	public function findUsername()
	{
		$login = request()->input('login');
 
		$fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
 
		request()->merge([$fieldType => $login]);
 
		return $fieldType;
	}
 
	/**
	* Get username property.
	*
	* @return string
	*/
	public function username()
	{
		return $this->username;
	}


	public function redirectTo()
	{
        
		// User role
		if($page = ucfirst(Auth::user()->redirectAfterLogin))
		{
			return $page;
		}
	}


	/**
	* Redirect the user to the GitHub authentication page.
	*
	* @return \Illuminate\Http\Response
	*/
	public function redirectToProvider($service)
	{

		return Socialite::driver($service)->redirect();

	}


	/**
	* Obtain the user information from GitHub.
	*
	* @return \Illuminate\Http\Response
	*/
	public function handleProviderCallback($service)
	{
		
		if($service == 'twitter') {
			$socialUser = Socialite::driver($service)->user();
		} else {
			$socialUser = Socialite::driver($service)->stateless()->user();
		}

		// If the user doesn't exist, create them
		// If the user does exist, get the user
		// Either way, authenticate the user into the application and redirect afterwards
		$user = User::firstOrCreate([
			'email' => $socialUser->getEmail()
		], [
			'name' => $socialUser->getName(),
			'password' => bcrypt('password')
		]);
		
		Auth::login($user, true);

		return redirect()->route('homepage');
	}

}

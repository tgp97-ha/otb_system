<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller{
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

	public function username() {
		return 'username';
	}

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware( 'guest' )->except( 'logout' );
	}

	protected function authenticated( Request $request, $user ) {
		if($user->hasRole( 'admin' ))
			return redirect( '/');
		if ( ( $request->login_type == 1 && ! $user->hasRole( 'tourist' ) ) || ( $request->login_type == 2 && ! $user->hasRole( 'tour-operator' ) ) ) {
			$this->guard()->logout();
			$request->session()->invalidate();

			return redirect( '/login' )->withErrors( [ 'message' => 'You are unauthorized to login' ] );
		}
		if($request->login_type == 1 && !$user->tourist){
			return redirect( '/tourist/create');
		}
		if($request->login_type == 2 && !$user->tourOperator){
			return redirect( '/tour-operator/create');
		}
	}
}

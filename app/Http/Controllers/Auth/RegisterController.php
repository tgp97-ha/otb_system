<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller{
	/*
	|--------------------------------------------------------------------------
	| Register Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users as well as their
	| validation and creation. By default this controller uses a trait to
	| provide this functionality without requiring any additional code.
	|
	*/

	use RegistersUsers;

	/**
	 * Where to redirect users after registration.
	 *
	 * @var string
	 */
	protected $redirectTo = '/';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware( 'guest' );
	}

	protected function createTourist( Request $request ) {
		$request->validate( [
			'username' => [ 'required', 'string', 'max:255', 'unique:users' ],
			'email'    => [ 'required', 'string', 'email', 'max:255', 'unique:users' ],
			'password' => [ 'required', 'string', 'min:6', 'confirmed' ],
		] );
		$user = User::create( [
			'username' => $request['username'],
			'email'    => $request['email'],
			'password' => bcrypt( $request['password'] ),
		] );
		$user->save();
		$user->assignRole( 'tourist' );
		Auth::login( $user );

		return redirect( route('tourist.create'));
	}

	protected function createTourOperator( Request $request ) {
		$request->validate( [
			'username' => [ 'required', 'string', 'max:255', 'unique:users' ],
			'email'    => [ 'required', 'string', 'email', 'max:255', 'unique:users' ],
			'password' => [ 'required', 'string', 'min:6', 'confirmed' ],
		] );
		$user = User::create( [
			'username' => $request['username'],
			'email'    => $request['email'],
			'password' => bcrypt( $request['password'] ),
		] );
		$user->assignRole( 'tour-operator' );
		Auth::login( $user );

		return redirect( route('tour-operator.create'));
	}
}

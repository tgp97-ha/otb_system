<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourOperator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourOperatorController extends Controller{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$tourOperators = TourOperator::all();

		return view( 'tour-operator.index', [
			'tourOperators' => $tourOperators,
		] );
	}

	public function list( Request $request ) {
		$tourOperators = TourOperator::with( [ 'userTourist' ] );
		if ( $request->input( 'name' ) !== null ) {
			$tourOperators->where( 'tourist_name', 'LIKE', '%' . $request->input( 'name' ) . '%' );
		}
		$tourOperators = $tourOperators->get();

		return view( 'tour-operator.index', [
			'tourOperators' => $tourOperators,
		] );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return view( 'tour-operator.create' );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store( Request $request ) {
		//if (!Auth::user()->can('companies_management')) {
		//    abort(403);
		//}
		$request->validate( [
			'name'         => 'required|min:2|max:64',
			'phone_number' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:15',
			'tax_number'   => 'nullable|string',
			'address'      => 'nullable|string',
			'description'  => 'nullable|string',
		] );
		$user                             = auth()->user();
		$item                             = new TourOperator();
		$item->tour_operator_name         = $request->input( 'name' );
		$item->tour_operator_tax_number   = $request->input( 'tax_number' );
		$item->tour_operator_phone_number = $request->input( 'phone_number' );
		$item->tour_operator_address      = $request->input( 'address' );
		$item->tour_operator_description  = $request->input( 'description' );
		$item->tour_operator_user_serial  = $user->id;
		$item->save();
		$request->session()->flash( 'message', 'Successfully created' );

		return redirect('/' );
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 *
	 * @return Response
	 */
	public function show( $id ) {
		$operator = TourOperator::find( $id );
		$userSerial = $operator->userTourOperator->id;
		$tours    = Tour::where( 'tour_tour_operator_serial', '=', $userSerial  )->get();

		return view( 'tour-operator.detail', [ 'tourOperator' => $operator, 'tours' => $tours ] );
	}

	public function showProfile() {

		$operator = TourOperator::where( 'tour_operator_user_serial', auth()->user()->id )->first();

		return view( 'tour-operator.detail', [ 'tourOperator' => $operator ] );
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id
	 *
	 * @return Response
	 */
	public function edit( $id ) {
		//if (!Auth::user()->can('companies_management')) {
		//    abort(403);
		//}
		$tourOperator = TourOperator::find( $id );

		return view( 'tour-operator.edit', [ 'tour-operator' => $tourOperator ] );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param Request $request
	 * @param int $id
	 *
	 * @return Response
	 */
	public function update( Request $request, $id ) {
		$request->validate( [
			'tourist_name' => 'required|min:2|max:64',
			'dob'          => 'nullable|string',
			'address'      => 'nullable|string|max:100',
			'phone_number' => 'nullable|string|max:10',
			'personal_id'  => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:15',
		] );
		$item = TourOperator::find( $id );
		if ( $item ) {
			$item->tour_operator_name         = $request->input( 'name' );
			$item->tour_operator_tax_number   = $request->input( 'tax_number' );
			$item->tour_operator_phone_number = $request->input( 'phone_number' );
			$item->tour_operator_address      = $request->input( 'address' );
			$item->tour_operator_description  = $request->input( 'description' );
			$item->save();
			$request->session()->flash( 'message', 'Successfully edited' );

			return redirect()->route( 'tour-operator.show', [ $id => $id ] );
		} else {
			return back()->withInput()->withErrors( [ 'msg', 'Can\'t update tour' ] );
		}
	}

	public function editOwnProfile() {
		$user = Auth::user();
		$item = TourOperator::where( 'tour_operator_user_serial', $user->id )->first();

		return view( 'tour-operator.edit', [ 'tourOperator' => $item ] );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 *
	 * @return Response
	 */
	public function destroy( $id ) {
		$item = TourOperator::find( $id );
		if ( $item ) {
			$item->delete();
		}

		return redirect()->route( 'tour-operator.index' );
	}
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Module\Sentiment;
use App\Models\Booking;
use App\Models\Comment;
use App\Models\Place;
use App\Models\Service;
use App\Models\Tour;
use App\Models\TourOperator;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class TourController extends Controller{
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
		//search
		$tours    = Tour::with( 'place', 'services', 'images' );
		$places   = Place::all();
		$services = Service::all();
		$operators = TourOperator::all();

		if ( ! Auth::user() || Auth::user()->can( 'tourist' ) ) {
			$tours->where( 'tour_is_verify', 1 );
		}
		if ( Auth::user() ) {
			if ( Auth::user()->can( 'tour-operator' ) ) {
				$tours->with( 'userTourist' )->whereHas( 'userTourist', function ( $user ) {
					$user->where( 'id', auth()->user()->id );
				} );
			}
		}
		$tours = $tours->paginate( 10, [ '*' ] );

		return view( 'tour.index', [
			'tours'    => $tours,
			'places'   => $places,
			'services' => $services,
			'operators'=> $operators,
		] );
	}

	public function list( Request $request ) {
		//search
		$tours = Tour::with( 'place', 'services' );
		if ( $request ) {
			if ( $request->input( 'destination' ) !== null ) {
				$tours->where( 'tour_place', '=', $request->input( 'destination' ) );
			}
			if ( $request->input( 'start_date_range_begin' ) !== null ) {
				$tours->whereDate( 'tour_start_date', '>=', $request->input( 'start_date_range_begin' ) );
			}
			if ( $request->input( 'start_date_range_end' ) !== null ) {
				$tours->whereDate( 'tour_start_date', '<=', $request->input( 'start_date_range_begin' ) );
			}
			if ( $request->input( 'price_range_begin' ) !== null ) {
				$tours->where( 'tour_prices', '>=', $request->input( 'price_range_begin' ) );
			}
			if ( $request->input( 'price_range_end' ) !== null ) {
				$tours->where( 'tour_prices', '>=', $request->input( 'price_range_end' ) );
			}
			if ( $request->input( 'services' ) !== null && count( $request->input( 'services' ) ) ) {
				$servicesRequest = $request->input( 'services' );
				$tours->whereHas( 'services', function ( $service ) use ( $servicesRequest ) {
					$service->whereIn( 'services.id', $servicesRequest );
				} );
			}
		}
		if ( ! Auth::user() || Auth::user()->can( 'tourist' ) ) {
			$tours->whereDate( 'tour_start_date', '>=', Carbon::today() )->where( 'tour_slots_left', '>', 0 )->where( 'tour_is_verify', '=', 1 );
		}
		if ( Auth::user() ) {
			if ( Auth::user()->can( 'tour-operator' ) ) {
				$tours->with( 'userTourist' )->whereHas( 'userTourist', function ( $user ) {
					$user->where( 'id', auth()->user()->id );
				} );
			}
			if ( Auth::user()->can( 'admin' ) ) {
				if ( $request->input( 'is_verify' ) !== null && count( $request->input( 'is_verify' ) ) ) {
					$tours->whereIn( 'tour_is_verify', $request->input( 'is_verify' ) );
				}
			}
		}
		$tours    = $tours->paginate(10);
		$places   = Place::all();
		$services = Service::all();

		return view( 'tour.index', [
			'tours'          => $tours,
			'search_details' => $request,
			'places'         => $places,
			'services'       => $services,
		] );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		$services = Service::all();
		$places   = Place::all();
		$item     = TourOperator::where( 'tour_operator_user_serial', auth()->user()->id );

		return view( 'tour.create', [ 'tourOperator' => $item, 'services' => $services, 'places' => $places ] );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store( Request $request ) {
		$request->validate( [
			'tour_name'        => 'required|min:2|max:64',
			'title'            => 'required|string',
			'destination'      => 'required',
			'start_date'       => 'required',
			'tour_description' => 'required',
			'tour_detail'      => 'required',
			'phone_number'     => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:15',
			'night_length'     => 'required',
			'day_length'       => 'required',
			'tour_slot'        => 'required',
			//'tour_slot_left'   => 'required',
			'tour_price'       => 'required',
			'tour_image.*'     => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
		] );
		$imageData = [];
		foreach ( $request->file( 'tour_image' ) as $image ) {
			$image->store( 'tour', 'public' );

			$imageData[] = [
				"description"      => $request->input( 'tour_name' ).count($imageData),
				"file_path"         => $image->hashName()
			];
		}
		$user                    = auth()->user();
		$item                    = new Tour();
		$item->tour_name         = $request->input( 'tour_name' );
		$item->tour_title        = $request->input( 'title' );
		$item->tour_destination  = $request->input( 'destination' );
		$item->tour_detail       = $request->input( 'tour_detail' );
		$item->tour_description  = $request->input( 'tour_description' );
		$item->tour_start_date   = $request->input( 'start_date' );
		$item->tour_night_length = $request->input( 'night_length' );
		$item->tour_day_length   = $request->input( 'day_length' );
		$item->tour_slots        = $request->input( 'tour_slot' );
		//$item->tour_slots_left   = $request->input( 'tour_slot_left' );
		$item->tour_prices       = $request->input( 'tour_price' );
		$item->tour_place        = $request->input( 'destination' );

		$item->tour_tour_operator_serial = $user->id;
		$item->tour_is_verify            = 0;
		$item->save();

		$item->images()->createMany($imageData);


		$serial = $item->serial;
		$item->services()->sync( $request->input( 'services' ) );
		for ( $i = 1; $i <= 5; $i ++ ) {
			if ( $request->input( 'tour_image_' . $i ) !== null ) {
				$imageName = $serial . '.' . $i . $request->image->extension();
				$request->input( 'tour_image_' . $i )->move( public_path( 'images/' . $serial . '/' ), $imageName );
			}
		}

		$request->session()->flash( 'message', 'Successfully created' );

		return redirect( '/tour/detail/' . $item->serial );
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 *
	 * @return Response
	 */
	public function show( $id ) {
		$item = Tour::with( [
			'userTourist.tourOperator',
			'services',
			'place',
			'comments.tourist.tourist',
			'images'
			] )->find( $id );
		if ( Auth::user() ) {
			$booking = Booking::where( 'tour_serial', $item->serial )->where( 'user_id', auth()->user()->id )->first();
			if ( $booking ) {
				return view( 'tour.detail', [ 'tour' => $item, 'booking' => $booking ] );
			} else {
				// dd($item);
				return view( 'tour.detail', [ 'tour' => $item ] );
			}
		}

		return view( 'tour.detail', [ 'tour' => $item ] );
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id
	 *
	 * @return Response
	 */
	public function edit( $id ) {
		if ( ! Auth::user()->can( 'admin' ) && ! Auth::user()->can( 'tour-operator' ) ) {
			return view( 'welcome' );
		}
		try {
			$item     = Tour::with( [ 'place', 'services' ] )->findOrFail( $id );
			$place    = Place::all();
			$services = Service::all();
		} catch ( \Exception $exception ) {
			return back()->withError( $exception->getMessage() )->withInput();
		}

		return view( 'tour.edit', [ 'tour' => $item, 'places' => $place, 'services' => $services ] );
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
		//if ( ! Auth::user()->can( 'admin' ) && ! Auth::user()->can( 'tour-operator' ) ) {
		//	return route( '/' );
		//}
		$request->validate( [
			'tour_name'        => 'required|min:2|max:64',
			'title'            => 'required|string',
			'destination'      => 'required',
			'start_date'       => 'required',
			'tour_description' => 'required',
			'tour_detail'      => 'required',
			'phone_number'     => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:15',
			'night_length'     => 'required',
			'day_length'       => 'required',
			'tour_slot'        => 'required',
			//'tour_slot_left'   => 'required',
			'services'         => 'array|min:1',
			'tour_image.*'     => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
		] );
		$imageData = [];
		foreach ( $request->file( 'tour_image' ) as $image ) {
			$image->store( 'tour', 'public' );

			$imageData[] = [
				"description"      => $request->input( 'tour_name' ).count($imageData),
				"file_path"         => $image->hashName()
			];
		}
		$item                    = Tour::with( 'services' )->find( $id );
		$item->tour_name         = $request->input( 'tour_name' );
		$item->tour_title        = $request->input( 'title' );
		$item->tour_destination  = $request->input( 'destination' );
		$item->tour_detail       = $request->input( 'tour_detail' );
		$item->tour_description  = $request->input( 'tour_description' );
		$item->tour_start_date   = $request->input( 'start_date' );
		$item->tour_night_length = $request->input( 'night_length' );
		$item->tour_day_length   = $request->input( 'day_length' );
		$item->tour_slots        = $request->input( 'tour_slot' );
		$item->tour_slots_left   = $request->input( 'tour_slot_left' );
		$item->tour_prices       = $request->input( 'tour_price' );
		$item->save();
		$serial         = $item->serial;
		$services       = $item->services;
		$serviceRequest = $request->input( 'services' );
		foreach ( $services as $service ) {
			if ( ! in_array( $service->serial, $serviceRequest ) ) {
				$item->services()->detach( $service->serial );
				array_filter( $serviceRequest, function ( $serviceItem ) use ( $service ) {
					return $serviceItem !== $service->serial;
				} );
			}
		}
		$item->services()->sync( $request->input( 'services' ) );
		$item->images()->createMany($imageData);

		$request->session()->flash( 'message', 'Successfully created' );

		return redirect( '/tour/detail/' . $item->serial );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 *
	 * @return Response
	 */
	public function destroy( $id ) {
		$item = Tour::find( $id );
		if ( $item ) {
			$item->delete();
		}

		return redirect()->route( 'tour.index' );
	}

	public function verify( $id ) {
		$item                 = Tour::find( $id );
		$item->tour_is_verify = 1;
		$item->save();

		return redirect()->route( 'tour.index' );
	}

	public function book( $id ) {
		if ( ! Auth::user() ) {
			return redirect( route( 'login' ) );
		}
		$tour    = Tour::find( $id );
		$user    = auth()->user();
		$booking = new Booking();

		$booking->user_id     = $user->id;
		$booking->tour_serial = $tour->serial;
		$booking->isPaid      = 0;

		$booking->save();

		$tour->tour_slots_left = (int) $tour->tour_slots_left - 1;
		$tour->save();

		return view( 'tour.payment', [ 'tour'=>$tour, 'booking' => $booking ] );
	}

	public function comment( $id, Request $request ) {
		//$sentiment = new Sentiment();
		//$scores = $sentiment->score($request->comment);
		//dd($scores);
		$tour = Tour::find( $id );
		$user = auth()->user();

		$comment                  = new Comment();
		$comment->comment_content = $request->input( 'comment' );
		$comment->tour_serial     = $id;
		$comment->comment_rating = $request->input('rating');
		$comment->user_id         = $user->id;

		$comment->save();

		$comments = Comment::where('tour_serial','=',$id)->whereNotNull('comment_rating')->get();

		if(count($comments)){
			$rating = 0;
			foreach($comments as $comment_value){
				$rating += (float)$comment_value->comment_rating;
			}
			$tour->tour_rating = $rating/count($comments);
			$tour->save();
		}


		return redirect( '/tour/detail/' . $id );
	}

	public function listVerify() {

	}

	public function payment($id){
		$booking = Booking::find($id);

		$booking->isPaid = true;
		$booking->save();
		return redirect( '/tourist//my-tours/' . $id );
	}
}

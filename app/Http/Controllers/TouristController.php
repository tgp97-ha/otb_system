<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Tourist;
use App\Models\TourOperator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TouristController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //search
        $list = Tourist::all();

        return view('tourist.index', [ 'tourists' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tourist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //if (! Auth::user()->can('companies_management')) {
        //    abort(403);
        //}
        $request->validate([
            'tourist_name' => 'required|min:2|max:64',
            'dob'          => 'nullable|string',
            'address'      => 'nullable|string|max:100',
            'phone_number' => 'nullable|string|max:10',
            'personal_id'  => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:15',
        ]);
        $user                       = auth()->user();
        $item                       = new Tourist();
        $item->tourist_name         = $request->input('tourist_name');
        $item->date_of_birth        = $request->input('dob');
        $item->address              = $request->input('address');
        $item->tourist_phone_number = $request->input('phone_number');
        $item->tourist_personal_id  = $request->input('personal_id');
        $item->user_serial          = $user->id;
        $item->save();
        $request->session()->flash('message', 'Successfully created');

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $item = Tourist::with('userTourist.bookings.tours.place')->find ($id);

        return view('tourist.detail', [ 'tourist' => $item ]);
    }

	public function showCurrentUser()
	{
		$user = Auth::user();
		$item = Tourist::where ('user_serial',$user->id)->first();

		return view('tourist.detail', [ 'tourist' => $item ]);
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        //if (! Auth::user()->can('companies_management')) {
        //    abort(403);
        //};
        try {
            $item = Tourist::findOrFail($id);
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }

        return view('tourist.edit', [ 'tourist' => $item ]);
    }
	public function editOwnProfile()
	{
		$user= Auth::user();
		$item= Tourist::where('user_serial',$user->id)->first();

		return view('tourist.edit', [ 'tourist' => $item ]);
	}

	public function editProfile()
    {
	    $user = Auth::user();
        try {
	        $item = Tourist::where ('user_serial',$user->id)->first();
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }

        return view('tourist.edit', [ 'tourist' => $item ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tourist_name' => 'required|min:2|max:64',
            'dob'          => 'nullable|string',
            'address'      => 'nullable|string|max:100',
            'phone_number' => 'nullable|string|max:10',
            'personal_id'  => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:15',
        ]);
        $item = Tourist::find($id);
        if ($item) {
            $item->tourist_name         = $request->input('tourist_name');
            $item->date_of_birth        = $request->input('dob');
            $item->address              = $request->input('address');
            $item->tourist_phone_number = $request->input('phone_number');
            $item->tourist_personal_id  = $request->input('personal_id');
            $item->save();
            $request->session()->flash('message', 'Successfully edited');

            return redirect()->route('tourist.show', [$id=>$id]);
        } else {
            return back()->withInput()->withErrors([ 'msg', 'Can\'t update tour' ]);
        }
    }

	public function updateProfile(Request $request)
	{
		$request->validate([
			'tourist_name' => 'required|min:2|max:64',
			'dob'          => 'nullable|string',
			'address'      => 'nullable|string|max:100',
			'phone_number' => 'nullable|string|max:10',
			'personal_id'  => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:15',
		]);
		$user = auth()->user();
		$item = Tourist::where('user_serial',$user->id)->first();
		if ($item) {
			$item->tourist_name         = $request->input('tourist_name');
			$item->date_of_birth        = $request->input('dob');
			$item->address              = $request->input('address');
			$item->tourist_phone_number = $request->input('phone_number');
			$item->tourist_personal_id  = $request->input('personal_id');
			$item->save();
			$request->session()->flash('message', 'Successfully edited');

			return redirect()->route('tourist.detail');
		} else {
			return back()->withInput()->withErrors([ 'msg', 'Can\'t update tour' ]);
		}
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $item    = Tourist::with('userTourist')->find($id);
        $account = $item->userTourist;
        if ($item) {
            $item->delete();
            $account->delete();
        }

        return redirect()->route('tourist.index');
    }

	public function myTours() {
		$user  = auth()->user();
		$tours = Tour::with( 'bookings' )->whereHas( 'bookings', function ( $bookings ) use ( $user ) {
            $bookings->where( 'user_id', $user->id );
		} );
        $operators = TourOperator::all();

		return view('tourist.myTours',[
            'tours'=> $tours->get(),
            'operators' => $operators
        ]);
	}

	public function list( Request $request ) {
		$tourists = Tourist::with( [ 'userTourOperator' ] );
		if ( $request->input( 'name' ) !== null ) {
			$tourists->where( 'tourist_name', 'LIKE', '%' . $request->input( 'name' ) . '%' );
		}
		if ( $request->input( 'address' ) !== null ) {
			$tourists->where( 'tour_operator_name', 'LIKE', '%' . $request->input( 'address' ) . '%' );
		}
		if ( $request->input( 'personal_id' ) !== null ) {
			$tourists->where( 'tourist_personal_id', 'LIKE', '%' . $request->input( 'personal_id' ) . '%' );
		}
		$tourists = $tourists->get();

		return view( 'tourist.index', [
			'tourists' => $tourists,
		] );
	}
}

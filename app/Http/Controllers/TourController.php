<?php

namespace App\Http\Controllers;

use App\Models\Tourist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourController extends Controller
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

        return view('tour.list', [ 'tours' => $list, 'search_details' => $request ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tour.create');
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
        if (! Auth::user()->can('companies_management')) {
            abort(403);
        }
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
        $item->user_serial          = $user->serial;
        $item->save();
        $request->session()->flash('message', 'Successfully created');

        return redirect()->route('welcome');
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
        if (! Auth::user()->can('companies_management')) {
            abort(403);
        }
        $item = Tourist::find($id);

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
        if (! Auth::user()->can('companies_management')) {
            abort(403);
        }
        try {
            $item = Tourist::findOrFail($id);
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
        if (! Auth::user()->can('companies_management')) {
            abort(403);
        }
        $request->validate([
            'tourist_name' => 'required|min:2|max:64',
            'dob'          => 'nullable|string',
            'address'      => 'nullable|string|max:100',
            'phone_number' => 'nullable|string|max:10',
            'personal_id'  => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:15',
        ]);
        $user = auth()->user();
        $item = Tourist::find($id);
        if ($item) {
            $item->tourist_name         = $request->input('tourist_name');
            $item->date_of_birth        = $request->input('dob');
            $item->address              = $request->input('address');
            $item->tourist_phone_number = $request->input('phone_number');
            $item->tourist_personal_id  = $request->input('personal_id');
            $item->save();
            $request->session()->flash('message', 'Successfully edited');

            return redirect()->route('tourist.edit');
        } else {
            return back()->withInput()->withErrors([ 'msg', 'This company not found.' ]);
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
        if (! Auth::user()->can('companies_management')) {
            abort(403);
        }
        $item    = Tourist::with('userTourist')->find($id);
        $account = $item->userTourist;
        if ($item) {
            $item->delete();
            $account->delete();
        }

        return redirect()->route('tourist.list');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Requests\StoreHotelRequest;
use App\Http\Requests\UpdateHotelRequest;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.show_hotels', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hotels = Hotel::all();
        return view('hotels.add_hotel', compact('hotels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, StoreHotelRequest $req)
    {
        $validate = Validator::make($request->all(), $req->rules());
        if ($validate->fails()) return redirect()->route('admin.hotel.index')->withErrors($validate->errors());
        $hotel = Hotel::create($req->validated());
        return redirect()->route('admin.hotel.index')->with('type', 'success')->with('msg', 'Hotel Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        return view('hotels.update_hotel', compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UpdateHotelRequest $req, Hotel $hotel)
    {
        $validate = Validator::make($request->all(), $req->rules());
        if ($validate->fails()) return redirect()->route('admin.event.index')->withErrors($validate->errors());

        $hotel->update($req->validated());

        return redirect()->route('admin.hotel.index')->with('type', 'success')->with('msg', 'hotel updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();

        return redirect()->route('admin.hotel.index')->with('type', 'danger')->with('msg', 'hotel deleted Successfully');
    }
}

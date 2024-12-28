<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Hotel;
use App\Models\Places;
use App\Models\Review;
use App\Models\Booking;
use App\Models\Massage;
use App\Models\Payment;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::all();
        $users=User::all();
        $hotel=Hotel::all();
        return view('booking.show_booking', compact('bookings','users','hotel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        $users = User::all();
        $events = Event::all()->take(3);
        $bookings = Booking::all();
        $hotels = Hotel::all()->take(4);
        $massages = Massage::all();
        $payments = Payment::all();
        $places = Places::all();
        $reviews = Review::all()->take(3);
        $services = Service::all()->take(3);
        return view('front/booking', compact('events', 'user', 'bookings', 'hotels', 'massages', 'payments', 'places', 'reviews', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, StoreBookingRequest $req )
    {
        $validate = Validator::make($request->all(), $req->rules());
        if ($validate->fails()) return redirect()->route('travel.home')->withErrors($validate->errors());
        Booking::create($req->validated());
        return redirect()->route('admin.payment.create')->with('type', 'success')->with('msg', 'booking Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}

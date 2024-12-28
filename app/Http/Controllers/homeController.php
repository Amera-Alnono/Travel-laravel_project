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

class homeController extends Controller
{
    public function index()
    {
        $events = Event::count();
        //$users = User::all();
        $users = User::count();
        $bookings = Booking::count();
        $hotels = Hotel::count();
        $massages = Massage::count();
        $payments = Payment::sum('price');
        //$totalPrice=$payments->price;
        $places = Places::count();
        $reviews = Review::count();
        $services = Service::count();
        return view('Dashboard_Page',compact('events','users','bookings','hotels','massages','payments','places','reviews','services'));


        // return view('Dashboard_Page', compact('services'));
        //return view('Dashboard_Page');
    }
    
}

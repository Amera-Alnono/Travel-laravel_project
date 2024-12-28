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

class FrontController extends Controller
{
    public function index()
    {
        $users = User::all();
        $events = Event::all()->take(3);
        $bookings = Booking::all();
        $hotels = Hotel::all()->take(3);
        $massages = Massage::all();
        $payments = Payment::all();
        $places = Places::all();
        $reviews = Review::all()->take(3);
        $services = Service::all()->take(3);
        return view('front/homepage', compact('events', 'users', 'bookings', 'hotels', 'massages', 'payments', 'places', 'reviews', 'services'));
    }

    public function about()
    {
        $users = User::all();
        $events = Event::all()->take(3);
        $bookings = Booking::all();
        $hotels = Hotel::all()->take(3);
        $massages = Massage::all();
        $payments = Payment::all();
        $places = Places::all();
        $reviews = Review::all()->take(3);
        $services = Service::all()->take(3);
        return view('front/about', compact('events', 'users', 'bookings', 'hotels', 'massages', 'payments', 'places', 'reviews', 'services'));
    }

    public function contact()
    {
        $users = User::all();
        $events = Event::all()->take(3);
        $bookings = Booking::all();
        $hotels = Hotel::all()->take(3);
        $massages = Massage::all();
        $payments = Payment::all();
        $places = Places::all();
        $reviews = Review::all()->take(3);
        $services = Service::all()->take(3);
        return view('front/contact', compact('events', 'users', 'bookings', 'hotels', 'massages', 'payments', 'places', 'reviews', 'services'));
    }

    public function packages()
    {
        $users = User::all();
        $events = Event::all()->take(3);
        $bookings = Booking::all();
        $hotels = Hotel::all()->take(3);
        $massages = Massage::all();
        $payments = Payment::all();
        $places = Places::all();
        $reviews = Review::all()->take(3);
        $services = Service::all()->take(3);
        return view('front/packages', compact('events', 'users', 'bookings', 'hotels', 'massages', 'payments', 'places', 'reviews', 'services'));
    }
    public function places()
    {
        $users = User::all();
        $events = Event::all()->take(3);
        $bookings = Booking::all();
        $hotels = Hotel::all()->take(3);
        $massages = Massage::all();
        $payments = Payment::all();
        $places = Places::all();
        $reviews = Review::all()->take(3);
        $services = Service::all()->take(3);
        return view('front/places', compact('events', 'users', 'bookings', 'hotels', 'massages', 'payments', 'places', 'reviews', 'services'));
    }

    public function booking()
    {
        $users = User::all();
        $events = Event::all()->take(3);
        $bookings = Booking::all();
        $hotels = Hotel::all()->take(3);
        $massages = Massage::all();
        $payments = Payment::all();
        $places = Places::all();
        $reviews = Review::all()->take(3);
        $services = Service::all()->take(3);
        return view('front/booking', compact('events', 'users', 'bookings', 'hotels', 'massages', 'payments', 'places', 'reviews', 'services'));
    }

    public function payment(){
        $users = User::all();
        $events = Event::all()->take(3);
        $bookings = Booking::all();
        $hotels = Hotel::all()->take(3);
        $massages = Massage::all();
        $payments = Payment::all();
        $places = Places::all();
        $reviews = Review::all()->take(3);
        $services = Service::all()->take(3);
        return view('front/payment', compact('events', 'users', 'bookings', 'hotels', 'massages', 'payments', 'places', 'reviews', 'services'));

    }
}
